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
        'description'   => 'Altersgerechter Badumbau in Reutlingen – Tokmak GmbH aus Lichtenstein. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro, ein Ansprechpartner vor Ort.',
        'subtitle_hero' => 'Sicher duschen ohne Pflegebad-Look. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Mit Sitz in Lichtenstein sind wir Ihr direkter Ansprechpartner für altersgerechte Badumbauten in Reutlingen. Wir tauschen die Wanne gegen eine bodengleiche Dusche, setzen Haltesysteme an die richtige Stelle und planen den Raum so, dass er sicher und schön bleibt. Die KfW fördert solche Umbauten über das Programm 455-B mit bis zu 6.250 Euro Zuschuss. Welche Maßnahmen bei Ihnen förderfähig sind, klären wir kostenlos beim Ersttermin.',
        'stadtteile'    => ['Innenstadt', 'Sondelfingen', 'Betzingen', 'Orschel-Hagen', 'Mittelstadt', 'Pliezhausen'],
        'local_context' => 'Reutlingen hat einen hohen Anteil an Eigenheimen aus den 1960er bis 1980er Jahren. Viele Bewohner sind seit Jahrzehnten in ihrem Haus und wollen genau dort bleiben. Ein sicheres Bad ist dafür die wichtigste Voraussetzung. Enge Grundrisse und Altbausubstanz sind für uns dabei Alltag, keine Ausnahme.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Reutlingen?', 'a' => 'Richtwert: 9.000 bis 18.000 Euro je nach Umfang. Tausch der Wanne gegen eine bodengleiche Dusche liegt am unteren Ende, ein kompletter barrierefreier Umbau am oberen. Den Festpreis erhalten Sie nach kostenloser Erstbesichtigung, alle Gewerke inklusive, keine versteckten Positionen.'],
            ['q' => 'Was ist bei einem altersgerechten Badumbau inbegriffen?', 'a' => 'Bodengleiche Dusche mit schwellenlosem Zugang, rutschfeste Beläge, Haltegriffe an Wand und Dusche, ergonomisch angeordnete Sanitärobjekte. Auf Wunsch ein breiterer Türdurchgang. Wir planen so, dass das Bad sicher ist und trotzdem hochwertig aussieht.'],
            ['q' => 'Gibt es KfW-Förderung für den Badumbau in Reutlingen?', 'a' => 'Ja. KfW-Programm 455-B fördert altersgerechte Umbaumaßnahmen mit bis zu 6.250 Euro Zuschuss. Wir beraten Sie kostenlos beim ersten Termin, welche Arbeiten förderfähig sind und wie der Antrag läuft.'],
            ['q' => 'Wie lange dauert der Umbau in Reutlingen?', 'a' => 'Reiner Duschtausch ohne Vollsanierung: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. Den genauen Terminplan erhalten Sie mit dem Festpreisangebot.'],
        ],
        'bewertungen' => [
            ['name' => 'Monika H.', 'ort' => 'Reutlingen-Orschel-Hagen', 'projekt' => 'Altersgerechter Badumbau, ca. 6 m²', 'text' => 'Sicherer duschen ohne Pflegebad-Look. Genau das wollte ich. Hat geklappt, und der Preis stand vorher fest.'],
            ['name' => 'Stefan R.', 'ort' => 'Reutlingen-Betzingen', 'projekt' => 'Wannentausch gegen bodengleiche Dusche', 'text' => 'Die Wanne raus, schwellenlose Dusche rein. In einer Woche fertig. Bei der KfW-Förderung haben sie mir alles erklärt.'],
            ['name' => 'Jürgen K.', 'ort' => 'Reutlingen-Südstadt', 'projekt' => 'Barrierefreier Umbau, 7 m²', 'text' => 'Haltegriffe dezent, Boden rutschfest, sieht nicht nach Umbau aus. Festpreis gehalten.'],
        ],
    ],
    'tuebingen' => [
        'description'   => 'Altersgerechter Badumbau in Tübingen – Tokmak GmbH, 15 km entfernt. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro. Kostenlose Beratung vor Ort.',
        'subtitle_hero' => 'Barrierefrei und ästhetisch zugleich. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Tübingen liegt nur 15 km von unserem Standort entfernt, das bedeutet kurze Wege und schnelle Ersttermine. Wir bauen Bäder barrierefrei um, von der bodengleichen Dusche über Klappsitze bis zu Haltegriffen an der richtigen Stelle. Dabei kennen wir Gründerzeit-Altbau in der Weststadt genauso wie Neubauten in Lustnau. Die KfW fördert geeignete Maßnahmen über Programm 455-B mit bis zu 6.250 Euro, durch den Antrag begleiten wir Sie.',
        'stadtteile'    => ['Weststadt', 'Südstadt', 'Lustnau', 'Derendingen', 'Weilheim', 'Pfrondorf'],
        'local_context' => 'In Tübingen wohnen viele Paare und Familien, die ihre Angehörigen langfristig einbinden oder selbst sicher wohnen wollen. Gründerzeitbäder mit unregelmäßigen Wandstärken und alten Leitungen sind dabei eine eigene Herausforderung. Wir lösen das mit sorgfältiger Bestandsaufnahme statt mit Schätzungen.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Tübingen?', 'a' => 'Richtwert: 9.000 bis 18.000 Euro je nach Umfang. In Tübinger Altbauten kann eine neue Leitungsführung nötig werden, das besprechen wir vorab transparent. Festpreis nach kostenloser Erstbesichtigung, alle Gewerke inklusive.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche mit schwellenlosem Zugang, Haltegriffe, rutschfeste Beläge und auf Wunsch ein breiterer Türdurchgang für Rollatornutzung. Wir planen barrierefrei und ästhetisch, damit das Bad langfristig komfortabel bleibt.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Tübingen?', 'a' => 'Ja. KfW 455-B fördert altersgerechte Maßnahmen mit bis zu 6.250 Euro Zuschuss. Beim ersten kostenlosen Termin klären wir, welche Arbeiten förderfähig sind und was der Antrag erfordert.'],
            ['q' => 'Wie lange dauert der Umbau in Tübingen?', 'a' => 'Reiner Duschtausch: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. In Gründerzeit-Altbau kann es etwas länger dauern, das steht im Terminplan zum Festpreisangebot.'],
        ],
        'bewertungen' => [
            ['name' => 'Eva S.', 'ort' => 'Tübingen-Lustnau', 'projekt' => 'Altersgerechter Badumbau, 7 m²', 'text' => 'Wir wollten ein sicheres Bad, kein Krankenhaus. Haltegriffe sind kaum zu sehen, die Dusche ist schwellenlos. Genau richtig.'],
            ['name' => 'Claudia M.', 'ort' => 'Tübingen-Derendingen', 'projekt' => 'Barrierefreier Umbau im Altbau, ca. 5 m²', 'text' => 'Altbau aus den 60ern, unregelmäßige Wände. Ich hatte Angst vor versteckten Kosten. Alles war vorher besprochen, der Preis hat gestimmt.'],
            ['name' => 'Thomas B.', 'ort' => 'Tübingen-Weststadt', 'projekt' => 'Wannentausch und Haltesysteme', 'text' => 'Die 3D-Ansicht hat mir vorher gezeigt, wie das Bad wird. Das Ergebnis hat das gehalten. Bei der KfW haben sie mitgedacht.'],
        ],
    ],
    'stuttgart' => [
        'description'   => 'Altersgerechter Badumbau in Stuttgart – Tokmak GmbH, 40 km entfernt. Bodengleiche Dusche, Haltesysteme, alle Gewerke. KfW-Förderung bis 6.250 Euro, Festpreis.',
        'subtitle_hero' => 'Barrierefrei wohnen ohne Kompromiss bei der Optik. Festpreis, KfW-Förderung.',
        'intro'         => 'Stuttgart liegt 40 km von unserem Standort entfernt, wir sind regelmäßig in der Landeshauptstadt und im Umland im Einsatz. Gerade in Eigentumswohnungen, in denen die Eigentümer selbst älter werden oder Elternteile einziehen, bauen wir Bäder barrierefrei um. Bodengleiche Dusche, ergonomische Armaturen, rutschfeste Großformatfliesen. Mit KfW-Förderung über Programm 455-B (bis zu 6.250 Euro) lässt sich das oft deutlich günstiger realisieren.',
        'stadtteile'    => ['Möhringen', 'Vaihingen', 'Plieningen', 'Degerloch', 'Sillenbuch', 'Bad Cannstatt'],
        'local_context' => 'Stuttgart-Süd und die Halbhöhenlagen haben viele Eigentumswohnungen aus der Nachkriegszeit. In Mehrparteienhäusern ist die Koordination zwischen Eigentümer, Verwaltung und Handwerkern oft aufwendig. Genau das übernehmen wir: ein Ansprechpartner, ein Zeitplan, ein Angebot.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Stuttgart?', 'a' => 'Richtwert: 9.000 bis 19.000 Euro je nach Ausstattung. In Eigentumswohnungen kommt ein gewisser Koordinationsaufwand hinzu, den wir komplett übernehmen. Festpreis nach kostenloser Erstbesichtigung, Anfahrt transparent ausgewiesen.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche, Haltesysteme, rutschfeste Fliesen und ergonomische Planung. Bei Bedarf eine Türverbreiterung für Rollatornutzung. Wir achten darauf, dass das Ergebnis hochwertig aussieht, nicht nach Umbau.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Stuttgart?', 'a' => 'Ja. KfW 455-B: bis zu 6.250 Euro Zuschuss für förderfähige Maßnahmen. Beim ersten kostenlosen Termin beraten wir, was bei Ihrem Bad konkret gefördert werden kann.'],
            ['q' => 'Wie lange dauert der Umbau in Stuttgart?', 'a' => 'Reiner Duschtausch: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. In Mehrparteienhäusern halten wir die Bauzeit ein, damit Mitbewohner möglichst wenig beeinträchtigt werden.'],
        ],
        'bewertungen' => [
            ['name' => 'Petra N.', 'ort' => 'Stuttgart-Vaihingen', 'projekt' => 'Altersgerechter Badumbau, 6 m²', 'text' => 'Wir wollten kein Pflegebad. Ist keins geworden. Schwellenlose Dusche, schöne Fliesen, sicher.'],
            ['name' => 'Markus F.', 'ort' => 'Stuttgart-Bad Cannstatt', 'projekt' => 'Barrierefreier Umbau in der ETW, 9 m²', 'text' => 'In der Eigentumswohnung musste vieles abgestimmt werden. Ein Ansprechpartner hat alles geregelt. Endpreis wie kalkuliert.'],
            ['name' => 'Klaus W.', 'ort' => 'Stuttgart-Möhringen', 'projekt' => 'Wannentausch mit Haltesystemen', 'text' => 'Drei Angebote verglichen. Hier war jede Position einzeln aufgeführt, auch die KfW-fähigen Posten. Sauber.'],
        ],
    ],
    'esslingen' => [
        'description'   => 'Altersgerechter Badumbau in Esslingen am Neckar – Tokmak GmbH, 45 km entfernt. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro.',
        'subtitle_hero' => 'Sicher und komfortabel im eigenen Bad. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Esslingen am Neckar liegt rund 45 km von unserem Standort entfernt. In dieser historisch gewachsenen Stadt bauen wir Bäder barrierefrei um, mit demselben Qualitätsanspruch wie im Kerngebiet. Bodengleiche Dusche, Haltesysteme, rutschfeste Beläge, gerade in älteren Grundrissen oft eine Herausforderung, aber immer lösbar. Die KfW fördert geeignete Maßnahmen über Programm 455-B mit bis zu 6.250 Euro Zuschuss.',
        'stadtteile'    => ['Innenstadt', 'Berkheim', 'Zell', 'Kennenburg', 'Mettingen', 'Wäldenbronn'],
        'local_context' => 'Esslingen hat eine der ältesten Altstädte Baden-Württembergs. Viele Gebäude haben komplexe Bausubstanz, enge Grundrisse und historische Installationen. Ein altersgerechter Umbau braucht hier eine sorgfältige Bestandsaufnahme vor Ort, und genau das ist unser Standard.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Esslingen?', 'a' => 'Richtwert: 9.000 bis 18.000 Euro je nach Umfang. In Esslinger Altbauten kann zusätzlicher Aufwand entstehen, den wir nach der Bestandsaufnahme klar benennen. Festpreis nach kostenloser Erstbesichtigung, alle Gewerke inklusive.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche, Haltegriffe, rutschfeste Beläge und ergonomisch angeordnete Sanitärobjekte. Wir planen so, dass das Bad funktional und ästhetisch bleibt, kein Pflegeheim-Charakter.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Esslingen?', 'a' => 'Ja. KfW 455-B: bis zu 6.250 Euro Zuschuss. Beim ersten kostenlosen Termin beraten wir, welche Maßnahmen konkret förderfähig sind.'],
            ['q' => 'Wie lange dauert der Umbau in Esslingen?', 'a' => 'Reiner Duschtausch: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. In komplexer Altbausubstanz kann es etwas länger dauern, das steht im Terminplan.'],
        ],
        'bewertungen' => [
            ['name' => 'Gabi R.', 'ort' => 'Esslingen-Innenstadt', 'projekt' => 'Altersgerechter Badumbau, ca. 6 m²', 'text' => 'Haltegriffe dezent integriert, schwellenlose Dusche, moderne Fliesen. Sieht nicht nach Umbau aus.'],
            ['name' => 'Andrea S.', 'ort' => 'Esslingen-Berkheim', 'projekt' => 'Barrierefreier Umbau im Altbau, ca. 6 m²', 'text' => 'Alte Bausubstanz, gemauerte Wände, da kommt immer was nach, dachte ich. Kam nicht. Preis wie vereinbart.'],
            ['name' => 'Michael T.', 'ort' => 'Esslingen-Zell', 'projekt' => 'Wannentausch und Haltesysteme, 8 m²', 'text' => 'Drei Angebote eingeholt. Dieses war das transparenteste, auch beim Thema KfW. Endpreis wie kalkuliert.'],
        ],
    ],
    'nuertingen' => [
        'description'   => 'Altersgerechter Badumbau in Nürtingen – Tokmak GmbH, 20 km entfernt. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro, Beratung vor Ort.',
        'subtitle_hero' => 'Investition in selbstbestimmtes Wohnen. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Nürtingen am Neckar liegt rund 20 km von unserem Standort entfernt, kurze Wege und schnelle Ersttermine inklusive. In der Mittelstadt mit ihren vielen Einfamilienhäusern bauen wir Bäder altersgerecht um: bodengleiche Dusche statt Badewanne, ergonomische Armaturen, mehr Bewegungsfreiheit. Die KfW-Förderung über Programm 455-B (bis zu 6.250 Euro) macht die Maßnahme oft deutlich günstiger, als viele zunächst denken.',
        'stadtteile'    => ['Innenstadt', 'Neckarhausen', 'Roßdorf', 'Reudern', 'Hardt', 'Zizishausen'],
        'local_context' => 'Nürtingen hat viele Eigenheime aus den 1970er und 1980er Jahren, in denen die Eigentümer langfristig wohnen wollen. Ein altersgerechter Umbau ist hier eine Investition in die Zukunft. Die Bestandsaufnahme vor Ort zeigt regelmäßig, dass sich mehr lohnt als der reine Wannentausch.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Nürtingen?', 'a' => 'Richtwert: 9.000 bis 17.000 Euro je nach Umfang. Wannentausch gegen bodengleiche Dusche liegt am unteren Ende. Festpreis nach kostenloser Erstbesichtigung, transparent aufgeschlüsselt, alle Gewerke inklusive.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche statt Badewanne, Haltesysteme, rutschfeste Oberflächen und mehr Bewegungsfreiheit. Wir planen individuell: sicher, komfortabel und optisch ansprechend.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Nürtingen?', 'a' => 'Ja. KfW 455-B fördert geeignete Maßnahmen mit bis zu 6.250 Euro Zuschuss. Beim ersten kostenlosen Termin beraten wir, was in Ihrer Situation förderfähig ist.'],
            ['q' => 'Wie lange dauert der Umbau in Nürtingen?', 'a' => 'Reiner Duschtausch: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. Auch kleine Bäder unter 5 m² bauen wir komplett um, kein Mindestumfang.'],
        ],
        'bewertungen' => [
            ['name' => 'Frank H.', 'ort' => 'Nürtingen-Stadtmitte', 'projekt' => 'Altersgerechter Badumbau, 5 m²', 'text' => 'Das Angebot war transparent aufgebaut, auch beim KfW-Zuschuss. Für mich war das der entscheidende Punkt.'],
            ['name' => 'Sandra L.', 'ort' => 'Nürtingen-Neckarhausen', 'projekt' => 'Wannentausch gegen bodengleiche Dusche, ca. 6 m²', 'text' => 'Fertig nach 7 Tagen. Schwellenlos, rutschfest, sicher. Ich habe nichts nachfassen müssen.'],
            ['name' => 'Thomas K.', 'ort' => 'Nürtingen-Oberensingen', 'projekt' => 'Barrierefreier Umbau, alle Gewerke', 'text' => 'Ein Ansprechpartner für Sanitär, Elektro, Estrich und Fliesen. Bei der Förderung haben sie mitgedacht.'],
        ],
    ],
    'metzingen' => [
        'description'   => 'Altersgerechter Badumbau in Metzingen – Tokmak GmbH, 15 km entfernt. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro, Beratung vor Ort.',
        'subtitle_hero' => 'Mehr Sicherheit und Wohnwert zugleich. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Metzingen liegt nur 15 km von unserem Standort entfernt, das bedeutet kurze Wege und direkte Kommunikation. In den gewachsenen Wohnvierteln der Stadt an der Voralb bauen wir Bäder altersgerecht um: bodengleiche Dusche, Haltegriffe an der richtigen Stelle, rutschfeste Beläge. So steigen Sicherheit und Wohnwert gleichzeitig. Die KfW übernimmt über Programm 455-B bis zu 6.250 Euro der Kosten.',
        'stadtteile'    => ['Innenstadt', 'Neuhausen', 'Neugreuth', 'Ermstal-Viertel', 'Voralb-Siedlung'],
        'local_context' => 'Metzingen hat viele Eigenheime und Doppelhaushälften der Baujahre 1970 bis 1990. Die Bäder aus dieser Zeit sind oft nicht nur technisch veraltet, sondern auch unpraktisch für das Wohnen im Alter. Ein altersgerechter Umbau löst beides in einem Schritt.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Metzingen?', 'a' => 'Richtwert: 9.000 bis 17.000 Euro je nach Umfang. Den Festpreis erhalten Sie nach kostenloser Erstbesichtigung, alle Gewerke inklusive, keine versteckten Positionen.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche mit schwellenlosem Zugang, Haltegriffe, rutschfeste Beläge und ergonomische Gestaltung. Auf Wunsch auch fugenloses Design, sicher und pflegeleicht.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Metzingen?', 'a' => 'Ja. KfW 455-B: bis zu 6.250 Euro Zuschuss. Beim ersten kostenlosen Termin beraten wir, welche Maßnahmen förderfähig sind und wie der Antrag läuft.'],
            ['q' => 'Wie lange dauert der Umbau in Metzingen?', 'a' => 'Reiner Duschtausch: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. Den genauen Terminplan erhalten Sie mit dem Festpreisangebot.'],
        ],
        'bewertungen' => [
            ['name' => 'Ute K.', 'ort' => 'Metzingen-Glems', 'projekt' => 'Altersgerechter Badumbau, ca. 6 m²', 'text' => 'Modern, sicher, kein Umbau-Charakter. Genau was ich gesucht hatte.'],
            ['name' => 'Heike M.', 'ort' => 'Metzingen-Neuhausen', 'projekt' => 'Wannentausch und Haltesysteme, 7 m²', 'text' => 'Nichts musste ich selbst koordinieren. Bad fertig in gut zwei Wochen, KfW-Antrag mit Hilfe gestellt.'],
            ['name' => 'Bernd S.', 'ort' => 'Metzingen-Stadtmitte', 'projekt' => 'Barrierefreier Umbau mit 3D-Planung', 'text' => 'Ohne die 3D-Ansicht hätte ich das so nicht entschieden. So konnte ich das Bad wirklich vorher sehen.'],
        ],
    ],
    'hechingen' => [
        'description'   => 'Altersgerechter Badumbau in Hechingen – Tokmak GmbH, 25 km entfernt. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro, Beratung vor Ort.',
        'subtitle_hero' => 'So lange wie möglich im eigenen Heim. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Hechingen am Fuße der Burg Hohenzollern liegt rund 25 km von unserem Standort entfernt. In der Stadt im Zollernalbkreis bauen wir Bäder altersgerecht um, eine der wirkungsvollsten Maßnahmen für selbstbestimmtes Wohnen im Alter. Bodengleiche Dusche, Haltesysteme, mehr Bewegungsfläche, das macht den Unterschied. Die KfW fördert solche Umbauten über Programm 455-B mit bis zu 6.250 Euro Zuschuss.',
        'stadtteile'    => ['Innenstadt', 'Schlatt', 'Weilheim', 'Bechtoldsweiler', 'Sickingen'],
        'local_context' => 'Hechingen und die Albortschaften haben viele Einfamilien- und Reihenhäuser der Baujahre 1960 bis 1985. Viele Bewohner wollen ihr Eigenheim langfristig behalten. Ein sicheres Bad mit schwellenloser Dusche ist dafür oft der entscheidende erste Schritt.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Hechingen?', 'a' => 'Richtwert: 9.000 bis 16.000 Euro für ein Standard-Bad. Exakte Kalkulation nach kostenloser Erstbesichtigung, Festpreis, alle Gewerke, transparent aufgeschlüsselt.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche statt Badewanne, Haltesysteme, rutschfeste Oberflächen und ergonomische Anordnung. Wir sorgen dafür, dass das Ergebnis hochwertig aussieht, nicht nach Umbau.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Hechingen?', 'a' => 'Ja. KfW 455-B fördert mit bis zu 6.250 Euro. Beim ersten kostenlosen Termin beraten wir, welche Maßnahmen förderfähig sind und wie Sie den Zuschuss beantragen.'],
            ['q' => 'Wie lange dauert der Umbau in Hechingen?', 'a' => 'Reiner Duschtausch: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. Den Terminplan erhalten Sie mit dem Festpreisangebot.'],
        ],
        'bewertungen' => [
            ['name' => 'Renate F.', 'ort' => 'Hechingen-Stadtmitte', 'projekt' => 'Altersgerechter Badumbau, ca. 6 m²', 'text' => 'Wir sind beide Ende 60. Das Bad ist jetzt so, wie wir es brauchen, und sieht trotzdem schön aus.'],
            ['name' => 'Dieter W.', 'ort' => 'Hechingen-Stetten', 'projekt' => 'Wannentausch gegen bodengleiche Dusche, ca. 8 m²', 'text' => 'Schwellenlose Dusche, ruhige Optik, wenig Fugen. Wollten wir lange. Hat geklappt, Preis stand fest.'],
            ['name' => 'Martin B.', 'ort' => 'Hechingen-Schlatt', 'projekt' => 'Barrierefreier Umbau, 6 m²', 'text' => 'Ich bin selbst Handwerker. Das Angebot war fair, keine versteckten Positionen. Bei der KfW haben sie geholfen.'],
        ],
    ],
    'rottenburg' => [
        'description'   => 'Altersgerechter Badumbau in Rottenburg am Neckar – Tokmak GmbH, 20 km entfernt. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro.',
        'subtitle_hero' => 'Sicheres Bad ist gutes Design. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Rottenburg am Neckar liegt rund 20 km von unserem Standort entfernt. In der Domstadt bauen wir Bäder altersgerecht um, ob in historischer Altbausubstanz oder in modernen Wohnanlagen. Bodengleiche Duschen, Haltegriffe und ergonomische Anordnungen sind dabei keine Notlösung für Pflegebedürftige, sie sind schlicht gutes Design. Die KfW fördert solche Umbauten über Programm 455-B mit bis zu 6.250 Euro Zuschuss.',
        'stadtteile'    => ['Innenstadt', 'Ehingen', 'Wurmlingen', 'Ergenzingen', 'Kiebingen', 'Weiler'],
        'local_context' => 'Rottenburg hat viele Eigenheimbesitzer, die ihr Haus nicht verlassen, aber ihr Bad sicherer machen wollen. Die Mischung aus historischer Altbausubstanz und Wohngebieten der 1960er bis 1980er Jahre erfordert für jeden Umbau eine eigene Planung, die wir mit Bestandsaufnahme vor Ort beginnen.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Rottenburg?', 'a' => 'Richtwert: 9.000 bis 18.000 Euro je nach Umfang. Wannentausch gegen bodengleiche Dusche liegt am unteren Ende. Festpreis nach kostenloser Erstbesichtigung, alle Gewerke inklusive.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche mit schwellenlosem Zugang, Haltegriffe, rutschfeste Beläge, ergonomische Anordnung. Wir planen so, dass das Bad sicher ist und trotzdem hochwertig aussieht.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Rottenburg?', 'a' => 'Ja. KfW 455-B: bis zu 6.250 Euro Zuschuss. Kostenlose Beratung beim ersten Termin, wir erklären, welche Maßnahmen förderfähig sind und wie der Antrag läuft.'],
            ['q' => 'Wie lange dauert der Umbau in Rottenburg?', 'a' => 'Reiner Duschtausch: 5 bis 7 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. Auch im bewohnten Objekt mit klarem Ablaufplan möglich.'],
        ],
        'bewertungen' => [
            ['name' => 'Klaus M.', 'ort' => 'Rottenburg-Stadtmitte', 'projekt' => 'Wannentausch gegen bodengleiche Dusche', 'text' => 'Wollte wissen, was es baulich bedeutet, die Wanne rauszuwerfen. Hat mir jemand erklärt, ohne Fachbegriff-Gebrabbel.'],
            ['name' => 'Sandra W.', 'ort' => 'Rottenburg-Wurmlingen', 'projekt' => 'Barrierefreier Umbau im bewohnten Objekt', 'text' => 'Wir haben durchgewohnt. Es gab einen Ablaufplan, der zeigte, wann was passiert. Das hat die Sache erträglich gemacht.'],
            ['name' => 'Petra H.', 'ort' => 'Rottenburg-Seebronn', 'projekt' => 'Altersgerechter Badumbau, ca. 7 m²', 'text' => 'Fertig in zwei Wochen, sicher und schön. Bei der KfW-Förderung haben sie uns durch den Antrag begleitet.'],
        ],
    ],
    'bad-urach' => [
        'description'   => 'Altersgerechter Badumbau in Bad Urach – Tokmak GmbH, 25 km entfernt. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro, Beratung vor Ort.',
        'subtitle_hero' => 'Selbstbestimmt wohnen im eigenen Haus. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Bad Urach liegt rund 25 km von unserem Standort entfernt, inmitten der Schwäbischen Alb. Im bekannten Kurort ist das Thema altersgerechtes Wohnen besonders präsent: Viele Hausbesitzer möchten so lange wie möglich in ihrem Heim bleiben. Ein sicher gestaltetes Bad mit bodengleicher Dusche, breiten Zugängen und Haltesystemen ist dafür die Grundvoraussetzung. Die KfW fördert das über Programm 455-B mit bis zu 6.250 Euro.',
        'stadtteile'    => ['Innenstadt', 'Hengen', 'Seeburg', 'Wittlingen', 'Dettingen', 'Böhringen'],
        'local_context' => 'Bad Urach und die umliegenden Alborte haben viele Eigenheime und ältere Mehrfamilienhäuser mit Bädern aus den 1970ern. Die ländliche Lage ändert nichts am Anspruch: Festpreis, Termingarantie und alle Gewerke aus einer Hand gelten hier genauso wie in Reutlingen.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Bad Urach?', 'a' => 'Richtwert: 9.000 bis 17.000 Euro je nach Umfang. Festpreis und Termingarantie gelten in Bad Urach uneingeschränkt, genauso wie in Reutlingen. Kostenloses Angebot nach Erstbesichtigung.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche, Haltesysteme, rutschfeste Oberflächen und auf Wunsch mehr Bewegungsfreiheit durch optimierte Raumaufteilung. Wir planen barrierefrei und ästhetisch.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Bad Urach?', 'a' => 'Ja. KfW 455-B: bis zu 6.250 Euro Zuschuss. Gerade in Bad Urach ist das ein häufiger Wunsch. Kostenlose Beratung beim ersten Termin, inklusive Hinweis auf förderfähige Maßnahmen.'],
            ['q' => 'Wie lange dauert der Umbau in Bad Urach?', 'a' => 'Reiner Duschtausch: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. Den Terminplan erhalten Sie mit dem Festpreisangebot.'],
        ],
        'bewertungen' => [
            ['name' => 'Helga S.', 'ort' => 'Bad Urach-Seeburg', 'projekt' => 'Altersgerechter Badumbau, ca. 6 m²', 'text' => 'Alles drin, was wir brauchen. Sieht trotzdem nicht nach Umbaumaßnahme aus, das war mir wichtig.'],
            ['name' => 'Wolfgang K.', 'ort' => 'Bad Urach', 'projekt' => 'Wannentausch gegen bodengleiche Dusche, 6 m²', 'text' => 'Manche Betriebe machen bei der Entfernung Abstriche. Hier nicht. Gleiche Qualität, gleicher Preis wie in Reutlingen.'],
            ['name' => 'Ralf B.', 'ort' => 'Bad Urach-Hengen', 'projekt' => 'Barrierefreier Umbau, 8 m²', 'text' => 'War skeptisch wegen der Entfernung, war unbegründet. Bei der KfW haben sie alles erklärt.'],
        ],
    ],
    'balingen' => [
        'description'   => 'Altersgerechter Badumbau in Balingen – Tokmak GmbH, 35 km entfernt. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro, Beratung vor Ort.',
        'subtitle_hero' => 'Mehr Lebensqualität, kein Notnagel. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Balingen im Zollernalbkreis liegt rund 35 km von unserem Standort entfernt und ist fester Teil unseres Einzugsgebiets. In der Kreisstadt mit ihrem gewachsenen Wohnungsbestand bauen wir Bäder altersgerecht um. Barrierefreier Umbau ist dabei keine Absicherung für den Notfall, sondern eine Investition in bessere Lebensqualität: bodengleiche Dusche, Haltegriffe, mehr Sicherheit. Die KfW fördert geeignete Maßnahmen über Programm 455-B mit bis zu 6.250 Euro.',
        'stadtteile'    => ['Innenstadt', 'Dürrwangen', 'Engstlatt', 'Erzingen', 'Frommern', 'Heselwangen'],
        'local_context' => 'Balingen und seine Stadtteile haben viele Einfamilien- und Reihenhäuser der Baujahre 1960 bis 1985. Viele ältere Eigenheimbesitzer wollen ihr Bad sicherer und komfortabler machen, ohne dabei auf Optik zu verzichten. Genau darauf richten wir die Planung aus.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Balingen?', 'a' => 'Richtwert: 9.000 bis 17.000 Euro je nach Umfang. Alle Gewerke in einem Festpreis, ein Ansprechpartner, keine versteckten Positionen. Kalkulation nach kostenloser Erstbesichtigung.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche, Haltegriffe, rutschfeste Beläge und ergonomische Planung. Auf Wunsch kombinierbar mit Fußbodenheizung. Wir achten darauf, dass das Bad komfortabel, sicher und optisch ansprechend wird.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Balingen?', 'a' => 'Ja. KfW 455-B: bis zu 6.250 Euro Zuschuss für förderfähige Maßnahmen. Kostenlose Beratung beim ersten Termin, wir begleiten Sie auch durch den Förderantrag.'],
            ['q' => 'Wie lange dauert der Umbau in Balingen?', 'a' => 'Reiner Duschtausch: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. Den genauen Terminplan erhalten Sie mit dem Festpreisangebot.'],
        ],
        'bewertungen' => [
            ['name' => 'Ingrid W.', 'ort' => 'Balingen-Frommern', 'projekt' => 'Altersgerechter Badumbau, ca. 6 m²', 'text' => 'War unsicher wegen der Optik. Das Ergebnis hat mich überzeugt. Sicher und schön zugleich.'],
            ['name' => 'Susanne F.', 'ort' => 'Balingen-Endingen', 'projekt' => 'Barrierefreier Umbau, alle Gewerke', 'text' => 'Sanitär, Elektro, Estrich, Fliesen, hätte ich das selbst koordiniert, wäre ich wahnsinnig geworden. Ein Ansprechpartner für alles.'],
            ['name' => 'Harald K.', 'ort' => 'Balingen-Stadtmitte', 'projekt' => 'Wannentausch und Haltesysteme, 7 m²', 'text' => 'Jede Position einzeln aufgeführt, auch die KfW-fähigen Posten. Ich wusste, wofür ich zahle. Ende: wie kalkuliert.'],
        ],
    ],
    'boeblingen' => [
        'description'   => 'Altersgerechter Badumbau in Böblingen – Tokmak GmbH, 50 km entfernt. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro, Beratung vor Ort.',
        'subtitle_hero' => 'Sicherheit und Immobilienwert in einem. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Böblingen liegt rund 50 km von unserem Standort entfernt, am Rand unseres Einzugsgebiets, aber regelmäßig von uns bedient. Im Großraum Böblingen-Sindelfingen wohnen viele Familien, in denen ältere Angehörige langfristig eingebunden sind. Ein altersgerechter Umbau mit bodengleicher Dusche, Haltesystemen und ergonomischer Gestaltung steigert Sicherheit und Immobilienwert gleichzeitig. Die KfW fördert das über Programm 455-B mit bis zu 6.250 Euro Zuschuss.',
        'stadtteile'    => ['Innenstadt', 'Dagersheim', 'Hulb', 'Sindelfingen', 'Magstadt', 'Ehningen'],
        'local_context' => 'Im Landkreis Böblingen gibt es viele gut erhaltene Eigentumswohnungen und Einfamilienhäuser aus den 1980er und 1990er Jahren. Der Anspruch ist gehoben, und genau so führen wir den Umbau aus: hochwertige Materialien, saubere Ausführung und ein Ergebnis, das langfristig hält.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Böblingen?', 'a' => 'Richtwert: 9.000 bis 20.000 Euro je nach Ausstattung. Von Standard bis Premium mit Großformatfliesen oder fugenlosen Oberflächen. Festpreis nach kostenloser Erstbesichtigung, Anfahrt transparent ausgewiesen.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche, Haltesysteme, rutschfeste Beläge und auf Wunsch Premium-Ausstattung wie Großformatfliesen oder fugenlose Oberflächen. Sicher und hochwertig, kein Kompromiss.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Böblingen?', 'a' => 'Ja. KfW 455-B: bis zu 6.250 Euro Zuschuss. Beim ersten kostenlosen Termin beraten wir, welche Maßnahmen förderfähig sind und wie der Antrag gestellt wird.'],
            ['q' => 'Wie lange dauert der Umbau in Böblingen?', 'a' => 'Reiner Duschtausch: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. Den Terminplan erhalten Sie mit dem Festpreisangebot.'],
        ],
        'bewertungen' => [
            ['name' => 'Andreas N.', 'ort' => 'Böblingen-Dagersheim', 'projekt' => 'Altersgerechter Badumbau, ca. 7 m²', 'text' => 'Meine Mutter wollte selbstständig bleiben. Das Bad macht das jetzt möglich, und sieht gut aus.'],
            ['name' => 'Michael S.', 'ort' => 'Böblingen-Hulb', 'projekt' => 'Barrierefreier Umbau mit Großformat, ca. 10 m²', 'text' => 'Hohe Erwartungen gehabt. Wurden erfüllt. Sicher und trotzdem edel.'],
            ['name' => 'Sabine R.', 'ort' => 'Böblingen-Stadtmitte', 'projekt' => 'Wannentausch und Haltesysteme, 6 m²', 'text' => 'Ehrliches Erstgespräch, faires Angebot, klare Aussage zur KfW-Förderung. Das schätze ich.'],
        ],
    ],
    'kirchheim' => [
        'description'   => 'Altersgerechter Badumbau in Kirchheim unter Teck – Tokmak GmbH, 35 km entfernt. Bodengleiche Dusche, Haltesysteme, Festpreis. KfW-Förderung bis 6.250 Euro.',
        'subtitle_hero' => 'Wohnwert und Sicherheit zugleich. Festpreis, Termingarantie, KfW-Förderung.',
        'intro'         => 'Kirchheim unter Teck liegt rund 35 km von unserem Standort entfernt, gut erreichbar und regelmäßig von uns bedient. In der Kreisstadt am Fuß der Schwäbischen Alb bauen wir Bäder altersgerecht um: bodengleiche Dusche statt Wanne, Haltesysteme an der richtigen Stelle, rutschfeste Beläge. So steigen Wohnwert und Sicherheit zugleich. Die KfW fördert solche Maßnahmen über Programm 455-B mit bis zu 6.250 Euro Zuschuss, dazu beraten wir Sie kostenlos beim ersten Termin.',
        'stadtteile'    => ['Innenstadt', 'Jesingen', 'Nabern', 'Lindach', 'Ötlingen', 'Kirchheim-Ost'],
        'local_context' => 'Kirchheim unter Teck hat einen hohen Anteil an Einfamilien- und Reihenhäusern aus den 1960er bis 1980er Jahren. Viele Eigenheimbesitzer wollen ihr Bad langfristig sicher gestalten, ohne auszuziehen. Enge Grundrisse und Altbausubstanz sind für uns dabei Alltag.',
        'faq' => [
            ['q' => 'Was kostet ein altersgerechter Badumbau in Kirchheim unter Teck?', 'a' => 'Richtwert: 9.000 bis 18.000 Euro je nach Umfang. Wannentausch gegen bodengleiche Dusche liegt am unteren Ende. Festpreis nach kostenloser Erstbesichtigung vor Ort, alle Gewerke inklusive.'],
            ['q' => 'Was ist bei einem barrierefreien Umbau inbegriffen?', 'a' => 'Bodengleiche Dusche mit schwellenlosem Zugang, Haltesysteme, rutschfeste Beläge und ergonomische Anordnung der Sanitärobjekte. Wir planen barrierefrei und ästhetisch, kein Pflegebad-Look.'],
            ['q' => 'Gibt es KfW-Förderung für den Umbau in Kirchheim unter Teck?', 'a' => 'Ja. KfW 455-B fördert geeignete Maßnahmen mit bis zu 6.250 Euro Zuschuss. Beim ersten kostenlosen Termin beraten wir, welche Arbeiten förderfähig sind und wie der Antrag läuft.'],
            ['q' => 'Wie lange dauert der Umbau in Kirchheim unter Teck?', 'a' => 'Reiner Duschtausch: 5 bis 8 Werktage. Kompletter altersgerechter Umbau: 2 bis 3 Wochen. Termingarantie gilt ab Auftragserteilung, der Plan liegt dem Festpreisangebot bei.'],
        ],
        'bewertungen' => [
            ['name' => 'Werner B.', 'ort' => 'Kirchheim u. T.-Nabern', 'projekt' => 'Altersgerechter Badumbau, ca. 6 m²', 'text' => 'Wir sind beide Mitte 70. Das Bad ist jetzt sicher und sieht trotzdem gut aus. Genau das wollten wir.'],
            ['name' => 'Karin S.', 'ort' => 'Kirchheim u. T.-Stadtmitte', 'projekt' => 'Wannentausch gegen bodengleiche Dusche', 'text' => 'Festpreis angekündigt, Festpreis gehalten. Das ist leider keine Selbstverständlichkeit.'],
            ['name' => 'Günter R.', 'ort' => 'Kirchheim u. T.-Jesingen', 'projekt' => 'Barrierefreier Umbau, 8 m²', 'text' => 'Haus aus den 70ern. Mir wurde alles vorab erklärt, auch die KfW-Förderung. Keine Überraschungen.'],
        ],
    ],
];

$slug = $_GET['stadt'] ?? '';
if (!isset($staedte[$slug])) {
    header('HTTP/1.0 404 Not Found');
    header('Location: /altersgerechter-badumbau');
    exit;
}

$stadt  = $staedte[$slug]['name'];
$km     = $staedte[$slug]['km'];
$daten  = $stadtdaten[$slug];

$pageTitle       = 'Altersgerechter Badumbau ' . $stadt . ' – Festpreis & KfW-Förderung';
$pageDescription = $daten['description'];
$pageSlug        = 'altersgerechter-badumbau-' . $slug;

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
            'description' => 'Altersgerechter Badumbau in ' . $stadt . ' und Umgebung – bodengleiche Dusche, Haltesysteme, KfW-Förderung, Festpreis aus einer Hand.',
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
<body class="page-altersgerecht page-stadtseite">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <section class="page-header">
        <div class="page-header-bg">
            <img src="/assets/img/alter.webp" alt="" class="page-header-bg-image" width="1920" height="1080" loading="eager">
            <div class="page-header-overlay"></div>
        </div>
        <div class="container">
            <span class="page-header-label">Tokmak GmbH <?php if ($km > 0): ?>· <?php echo $km; ?> km von Reutlingen<?php endif; ?></span>
            <h1 class="page-header-title">Altersgerechter Badumbau <?php echo htmlspecialchars($stadt); ?></h1>
            <p class="page-header-subtitle"><?php echo htmlspecialchars($daten['subtitle_hero']); ?></p>
        </div>
    </section>

    <!-- Einleitung -->
    <section class="section">
        <div class="container">
            <div class="content-split">
                <div class="content-split-text">
                    <span class="section-label">Barrierefrei in <?php echo htmlspecialchars($stadt); ?></span>
                    <h2 class="section-title">Altersgerechter Badumbau in <?php echo htmlspecialchars($stadt); ?> – sicher und ästhetisch.</h2>
                    <p><?php echo htmlspecialchars($daten['intro']); ?></p>
                    <ul class="check-list">
                        <li>Bodengleiche Dusche mit schwellenlosem Zugang</li>
                        <li>Haltesysteme und rutschfeste Beläge</li>
                        <li>KfW-Förderung bis 6.250 Euro (Programm 455-B)</li>
                        <li>Festpreisangebot – keine Nachkalkulation</li>
                        <li>Termingarantie ab Auftragserteilung</li>
                    </ul>
                    <a href="#anfrage" class="btn btn-primary" style="margin-top: var(--space-lg);">Kostenlose Beratung anfragen</a>
                </div>
                <div class="content-split-visual">
                    <img src="/assets/img/alter.webp" alt="Altersgerechter Badumbau <?php echo htmlspecialchars($stadt); ?> – Tokmak GmbH" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);" loading="lazy">
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
                    <h2 class="section-title">Selbstbestimmt wohnen in <?php echo htmlspecialchars($stadt); ?>.</h2>
                    <p><?php echo htmlspecialchars($daten['local_context']); ?></p>
                    <p style="margin-top: var(--space-md);"><strong>Stadtteile, in denen wir tätig sind:</strong></p>
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
                <p class="section-subtitle">Vom ersten Aufmaß bis zum KfW-Antrag – alles aus einer Hand.</p>
            </div>
            <div class="grid grid-3">
                <div class="card">
                    <h3 class="card-title">Bestandsaufnahme vor Ort</h3>
                    <p class="card-text">Wir messen Ihr Bad auf, prüfen Grundriss, Leitungen und Statik und besprechen, welche altersgerechten Maßnahmen sinnvoll sind.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Bodengleiche Dusche</h3>
                    <p class="card-text">Schwellenloser Einstieg statt Wanne oder Duschtasse. Normgerechte Abdichtung nach DIN 18534, sauberes Gefälle, sicherer Zugang.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Haltesysteme &amp; Griffe</h3>
                    <p class="card-text">Haltegriffe und Stützklappgriffe an Wand und Dusche, fest verankert und dezent integriert. Auf Wunsch ein Klappsitz in der Dusche.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Rutschfeste Beläge</h3>
                    <p class="card-text">Bodenfliesen mit geprüfter Rutschhemmung, passend zur Optik des Bades. Sicher bei Nässe, ohne nach Spezialboden auszusehen.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Sanitär &amp; Elektro</h3>
                    <p class="card-text">Ergonomisch angeordnete Sanitärobjekte, höhengerechtes WC, gute Beleuchtung und Steckdosen an der richtigen Stelle, koordiniert aus einer Hand.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Übergabe &amp; KfW-Antrag</h3>
                    <p class="card-text">Finale Reinigung, gemeinsame Abnahme und Unterstützung beim KfW-Antrag (Programm 455-B), damit Sie den Zuschuss bis 6.250 Euro nutzen.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section section-alt" id="faq">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Häufige Fragen</span>
                <h2 class="section-title">Fragen zum altersgerechten Badumbau in <?php echo htmlspecialchars($stadt); ?></h2>
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
    <section class="section" id="kundenstimmen">
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
    <section class="section section-alt">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Unser Einzugsgebiet</span>
                <h2 class="section-title">Altersgerechter Badumbau in der Region Reutlingen</h2>
                <p class="section-subtitle">Wir sind für Sie in <?php echo htmlspecialchars($stadt); ?> und der gesamten Region tätig.</p>
            </div>
            <div class="stadtseiten-grid">
                <?php foreach ($staedte as $s => $data): ?>
                    <?php if ($s === $slug): ?>
                        <span class="stadtseite-link stadtseite-link-aktiv"><?php echo htmlspecialchars($data['name']); ?></span>
                    <?php else: ?>
                        <a href="/altersgerechter-badumbau-<?php echo $s; ?>" class="stadtseite-link">Altersgerechter Badumbau <?php echo htmlspecialchars($data['name']); ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Inline-Kontaktformular -->
    <section class="section" id="anfrage">
        <div class="container">
            <div class="section-header is-centered">
                <span class="section-label">Kostenlose Erstberatung</span>
                <h2 class="section-title">Altersgerechter Badumbau in <?php echo htmlspecialchars($stadt); ?> anfragen</h2>
                <p class="section-subtitle">Schreiben Sie uns kurz, worum es geht. Wir melden uns innerhalb von 48 Stunden, unverbindlich und persönlich.</p>
            </div>

            <div class="contact-form-wrap" style="max-width: 720px; margin: 0 auto;">
                <form id="anfrage-formular" class="contact-form" action="/includes/form-handler.php" method="POST" novalidate>

                    <input type="hidden" name="project_type" value="altersgerecht">

                    <div class="form-field-hp" aria-hidden="true" tabindex="-1">
                        <label for="website_url">Website</label>
                        <input type="text" name="website_url" id="website_url" autocomplete="off" tabindex="-1">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label">Name <span class="required" aria-label="Pflichtfeld">*</span></label>
                            <input type="text" id="name" name="name" class="form-input" required minlength="2" maxlength="100" placeholder="Ihr vollständiger Name" autocomplete="name">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Telefon <span class="required" aria-label="Pflichtfeld">*</span></label>
                            <input type="tel" id="phone" name="phone" class="form-input" required placeholder="+49 123 456 789" autocomplete="tel">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">E-Mail <span class="required" aria-label="Pflichtfeld">*</span></label>
                        <input type="email" id="email" name="email" class="form-input" required placeholder="ihre@email.de" autocomplete="email">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="plz" class="form-label">Postleitzahl <span class="optional">(optional)</span></label>
                            <input type="text" id="plz" name="plz" class="form-input" maxlength="5" pattern="[0-9]{5}" placeholder="72805" autocomplete="postal-code" inputmode="numeric">
                        </div>
                        <div class="form-group">
                            <label for="stadt" class="form-label">Ort</label>
                            <input type="text" id="stadt" name="stadt" class="form-input" placeholder="wird automatisch erkannt" autocomplete="address-level2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Nachricht <span class="required" aria-label="Pflichtfeld">*</span></label>
                        <textarea id="message" name="message" class="form-input form-textarea" required minlength="10" maxlength="5000" rows="5" placeholder="Beschreiben Sie kurz Ihr Vorhaben: Wannentausch, kompletter Umbau, Raumgröße, offene Fragen ..."></textarea>
                    </div>

                    <div class="form-group">
                        <p class="form-privacy">
                            Mit dem Absenden stimmen Sie der Verarbeitung Ihrer Daten gemäß unserer
                            <a href="/datenschutz" target="_blank">Datenschutzerklärung</a> zu.
                        </p>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-full">Jetzt unverbindlich anfragen</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

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
