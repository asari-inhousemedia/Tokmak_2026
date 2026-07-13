<?php
require_once __DIR__ . '/includes/config.php';

$staedte = [
    'reutlingen'  => ['name' => 'Reutlingen',  'km' => 0],
    'tuebingen'   => ['name' => 'Tübingen',    'km' => 15],
    'stuttgart'   => ['name' => 'Stuttgart',   'km' => 40],
    'esslingen'   => ['name' => 'Esslingen',   'km' => 45],
    'nuertingen'  => ['name' => 'Nürtingen',   'km' => 20],
    'metzingen'   => ['name' => 'Metzingen',   'km' => 15],
    'hechingen'   => ['name' => 'Hechingen',   'km' => 25],
    'rottenburg'  => ['name' => 'Rottenburg',  'km' => 20],
    'bad-urach'   => ['name' => 'Bad Urach',   'km' => 25],
    'balingen'    => ['name' => 'Balingen',    'km' => 35],
    'boeblingen'  => ['name' => 'Böblingen',   'km' => 50],
    'kirchheim'   => ['name' => 'Kirchheim unter Teck', 'km' => 35],
];

$stadtdaten = [
    'reutlingen' => [
        'description'       => 'Komplett-Badsanierung in Reutlingen – Tokmak GmbH mit Sitz in Lichtenstein. Direkter Ansprechpartner, Festpreis, Termingarantie. KfW-geförderter Badumbau möglich.',
        'subtitle_hero'     => 'Ihr Fachbetrieb direkt vor Ort – Festpreis, Termingarantie, alle Gewerke.',
        'intro'             => 'Als Betrieb mit Sitz in Lichtenstein sind wir Ihr direkter Ansprechpartner für Badsanierungen in Reutlingen und den umliegenden Stadtteilen. Kurze Wege bedeuten schnelle Ersttermine und verlässliche Bauzeiten – von der Erstbesichtigung bis zur Übergabe.',
        'stadtteile'        => ['Innenstadt', 'Sondelfingen', 'Betzingen', 'Orschel-Hagen', 'Mittelstadt', 'Pliezhausen'],
        'local_context'     => 'Reutlingen hat einen hohen Anteil an Wohngebäuden aus den 1960er bis 1980er Jahren. Veraltete Sanitäranlagen, Fliesen aus dieser Ära und Leitungen am Limit: das ist der typische Ausgangspunkt, bei dem wir täglich arbeiten. Enge Grundrisse und Altbausubstanz sind für uns Alltag, keine Ausnahme.',
        'altersgerecht_text'=> 'In Reutlingen ist der Bedarf an altersgerechten Umbauten besonders groß – viele Eigenheimbesitzer und Eigentümer älterer Wohnungen wollen langfristig selbstbestimmt wohnen. Wir installieren bodengleiche Duschen mit schwellenlosem Zugang, rutschfeste Beläge und Haltesysteme, die sicher und ästhetisch sind. Die KfW fördert solche Maßnahmen mit bis zu 6.250 Euro Zuschuss (Programm 455-B) – wir beraten Sie dazu kostenlos beim ersten Termin.',
        'faq' => [
            ['q' => 'Wie lange dauert eine Badsanierung in Reutlingen?', 'a' => 'Für ein Standard-Bad (6–10 m²) planen wir 2–3 Wochen Bauzeit. Bei Altbauarbeiten mit neuer Leitungsführung sind 3–4 Wochen realistisch. Den genauen Terminplan erhalten Sie mit dem Festpreisangebot nach der Erstbesichtigung.'],
            ['q' => 'Was kostet eine Komplett-Badsanierung in Reutlingen?', 'a' => 'Richtwert: 12.000–22.000 Euro je nach Ausstattung und Umfang. Das Angebot erhalten Sie nach kostenloser Erstbesichtigung – alle Gewerke, Festpreis, keine versteckten Positionen.'],
            ['q' => 'Was beinhaltet ein altersgerechter Badumbau in Reutlingen?', 'a' => 'Typisch: bodengleiche Dusche mit schwellenlosem Zugang, rutschfeste Beläge, Haltesysteme an Wand und Dusche, ergonomische Anordnung der Sanitärobjekte. Wir planen so, dass das Bad sicher und gleichzeitig ästhetisch ist – kein Pflegeheim-Look.'],
            ['q' => 'Gibt es KfW-Förderung für barrierefreien Umbau in Reutlingen?', 'a' => 'Ja – KfW-Programm 455-B fördert altersgerechte Umbaumaßnahmen mit bis zu 6.250 Euro Zuschuss. Wir beraten Sie kostenlos beim ersten Termin: welche Maßnahmen förderungsfähig sind und wie der Antrag läuft.'],
        ],
        'bewertungen' => [
            ['name' => 'Stefan R.', 'ort' => 'Reutlingen-Betzingen', 'projekt' => 'Komplett-Badsanierung, ca. 7 m²', 'text' => 'Festpreis angekündigt, Festpreis gehalten. Unser Altbau in Betzingen hatte ein paar Tücken – alle vorher besprochen. Keine Nachträge.'],
            ['name' => 'Monika H.', 'ort' => 'Reutlingen-Orschel-Hagen', 'projekt' => 'Altersgerechter Badumbau', 'text' => 'Sicherer duschen ohne Pflegebad-Look. Das hat geklappt.'],
            ['name' => 'Jürgen K.', 'ort' => 'Reutlingen-Südstadt', 'projekt' => 'Komplett-Badsanierung, 6 m²', 'text' => '18 Tage von Abriss bis Übergabe. Ich hatte mit mehr gerechnet.'],
        ],
    ],
    'tuebingen' => [
        'description'       => 'Badsanierung in Tübingen – Tokmak GmbH, 15 km vom Standort. Festpreisangebot, Termingarantie, KfW-geförderter altersgerechter Badumbau. Jetzt Termin vereinbaren.',
        'subtitle_hero'     => 'Komplett-Badsanierung in Tübingen – von Lustnau bis Weststadt.',
        'intro'             => 'Tübingen liegt nur 15 km von unserem Standort entfernt – ideal für eine persönliche Betreuung ohne lange Wartezeiten. Ob Gründerzeit-Altbau in der Weststadt oder Neubau in Lustnau: wir kennen beide Welten und arbeiten in beiden täglich.',
        'stadtteile'        => ['Weststadt', 'Südstadt', 'Lustnau', 'Derendingen', 'Weilheim', 'Pfrondorf'],
        'local_context'     => 'Tübingen verbindet Gründerzeithäuser, Nachkriegsgebäude und modernen Wohnungsbau. Viele Bäder in der Weststadt und der Südstadt sind seit Jahrzehnten nicht erneuert worden – der Handlungsbedarf ist klar. Gründerzeitbäder erfordern sorgfältige Planung: unregelmäßige Wandstärken, alte Leitungsführungen und historische Grundrisse sind lösbar, wenn man sie kennt.',
        'altersgerecht_text'=> 'In Tübingen wohnen viele Familien mit älteren Angehörigen sowie Paare, die ihr Bad langfristig sicher gestalten wollen. Wir realisieren altersgerechte Umbauten mit bodengleicher Dusche, Klappsitzen, Haltegriffen und rutschfesten Oberflächen. KfW-Programm 455-B: bis zu 6.250 Euro Zuschuss für geeignete Maßnahmen – wir begleiten Sie durch den Antragsprozess.',
        'faq' => [
            ['q' => 'Führt Tokmak auch Badsanierungen in Tübinger Altbauten durch?', 'a' => 'Ja – Altbau ist unser Alltag. Wir arbeiten regelmäßig in Tübinger Gründerzeithäusern: unregelmäßige Wände, alte Leitungsverläufe und enge Grundrisse sind für uns lösbare Herausforderungen.'],
            ['q' => 'Wie läuft eine Badsanierung in Tübingen ab?', 'a' => 'Erstbesichtigung vor Ort → 3D-Planung und Materialauswahl → Festpreisangebot → koordinierte Umsetzung aller Gewerke. Dauer typisch 2–3 Wochen. Bis zur Übergabe ein fester Ansprechpartner.'],
            ['q' => 'Was umfasst ein altersgerechter Badumbau in Tübingen?', 'a' => 'Bodengleiche Dusche mit schwellenlosem Zugang, Haltegriffe, rutschfeste Beläge und – wenn gewünscht – breiterer Türdurchgang. Wir planen barrierefrei und ästhetisch, damit das Bad langfristig komfortabel bleibt.'],
            ['q' => 'Gibt es KfW-Förderung für altersgerechten Umbau in Tübingen?', 'a' => 'Ja – KfW 455-B fördert solche Maßnahmen mit bis zu 6.250 Euro Zuschuss. Wir beraten Sie beim ersten kostenlosen Termin, welche Arbeiten förderfähig sind und was der Antrag erfordert.'],
        ],
        'bewertungen' => [
            ['name' => 'Claudia M.', 'ort' => 'Tübingen-Derendingen', 'projekt' => 'Badsanierung Altbau, ca. 5 m²', 'text' => 'Altbau aus den 60ern, unregelmäßige Wände, alte Leitungen. Ich hatte Angst vor dem, was dabei rauskommt. Alles war vorab besprochen, der Preis hat gestimmt.'],
            ['name' => 'Eva S.', 'ort' => 'Tübingen-Lustnau', 'projekt' => 'Komplett-Badsanierung, 7 m²', 'text' => 'Kind im Haushalt, Zeitplan war das Wichtigste. Hat gepasst.'],
            ['name' => 'Thomas B.', 'ort' => 'Tübingen-Weststadt', 'projekt' => 'Badsanierung mit 3D-Planung', 'text' => 'Die 3D-Ansicht war überzeugend. Man sieht vorher genau, was man bekommt – und das Ergebnis hat das auch gehalten.'],
        ],
    ],
    'stuttgart' => [
        'description'       => 'Badsanierung in Stuttgart – Tokmak GmbH, 40 km Entfernung. Alle Gewerke aus einer Hand, Festpreis, Termingarantie. Auch altersgerechter Badumbau mit KfW-Förderung.',
        'subtitle_hero'     => 'Badsanierung in Stuttgart – Festpreis, Termingarantie, alle Gewerke.',
        'intro'             => 'Stuttgart liegt 40 km von unserem Standort entfernt – wir sind regelmäßig in der Landeshauptstadt und im Umland im Einsatz. Besonders in den südlichen Stadtteilen wie Möhringen, Vaihingen und Degerloch, wo viele Immobilien aus den 1960er bis 1980er Jahren stammen, ist der Sanierungsbedarf erheblich.',
        'stadtteile'        => ['Möhringen', 'Vaihingen', 'Plieningen', 'Degerloch', 'Sillenbuch', 'Bad Cannstatt'],
        'local_context'     => 'Stuttgart-Süd und die Halbhöhenlagen haben einen hohen Anteil an Eigentumswohnungen aus der Nachkriegszeit. Der Koordinationsaufwand zwischen Eigentümer, Mieter und verschiedenen Handwerkern ist hier oft besonders hoch. Genau das übernehmen wir: ein Ansprechpartner, ein Zeitplan, ein Angebot.',
        'altersgerecht_text'=> 'Gerade in Stuttgarter Eigentumswohnungen, in denen die Eigentümer selbst alt werden oder Elternteile einziehen, steigt der Bedarf an barrierefreien Bädern. Bodengleiche Duschen, ergonomische Armaturen und rutschfeste Großformatfliesen machen das Bad sicher und wohnlich. Mit KfW-Förderung (Programm 455-B, bis zu 6.250 Euro) lassen sich diese Maßnahmen oft kostenneutral realisieren.',
        'faq' => [
            ['q' => 'Kommt Tokmak für Badsanierungen nach Stuttgart?', 'a' => 'Ja – Stuttgart liegt ca. 40 km von unserem Standort entfernt. Wir sind regelmäßig in Stuttgart und Umland tätig. Erstbesichtigung kostenfrei, Anfahrt transparent im Angebot.'],
            ['q' => 'Können Sie in Stuttgarter Eigentumswohnungen alle Gewerke koordinieren?', 'a' => 'Ja – gerade in Mehrparteienhäusern ist die Koordination entscheidend. Wir halten vereinbarte Bauzeiten ein und kommunizieren klar, damit Mitbewohner minimal beeinträchtigt werden.'],
            ['q' => 'Was beinhaltet ein altersgerechter Badumbau in Stuttgart?', 'a' => 'Bodengleiche Dusche, Haltesysteme, rutschfeste Fliesen und ergonomische Planung. Bei Bedarf auch Türverbreiterung für Rollatornutzung. Wir achten darauf, dass das Ergebnis hochwertig aussieht – nicht nach Umbau.'],
            ['q' => 'Ist KfW-Förderung für Badumbau in Stuttgart möglich?', 'a' => 'Ja – KfW 455-B: bis zu 6.250 Euro Zuschuss für förderfähige altersgerechte Maßnahmen. Wir beraten Sie beim ersten Termin kostenlos, was bei Ihrem Bad konkret gefördert werden kann.'],
        ],
        'bewertungen' => [
            ['name' => 'Markus F.', 'ort' => 'Stuttgart-Bad Cannstatt', 'projekt' => 'Komplett-Badsanierung, 9 m²', 'text' => 'Vorher drei verschiedene Handwerker, die nicht miteinander geredet haben. Das hier war komplett anders – ein Ablauf, ein Ansprechpartner.'],
            ['name' => 'Klaus W.', 'ort' => 'Stuttgart-Möhringen', 'projekt' => 'Komplett-Badsanierung, 6 m²', 'text' => 'Ich habe drei Angebote verglichen. Die anderen haben pauschal gerechnet, hier war jede Position einzeln aufgeführt. Endpreis wie kalkuliert.'],
            ['name' => 'Petra N.', 'ort' => 'Stuttgart-Vaihingen', 'projekt' => 'Altersgerechter Badumbau', 'text' => 'Wollten kein Pflegebad. Ist keins geworden.'],
        ],
    ],
    'esslingen' => [
        'description'       => 'Badsanierung in Esslingen am Neckar – Tokmak GmbH, 45 km Entfernung. Komplett-Sanierung aller Gewerke, Festpreis, inkl. altersgerechtem Umbau und KfW-Beratung.',
        'subtitle_hero'     => 'Badsanierung in Esslingen am Neckar – professionell, koordiniert.',
        'intro'             => 'Esslingen am Neckar liegt rund 45 km von unserem Standort entfernt. In dieser historisch gewachsenen Stadt mit ihrem Mix aus Altstadtgebäuden und modernen Wohnanlagen sind wir für Komplett-Badsanierungen im Einsatz – mit demselben Qualitätsanspruch wie im Kerngebiet.',
        'stadtteile'        => ['Innenstadt', 'Berkheim', 'Zell', 'Kennenburg', 'Mettingen', 'Wäldenbronn'],
        'local_context'     => 'Esslingen hat eine der ältesten Altstädte Baden-Württembergs. Viele Gebäude haben komplexe Bausubstanz, enge Grundrisse und historische Installationen. Eine sorgfältige Bestandsaufnahme vor der Badsanierung ist hier besonders wichtig – und unser Standard.',
        'altersgerecht_text'=> 'In Esslinger Altbauten und Nachkriegsgebäuden leben viele Menschen, die ihr Bad dauerhaft nutzen wollen – komfortabel und sicher. Altersgerechte Umbauten mit bodengleicher Dusche und Haltesystemen sind gerade in älteren Grundrissen oft herausfordernder, aber immer lösbar. KfW-Förderung 455-B: bis zu 6.250 Euro für geeignete Maßnahmen.',
        'faq' => [
            ['q' => 'Übernehmen Sie Badsanierungen in Esslinger Altbauimmobilien?', 'a' => 'Ja – Altbau ist ein Schwerpunkt. Enge Grundrisse, gemauerte Wände und ältere Leitungen sind lösbare Herausforderungen. Wir machen vor der Planung immer eine gründliche Bestandsaufnahme vor Ort.'],
            ['q' => 'Was kostet eine Badsanierung in Esslingen?', 'a' => 'Richtwert ab 12.000 Euro für eine Komplettsanierung. Exakte Kalkulation nach kostenloser Erstbesichtigung – alle Gewerke, Festpreis, keine versteckten Positionen.'],
            ['q' => 'Was umfasst ein altersgerechter Badumbau in Esslingen?', 'a' => 'Bodengleiche Dusche, Haltegriffe, rutschfeste Beläge und ergonomisch angeordnete Sanitärobjekte. Wir planen so, dass das Bad funktional und ästhetisch bleibt – kein Pflegeheim-Charakter.'],
            ['q' => 'Ist KfW-Förderung für barrierefreien Badumbau in Esslingen möglich?', 'a' => 'Ja – KfW 455-B: bis zu 6.250 Euro Zuschuss. Beim ersten Termin beraten wir kostenlos, welche Maßnahmen konkret förderfähig sind.'],
        ],
        'bewertungen' => [
            ['name' => 'Andrea S.', 'ort' => 'Esslingen-Berkheim', 'projekt' => 'Badsanierung Altbau, ca. 6 m²', 'text' => 'Alte Bausubstanz, gemauerte Wände – da kommt immer was nach, dachte ich. Kam nicht. Preis wie vereinbart.'],
            ['name' => 'Michael T.', 'ort' => 'Esslingen-Zell', 'projekt' => 'Komplett-Badsanierung, 8 m²', 'text' => 'Drei Angebote eingeholt. Dieses war das transparenteste. Endpreis wie kalkuliert.'],
            ['name' => 'Gabi R.', 'ort' => 'Esslingen-Innenstadt', 'projekt' => 'Altersgerechter Badumbau', 'text' => 'Haltegriffe dezent integriert, schwellenlose Dusche, moderne Fliesen. Sieht nicht nach Umbau aus.'],
        ],
    ],
    'nuertingen' => [
        'description'       => 'Badsanierung in Nürtingen – Tokmak GmbH, 20 km Entfernung. Komplett-Sanierung, Festpreis, Termingarantie. Altersgerechter Badumbau mit KfW-Förderung möglich.',
        'subtitle_hero'     => 'Badsanierung in Nürtingen – alle Gewerke, ein Ansprechpartner.',
        'intro'             => 'Nürtingen am Neckar liegt ca. 20 km von unserem Standort entfernt – kurze Wege, schnelle Ersttermine. In der wachsenden Mittelstadt sanieren wir Bäder von der einfachen Auffrischung bis zur vollständigen Neugestaltung.',
        'stadtteile'        => ['Innenstadt', 'Neckarhausen', 'Roßdorf', 'Reudern', 'Hardt', 'Zizishausen'],
        'local_context'     => 'Nürtingen hat viele Wohngebäude aus den 1970er und 1980er Jahren – Zeilenanlagen, Reihenhäuser, ältere Mehrfamilienhäuser. Diese Bäder sind oft technisch und optisch reif für eine Erneuerung. Die Bestandsaufnahme vor Ort zeigt regelmäßig, dass mehr erneuert werden sollte als zunächst gedacht.',
        'altersgerecht_text'=> 'In Nürtingen gibt es viele Einfamilienhäuser, in denen die Eigentümer langfristig wohnen wollen. Ein altersgerechter Umbau ist hier oft eine Investition in die Zukunft: bodengleiche Dusche statt Badewanne, ergonomische Armaturen, mehr Bewegungsfreiheit. KfW-Förderung bis zu 6.250 Euro (Programm 455-B) macht die Maßnahme oft deutlich günstiger.',
        'faq' => [
            ['q' => 'Wie lange dauert eine Badsanierung in Nürtingen?', 'a' => 'Für ein Standard-Bad (6–10 m²) typisch 2–3 Wochen. Auch kleine Bäder unter 5 m² sanieren wir komplett – kein Mindestumfang. Exakter Terminplan liegt mit dem Angebot vor.'],
            ['q' => 'Was kostet eine Badsanierung in Nürtingen?', 'a' => 'Richtwert: 12.000–20.000 Euro für eine Komplettsanierung. Festpreis nach kostenloser Erstbesichtigung, transparent aufgeschlüsselt – alle Gewerke inklusive.'],
            ['q' => 'Was beinhaltet ein altersgerechter Badumbau in Nürtingen?', 'a' => 'Bodengleiche Dusche statt Badewanne, Haltesysteme, rutschfeste Oberflächen und mehr Bewegungsfreiheit. Wir planen individuell: sicher, komfortabel und optisch ansprechend.'],
            ['q' => 'Gibt es KfW-Förderung für altersgerechten Umbau in Nürtingen?', 'a' => 'Ja – KfW 455-B fördert geeignete Maßnahmen mit bis zu 6.250 Euro Zuschuss. Beim ersten Termin beraten wir kostenlos, was in Ihrer Situation förderfähig ist.'],
        ],
        'bewertungen' => [
            ['name' => 'Thomas K.', 'ort' => 'Nürtingen-Oberensingen', 'projekt' => 'Komplett-Badsanierung, alle Gewerke', 'text' => 'Ein Ansprechpartner für Sanitär, Elektro, Estrich und Fliesen. Das klingt selbstverständlich – ist es leider nicht.'],
            ['name' => 'Sandra L.', 'ort' => 'Nürtingen-Neckarhausen', 'projekt' => 'Komplett-Badsanierung, ca. 6 m²', 'text' => 'Fertig nach 16 Tagen. Geplant waren 2,5 Wochen. Ich habe nichts nachfassen müssen.'],
            ['name' => 'Frank H.', 'ort' => 'Nürtingen-Stadtmitte', 'projekt' => 'Komplett-Badsanierung, 5 m²', 'text' => 'Das Angebot war transparent aufgebaut. Für mich war das der entscheidende Punkt.'],
        ],
    ],
    'metzingen' => [
        'description'       => 'Badsanierung in Metzingen – Tokmak GmbH, 15 km Entfernung. Festpreisangebot, alle Gewerke, inkl. altersgerechtem Badumbau und KfW-Förderung.',
        'subtitle_hero'     => 'Badsanierung in Metzingen – von der Planung bis zur Übergabe.',
        'intro'             => 'Metzingen liegt nur 15 km von unserem Standort entfernt – kurze Wege, direkte Kommunikation. Die Stadt an der Voralb hat gewachsene Wohnviertel mit Bestandsimmobilien, in denen wir regelmäßig Badsanierungen durchführen.',
        'stadtteile'        => ['Innenstadt', 'Neuhausen', 'Neugreuth', 'Ermstal-Viertel', 'Voralb-Siedlung'],
        'local_context'     => 'Metzingen hat viele Eigenheime und Doppelhaushälften der Baujahre 1970–1990. Bäder aus dieser Zeit sind technisch veraltet und optisch nicht mehr zeitgemäß – ein klarer Fall für eine Komplett-Sanierung mit modernen Materialien und besserer Raumausnutzung.',
        'altersgerecht_text'=> 'In Metzingen und den umliegenden Voralb-Gemeinden leben viele Eigenheimbesitzer, die ihr Bad dauerhaft nutzen wollen. Ein altersgerechter Umbau erhöht Sicherheit und Wohnwert gleichzeitig: bodengleiche Dusche, Haltegriffe an der richtigen Stelle, rutschfeste Beläge. KfW-Förderung 455-B übernimmt bis zu 6.250 Euro der Kosten.',
        'faq' => [
            ['q' => 'Koordiniert Tokmak in Metzingen alle Gewerke?', 'a' => 'Ja – das ist unser Kernmodell. Sanitär, Elektro, Estrich und Fliesen aus einer Hand, ein Ansprechpartner, ein Zeitplan. Kein Abstimmungschaos zwischen verschiedenen Handwerkern.'],
            ['q' => 'Wie lange dauert eine Badsanierung in Metzingen?', 'a' => 'Typisch 2–3 Wochen für ein Standard-Bad. Den genauen Terminplan erhalten Sie mit dem Festpreisangebot nach der kostenlosen Erstbesichtigung.'],
            ['q' => 'Was beinhaltet ein altersgerechter Badumbau in Metzingen?', 'a' => 'Bodengleiche Dusche mit schwellenlosem Zugang, Haltegriffe, rutschfeste Beläge und ergonomische Gestaltung. Auf Wunsch auch fugenloses Design – sicher und pflegeleicht.'],
            ['q' => 'Gibt es KfW-Förderung für altersgerechten Umbau in Metzingen?', 'a' => 'Ja – KfW 455-B: bis zu 6.250 Euro Zuschuss. Wir beraten Sie beim ersten Termin kostenlos, welche Maßnahmen förderfähig sind und wie der Antrag läuft.'],
        ],
        'bewertungen' => [
            ['name' => 'Heike M.', 'ort' => 'Metzingen-Neuhausen', 'projekt' => 'Komplett-Badsanierung, 7 m²', 'text' => 'Nichts musste ich selbst koordinieren oder nachfassen. Bad fertig in knapp drei Wochen.'],
            ['name' => 'Bernd S.', 'ort' => 'Metzingen-Stadtmitte', 'projekt' => 'Badsanierung mit 3D-Planung', 'text' => 'Ohne die 3D-Ansicht hätte ich das so nicht entschieden. Ich bin kein visueller Typ – aber so konnte ich das Bad wirklich sehen.'],
            ['name' => 'Ute K.', 'ort' => 'Metzingen-Glems', 'projekt' => 'Altersgerechter Badumbau', 'text' => 'Modern, sicher, kein Umbau-Charakter. Genau was ich gesucht hatte.'],
        ],
    ],
    'hechingen' => [
        'description'       => 'Badsanierung in Hechingen – Tokmak GmbH, 25 km Entfernung. Komplett-Sanierung, Festpreis, altersgerechter Badumbau. Kostenlose Erstberatung vor Ort.',
        'subtitle_hero'     => 'Badsanierung in Hechingen – transparent, termingerecht, vollständig.',
        'intro'             => 'Hechingen am Fuße der Burg Hohenzollern liegt ca. 25 km von unserem Standort entfernt. Die Stadt im Zollernalbkreis hat viele Bestandsimmobilien, in denen wir regelmäßig Badsanierungen von Grund auf durchführen.',
        'stadtteile'        => ['Innenstadt', 'Schlatt', 'Weilheim', 'Bechtoldsweiler', 'Sickingen'],
        'local_context'     => 'Hechingen hat viele Einfamilienhäuser und Reihenhäuser der Baujahre 1960–1985. Diese Bestandsbäder haben oft noch Originalfliesen und veraltete Sanitäranlagen – der ideale Ausgangspunkt für eine vollständige Neugestaltung, die Jahrzehnte hält.',
        'altersgerecht_text'=> 'In Hechingen und den Albortschaften leben viele Menschen, die ihr Eigenheim langfristig behalten wollen. Ein altersgerechter Badumbau ist eine der wirkungsvollsten Maßnahmen für selbstbestimmtes Wohnen im Alter. Bodengleiche Dusche, Haltesysteme und mehr Bewegungsfläche machen den Unterschied. KfW 455-B: bis zu 6.250 Euro Zuschuss.',
        'faq' => [
            ['q' => 'Was kostet eine Badsanierung in Hechingen?', 'a' => 'Richtwert: 12.000–18.000 Euro für ein Standard-Bad (6–8 m²). Exakte Kalkulation nach kostenloser Erstbesichtigung – Festpreis, alle Gewerke, transparent aufgeschlüsselt.'],
            ['q' => 'Können Sie in Hechingen auch Großformatfliesen verlegen?', 'a' => 'Ja – Formate bis 120×120 cm sind Standard bei uns. Wir haben das Spezialwerkzeug und die Erfahrung für präzise Verlegung, auch in älteren Grundrissen.'],
            ['q' => 'Was umfasst ein altersgerechter Badumbau in Hechingen?', 'a' => 'Bodengleiche Dusche statt Badewanne, Haltesysteme, rutschfeste Oberflächen und ergonomische Anordnung. Wir sorgen dafür, dass das Ergebnis hochwertig aussieht – nicht nach Umbau.'],
            ['q' => 'Ist KfW-Förderung für barrierefreien Umbau in Hechingen möglich?', 'a' => 'Ja – KfW 455-B fördert mit bis zu 6.250 Euro. Beim ersten Termin beraten wir kostenlos, welche Maßnahmen förderfähig sind und wie Sie den Zuschuss beantragen.'],
        ],
        'bewertungen' => [
            ['name' => 'Dieter W.', 'ort' => 'Hechingen-Stetten', 'projekt' => 'Badsanierung mit Großformat, ca. 9 m²', 'text' => '80×80 Fliesen, ruhige Optik, wenig Fugen. Wollten wir schon lange. Hat geklappt.'],
            ['name' => 'Martin B.', 'ort' => 'Hechingen-Schlatt', 'projekt' => 'Komplett-Badsanierung, 6 m²', 'text' => 'Ich bin selbst Handwerker. Das Angebot war fair, keine versteckten Positionen. So soll das sein.'],
            ['name' => 'Renate F.', 'ort' => 'Hechingen-Stadtmitte', 'projekt' => 'Altersgerechter Badumbau', 'text' => 'Wir sind beide Ende 60. Das Bad ist jetzt so, wie wir es brauchen – und sieht trotzdem schön aus.'],
        ],
    ],
    'rottenburg' => [
        'description'       => 'Badsanierung in Rottenburg am Neckar – Tokmak GmbH, 20 km Entfernung. Alle Gewerke, Festpreis, altersgerechter Badumbau mit KfW-Förderung. Termin anfragen.',
        'subtitle_hero'     => 'Badsanierung in Rottenburg am Neckar – alles aus einer Hand.',
        'intro'             => 'Rottenburg am Neckar liegt ca. 20 km von unserem Standort entfernt. Die Domstadt verbindet historischen Charme mit modernen Wohnanlagen – in beiden Welten führen wir Komplett-Badsanierungen durch, mit demselben Qualitätsanspruch.',
        'stadtteile'        => ['Innenstadt', 'Ehingen', 'Wurmlingen', 'Ergenzingen', 'Kiebingen', 'Weiler'],
        'local_context'     => 'Rottenburg hat eine Mischung aus historischer Altbausubstanz und Wohngebieten aus den 1960er bis 1980er Jahren. Besonders in den Stadtteilen ist der Sanierungsbedarf an Bädern hoch – und mit der richtigen Planung lässt sich auch in alten Grundrissen ein modernes, großzügiges Bad realisieren.',
        'altersgerecht_text'=> 'Rottenburg hat viele Eigenheimbesitzer, die ihr Haus nicht verlassen wollen, aber ihr Bad sicherer gestalten möchten. Bodengleiche Duschen, Haltegriffe und ergonomische Anordnungen sind keine Optionen für Pflegebedürftige – sie sind schlicht gutes Design. KfW 455-B fördert solche Umbauten mit bis zu 6.250 Euro Zuschuss.',
        'faq' => [
            ['q' => 'Wie lange dauert eine Badsanierung in Rottenburg?', 'a' => 'Typisch 2–3 Wochen für ein Standard-Bad. Bei gleichzeitigem Duscheinbau ohne Vollsanierung: 5–7 Werktage. Den genauen Terminplan erhalten Sie mit dem Festpreisangebot.'],
            ['q' => 'Was passiert, wenn bei der Sanierung in Rottenburg Schäden entdeckt werden?', 'a' => 'Sofortige Information, gemeinsame Besprechung, transparente Dokumentation. Keine Überraschungen in der Abrechnung – das ist unser Standard.'],
            ['q' => 'Was beinhaltet ein altersgerechter Badumbau in Rottenburg?', 'a' => 'Bodengleiche Dusche mit schwellenlosem Zugang, Haltegriffe, rutschfeste Beläge, ergonomische Anordnung. Wir planen so, dass das Bad sicher ist und trotzdem hochwertig aussieht.'],
            ['q' => 'Gibt es KfW-Förderung für altersgerechten Umbau in Rottenburg?', 'a' => 'Ja – KfW 455-B: bis zu 6.250 Euro Zuschuss. Kostenlose Beratung beim ersten Termin – wir erklären, welche Maßnahmen förderfähig sind und wie der Antrag läuft.'],
        ],
        'bewertungen' => [
            ['name' => 'Petra H.', 'ort' => 'Rottenburg-Seebronn', 'projekt' => 'Komplett-Badsanierung, ca. 7 m²', 'text' => 'Ich hatte zwei Wochen Urlaub eingeplant. Das Bad war nach 15 Tagen fertig. Der Urlaub hat sich anderweitig gelohnt.'],
            ['name' => 'Klaus M.', 'ort' => 'Rottenburg-Stadtmitte', 'projekt' => 'Badumbau mit bodengleicher Dusche', 'text' => 'Wollte wissen was es baulich bedeutet, die Wanne rauszuwerfen. Hat mir jemand erklärt – ohne Fachbegriff-Gebrabbel.'],
            ['name' => 'Sandra W.', 'ort' => 'Rottenburg-Wurmlingen', 'projekt' => 'Badsanierung im bewohnten Objekt', 'text' => 'Wir haben durchgewohnt. Es gab einen Ablaufplan, der zeigte wann was passiert. Das hat die Sache erträglich gemacht.'],
        ],
    ],
    'bad-urach' => [
        'description'       => 'Badsanierung in Bad Urach – Tokmak GmbH, 25 km Entfernung. Festpreis, Termingarantie, altersgerechter Badumbau mit KfW-Förderung. Kostenlose Erstberatung.',
        'subtitle_hero'     => 'Badsanierung in Bad Urach – Qualität, Festpreis, persönliche Betreuung.',
        'intro'             => 'Bad Urach liegt ca. 25 km von unserem Standort entfernt – inmitten der Schwäbischen Alb, bekannt als Kurort und für seinen historischen Stadtkern. Wir sanieren Bäder in Bad Urach mit demselben Qualitätsanspruch wie im Großraum Reutlingen.',
        'stadtteile'        => ['Innenstadt', 'Hengen', 'Seeburg', 'Wittlingen', 'Dettingen', 'Böhringen'],
        'local_context'     => 'Bad Urach und die umliegenden Alborte haben viele Eigenheime und ältere Mehrfamilienhäuser mit Bädern aus den 1970ern. Die ländliche Lage ändert nichts am Anspruch: Festpreis, Termingarantie und alle Gewerke aus einer Hand gelten auch hier.',
        'altersgerecht_text'=> 'In Bad Urach als Kurort ist das Thema altersgerechtes Wohnen besonders präsent. Viele Hausbesitzer möchten so lange wie möglich in ihrem Heim bleiben – ein sicher gestaltetes Bad ist dafür die Grundvoraussetzung. Bodengleiche Dusche, breite Zugänge, Haltesysteme. KfW 455-B: bis zu 6.250 Euro Förderung.',
        'faq' => [
            ['q' => 'Was kostet eine Badsanierung in Bad Urach?', 'a' => 'Richtwert: 12.000–20.000 Euro für eine Komplettsanierung. Festpreis und Termingarantie gelten in Bad Urach uneingeschränkt – genauso wie in Reutlingen. Kostenloses Angebot nach Erstbesichtigung.'],
            ['q' => 'Ist 3D-Planung für eine Badsanierung in Bad Urach inklusive?', 'a' => 'Ja – 3D-Planung ist bei jeder Badsanierung inklusive, unabhängig vom Standort. Sie sehen Ihr neues Bad virtuell, bevor ein Stein bewegt wird.'],
            ['q' => 'Was umfasst ein altersgerechter Badumbau in Bad Urach?', 'a' => 'Bodengleiche Dusche, Haltesysteme, rutschfeste Oberflächen – und auf Wunsch mehr Bewegungsfreiheit durch optimierte Raumaufteilung. Wir planen barrierefrei und ästhetisch.'],
            ['q' => 'Gibt es KfW-Förderung für altersgerechten Badumbau in Bad Urach?', 'a' => 'Ja – KfW 455-B: bis zu 6.250 Euro Zuschuss. Gerade in Bad Urach ist das ein häufiger Wunsch. Kostenlose Beratung beim ersten Termin, inklusive Hinweis auf förderfähige Maßnahmen.'],
        ],
        'bewertungen' => [
            ['name' => 'Wolfgang K.', 'ort' => 'Bad Urach', 'projekt' => 'Komplett-Badsanierung, 6 m²', 'text' => 'Manche Betriebe machen bei der Entfernung Abstriche. Hier nicht. Gleiche Qualität, gleicher Preis wie in Reutlingen.'],
            ['name' => 'Ralf B.', 'ort' => 'Bad Urach-Hengen', 'projekt' => 'Komplett-Badsanierung, 8 m²', 'text' => 'Ich war skeptisch wegen der Entfernung. War unbegründet.'],
            ['name' => 'Helga S.', 'ort' => 'Bad Urach-Seeburg', 'projekt' => 'Altersgerechter Badumbau', 'text' => 'Alles drin was wir brauchen. Sieht trotzdem nicht nach Umbaumaßnahme aus – das war mir wichtig.'],
        ],
    ],
    'balingen' => [
        'description'       => 'Badsanierung in Balingen – Tokmak GmbH, 35 km Entfernung. Alle Gewerke, Festpreis, altersgerechter Badumbau. Kostenlose Erstberatung vor Ort anfragen.',
        'subtitle_hero'     => 'Badsanierung in Balingen – ein Ansprechpartner für alles.',
        'intro'             => 'Balingen im Zollernalbkreis liegt ca. 35 km von unserem Standort entfernt. Als Kreisstadt mit gewachsenem Wohnungsbestand ist Balingen ein fester Teil unseres Einzugsgebiets – wir führen hier regelmäßig Badsanierungen von Grund auf durch.',
        'stadtteile'        => ['Innenstadt', 'Dürrwangen', 'Engstlatt', 'Erzingen', 'Frommern', 'Heselwangen'],
        'local_context'     => 'Balingen und seine Stadtteile haben viele Einfamilienhäuser und Reihenhäuser der Baujahre 1960–1985. Viele dieser Bäder stehen vor einer grundlegenden Erneuerung – technisch und optisch. Die Herausforderungen kennen wir: veraltete Leitungen, Originalfliesen und Grundrisse mit Potenzial.',
        'altersgerecht_text'=> 'Im Zollernalbkreis und in Balingen selbst wohnen viele ältere Eigenheimbesitzer, die ihr Bad sicherer und komfortabler machen wollen. Barrierefreier Umbau ist keine Absicherung für den Notfall – er ist eine Investition in bessere Lebensqualität. KfW 455-B fördert geeignete Maßnahmen mit bis zu 6.250 Euro.',
        'faq' => [
            ['q' => 'Was ist in einem Festpreisangebot für eine Badsanierung in Balingen enthalten?', 'a' => 'Alle Gewerke: Demontage, Sanitär, Elektro, Estrich, Abdichtung, Fliesen und Montage. Ein Angebot, ein Ansprechpartner – keine versteckten Positionen.'],
            ['q' => 'Können Sie in Balingen auch eine Fußbodenheizung einbauen?', 'a' => 'Ja – Fußbodenheizung ist Teil unseres Angebots. Der Aufbau erfolgt normgerecht, koordiniert mit Abdichtung und Estrich. Ideal kombinierbar mit altersgerechtem Umbau.'],
            ['q' => 'Was beinhaltet ein altersgerechter Badumbau in Balingen?', 'a' => 'Bodengleiche Dusche, Haltegriffe, rutschfeste Beläge und ergonomische Planung. Wir achten darauf, dass das Bad komfortabel, sicher und optisch ansprechend wird.'],
            ['q' => 'Gibt es KfW-Förderung für altersgerechten Badumbau in Balingen?', 'a' => 'Ja – KfW 455-B: bis zu 6.250 Euro Zuschuss für förderfähige Maßnahmen. Kostenlose Beratung beim ersten Termin, wir begleiten Sie auch durch den Förderantrag.'],
        ],
        'bewertungen' => [
            ['name' => 'Susanne F.', 'ort' => 'Balingen-Endingen', 'projekt' => 'Komplett-Badsanierung, alle Gewerke', 'text' => 'Sanitär, Elektro, Estrich, Fliesen – hätte ich das selbst koordiniert, wäre ich wahnsinnig geworden.'],
            ['name' => 'Harald K.', 'ort' => 'Balingen-Stadtmitte', 'projekt' => 'Komplett-Badsanierung, 7 m²', 'text' => 'Jede Position einzeln aufgeführt. Ich wusste wofür ich zahle. Ende: wie kalkuliert.'],
            ['name' => 'Ingrid W.', 'ort' => 'Balingen-Frommern', 'projekt' => 'Altersgerechter Badumbau', 'text' => 'War unsicher wegen der Optik. Das Ergebnis hat mich überzeugt.'],
        ],
    ],
    'boeblingen' => [
        'description'       => 'Badsanierung in Böblingen – Tokmak GmbH, 50 km Entfernung. Festpreis, alle Gewerke, altersgerechter Badumbau mit KfW-Förderung. Kostenloses Erstgespräch.',
        'subtitle_hero'     => 'Badsanierung in Böblingen – Qualitätsanspruch ohne Kompromisse.',
        'intro'             => 'Böblingen liegt ca. 50 km von unserem Standort entfernt – am Rand unseres Einzugsgebiets, aber regelmäßig von uns bedient. Die Technologieregion südlich von Stuttgart hat viele Eigenheime und Wohnanlagen mit gehobenem Sanierungsbedarf.',
        'stadtteile'        => ['Innenstadt', 'Dagersheim', 'Hulb', 'Sindelfingen', 'Magstadt', 'Ehningen'],
        'local_context'     => 'Im Landkreis Böblingen gibt es viele Eigentumswohnungen und Einfamilienhäuser aus den 1980er und 1990er Jahren – gut erhalten, aber reif für eine hochwertige Badsanierung. Gehobenem Anspruch begegnen wir mit professioneller Ausführung und einem Ergebnis, das langfristig hält.',
        'altersgerecht_text'=> 'Im Großraum Böblingen-Sindelfingen wohnen viele Familien, in denen ältere Angehörige langfristig eingebunden sind. Ein altersgerechter Umbau des Bads – bodengleiche Dusche, Haltesysteme, ergonomische Gestaltung – steigert Sicherheit und Immobilienwert gleichzeitig. KfW 455-B: bis zu 6.250 Euro Zuschuss.',
        'faq' => [
            ['q' => 'Bieten Sie in Böblingen auch hochwertige Ausstattungen an?', 'a' => 'Ja – von Standard bis Premium. Großformatfliesen, fugenlose Oberflächen, Design-Armaturen – wir beraten zu Lösungen, die zum Budget passen.'],
            ['q' => 'Welche Gewährleistungen gelten für eine Badsanierung in Böblingen?', 'a' => '5 Jahre auf Bauleistungen, 2 Jahre auf Montagearbeiten. Auch nach Projektabschluss direkter Ansprechpartner – kein Callcenter.'],
            ['q' => 'Was umfasst ein altersgerechter Badumbau in Böblingen?', 'a' => 'Bodengleiche Dusche, Haltesysteme, rutschfeste Beläge – und auf Wunsch premium: Großformatfliesen oder fugenlose Oberflächen. Sicher und hochwertig, kein Kompromiss.'],
            ['q' => 'Ist KfW-Förderung für altersgerechten Badumbau in Böblingen möglich?', 'a' => 'Ja – KfW 455-B: bis zu 6.250 Euro Zuschuss. Wir beraten beim ersten kostenlosen Termin, welche Maßnahmen förderfähig sind und wie der Antrag gestellt wird.'],
        ],
        'bewertungen' => [
            ['name' => 'Michael S.', 'ort' => 'Böblingen-Hulb', 'projekt' => 'Badsanierung mit Großformat, ca. 10 m²', 'text' => 'Hohe Erwartungen gehabt. Wurden erfüllt.'],
            ['name' => 'Sabine R.', 'ort' => 'Böblingen-Stadtmitte', 'projekt' => 'Komplett-Badsanierung, 6 m²', 'text' => 'Ehrliches Erstgespräch, faires Angebot. Kein Schönreden, kein Runterhandeln nötig. Das schätze ich.'],
            ['name' => 'Andreas N.', 'ort' => 'Böblingen-Dagersheim', 'projekt' => 'Altersgerechter Badumbau', 'text' => 'Meine Mutter wollte selbstständig bleiben. Das Bad macht das jetzt möglich – und sieht gut aus.'],
        ],
    ],
    'kirchheim' => [
        'description'       => 'Badsanierung in Kirchheim unter Teck – Tokmak GmbH, 35 km Entfernung. Alle Gewerke, Festpreis, Termingarantie. Altersgerechter Badumbau mit KfW-Förderung. Jetzt anfragen.',
        'subtitle_hero'     => 'Komplett-Badsanierung in Kirchheim unter Teck – Festpreis, alle Gewerke aus einer Hand.',
        'intro'             => 'Kirchheim unter Teck liegt ca. 35 km von unserem Standort entfernt – gut erreichbar, regelmäßig von uns bedient. Die Kreisstadt am Fuß der Schwäbischen Alb hat viele Wohngebiete mit Bestandsimmobilien aus den 1960er bis 1980er Jahren, in denen wir Komplett-Badsanierungen von Grund auf durchführen.',
        'stadtteile'        => ['Innenstadt', 'Jesingen', 'Nabern', 'Lindach', 'Ötlingen', 'Kirchheim-Ost'],
        'local_context'     => 'Kirchheim unter Teck hat einen hohen Anteil an Einfamilienhäusern und Reihenhäusern aus der Boomphase der 1960er bis 1980er Jahre. Bäder aus dieser Zeit sind technisch veraltet, oft mit Originalfliesen und veralteter Leitungsführung – der klassische Ausgangspunkt für eine vollständige Neugestaltung. Enge Grundrisse und Altbausubstanz sind für uns Alltag.',
        'altersgerecht_text'=> 'In Kirchheim unter Teck und den umliegenden Gemeinden wohnen viele Eigenheimbesitzer, die ihr Bad langfristig sicher gestalten wollen. Ein altersgerechter Umbau erhöht Wohnwert und Sicherheit zugleich: bodengleiche Dusche statt Wanne, Haltesysteme an der richtigen Stelle, rutschfeste Beläge. KfW-Programm 455-B fördert solche Maßnahmen mit bis zu 6.250 Euro Zuschuss – wir beraten Sie kostenlos beim ersten Termin.',
        'faq' => [
            ['q' => 'Was kostet eine Badsanierung in Kirchheim unter Teck?', 'a' => 'Richtwert: 12.000–20.000 Euro für eine Komplettsanierung (6–10 m²). Exakte Kalkulation nach kostenloser Erstbesichtigung vor Ort – Festpreis, alle Gewerke, keine versteckten Positionen.'],
            ['q' => 'Wie lange dauert eine Badsanierung in Kirchheim unter Teck?', 'a' => 'Typisch 2–3 Wochen für ein Standard-Bad. Den genauen Terminplan erhalten Sie mit dem Festpreisangebot nach der Erstbesichtigung. Termingarantie gilt ab Auftragserteilung.'],
            ['q' => 'Was umfasst ein altersgerechter Badumbau in Kirchheim unter Teck?', 'a' => 'Bodengleiche Dusche mit schwellenlosem Zugang, Haltesysteme, rutschfeste Beläge und ergonomische Anordnung der Sanitärobjekte. Wir planen barrierefrei und ästhetisch – kein Pflegebad-Look.'],
            ['q' => 'Gibt es KfW-Förderung für altersgerechten Umbau in Kirchheim unter Teck?', 'a' => 'Ja – KfW 455-B fördert geeignete Maßnahmen mit bis zu 6.250 Euro Zuschuss. Beim ersten kostenlosen Termin beraten wir, welche Arbeiten förderfähig sind und wie der Antrag läuft.'],
        ],
        'bewertungen' => [
            ['name' => 'Günter R.', 'ort' => 'Kirchheim u. T.-Jesingen', 'projekt' => 'Komplett-Badsanierung, 8 m²', 'text' => 'Haus aus den 70ern, Original-Bad. Ich hatte keinen Plan wie komplex das wird. Wurde mir klar erklärt – alles vorab, keine Überraschungen.'],
            ['name' => 'Karin S.', 'ort' => 'Kirchheim u. T.-Stadtmitte', 'projekt' => 'Badsanierung mit bodengleicher Dusche', 'text' => 'Festpreis angekündigt, Festpreis gehalten. Das ist leider keine Selbstverständlichkeit.'],
            ['name' => 'Werner B.', 'ort' => 'Kirchheim u. T.-Nabern', 'projekt' => 'Altersgerechter Badumbau', 'text' => 'Wir sind beide Mitte 70. Das Bad ist jetzt sicher und sieht trotzdem gut aus. Genau das wollten wir.'],
        ],
    ],
];

$slug = $_GET['stadt'] ?? '';
if (!isset($staedte[$slug])) {
    header('HTTP/1.0 404 Not Found');
    header('Location: /badsanierung');
    exit;
}

$stadt  = $staedte[$slug]['name'];
$km     = $staedte[$slug]['km'];
$daten  = $stadtdaten[$slug];

$pageTitle       = 'Badsanierung ' . $stadt . ' – Festpreis & Termingarantie';
$pageDescription = $daten['description'];
$pageSlug        = 'badsanierung-' . $slug;

// JSON-LD Schema
$faqSchema = [];
foreach ($daten['faq'] as $item) {
    $faqSchema[] = [
        '@type' => 'Question',
        'name'  => $item['q'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => $item['a'],
        ],
    ];
}
$schemaOrg = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'       => 'LocalBusiness',
            '@id'         => SITE_URL . '/#business',
            'name'        => SITE_NAME,
            'url'         => SITE_URL,
            'telephone'   => CONTACT_PHONE,
            'email'       => CONTACT_EMAIL,
            'address'     => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => CONTACT_ADDRESS_STREET,
                'addressLocality' => CONTACT_ADDRESS_CITY,
                'postalCode'      => CONTACT_ADDRESS_ZIP,
                'addressCountry'  => 'DE',
            ],
            'areaServed' => $stadt,
            'description' => 'Komplett-Badsanierung in ' . $stadt . ' und Umgebung – alle Gewerke aus einer Hand, Festpreis, Termingarantie.',
        ],
        [
            '@type'       => 'FAQPage',
            'mainEntity'  => $faqSchema,
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require_once INCLUDES_PATH . '/head-meta.php'; ?>
<script type="application/ld+json"><?php echo json_encode($schemaOrg, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
</head>
<body class="page-badsanierung page-stadtseite">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <section class="page-header">
        <div class="page-header-bg">
            <img src="/assets/img/hero.webp" alt="" class="page-header-bg-image" width="1920" height="1080" loading="eager">
            <div class="page-header-overlay"></div>
        </div>
        <div class="container">
            <span class="page-header-label">Tokmak GmbH <?php if ($km > 0): ?>· <?php echo $km; ?> km von Reutlingen<?php endif; ?></span>
            <h1 class="page-header-title">Badsanierung <?php echo htmlspecialchars($stadt); ?></h1>
            <p class="page-header-subtitle"><?php echo htmlspecialchars($daten['subtitle_hero']); ?></p>
        </div>
    </section>

    <!-- Einleitung -->
    <section class="section">
        <div class="container">
            <div class="content-split">
                <div class="content-split-text">
                    <span class="section-label">Ihr Fachbetrieb in <?php echo htmlspecialchars($stadt); ?></span>
                    <h2 class="section-title">Badsanierung in <?php echo htmlspecialchars($stadt); ?> – mit Festpreis und Termingarantie.</h2>
                    <p><?php echo htmlspecialchars($daten['intro']); ?></p>
                    <ul class="check-list">
                        <li>Komplette Badsanierung aus einer Hand</li>
                        <li>Festpreisangebot – keine Nachkalkulation</li>
                        <li>Termingarantie – typisch 2–4 Wochen</li>
                        <li>3D-Planung inklusive</li>
                        <li>Kostenlose Erstberatung vor Ort in <?php echo htmlspecialchars($stadt); ?></li>
                    </ul>
                    <a href="#anfrage" class="btn btn-primary" style="margin-top: var(--space-lg);">Jetzt Angebot anfordern</a>
                </div>
                <div class="content-split-visual">
                    <img src="/assets/img/4.webp" alt="Badsanierung <?php echo htmlspecialchars($stadt); ?> – Tokmak GmbH" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Lokaler Kontext -->
    <section class="section section-alt">
        <div class="container">
            <div class="content-split content-split-reverse">
                <div class="content-split-text">
                    <span class="section-label">Was wir in <?php echo htmlspecialchars($stadt); ?> kennen</span>
                    <h2 class="section-title">Erfahrung mit der Bausubstanz in <?php echo htmlspecialchars($stadt); ?>.</h2>
                    <p><?php echo htmlspecialchars($daten['local_context']); ?></p>
                    <p style="margin-top: var(--space-md);"><strong>Stadtteile, in denen wir regelmäßig tätig sind:</strong></p>
                    <div class="stadtteile-grid">
                        <?php foreach ($daten['stadtteile'] as $stadtteil): ?>
                            <span class="stadtteil-chip"><?php echo htmlspecialchars($stadtteil); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="content-split-visual">
                    <img src="/assets/img/3.webp" alt="Handwerk in <?php echo htmlspecialchars($stadt); ?> – Tokmak GmbH" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Leistungen -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Leistungsumfang</span>
                <h2 class="section-title">Was wir in <?php echo htmlspecialchars($stadt); ?> für Sie übernehmen</h2>
                <p class="section-subtitle">Alle Arbeiten für Ihr neues Bad – koordiniert und aus einer Hand.</p>
            </div>
            <div class="grid grid-3">
                <div class="card">
                    <h3 class="card-title">Demontage &amp; Entsorgung</h3>
                    <p class="card-text">Fachgerechter Rückbau der alten Sanitärobjekte, Fliesen und Installationen. Saubere Entsorgung inklusive.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Sanitärinstallation</h3>
                    <p class="card-text">Neuverlegung der Wasser- und Abwasserleitungen. Abgestimmt auf Ihre Planung.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Elektroarbeiten</h3>
                    <p class="card-text">Steckdosen, Beleuchtung und Spiegelschrank-Anschlüsse – koordiniert mit der Gesamtplanung.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Estrich &amp; Abdichtung</h3>
                    <p class="card-text">Normgerechte Abdichtung nach DIN 18534. Bodenaufbau für bodengleiche Duschen und Fußbodenheizung.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Fliesen &amp; Oberflächen</h3>
                    <p class="card-text">Klassische Fliesen, Großformat bis 120×120, fugenloses Design – wir beraten und verlegen.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Montage &amp; Übergabe</h3>
                    <p class="card-text">Einbau aller Sanitärobjekte, finale Reinigung und gemeinsame Abnahme. Termingerecht.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Altersgerechter Umbau -->
    <section class="section section-alt" id="altersgerechter-umbau">
        <div class="container">
            <div class="content-split">
                <div class="content-split-text">
                    <span class="section-label">Barrierefreiheit in <?php echo htmlspecialchars($stadt); ?></span>
                    <h2 class="section-title">Altersgerechter Badumbau in <?php echo htmlspecialchars($stadt); ?>.</h2>
                    <p><?php echo htmlspecialchars($daten['altersgerecht_text']); ?></p>
                    <ul class="check-list" style="margin-top: var(--space-md);">
                        <li>Bodengleiche Dusche mit schwellenlosem Zugang</li>
                        <li>Rutschfeste Beläge und Haltesysteme</li>
                        <li>Ergonomische Anordnung der Sanitärobjekte</li>
                        <li>KfW-Förderung bis 6.250 Euro (Programm 455-B)</li>
                        <li>Kostenlose Förderberatung beim Ersttermin</li>
                    </ul>
                    <a href="/altersgerechter-badumbau" class="btn btn-primary" style="margin-top: var(--space-lg);">Mehr zum altersgerechten Badumbau</a>
                </div>
                <div class="content-split-visual">
                    <img src="/assets/img/alter.webp" alt="Altersgerechter Badumbau <?php echo htmlspecialchars($stadt); ?> – Tokmak GmbH" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section" id="faq">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Häufige Fragen</span>
                <h2 class="section-title">Fragen zur Badsanierung &amp; altersgerechtem Umbau in <?php echo htmlspecialchars($stadt); ?></h2>
            </div>
            <div class="faq-list faq-stadtseite">
                <?php foreach ($daten['faq'] as $i => $item): ?>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-<?php echo $i; ?>">
                        <span><?php echo htmlspecialchars($item['q']); ?></span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-<?php echo $i; ?>" hidden>
                        <p><?php echo htmlspecialchars($item['a']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Kundenstimmen -->
    <section class="section section-alt" id="kundenstimmen">
        <div class="container">
            <div class="section-header is-centered">
                <span class="section-label">Kundenstimmen</span>
                <h2 class="section-title">Was Kunden in <?php echo htmlspecialchars($stadt); ?> sagen</h2>
            </div>
            <div class="bewertungen-grid">
                <?php foreach ($daten['bewertungen'] as $bew): ?>
                <div class="bewertung-card">
                    <div class="bewertung-sterne" aria-label="5 von 5 Sternen">★★★★★</div>
                    <p class="bewertung-text"><?php echo htmlspecialchars($bew['text']); ?></p>
                    <div class="bewertung-meta">
                        <span class="bewertung-name"><?php echo htmlspecialchars($bew['name']); ?></span>
                        <span class="bewertung-ort"><?php echo htmlspecialchars($bew['ort']); ?></span>
                        <span class="bewertung-projekt"><?php echo htmlspecialchars($bew['projekt']); ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Stadtseiten-Verlinkung -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Unser Einzugsgebiet</span>
                <h2 class="section-title">Badsanierung in der Region Reutlingen</h2>
                <p class="section-subtitle">Wir sind für Sie in <?php echo htmlspecialchars($stadt); ?> und der gesamten Region tätig.</p>
            </div>
            <div class="stadtseiten-grid">
                <?php foreach ($staedte as $s => $data): ?>
                    <?php if ($s === $slug): ?>
                        <span class="stadtseite-link stadtseite-link-aktiv"><?php echo htmlspecialchars($data['name']); ?></span>
                    <?php else: ?>
                        <a href="/badsanierung-<?php echo $s; ?>" class="stadtseite-link">Badsanierung <?php echo htmlspecialchars($data['name']); ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta-block">
        <div class="container">
            <div class="cta-block cta-block-image" id="cta-block">
                <img src="/assets/img/1.webp" alt="" class="cta-block-bg" loading="lazy" aria-hidden="true">
                <div class="cta-block-overlay"></div>
                <div class="cta-block-content">
                    <h2 class="cta-title">Badsanierung in <?php echo htmlspecialchars($stadt); ?>?</h2>
                    <p class="cta-text">Sprechen Sie mit uns – persönlich, unverbindlich, mit klarer Struktur von Anfang an.</p>
                    <a href="#anfrage" class="btn btn-cta-highlight btn-lg btn-glow">Jetzt unverbindlich anfragen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Inline-Kontaktformular -->
    <section class="section section-alt" id="anfrage">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-sidebar">
                    <div class="contact-sidebar-header">
                        <span class="section-label">Ihr Bad. Ihr Projekt.</span>
                        <h2 class="section-title">Anfrage direkt stellen</h2>
                        <p class="section-subtitle">Beschreiben Sie kurz Ihr Vorhaben. Wir melden uns innerhalb von 48 Stunden.</p>
                    </div>
                </div>
                <div class="contact-form-wrap">
                    <?php include __DIR__ . "/includes/contact-form.php"; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/sticky-cta.php'; ?>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>
<?php require_once INCLUDES_PATH . '/scripts.php'; ?>

<script>
document.querySelectorAll('.faq-question').forEach(function(btn) {
    btn.addEventListener('click', function() {
        var expanded = this.getAttribute('aria-expanded') === 'true';
        var answerId = this.getAttribute('aria-controls');
        var answer = document.getElementById(answerId);
        this.setAttribute('aria-expanded', String(!expanded));
        if (expanded) { answer.hidden = true; } else { answer.hidden = false; }
        this.querySelector('.faq-icon').style.transform = expanded ? '' : 'rotate(180deg)';
    });
});
</script>
</body>
</html>
