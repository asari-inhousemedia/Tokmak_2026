<?php
/**
 * DSGVO Feature-Toggle System
 * ============================
 * Aktiviere/deaktiviere Features hier.
 * Die Datenschutz-Seite passt sich automatisch an.
 */

$gdprFeatures = [
    'contact_form' => true,
    'analytics'    => false,
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
        'title' => 'Web-Analyse',
        'text'  => '<p>Diese Website nutzt ein Web-Analyse-Tool zur statistischen Auswertung der
        Besucherzugriffe. Die erhobenen Daten werden ausschließlich in anonymisierter Form erfasst
        und verarbeitet.</p>
        <p>Die Verarbeitung erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Der Websitebetreiber
        hat ein berechtigtes Interesse an der statistischen Analyse des Nutzerverhaltens, um sowohl sein
        Webangebot als auch seine Werbung zu optimieren.</p>'
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
