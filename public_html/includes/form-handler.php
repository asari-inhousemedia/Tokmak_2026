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

$validProjectTypes = ['badsanierung', 'altersgerecht', 'neubau', 'teilsanierung', 'fliesenarbeiten', 'innenausbau', 'sonstiges'];
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
    'altersgerecht'   => 'Altersgerechter Badumbau',
    'neubau'          => 'Neubau Badezimmer',
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

// --- Datei-Upload verarbeiten ---
$attachments  = [];
$allowedMimes = ['image/jpeg', 'image/png', 'image/webp', 'image/heic', 'image/heif'];
$allowedExts  = ['jpg', 'jpeg', 'png', 'webp', 'heic', 'heif'];
$maxFileSize  = 5 * 1024 * 1024; // 5 MB
$maxFiles     = 3;

if (!empty($_FILES['photos']['name'][0]) && function_exists('finfo_open')) {
    $finfo     = new finfo(FILEINFO_MIME_TYPE);
    $fileCount = min(count($_FILES['photos']['name']), $maxFiles);

    for ($i = 0; $i < $fileCount; $i++) {
        if ($_FILES['photos']['error'][$i] !== UPLOAD_ERR_OK) {
            continue;
        }
        if ($_FILES['photos']['size'][$i] > $maxFileSize) {
            continue;
        }

        $tmpName  = $_FILES['photos']['tmp_name'][$i];
        $origName = basename($_FILES['photos']['name'][$i]);
        $mimeType = $finfo->file($tmpName);
        $ext      = strtolower(pathinfo($origName, PATHINFO_EXTENSION));

        if (!in_array($mimeType, $allowedMimes) && !in_array($ext, $allowedExts)) {
            continue;
        }
        if (!is_uploaded_file($tmpName)) {
            continue;
        }

        $attachments[] = [
            'tmp_name' => $tmpName,
            'name'     => $origName,
            'type'     => in_array($mimeType, $allowedMimes) ? $mimeType : 'image/' . $ext,
        ];
    }
}

// --- E-Mail ---
$subject = '=?UTF-8?B?' . base64_encode('Neue Anfrage über Kontaktformular') . '?=';

$textBody  = "Neue Anfrage über das Kontaktformular\n";
$textBody .= "======================================\n\n";
$textBody .= "KONTAKTDATEN\n";
$textBody .= "--------------------------------------\n";
$textBody .= "Name:           {$name}\n";
$textBody .= "E-Mail:         {$email}\n";
$textBody .= "Telefon:        " . ($phone ?: 'nicht angegeben') . "\n\n";
$textBody .= "PROJEKTDETAILS\n";
$textBody .= "--------------------------------------\n";
$textBody .= "Projektart:     " . ($projectLabels[$projectType] ?? '-') . "\n";
$textBody .= "Objektart:      " . ($objectLabels[$objectType] ?? 'nicht angegeben') . "\n";
$textBody .= "Zeitraum:       " . ($timeLabels[$timeframe] ?? 'nicht angegeben') . "\n\n";
$textBody .= "NACHRICHT\n";
$textBody .= "--------------------------------------\n";
$textBody .= "{$message}\n\n";
$textBody .= "======================================\n";
$textBody .= "Fotos angehaengt: " . count($attachments) . "\n";
$textBody .= "Gesendet am:    " . date('d.m.Y \u\m H:i') . " Uhr\n";
$textBody .= "IP-Adresse:     " . ($_SERVER['REMOTE_ADDR'] ?? 'unbekannt') . "\n";
$textBody .= "Quelle:         Kontaktformular tokmak-gmbh.de\n";

$boundary = '----=_Part_' . md5(uniqid(mt_rand(), true));

$mimeBody  = "--{$boundary}\r\n";
$mimeBody .= "Content-Type: text/plain; charset=UTF-8\r\n";
$mimeBody .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$mimeBody .= $textBody . "\r\n";

foreach ($attachments as $att) {
    $fileData = file_get_contents($att['tmp_name']);
    $encoded  = chunk_split(base64_encode($fileData));
    $safeName = preg_replace('/[^\w\.\-]/', '_', $att['name']);

    $mimeBody .= "--{$boundary}\r\n";
    $mimeBody .= "Content-Type: {$att['type']}; name=\"{$safeName}\"\r\n";
    $mimeBody .= "Content-Disposition: attachment; filename=\"{$safeName}\"\r\n";
    $mimeBody .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $mimeBody .= $encoded . "\r\n";
}

$mimeBody .= "--{$boundary}--";

$headers  = "From: noreply@" . SITE_DOMAIN . "\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Bcc: " . FORM_BCC . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$mailSent = mail(FORM_RECIPIENT, $subject, $mimeBody, $headers);

foreach ($attachments as $att) {
    if (file_exists($att['tmp_name'])) {
        @unlink($att['tmp_name']);
    }
}

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
    $_SESSION['form_success'] = true;
    header('Location: /danke.php');
} else {
    header('Location: /kontakt?status=mail_error');
}
exit;
