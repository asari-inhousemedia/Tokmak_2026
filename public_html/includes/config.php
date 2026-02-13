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
define('SITE_REGION', 'Lichtenstein & Umgebung');

// --- Kontaktdaten ---
define('CONTACT_EMAIL', 'info@tokmak-gmbh.de');
define('CONTACT_PHONE', '+49 151 62988317');
define('CONTACT_PHONE_DISPLAY', '0151 629 883 17');
define('CONTACT_ADDRESS_STREET', 'Daimlerstr. 8');
define('CONTACT_ADDRESS_ZIP', '72805');
define('CONTACT_ADDRESS_CITY', 'Lichtenstein');
define('CONTACT_ADDRESS_COUNTRY', 'Deutschland');

// --- Rechtliches (MUSS noch angepasst werden) ---
define('LEGAL_COMPANY', 'Tokmak GmbH');
define('LEGAL_OWNER', 'Tufan Tokmak');
define('LEGAL_REGISTER', '[HRB-Nummer, Amtsgericht eintragen]');
define('LEGAL_TAX_ID', '[USt-IdNr. eintragen]');

// --- Formular ---
define('FORM_RECIPIENT', CONTACT_EMAIL);
define('FORM_RATE_LIMIT_SECONDS', 30);
define('FORM_LOG_LEADS', true);
define('FORM_LEADS_FILE', __DIR__ . '/../storage/leads.json');

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
