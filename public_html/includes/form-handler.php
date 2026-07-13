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
$plz          = trim(strip_tags($_POST['plz'] ?? ''));
$stadt        = trim(strip_tags($_POST['stadt'] ?? ''));
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

// PLZ optional – nur pruefen, wenn ausgefuellt
if (!empty($plz) && !preg_match('/^\d{5}$/', $plz)) {
    $errors[] = 'plz';
}

// project_type optional – nur pruefen, wenn gesetzt
$validProjectTypes = ['badsanierung', 'altersgerecht', 'fugenloses-bad', 'neubau', 'teilsanierung', 'fliesenarbeiten', 'innenausbau', 'sonstiges'];
if (!empty($projectType) && !in_array($projectType, $validProjectTypes)) {
    $errors[] = 'project_type';
}

// Nachricht optional – nur Maximallaenge pruefen, wenn ausgefuellt
if (!empty($message) && mb_strlen($message) > 5000) {
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
    'fugenloses-bad'  => 'Fugenloses Bad',
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
$subject    = '=?UTF-8?B?' . base64_encode('Neue Anfrage – Kontaktformular tokmak-gmbh.de') . '?=';
$h          = fn(string $s): string => htmlspecialchars($s, ENT_QUOTES | ENT_HTML5, 'UTF-8');
$sentAt     = date('d.m.Y \u\m H:i');
$ip         = $_SERVER['REMOTE_ADDR'] ?? 'unbekannt';
$photoCount = count($attachments);

$projectLabel = $h($projectLabels[$projectType] ?? '-');
$objectLabel  = $h($objectLabels[$objectType] ?? '');
$timeLabel    = $h($timeLabels[$timeframe] ?? '');
$msgHtml      = nl2br($h($message));
$replyUrl     = 'mailto:' . rawurlencode($email) . '?subject=' . rawurlencode('Re: Ihre Anfrage bei der Tokmak GmbH');

$photoRow = $photoCount > 0
    ? '<tr><td colspan="2" style="padding-top:12px;border-top:1px solid #E0DEDB;">
         <span style="font-size:11px;color:#8C8279;">&#128247; ' . $photoCount . ' Foto' . ($photoCount > 1 ? 's' : '') . ' angehaengt</span>
       </td></tr>'
    : '';

// ---- HTML-Body ----
$htmlBody = '<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"></head>
<body style="margin:0;padding:0;background:#EDECEA;font-family:\'Helvetica Neue\',Helvetica,Arial,sans-serif;">
<div style="max-width:600px;margin:0 auto;padding:32px 16px;">

  <!-- CARD -->
  <div style="border-radius:10px;overflow:hidden;box-shadow:0 6px 32px rgba(0,0,0,0.12);">

    <!-- HEADER -->
    <div style="background:#2D2926;padding:36px 44px;">
      <p style="margin:0 0 8px;font-size:10px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:#8C8279;">Tokmak GmbH &middot; Räume mit Stil</p>
      <h1 style="margin:0 0 6px;font-size:28px;font-weight:700;color:#ffffff;line-height:1.15;">Neue Anfrage</h1>
      <p style="margin:0;font-size:13px;color:#A49A91;">Eingegangen über das Kontaktformular &middot; ' . $sentAt . ' Uhr</p>
    </div>

    <!-- BODY -->
    <div style="background:#ffffff;padding:44px;">

      <!-- KONTAKTDATEN -->
      <p style="margin:0 0 14px;font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#8C8279;padding-bottom:10px;border-bottom:2px solid #F0EFED;">Kontaktdaten</p>
      <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:36px;">
        <tr>
          <td style="padding:10px 0;border-bottom:1px solid #F5F4F2;width:28%;vertical-align:top;">
            <span style="font-size:10px;color:#A49A91;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;">Name</span>
          </td>
          <td style="padding:10px 0;border-bottom:1px solid #F5F4F2;vertical-align:top;">
            <span style="font-size:16px;color:#2D2926;font-weight:700;">' . $h($name) . '</span>
          </td>
        </tr>
        <tr>
          <td style="padding:10px 0;border-bottom:1px solid #F5F4F2;vertical-align:top;">
            <span style="font-size:10px;color:#A49A91;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;">E-Mail</span>
          </td>
          <td style="padding:10px 0;border-bottom:1px solid #F5F4F2;vertical-align:top;">
            <a href="mailto:' . $h($email) . '" style="font-size:15px;color:#2D2926;font-weight:600;text-decoration:none;">' . $h($email) . '</a>
          </td>
        </tr>
        <tr>
          <td style="padding:10px 0;border-bottom:1px solid #F5F4F2;vertical-align:top;">
            <span style="font-size:10px;color:#A49A91;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;">Telefon</span>
          </td>
          <td style="padding:10px 0;border-bottom:1px solid #F5F4F2;vertical-align:top;">
            <span style="font-size:15px;color:' . ($phone ? '#2D2926' : '#B0ABA7') . ';">' . ($phone ? $h($phone) : 'nicht angegeben') . '</span>
          </td>
        </tr>
        <tr>
          <td style="padding:10px 0;vertical-align:top;">
            <span style="font-size:10px;color:#A49A91;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;">Ort</span>
          </td>
          <td style="padding:10px 0;vertical-align:top;">
            <span style="font-size:15px;color:' . (($plz || $stadt) ? '#2D2926' : '#B0ABA7') . ';">' . (($plz || $stadt) ? trim($h($plz) . ' ' . $h($stadt)) : 'nicht angegeben') . '</span>
          </td>
        </tr>
      </table>

      <!-- PROJEKTDETAILS -->
      <p style="margin:0 0 14px;font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#8C8279;padding-bottom:10px;border-bottom:2px solid #F0EFED;">Projektdetails</p>
      <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:36px;">
        <tr>
          <td style="padding:8px 20px 8px 0;width:34%;vertical-align:top;">
            <span style="font-size:10px;color:#A49A91;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;display:block;margin-bottom:5px;">Projektart</span>
            <span style="font-size:15px;color:#2D2926;font-weight:700;">' . $projectLabel . '</span>
          </td>
          <td style="padding:8px 20px 8px 0;width:33%;vertical-align:top;">
            <span style="font-size:10px;color:#A49A91;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;display:block;margin-bottom:5px;">Objektart</span>
            <span style="font-size:15px;color:' . ($objectLabel ? '#2D2926' : '#B0ABA7') . ';">' . ($objectLabel ?: 'keine Angabe') . '</span>
          </td>
          <td style="padding:8px 0;width:33%;vertical-align:top;">
            <span style="font-size:10px;color:#A49A91;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;display:block;margin-bottom:5px;">Zeitraum</span>
            <span style="font-size:15px;color:' . ($timeLabel ? '#2D2926' : '#B0ABA7') . ';">' . ($timeLabel ?: 'keine Angabe') . '</span>
          </td>
        </tr>
      </table>

      <!-- NACHRICHT -->
      <p style="margin:0 0 14px;font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:#8C8279;padding-bottom:10px;border-bottom:2px solid #F0EFED;">Nachricht</p>
      <div style="background:#F8F7F5;border-left:4px solid #8C8279;padding:20px 24px;border-radius:0 6px 6px 0;margin-bottom:40px;">
        <p style="margin:0;font-size:15px;color:#2D2926;line-height:1.85;">' . $msgHtml . '</p>
      </div>

      <!-- CTA -->
      <div style="text-align:center;">
        <a href="' . $replyUrl . '" style="display:inline-block;background:#2D2926;color:#ffffff;font-size:11px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;text-decoration:none;padding:17px 44px;border-radius:4px;">Direkt antworten</a>
      </div>

    </div>

    <!-- FOOTER -->
    <div style="background:#F0EFED;padding:22px 44px;">
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <span style="font-size:11px;color:#8C8279;">Gesendet am ' . $sentAt . ' Uhr</span>
          </td>
          <td align="right">
            <span style="font-size:11px;color:#A49A91;">IP ' . $h($ip) . '</span>
          </td>
        </tr>
        ' . $photoRow . '
      </table>
    </div>

  </div>

  <p style="text-align:center;font-size:11px;color:#B0ABA7;margin-top:20px;">tokmak-gmbh.de &middot; Daimlerstr. 8, 72805 Lichtenstein</p>
</div>
</body></html>';

// ---- Plain-Text-Fallback ----
$textBody  = "NEUE ANFRAGE – KONTAKTFORMULAR TOKMAK-GMBH.DE\n\n";
$textBody .= "KONTAKTDATEN\n";
$textBody .= "Name:      {$name}\n";
$textBody .= "E-Mail:    {$email}\n";
$textBody .= "Telefon:   " . ($phone ?: 'nicht angegeben') . "\n";
$textBody .= "Ort:       " . (($plz || $stadt) ? trim("{$plz} {$stadt}") : 'nicht angegeben') . "\n\n";
$textBody .= "PROJEKTDETAILS\n";
$textBody .= "Projektart:  " . ($projectLabels[$projectType] ?? '-') . "\n";
$textBody .= "Objektart:   " . ($objectLabels[$objectType] ?? 'keine Angabe') . "\n";
$textBody .= "Zeitraum:    " . ($timeLabels[$timeframe] ?? 'keine Angabe') . "\n\n";
$textBody .= "NACHRICHT\n{$message}\n\n";
$textBody .= "Fotos: {$photoCount}\n";
$textBody .= "Gesendet: {$sentAt} Uhr | IP: {$ip}\n";

// ---- MIME-Struktur: mixed > alternative + Anhänge ----
$boundaryMixed = '----=_Mixed_'  . md5(uniqid(mt_rand(), true));
$boundaryAlt   = '----=_Alt_'    . md5(uniqid(mt_rand(), true));

$mimeBody  = "--{$boundaryMixed}\r\n";
$mimeBody .= "Content-Type: multipart/alternative; boundary=\"{$boundaryAlt}\"\r\n\r\n";

$mimeBody .= "--{$boundaryAlt}\r\n";
$mimeBody .= "Content-Type: text/plain; charset=UTF-8\r\n";
$mimeBody .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$mimeBody .= $textBody . "\r\n";

$mimeBody .= "--{$boundaryAlt}\r\n";
$mimeBody .= "Content-Type: text/html; charset=UTF-8\r\n";
$mimeBody .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$mimeBody .= $htmlBody . "\r\n";

$mimeBody .= "--{$boundaryAlt}--\r\n";

foreach ($attachments as $att) {
    $fileData = file_get_contents($att['tmp_name']);
    $encoded  = chunk_split(base64_encode($fileData));
    $safeName = preg_replace('/[^\w\.\-]/', '_', $att['name']);

    $mimeBody .= "--{$boundaryMixed}\r\n";
    $mimeBody .= "Content-Type: {$att['type']}; name=\"{$safeName}\"\r\n";
    $mimeBody .= "Content-Disposition: attachment; filename=\"{$safeName}\"\r\n";
    $mimeBody .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $mimeBody .= $encoded . "\r\n";
}

$mimeBody .= "--{$boundaryMixed}--";

$headers  = "From: noreply@" . SITE_DOMAIN . "\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Bcc: " . FORM_BCC . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"{$boundaryMixed}\"\r\n";
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
        'plz'          => $plz,
        'stadt'        => $stadt,
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

// --- Google Ads Conversion: NICHT mehr server-seitig ---
// Entfernt 13.07.2026. Grund: Google hat ConversionUploadService.UploadClickConversions
// für dieses Konto gesperrt ("limited to existing users, use Data Manager API"). Der
// Upload schlug ausnahmslos fehl. Zusätzlich war der Aufruf DSGVO-problematisch, weil er
// die gclid consent-unabhängig an Google übertrug. Das Conversion-Tracking läuft jetzt
// ausschließlich client-seitig via gtag auf danke.php (consent-gated über CCM19/Consent
// Mode v2). NICHT wieder server-seitig einbauen, ohne die Data Manager API zu nutzen.

// --- OS Webhook (Inhouse Media Headquarter) ---
// Feuert unabhängig vom Mail-Versand, damit kein Lead verloren geht.
if (defined('OS_WEBHOOK_URL') && OS_WEBHOOK_URL && defined('OS_WEBHOOK_SECRET') && OS_WEBHOOK_SECRET) {
    $payload = json_encode([
        'name'         => $name,
        'email'        => $email,
        'phone'        => $phone,
        'plz'          => $plz,
        'stadt'        => $stadt,
        'project_type' => $projectType,
        'object_type'  => $objectType,
        'timeframe'    => $timeframe,
        'message'      => $message,
        'source_page'    => trim(strip_tags($_POST['source_page'] ?? '')),
        'traffic_source' => (!empty($_POST['gclid']) && preg_match('/^[A-Za-z0-9_\-]+$/', $_POST['gclid'])) ? 'google_ads' : 'organisch',
    ], JSON_UNESCAPED_UNICODE);

    $signature = hash_hmac('sha256', $payload, OS_WEBHOOK_SECRET);

    $ch = curl_init(OS_WEBHOOK_URL);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 5,
        CURLOPT_HTTPHEADER     => [
            'Content-Type: application/json',
            'x-webhook-signature: ' . $signature,
        ],
    ]);
    curl_exec($ch);
    curl_close($ch);
}

$_SESSION['last_form_submit'] = $now;

// Weiterleitung NICHT an mail() koppeln: der Lead ist via OS-Webhook (+ Server-Conversion)
// bereits gesichert. Nach erfolgreicher Validierung IMMER auf danke.php, damit der Kunde die
// Bestaetigung sieht und die Conversion auf danke.php feuert. Mail-Fehler nur protokollieren.
if (!$mailSent) {
    error_log('Tokmak Formular: mail() fehlgeschlagen – Lead ist ueber OS-Webhook gesichert.');
}
$_SESSION['form_success'] = true;
header('Location: /danke.php');
exit;
