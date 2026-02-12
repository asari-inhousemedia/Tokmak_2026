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
    'maps'         => false,
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
        <p>Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre
        Anfrage mit der Erfüllung eines Vertrags zusammenhängt oder zur Durchführung vorvertraglicher
        Maßnahmen erforderlich ist. In allen übrigen Fällen beruht die Verarbeitung auf unserem berechtigten
        Interesse an der effektiven Bearbeitung der an uns gerichteten Anfragen (Art. 6 Abs. 1 lit. f DSGVO)
        oder auf Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO).</p>
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
        'title' => 'Kartendienste',
        'text'  => '<p>Diese Website nutzt einen Kartendienst zur Darstellung von Standortinformationen.
        Beim Aufruf der Karte werden Daten an den Kartenanbieter übertragen. Dies geschieht erst nach
        Ihrer aktiven Einwilligung (Opt-In).</p>
        <p>Die Nutzung erfolgt auf Grundlage von Art. 6 Abs. 1 lit. a DSGVO (Einwilligung). Eine erteilte
        Einwilligung kann jederzeit widerrufen werden.</p>'
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
