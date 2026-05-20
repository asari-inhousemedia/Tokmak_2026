<?php
/**
 * DSGVO Feature-Toggle System
 * ============================
 * Aktiviere/deaktiviere Features hier.
 * Die Datenschutz-Seite passt sich automatisch an.
 */

$gdprFeatures = [
    'contact_form' => true,
    'analytics'    => true,
    'maps'         => true,
    'newsletter'   => false,
    'social_media' => false,
];

/**
 * DSGVO-Textbausteine für die Datenschutzseite.
 * Nur aktive Features werden angezeigt.
 */
$gdprTexts = [

    'contact_form' => [
        'title' => 'Kontaktformular',
        'text'  => '<p>Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem
        Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage
        und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre
        Einwilligung weiter.</p>
        <p>Im Einzelnen werden folgende Daten erhoben:</p>
        <ul>
            <li>Name (Pflichtfeld)</li>
            <li>E-Mail-Adresse (Pflichtfeld)</li>
            <li>Telefonnummer (optional)</li>
            <li>Projektart (Pflichtfeld)</li>
            <li>Objektart (optional)</li>
            <li>Gewünschter Zeitraum (optional)</li>
            <li>Nachricht (Pflichtfeld)</li>
        </ul>
        <p>Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre
        Anfrage mit der Erfüllung eines Vertrags zusammenhängt oder zur Durchführung vorvertraglicher
        Maßnahmen erforderlich ist. In allen übrigen Fällen beruht die Verarbeitung auf unserem berechtigten
        Interesse an der effektiven Bearbeitung der an uns gerichteten Anfragen (Art. 6 Abs. 1 lit. f DSGVO)
        oder auf Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO).</p>
        <p>Die Daten werden per E-Mail an uns übermittelt und serverseitig zur Nachverfolgung gespeichert.
        Ein automatisierter Spam-Schutz (Honeypot-Verfahren) wird eingesetzt, der keine personenbezogenen
        Daten verarbeitet.</p>
        <p>Die von Ihnen im Kontaktformular eingegebenen Daten verbleiben bei uns, bis Sie uns zur Löschung
        auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die Datenspeicherung
        entfällt. Zwingende gesetzliche Bestimmungen – insbesondere Aufbewahrungsfristen – bleiben unberührt.</p>'
    ],

    'analytics' => [
        'title' => 'Google Analytics 4',
        'text'  => '<h3>Einsatz von Google Analytics 4</h3>
        <p>Diese Website nutzt Google Analytics 4 (GA4), einen Webanalysedienst der Google Ireland Limited,
        Gordon House, Barrow Street, Dublin 4, Irland. Google Analytics 4 verwendet Cookies und ähnliche
        Technologien, um das Nutzungsverhalten auf dieser Website zu analysieren.</p>
        <p><strong>Welche Daten werden erfasst?</strong></p>
        <ul>
            <li>Aufgerufene Seiten und Verweildauer</li>
            <li>Ungefährer Standort (auf Basis der IP-Adresse, anonymisiert)</li>
            <li>Gerätetyp, Betriebssystem, Browsertyp</li>
            <li>Herkunft des Besuchs (z.&nbsp;B. Suchmaschine, direkte Eingabe)</li>
            <li>Interaktionen auf der Website (z.&nbsp;B. Formularabsendungen, Klicks)</li>
        </ul>
        <p><strong>IP-Anonymisierung:</strong> Die IP-Adresse wird vor der Übermittlung an Google
        innerhalb der EU anonymisiert. Eine vollständige IP-Adresse wird nicht an Google-Server übertragen.</p>
        <p><strong>Consent Mode v2:</strong> Google Analytics wird auf dieser Website erst nach Ihrer
        ausdrücklichen Einwilligung über unser Cookie-Consent-Tool (CCM19) aktiviert. Ohne Ihre Einwilligung
        werden keine Analyse-Daten erhoben. Sie können Ihre Einwilligung jederzeit über den Cookie-Banner
        widerrufen.</p>
        <p><strong>Cookies, die von Google Analytics gesetzt werden:</strong></p>
        <ul>
            <li><code>_ga</code> – Unterscheidet Nutzer, Speicherdauer 2 Jahre</li>
            <li><code>_ga_*</code> – Speichert Session-Status, Speicherdauer 2 Jahre</li>
        </ul>
        <p><strong>Rechtsgrundlage:</strong> Die Verarbeitung erfolgt auf Grundlage Ihrer Einwilligung
        gemäß Art. 6 Abs. 1 lit. a DSGVO. Sie können Ihre Einwilligung jederzeit mit Wirkung für die
        Zukunft widerrufen.</p>
        <p><strong>Datenübertragung in Drittländer:</strong> Google verarbeitet Daten unter anderem in
        den USA. Google LLC ist unter dem EU-US Data Privacy Framework zertifiziert, sodass ein angemessenes
        Datenschutzniveau gewährleistet ist.</p>
        <p>Weitere Informationen finden Sie in der Datenschutzerklärung von Google:
        <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">https://policies.google.com/privacy</a></p>

        <h3>Cookie-Consent-Verwaltung (CCM19)</h3>
        <p>Zur Verwaltung Ihrer Cookie-Einwilligungen nutzen wir CCM19, einen Dienst der Papoo Software
        &amp; Media GmbH, Auguststr. 4, 53229 Bonn. CCM19 speichert Ihre Einwilligungsentscheidung in
        einem Cookie, damit diese nicht bei jedem Seitenaufruf erneut abgefragt werden muss.</p>
        <p><strong>Cookies, die von CCM19 gesetzt werden:</strong></p>
        <ul>
            <li><code>ccm_consent</code> – Speichert Ihre Einwilligungsentscheidung, Speicherdauer 365 Tage</li>
        </ul>
        <p>Die Speicherung dieser Einwilligung erfolgt auf Grundlage von Art. 6 Abs. 1 lit. c DSGVO
        (rechtliche Verpflichtung zur nachweisbaren Einholung von Einwilligungen) sowie Art. 6 Abs. 1
        lit. f DSGVO (berechtigtes Interesse an der rechtskonformen Gestaltung der Website).</p>
        <p>Weitere Informationen: <a href="https://www.ccm19.de/datenschutzerklaerung.html" target="_blank" rel="noopener">https://www.ccm19.de/datenschutzerklaerung.html</a></p>'
    ],

    'maps' => [
        'title' => 'OpenStreetMap',
        'text'  => '<p>Diese Website nutzt den Kartendienst OpenStreetMap (OSM) zur Darstellung unseres Standorts im Footer-Bereich.
        Die Karte wird über die Server der OpenStreetMap Foundation (OSMF), St John\'s Innovation Centre, Cowley Road, Cambridge, CB4 0WS, United Kingdom, eingebunden.</p>
        <p>Beim Laden der Kartenansicht wird eine Verbindung zu den Servern von OpenStreetMap hergestellt.
        Dabei kann Ihre IP-Adresse an die OSMF übermittelt werden. Weitere Informationen finden Sie in der
        Datenschutzerklärung von OpenStreetMap: <a href="https://wiki.osmfoundation.org/wiki/Privacy_Policy" target="_blank" rel="noopener">https://wiki.osmfoundation.org/wiki/Privacy_Policy</a></p>
        <p>Die Nutzung erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Wir haben ein berechtigtes Interesse
        an der Darstellung unseres Standorts zur Erleichterung der Kontaktaufnahme und Anfahrt.</p>'
    ],

    'newsletter' => [
        'title' => 'Newsletter',
        'text'  => '<p>Wenn Sie den auf der Website angebotenen Newsletter beziehen möchten, benötigen wir
        von Ihnen eine E-Mail-Adresse sowie Informationen, welche uns die Überprüfung gestatten, dass Sie
        der Inhaber der angegebenen E-Mail-Adresse sind. Weitere Daten werden nicht erhoben.</p>
        <p>Die Verarbeitung der in das Newsletteranmeldeformular eingegebenen Daten erfolgt ausschließlich
        auf Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Die erteilte Einwilligung zur
        Speicherung der Daten, der E-Mail-Adresse sowie deren Nutzung zum Versand des Newsletters können
        Sie jederzeit widerrufen.</p>'
    ],

    'social_media' => [
        'title' => 'Social-Media-Plugins',
        'text'  => '<p>Auf dieser Website werden keine Social-Media-Plugins direkt eingebunden.
        Stattdessen verwenden wir einfache Verlinkungen zu unseren Social-Media-Profilen.
        Dabei werden keine Daten an die Betreiber der sozialen Netzwerke übertragen,
        bis Sie aktiv auf den jeweiligen Link klicken.</p>'
    ],

];
