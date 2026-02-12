<?php
/**
 * Tokmak GmbH – Kontaktformular Verarbeitung
 * =============================================
 * Erweitert um Vorqualifizierungsfelder.
 */

require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /kontakt');
    exit;
}

// --- Rate Limiting ---
$now = time();
$lastSubmit = $_SESSION['last_form_submit'] ?? 0;
if (($now - $lastSubmit) < FORM_RATE_LIMIT_SECONDS) {
    header('Location: /kontakt?status=rate_limit');
    exit;
}

// --- Honeypot ---
if (!empty($_POST['website_url'])) {
    header('Location: /kontakt?status=success');
    exit;
}

// --- Eingaben bereinigen ---
$name         = trim(strip_tags($_POST['name'] ?? ''));
$email        = trim(strip_tags($_POST['email'] ?? ''));
$phone        = trim(strip_tags($_POST['phone'] ?? ''));
$projectType  = trim(strip_tags($_POST['project_type'] ?? ''));
$objectType   = trim(strip_tags($_POST['object_type'] ?? ''));
$timeframe    = trim(strip_tags($_POST['timeframe'] ?? ''));
$message      = trim(strip_tags($_POST['message'] ?? ''));

// --- Validierung ---
$errors = [];

if (empty($name) || mb_strlen($name) < 2 || mb_strlen($name) > 100) {
    $errors[] = 'name';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'email';
}

if (!empty($phone) && !preg_match('/^[\d\s\+\-\(\)\/]{5,30}$/', $phone)) {
    $errors[] = 'phone';
}

$validProjectTypes = ['badsanierung', 'teilsanierung', 'fliesenarbeiten', 'innenausbau', 'sonstiges'];
if (empty($projectType) || !in_array($projectType, $validProjectTypes)) {
    $errors[] = 'project_type';
}

if (empty($message) || mb_strlen($message) < 10 || mb_strlen($message) > 5000) {
    $errors[] = 'message';
}

if (!empty($errors)) {
    header('Location: /kontakt?status=error&fields=' . implode(',', $errors));
    exit;
}

// --- Labels für E-Mail ---
$projectLabels = [
    'badsanierung'    => 'Komplett-Badsanierung',
    'teilsanierung'   => 'Teilsanierung',
    'fliesenarbeiten' => 'Fliesenarbeiten',
    'innenausbau'     => 'Innenausbau',
    'sonstiges'       => 'Sonstiges',
];

$objectLabels = [
    'einfamilienhaus'  => 'Einfamilienhaus',
    'eigentumswohnung' => 'Eigentumswohnung',
    'neubau'           => 'Neubau',
    'gewerbe'          => 'Gewerbeobjekt',
];

$timeLabels = [
    'asap'  => 'So bald wie möglich',
    '1-3'   => 'In 1–3 Monaten',
    '3-6'   => 'In 3–6 Monaten',
    'offen' => 'Noch offen',
];

// --- E-Mail ---
$subject = 'Projektanfrage: ' . ($projectLabels[$projectType] ?? $projectType) . ' – ' . $name;

$body  = "Neue Projektanfrage über die Website\n";
$body .= "=====================================\n\n";
$body .= "Name:         {$name}\n";
$body .= "E-Mail:       {$email}\n";
$body .= "Telefon:      " . ($phone ?: 'Nicht angegeben') . "\n\n";
$body .= "Projektart:   " . ($projectLabels[$projectType] ?? '-') . "\n";
$body .= "Objektart:    " . ($objectLabels[$objectType] ?? 'Nicht angegeben') . "\n";
$body .= "Zeitraum:     " . ($timeLabels[$timeframe] ?? 'Nicht angegeben') . "\n\n";
$body .= "Nachricht:\n{$message}\n\n";
$body .= "-------------------------------------\n";
$body .= "Gesendet am: " . date('d.m.Y H:i') . " Uhr\n";
$body .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unbekannt') . "\n";

$headers  = "From: noreply@" . SITE_DOMAIN . "\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$mailSent = mail(FORM_RECIPIENT, $subject, $body, $headers);

// --- Lead-Logging ---
if (FORM_LOG_LEADS) {
    $lead = [
        'timestamp'    => date('c'),
        'name'         => $name,
        'email'        => $email,
        'phone'        => $phone,
        'project_type' => $projectType,
        'object_type'  => $objectType,
        'timeframe'    => $timeframe,
        'message'      => $message,
        'ip'           => $_SERVER['REMOTE_ADDR'] ?? '',
        'mail_sent'    => $mailSent,
    ];

    $leadsFile = FORM_LEADS_FILE;
    $leads = [];

    if (file_exists($leadsFile)) {
        $content = file_get_contents($leadsFile);
        $decoded = json_decode($content, true);
        if (is_array($decoded)) {
            $leads = $decoded;
        }
    }

    $leads[] = $lead;

    file_put_contents(
        $leadsFile,
        json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
        LOCK_EX
    );
}

$_SESSION['last_form_submit'] = $now;

if ($mailSent) {
    header('Location: /kontakt?status=success');
} else {
    header('Location: /kontakt?status=mail_error');
}
exit;
