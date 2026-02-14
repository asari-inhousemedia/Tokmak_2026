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
        <div class="page-header-bg">
            <img src="/assets/img/hero.webp" alt="" class="page-header-bg-image" width="1920" height="1080" loading="eager">
            <div class="page-header-overlay"></div>
        </div>
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
            Sie persönlich identifiziert werden können. Ausführliche Informationen zum Thema Datenschutz
            entnehmen Sie unserer nachfolgenden Datenschutzerklärung.</p>

            <h3>Datenerfassung auf dieser Website</h3>
            <p><strong>Wer ist verantwortlich für die Datenerfassung auf dieser Website?</strong></p>
            <p>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten
            können Sie dem <a href="/impressum">Impressum</a> dieser Website entnehmen.</p>

            <p><strong>Wie erfassen wir Ihre Daten?</strong></p>
            <p>Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich
            z.&nbsp;B. um Daten handeln, die Sie in unser Kontaktformular eingeben.</p>
            <p>Andere Daten werden automatisch oder nach Ihrer Einwilligung beim Besuch der Website durch unsere
            IT-Systeme erfasst. Das sind vor allem technische Daten (z.&nbsp;B. Internetbrowser, Betriebssystem
            oder Uhrzeit des Seitenaufrufs). Die Erfassung dieser Daten erfolgt automatisch, sobald Sie diese
            Website betreten.</p>

            <p><strong>Wofür nutzen wir Ihre Daten?</strong></p>
            <p>Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu gewährleisten.
            Andere Daten können zur Analyse Ihres Nutzerverhaltens verwendet werden. Wenn Sie uns über das
            Kontaktformular kontaktieren, werden Ihre Angaben zur Bearbeitung Ihrer Anfrage und für eventuelle
            Anschlussfragen gespeichert.</p>

            <p><strong>Welche Rechte haben Sie bezüglich Ihrer Daten?</strong></p>
            <p>Sie haben jederzeit das Recht, unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer
            gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die Berichtigung
            oder Löschung dieser Daten zu verlangen. Hierzu sowie zu weiteren Fragen zum Thema Datenschutz
            können Sie sich jederzeit an uns wenden.</p>

            <!-- ============================================ -->
            <h2>2. Hosting</h2>
            <p>Diese Website wird bei All-Inkl (ALL-INKL.COM – Neue Medien Münnich, Inhaber: René Münnich,
            Hauptstraße 68, 02742 Friedersdorf) gehostet.</p>
            <p>Details entnehmen Sie der Datenschutzerklärung von
            All-Inkl: <a href="https://all-inkl.com/datenschutzinformationen/" target="_blank" rel="noopener">https://all-inkl.com/datenschutzinformationen/</a></p>
            <p>Die Nutzung erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Wir haben ein berechtigtes
            Interesse an einer zuverlässigen Darstellung unserer Website. Sofern eine entsprechende Einwilligung
            abgefragt wurde, erfolgt die Verarbeitung ausschließlich auf Grundlage von Art. 6 Abs. 1 lit. a DSGVO.
            Die Einwilligung ist jederzeit widerrufbar.</p>

            <h3>Auftragsverarbeitung</h3>
            <p>Wir haben einen Vertrag über Auftragsverarbeitung (AVV) mit dem oben genannten Anbieter geschlossen.
            Hierbei handelt es sich um einen datenschutzrechtlich vorgeschriebenen Vertrag, der gewährleistet,
            dass dieser die personenbezogenen Daten unserer Websitebesucher nur nach unseren Weisungen und unter
            Einhaltung der DSGVO verarbeitet.</p>

            <!-- ============================================ -->
            <h2>3. Allgemeine Hinweise und Pflichtinformationen</h2>

            <h3>Datenschutz</h3>
            <p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln
            Ihre personenbezogenen Daten vertraulich und entsprechend den gesetzlichen Datenschutzvorschriften
            sowie dieser Datenschutzerklärung.</p>
            <p>Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten erhoben.
            Personenbezogene Daten sind Daten, mit denen Sie persönlich identifiziert werden können. Die vorliegende
            Datenschutzerklärung erläutert, welche Daten wir erheben und wofür wir sie nutzen. Sie erläutert auch,
            wie und zu welchem Zweck das geschieht.</p>
            <p>Wir weisen darauf hin, dass die Datenübertragung im Internet (z.&nbsp;B. bei der Kommunikation per
            E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte
            ist nicht möglich.</p>

            <h3>Verantwortliche Stelle</h3>
            <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
            <p>
                <?php echo LEGAL_COMPANY; ?><br>
                <?php echo LEGAL_OWNER; ?><br>
                <?php echo CONTACT_ADDRESS_STREET; ?><br>
                <?php echo CONTACT_ADDRESS_ZIP . ' ' . CONTACT_ADDRESS_CITY; ?><br>
                Telefon: <?php echo CONTACT_PHONE_DISPLAY; ?><br>
                E-Mail: <?php echo CONTACT_EMAIL; ?>
            </p>
            <p>Verantwortliche Stelle ist die natürliche oder juristische Person, die allein oder gemeinsam mit
            anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten (z.&nbsp;B. Namen,
            E-Mail-Adressen o.&nbsp;Ä.) entscheidet.</p>

            <h3>Speicherdauer</h3>
            <p>Soweit innerhalb dieser Datenschutzerklärung keine speziellere Speicherdauer genannt wurde,
            verbleiben Ihre personenbezogenen Daten bei uns, bis der Zweck für die Datenverarbeitung entfällt.
            Wenn Sie ein berechtigtes Löschersuchen geltend machen oder eine Einwilligung zur Datenverarbeitung
            widerrufen, werden Ihre Daten gelöscht, sofern wir keine anderen rechtlich zulässigen Gründe für die
            Speicherung Ihrer personenbezogenen Daten haben (z.&nbsp;B. steuer- oder handelsrechtliche
            Aufbewahrungsfristen); im letztgenannten Fall erfolgt die Löschung nach Fortfall dieser Gründe.</p>

            <h3>Allgemeine Hinweise zu den Rechtsgrundlagen der Datenverarbeitung auf dieser Website</h3>
            <p>Sofern Sie in die Datenverarbeitung eingewilligt haben, verarbeiten wir Ihre personenbezogenen
            Daten auf Grundlage von Art. 6 Abs. 1 lit. a DSGVO bzw. Art. 9 Abs. 2 lit. a DSGVO, sofern
            besondere Datenkategorien nach Art. 9 Abs. 1 DSGVO verarbeitet werden. Im Falle einer ausdrücklichen
            Einwilligung in die Übertragung personenbezogener Daten in Drittstaaten erfolgt die Datenverarbeitung
            außerdem auf Grundlage von Art. 49 Abs. 1 lit. a DSGVO. Sofern die Datenverarbeitung zur Erfüllung
            eines Vertrags oder zur Durchführung vorvertraglicher Maßnahmen erforderlich ist, verarbeiten wir
            Ihre Daten auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO. Des Weiteren verarbeiten wir Ihre Daten,
            sofern diese zur Erfüllung einer rechtlichen Verpflichtung erforderlich sind, auf Grundlage von
            Art. 6 Abs. 1 lit. c DSGVO. Die Datenverarbeitung kann ferner auf Grundlage unseres berechtigten
            Interesses nach Art. 6 Abs. 1 lit. f DSGVO erfolgen.</p>

            <h3>Widerruf Ihrer Einwilligung zur Datenverarbeitung</h3>
            <p>Viele Datenverarbeitungsvorgänge sind nur mit Ihrer ausdrücklichen Einwilligung möglich. Sie
            können eine bereits erteilte Einwilligung jederzeit widerrufen. Die Rechtmäßigkeit der bis zum
            Widerruf erfolgten Datenverarbeitung bleibt vom Widerruf unberührt.</p>

            <h3>Widerspruchsrecht gegen die Datenerhebung in besonderen Fällen sowie gegen Direktwerbung (Art. 21 DSGVO)</h3>
            <p><strong>WENN DIE DATENVERARBEITUNG AUF GRUNDLAGE VON ART. 6 ABS. 1 LIT. E ODER F DSGVO ERFOLGT,
            HABEN SIE JEDERZEIT DAS RECHT, AUS GRÜNDEN, DIE SICH AUS IHRER BESONDEREN SITUATION ERGEBEN, GEGEN
            DIE VERARBEITUNG IHRER PERSONENBEZOGENEN DATEN WIDERSPRUCH EINZULEGEN; DIES GILT AUCH FÜR EIN AUF
            DIESE BESTIMMUNGEN GESTÜTZTES PROFILING. DIE JEWEILIGE RECHTSGRUNDLAGE, AUF DENEN EINE VERARBEITUNG
            BERUHT, ENTNEHMEN SIE DIESER DATENSCHUTZERKLÄRUNG. WENN SIE WIDERSPRUCH EINLEGEN, WERDEN WIR IHRE
            BETROFFENEN PERSONENBEZOGENEN DATEN NICHT MEHR VERARBEITEN, ES SEI DENN, WIR KÖNNEN ZWINGENDE
            SCHUTZWÜRDIGE GRÜNDE FÜR DIE VERARBEITUNG NACHWEISEN, DIE IHRE INTERESSEN, RECHTE UND FREIHEITEN
            ÜBERWIEGEN ODER DIE VERARBEITUNG DIENT DER GELTENDMACHUNG, AUSÜBUNG ODER VERTEIDIGUNG VON
            RECHTSANSPRÜCHEN (WIDERSPRUCH NACH ART. 21 ABS. 1 DSGVO).</strong></p>

            <h3>Beschwerderecht bei der zuständigen Aufsichtsbehörde</h3>
            <p>Im Falle von Verstößen gegen die DSGVO steht den Betroffenen ein Beschwerderecht bei einer
            Aufsichtsbehörde zu, insbesondere in dem Mitgliedstaat ihres gewöhnlichen Aufenthalts, ihres
            Arbeitsplatzes oder des Orts des mutmaßlichen Verstoßes. Das Beschwerderecht besteht unbeschadet
            anderweitiger verwaltungsrechtlicher oder gerichtlicher Rechtsbehelfe.</p>
            <p>Zuständige Aufsichtsbehörde für Baden-Württemberg:</p>
            <p>Der Landesbeauftragte für den Datenschutz und die Informationsfreiheit Baden-Württemberg<br>
            Lautenschlagerstraße 20<br>
            70173 Stuttgart<br>
            Telefon: +49 711 615541-0<br>
            E-Mail: poststelle@lfdi.bwl.de<br>
            Website: <a href="https://www.baden-wuerttemberg.datenschutz.de" target="_blank" rel="noopener">https://www.baden-wuerttemberg.datenschutz.de</a></p>

            <h3>Recht auf Datenübertragbarkeit</h3>
            <p>Sie haben das Recht, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines
            Vertrags automatisiert verarbeiten, an sich oder an einen Dritten in einem gängigen, maschinenlesbaren
            Format aushändigen zu lassen. Sofern Sie die direkte Übertragung der Daten an einen anderen
            Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar ist.</p>

            <h3>Auskunft, Berichtigung und Löschung</h3>
            <p>Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf unentgeltliche
            Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den Zweck
            der Datenverarbeitung und ggf. ein Recht auf Berichtigung oder Löschung dieser Daten. Hierzu sowie
            zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit an uns wenden.</p>

            <h3>Recht auf Einschränkung der Verarbeitung</h3>
            <p>Sie haben das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.
            Hierzu können Sie sich jederzeit an uns wenden. Das Recht auf Einschränkung der Verarbeitung besteht
            in folgenden Fällen:</p>
            <ul>
                <li>Wenn Sie die Richtigkeit Ihrer bei uns gespeicherten personenbezogenen Daten bestreiten,
                benötigen wir in der Regel Zeit, um dies zu überprüfen. Für die Dauer der Prüfung haben Sie das
                Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</li>
                <li>Wenn die Verarbeitung Ihrer personenbezogenen Daten unrechtmäßig geschah/geschieht, können
                Sie statt der Löschung die Einschränkung der Datenverarbeitung verlangen.</li>
                <li>Wenn wir Ihre personenbezogenen Daten nicht mehr benötigen, Sie sie jedoch zur Ausübung,
                Verteidigung oder Geltendmachung von Rechtsansprüchen benötigen, haben Sie das Recht, statt der
                Löschung die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</li>
                <li>Wenn Sie einen Widerspruch nach Art. 21 Abs. 1 DSGVO eingelegt haben, muss eine Abwägung
                zwischen Ihren und unseren Interessen vorgenommen werden. Solange noch nicht feststeht, wessen
                Interessen überwiegen, haben Sie das Recht, die Einschränkung der Verarbeitung Ihrer
                personenbezogenen Daten zu verlangen.</li>
            </ul>

            <!-- ============================================ -->
            <h2>4. Datenerfassung auf dieser Website</h2>

            <h3>Cookies und Sessions</h3>
            <p>Diese Website verwendet technisch notwendige PHP-Sessions. Dabei wird ein Session-Cookie
            (PHPSESSID) in Ihrem Browser gesetzt, das für die Funktionalität der Website erforderlich ist
            (z.&nbsp;B. Spam-Schutz durch Rate Limiting beim Kontaktformular). Dieses Cookie enthält keine
            personenbezogenen Daten und wird beim Schließen des Browsers automatisch gelöscht.</p>
            <p>Darüber hinaus werden auf dieser Website keine Cookies gesetzt. Es werden keine Tracking-,
            Marketing- oder Analyse-Cookies verwendet.</p>
            <p>Die Nutzung technisch notwendiger Cookies/Sessions erfolgt auf Grundlage von Art. 6 Abs. 1
            lit. f DSGVO. Der Websitebetreiber hat ein berechtigtes Interesse an der technisch fehlerfreien
            und sicheren Bereitstellung seiner Website.</p>

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
            Die Erfassung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Der
            Websitebetreiber hat ein berechtigtes Interesse an der technisch fehlerfreien Darstellung
            und der Optimierung seiner Website – hierzu müssen die Server-Log-Dateien erfasst werden.</p>

            <h3>Anfrage per E-Mail oder Telefon</h3>
            <p>Wenn Sie uns per E-Mail oder Telefon kontaktieren, wird Ihre Anfrage inklusive aller daraus
            hervorgehenden personenbezogenen Daten (Name, Anfrage) zum Zwecke der Bearbeitung Ihres Anliegens
            bei uns gespeichert und verarbeitet. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.</p>
            <p>Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre
            Anfrage mit der Erfüllung eines Vertrags zusammenhängt oder zur Durchführung vorvertraglicher
            Maßnahmen erforderlich ist. In allen übrigen Fällen beruht die Verarbeitung auf unserem berechtigten
            Interesse an der effektiven Bearbeitung der an uns gerichteten Anfragen (Art. 6 Abs. 1 lit. f DSGVO)
            oder auf Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO), sofern diese abgefragt wurde.</p>
            <p>Die von Ihnen an uns per Kontaktanfragen übersandten Daten verbleiben bei uns, bis Sie uns zur
            Löschung auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die
            Datenspeicherung entfällt (z.&nbsp;B. nach abgeschlossener Bearbeitung Ihres Anliegens).
            Zwingende gesetzliche Bestimmungen – insbesondere gesetzliche Aufbewahrungsfristen – bleiben
            unberührt.</p>

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

            <!-- ============================================ -->
            <h2><?php echo $sectionNumber; ?>. Schriftarten (lokal gehostet)</h2>
            <p>Diese Website nutzt die Schriftart „Karla" zur einheitlichen Darstellung von Texten. Die Schrift
            ist lokal auf unserem Server installiert und wird direkt von dort geladen. Es findet <strong>keine
            Verbindung zu externen Servern</strong> (z.&nbsp;B. Google Fonts) statt. Es werden keine Daten an
            Dritte übertragen.</p>
            <?php $sectionNumber++; ?>

            <!-- ============================================ -->
            <h2><?php echo $sectionNumber; ?>. SSL- bzw. TLS-Verschlüsselung</h2>
            <p>Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte,
            wie zum Beispiel Anfragen, die Sie an uns als Seitenbetreiber senden, eine SSL- bzw.
            TLS-Verschlüsselung. Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile
            des Browsers von „http://" auf „https://" wechselt und an dem Schloss-Symbol in Ihrer Browserzeile.</p>
            <p>Wenn die SSL- bzw. TLS-Verschlüsselung aktiviert ist, können die Daten, die Sie an uns
            übermitteln, nicht von Dritten mitgelesen werden.</p>
            <?php $sectionNumber++; ?>

            <!-- ============================================ -->
            <h2><?php echo $sectionNumber; ?>. Aktualität und Änderung dieser Datenschutzerklärung</h2>
            <p>Diese Datenschutzerklärung ist aktuell gültig und hat den Stand Februar 2026.</p>
            <p>Durch die Weiterentwicklung unserer Website und Angebote darüber oder aufgrund geänderter
            gesetzlicher beziehungsweise behördlicher Vorgaben kann es notwendig werden, diese
            Datenschutzerklärung zu ändern. Die jeweils aktuelle Datenschutzerklärung kann jederzeit auf
            dieser Seite von Ihnen abgerufen und ausgedruckt werden.</p>

        </div>
    </section>

</main>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>

<?php require_once INCLUDES_PATH . '/scripts.php'; ?>
</body>
</html>
