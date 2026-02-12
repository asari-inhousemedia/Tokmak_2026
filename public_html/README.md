# ALL-INKL KMU Master System – Installationsanleitung

## Übersicht

Dieses System ist ein produktionsreifes Website-Framework für kleine und mittlere Unternehmen (KMU).
Es wurde speziell für All-Inkl Hosting (Apache + PHP) entwickelt.

**Merkmale:**
- PHP-basierte Seitenstruktur mit Includes
- Saubere URLs ohne .php-Endungen
- DSGVO-konform (keine externen CDNs)
- Sicheres Kontaktformular mit Honeypot und Rate Limiting
- Responsive Design mit CSS-Variablen
- SEO-optimiert (JSON-LD, OpenGraph, Sitemap)
- Modulares Cookie-Banner-System (vorbereitet)

---

## 1. Dateien hochladen (FTP)

### Vorbereitung
1. Logge dich bei All-Inkl im **KAS (Kunden-Administrations-System)** ein
2. Erstelle eine Domain oder Subdomain und notiere den Pfad (z.B. `/www/htdocs/w0123456/`)
3. Öffne ein FTP-Programm (z.B. FileZilla) mit den All-Inkl FTP-Zugangsdaten

### Upload
Lade den **gesamten Inhalt** des Ordners `public_html/` in das Hauptverzeichnis deiner Domain hoch:

```
/www/htdocs/w0123456/
├── .htaccess
├── index.php
├── leistungen.php
├── kontakt.php
├── impressum.php
├── datenschutz.php
├── robots.txt
├── sitemap.xml
├── includes/
│   ├── config.php
│   ├── header.php
│   ├── footer.php
│   ├── head-meta.php
│   ├── scripts.php
│   ├── form-handler.php
│   └── gdpr-features.php
├── assets/
│   ├── css/styles.css
│   ├── js/main.js
│   ├── img/
│   └── fonts/
└── storage/
    ├── .htaccess
    └── leads.json
```

**Wichtig:**
- Die `.htaccess`-Dateien müssen mit hochgeladen werden (unsichtbare Dateien in FileZilla anzeigen!)
- Der Ordner `storage/` muss Schreibrechte haben: **Rechte auf 755 oder 775 setzen**
- Die Datei `storage/leads.json` braucht Schreibrechte: **Rechte auf 644 oder 664 setzen**

---

## 2. E-Mail und Firmendaten anpassen

Öffne die Datei `includes/config.php` und ändere alle Platzhalter:

```php
// --- Firmendaten ---
define('SITE_NAME', 'Deine Firma GmbH');
define('SITE_DOMAIN', 'deinefirma.de');
define('SITE_URL', 'https://deinefirma.de');

// --- Kontaktdaten ---
define('CONTACT_EMAIL', 'info@deinefirma.de');
define('CONTACT_PHONE', '+49 123 456 789');
// ... usw.
```

**Vergiss nicht:**
- `SITE_DOMAIN` muss die echte Domain sein (ohne https://)
- `SITE_URL` muss mit https:// beginnen
- `FORM_RECIPIENT` ist die E-Mail, die Kontaktanfragen empfängt

---

## 3. Schriften hinzufügen

Das System verwendet **lokale Schriften** (DSGVO-konform, kein Google Fonts).

### Schritt für Schritt:
1. Lade deine gewünschte Schrift als **WOFF2-Datei** herunter
   - Kostenlose Quelle: https://gwfh.mranftl.com/fonts (Google Webfonts Helper)
2. Benenne die Dateien um:
   - Überschriften-Schrift → `heading.woff2`
   - Text-Schrift → `body.woff2`
3. Lade beide Dateien nach `/assets/fonts/` hoch
4. Falls du andere Dateinamen nutzt, passe diese Stellen an:
   - `includes/head-meta.php` (Preload-Links)
   - `assets/css/styles.css` (die @font-face-Regeln oben)

**Empfohlene Kombinationen:**
- Überschrift: Source Serif Pro / Lora / Playfair Display
- Fließtext: Source Sans Pro / Nunito / Libre Franklin

---

## 4. Saubere URLs testen

Nach dem Upload solltest du prüfen, ob die sauberen URLs funktionieren:

| URL eingeben | Soll zeigen |
|---|---|
| `https://deinefirma.de/` | Startseite |
| `https://deinefirma.de/leistungen` | Leistungsseite |
| `https://deinefirma.de/kontakt` | Kontaktseite |
| `https://deinefirma.de/impressum` | Impressum |
| `https://deinefirma.de/datenschutz` | Datenschutz |

**Falls es nicht funktioniert:**
1. Prüfe, ob `mod_rewrite` bei All-Inkl aktiviert ist (im KAS unter PHP-Einstellungen)
2. Stelle sicher, dass die `.htaccess`-Datei hochgeladen wurde
3. Im KAS → Einstellungen → Webserver: Stelle sicher, dass „AllowOverride All" aktiv ist

---

## 5. Cookie-Banner hinzufügen

Das System ist für externe Cookie-Banner vorbereitet.

### Variante A: Borlabs Cookie (empfohlen für WordPress-freie Projekte)
### Variante B: Cookiebot / Usercentrics / Consentmanager

Füge den Banner-Code in diese Datei ein:

```
includes/scripts.php
```

Dort findest du den markierten Bereich:

```html
<!-- COOKIE BANNER INSERT AREA – START -->
<!-- Hier Cookie-Banner-Script einfügen -->
<!-- COOKIE BANNER INSERT AREA – END -->
```

Setze den Script-Tag deines Anbieters zwischen die Kommentare.

---

## 6. Neue SEO-Unterseite hinzufügen

### Schritt für Schritt:

1. **PHP-Datei erstellen** – kopiere eine bestehende Seite (z.B. `leistungen.php`) und benenne sie um:
   ```
   neue-seite.php
   ```

2. **Seitenvariablen anpassen** – oben in der Datei:
   ```php
   $pageTitle       = 'Titel der neuen Seite';
   $pageDescription = 'Beschreibung für Suchmaschinen (max. 155 Zeichen)';
   $pageSlug        = 'neue-seite';
   ```

3. **Navigation ergänzen** – in `includes/header.php` einen neuen Eintrag hinzufügen:
   ```html
   <li class="nav-item">
       <a href="/neue-seite" class="nav-link<?php echo ($pageSlug === 'neue-seite') ? ' is-active' : ''; ?>">Neue Seite</a>
   </li>
   ```

4. **Sitemap aktualisieren** – in `sitemap.xml` einen neuen Block ergänzen:
   ```xml
   <url>
       <loc>https://deinefirma.de/neue-seite</loc>
       <lastmod>2026-02-12</lastmod>
       <changefreq>monthly</changefreq>
       <priority>0.7</priority>
   </url>
   ```

5. **Hochladen** – die neue PHP-Datei per FTP hochladen. Fertig!

Die `.htaccess` sorgt automatisch dafür, dass `/neue-seite` funktioniert.

---

## 7. DSGVO-Features verwalten

Öffne `includes/gdpr-features.php` und aktiviere/deaktiviere Features:

```php
$gdprFeatures = [
    'contact_form' => true,   // Kontaktformular aktiv
    'analytics'    => false,  // Analyse deaktiviert
    'maps'         => false,  // Karten deaktiviert
    'newsletter'   => false,  // Newsletter deaktiviert
    'social_media' => false,  // Social Media deaktiviert
];
```

Die Datenschutzseite zeigt automatisch nur die Texte der aktivierten Features an.

---

## 8. Bilder und Medien

- Lade Bilder nach `/assets/img/` hoch
- Verwende das **WebP-Format** für beste Performance
- Setze immer `width` und `height` Attribute
- Nutze `loading="lazy"` für Bilder unterhalb des sichtbaren Bereichs

```html
<img src="/assets/img/foto.webp" alt="Beschreibung" width="800" height="600" loading="lazy">
```

### Hero-Hintergrundbild:
In `index.php` den Kommentar im Hero-Bereich durch ein echtes Bild ersetzen:
```html
<img src="/assets/img/hero-bg.jpg" alt="" class="hero-bg-image" width="1920" height="1080" loading="eager">
```

---

## Ordnerstruktur – Kurzübersicht

| Ordner/Datei | Funktion |
|---|---|
| `includes/config.php` | Zentrale Konfiguration (E-Mail, Firmendaten) |
| `includes/header.php` | Kopfbereich mit Navigation |
| `includes/footer.php` | Fußbereich |
| `includes/head-meta.php` | Meta-Tags, OpenGraph, JSON-LD |
| `includes/scripts.php` | JavaScript + Cookie-Banner-Bereich |
| `includes/form-handler.php` | Formularverarbeitung |
| `includes/gdpr-features.php` | DSGVO Feature-Toggles |
| `assets/css/styles.css` | Komplettes Design-System |
| `assets/js/main.js` | JavaScript (Navigation, Animationen) |
| `assets/fonts/` | Lokale Schriftdateien (WOFF2) |
| `assets/img/` | Bilder und Grafiken |
| `storage/leads.json` | Kontaktanfragen-Log |

---

## Support

Bei Fragen zur All-Inkl Konfiguration:
- All-Inkl Hilfe: https://all-inkl.com/wichtig/anleitungen/
- All-Inkl Support: support@all-inkl.com
