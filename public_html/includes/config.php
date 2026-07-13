<?php
/**
 * TOKMAK GmbH – Zentrale Konfiguration
 * ======================================
 * Hier alle Firmendaten und Einstellungen anpassen.
 */

// --- Firmendaten ---
define('SITE_NAME', 'Tokmak GmbH');
define('SITE_TAGLINE', 'Räume mit Stil');
define('SITE_CLAIM', 'Komplett-Badsanierung aus einer Hand');
define('SITE_DOMAIN', 'tokmak-gmbh.de');
define('SITE_URL', 'https://tokmak-gmbh.de');
define('SITE_REGION', 'Reutlingen & Umgebung');

// --- Kontaktdaten ---
define('CONTACT_EMAIL', 'info@tokmak-gmbh.de');
define('CONTACT_PHONE', '+497129 4070542');
define('CONTACT_PHONE_DISPLAY', '+49 7129 4070542');
define('CONTACT_ADDRESS_STREET', 'Daimlerstr. 8');
define('CONTACT_ADDRESS_ZIP', '72805');
define('CONTACT_ADDRESS_CITY', 'Lichtenstein');
define('CONTACT_ADDRESS_COUNTRY', 'Deutschland');

// --- Rechtliches (MUSS noch angepasst werden) ---
define('LEGAL_COMPANY', 'Tokmak GmbH');
define('LEGAL_OWNER', 'Tufan Tokmak');
define('LEGAL_REGISTER', 'HRB 803281, Amtsgericht Stuttgart');
define('LEGAL_TAX_ID', 'DE459571108');

// --- Formular ---
// TEMP 13.07.2026 (Conversion-Test): Empfaenger auf Inhouse umgebogen, Kunde bekommt nichts.
// ZURUECKSETZEN nach Test -> CONTACT_EMAIL. Original: define('FORM_RECIPIENT', CONTACT_EMAIL);
define('FORM_RECIPIENT', 'a.sari@inhousee.de');
define('FORM_BCC', 'a.sari@inhousee.de');       // Inhouse Media – wird bei jeder Anfrage in BCC gesetzt
define('FORM_RATE_LIMIT_SECONDS', 30);
define('FORM_LOG_LEADS', true);
define('FORM_LEADS_FILE', __DIR__ . '/../storage/leads.json');

// --- Inhouse Media OS Webhook ---
define('OS_WEBHOOK_URL',    'https://os.inhousee.de/api/webhooks/tokmak');
define('OS_WEBHOOK_SECRET', 'd1c9e918a50106fca885da6848a843fe76b6934e6502e39c4e9234e3bbe44b1e');

// --- Google Analytics 4 ---
// GA4 Property-ID nach Erstellung hier eintragen, z.B. 'G-XXXXXXXXXX'
define('GA4_ID', 'G-SCZVNTY78D');

// --- Google Ads Conversion Tracking ---
define('GADS_ID', 'AW-18147927014');


// --- Google Ads API (Server-Side Conversion) ---
define('GADS_CUSTOMER_ID', '4094794793');
define('GADS_MCC_ID',      '7673340631');
define('GADS_CONV_ACTION', 'customers/4094794793/conversionActions/7618286107');
define('GADS_CONV_VALUE',  150.0);
// Credentials via gads-secrets.php (nicht in Git – wird im Deploy-Workflow erzeugt)
$_gads = __DIR__ . '/gads-secrets.php';
if (file_exists($_gads)) { require_once $_gads; }
unset($_gads);

// --- Pfade ---
define('BASE_PATH', dirname(__DIR__));
define('INCLUDES_PATH', __DIR__);
define('ASSETS_URL', '/assets');

// --- Session starten (für Rate Limiting) ---
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// --- Zeitzone ---
date_default_timezone_set('Europe/Berlin');

// --- Fehleranzeige (Produktion: ausschalten) ---
ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);
