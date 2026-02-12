<?php
require_once __DIR__ . '/includes/config.php';
require_once INCLUDES_PATH . '/gdpr-features.php';

$pageTitle       = 'Datenschutzerklärung';
$pageDescription = 'Datenschutzerklärung von ' . SITE_NAME . ' – Informationen zum Umgang mit Ihren Daten.';
$pageSlug        = 'datenschutz';
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require_once INCLUDES_PATH . '/head-meta.php'; ?>
</head>
<body class="page-datenschutz">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">Datenschutzerklärung</h1>
        </div>
    </section>

    <section class="section">
        <div class="container content-narrow">

            <h2>1. Datenschutz auf einen Blick</h2>

            <h3>Allgemeine Hinweise</h3>
            <p>Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen
            Daten passiert, wenn Sie diese Website besuchen. Personenbezogene Daten sind alle Daten, mit denen
            Sie persönlich identifiziert werden können.</p>

            <h3>Datenerfassung auf dieser Website</h3>
            <p><strong>Wer ist verantwortlich für die Datenerfassung auf dieser Website?</strong></p>
            <p>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten
            können Sie dem <a href="/impressum">Impressum</a> dieser Website entnehmen.</p>

            <p><strong>Wie erfassen wir Ihre Daten?</strong></p>
            <p>Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich
            z.&nbsp;B. um Daten handeln, die Sie in ein Kontaktformular eingeben. Andere Daten werden automatisch
            oder nach Ihrer Einwilligung beim Besuch der Website durch unsere IT-Systeme erfasst. Das sind vor
            allem technische Daten (z.&nbsp;B. Internetbrowser, Betriebssystem oder Uhrzeit des Seitenaufrufs).</p>

            <h2>2. Hosting</h2>
            <p>Diese Website wird bei All-Inkl (ALL-INKL.COM – Neue Medien Münnich, Inhaber: René Münnich,
            Hauptstraße 68, 02742 Friedersdorf) gehostet. Details entnehmen Sie der Datenschutzerklärung von
            All-Inkl: <a href="https://all-inkl.com/datenschutzinformationen/" target="_blank" rel="noopener">https://all-inkl.com/datenschutzinformationen/</a></p>
            <p>Die Nutzung erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Wir haben ein berechtigtes
            Interesse an einer zuverlässigen Darstellung unserer Website.</p>

            <h2>3. Allgemeine Hinweise und Pflichtinformationen</h2>

            <h3>Datenschutz</h3>
            <p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln
            Ihre personenbezogenen Daten vertraulich und entsprechend den gesetzlichen Datenschutzvorschriften
            sowie dieser Datenschutzerklärung.</p>

            <h3>Verantwortliche Stelle</h3>
            <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
            <p>
                <?php echo LEGAL_COMPANY; ?><br>
                <?php echo LEGAL_OWNER; ?><br>
                <?php echo CONTACT_ADDRESS_STREET; ?><br>
                <?php echo CONTACT_ADDRESS_ZIP . ' ' . CONTACT_ADDRESS_CITY; ?><br>
                Telefon: <?php echo CONTACT_PHONE; ?><br>
                E-Mail: <?php echo CONTACT_EMAIL; ?>
            </p>

            <h3>Speicherdauer</h3>
            <p>Soweit innerhalb dieser Datenschutzerklärung keine speziellere Speicherdauer genannt wurde,
            verbleiben Ihre personenbezogenen Daten bei uns, bis der Zweck für die Datenverarbeitung entfällt.</p>

            <h3>Ihre Rechte</h3>
            <p>Sie haben jederzeit das Recht, unentgeltlich Auskunft über Herkunft, Empfänger und Zweck
            Ihrer gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die
            Berichtigung oder Löschung dieser Daten zu verlangen. Wenn Sie eine Einwilligung zur
            Datenverarbeitung erteilt haben, können Sie diese Einwilligung jederzeit für die Zukunft
            widerrufen. Außerdem haben Sie das Recht, unter bestimmten Umständen die Einschränkung der
            Verarbeitung Ihrer personenbezogenen Daten zu verlangen. Des Weiteren steht Ihnen ein
            Beschwerderecht bei der zuständigen Aufsichtsbehörde zu.</p>

            <h2>4. Datenerfassung auf dieser Website</h2>

            <h3>Server-Log-Dateien</h3>
            <p>Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten
            Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:</p>
            <ul>
                <li>Browsertyp und Browserversion</li>
                <li>Verwendetes Betriebssystem</li>
                <li>Referrer URL</li>
                <li>Hostname des zugreifenden Rechners</li>
                <li>Uhrzeit der Serveranfrage</li>
                <li>IP-Adresse</li>
            </ul>
            <p>Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen.
            Die Erfassung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO.</p>

            <!-- Dynamische DSGVO-Feature-Texte -->
            <?php
            $sectionNumber = 5;
            foreach ($gdprFeatures as $feature => $enabled):
                if ($enabled && isset($gdprTexts[$feature])):
            ?>
            <h2><?php echo $sectionNumber; ?>. <?php echo htmlspecialchars($gdprTexts[$feature]['title']); ?></h2>
            <?php echo $gdprTexts[$feature]['text']; ?>
            <?php
                    $sectionNumber++;
                endif;
            endforeach;
            ?>

            <h2><?php echo $sectionNumber; ?>. SSL-Verschlüsselung</h2>
            <p>Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte
            eine SSL-Verschlüsselung. Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile
            des Browsers von „http://" auf „https://" wechselt und an dem Schloss-Symbol in Ihrer Browserzeile.</p>

        </div>
    </section>

</main>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>

<?php require_once INCLUDES_PATH . '/scripts.php'; ?>
</body>
</html>
