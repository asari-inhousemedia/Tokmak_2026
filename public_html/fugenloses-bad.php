<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'Fugenloses Bad: Mikrozement & Betonoptik ohne Fliesen';
$pageDescription = 'Fugenloses Bad in ' . SITE_REGION . ' – nahtlose Wände und Böden in Mikrozement- und Betonoptik mit Dracholin Cosmato. Pflegeleicht, ohne Fugen, oft ohne Fliesen abschlagen. Jetzt kostenlos beraten lassen.';
$pageSlug        = 'fugenloses-bad';

// FAQ – deckt echte Suchanfragen (Kosten, alte Fliesen, Dusche, Mikrozement, Pflege, abschlagen)
$faqs = [
    [
        'q' => 'Was kostet ein fugenloses Bad?',
        'a' => 'Der Preis hängt von Fläche, Untergrund und Umfang ab. Eine fugenlose Beschichtung von Wand und Boden im Bad bewegt sich je nach Projekt typischerweise im vier- bis niedrigen fünfstelligen Bereich. Sie erhalten von uns ein verbindliches Festpreis-Angebot nach kostenloser Besichtigung – ohne versteckte Kosten.',
    ],
    [
        'q' => 'Kann man fugenlose Oberflächen auf alte Fliesen auftragen?',
        'a' => 'In vielen Fällen ja. Mineralische Beschichtungen wie Dracholin Cosmato lassen sich bei tragfähigem, intaktem Untergrund direkt auf bestehende Fliesen aufbringen. Das spart Schmutz, Zeit und Kosten, weil die alten Fliesen nicht abgeschlagen werden müssen. Wir prüfen den Untergrund bei der Besichtigung.',
    ],
    [
        'q' => 'Muss ich für ein fugenloses Bad die alten Fliesen abschlagen?',
        'a' => 'Meist nicht. Genau das ist ein großer Vorteil: Bei geeignetem Untergrund wird die fugenlose Oberfläche direkt aufgetragen. Das Bad bleibt nutzbar, der Bauaufwand ist deutlich geringer als bei einer klassischen Komplettsanierung.',
    ],
    [
        'q' => 'Ist ein fugenloses Bad in der Dusche wirklich wasserdicht?',
        'a' => 'Ja. Fachgerecht aufgebaut sind fugenlose Oberflächen in Dusche und Nassbereich vollständig wasserdicht. Der Aufbau erfolgt mit normgerechter Abdichtung darunter und einer mineralischen, versiegelten Beschichtung darüber – dauerhaft dicht und ohne Fugen, in denen sich Wasser sammelt.',
    ],
    [
        'q' => 'Was ist der Unterschied zwischen Mikrozement und Dracholin Cosmato?',
        'a' => 'Mikrozement und Betonoptik beschreiben die Optik – nahtlose, mineralische Oberflächen ohne Fugen. Dracholin Cosmato ist das hochwertige Markensystem, mit dem wir diese Optik umsetzen. Sie erhalten also die gefragte Mikrozement- und Betonoptik in zertifizierter Qualität.',
    ],
    [
        'q' => 'Ist eine fugenlose Oberfläche pflegeleichter als Fliesen?',
        'a' => 'Deutlich. Ohne Fugen gibt es keine Stellen, in denen sich Schmutz, Kalk oder Schimmel festsetzen. Die versiegelte Oberfläche ist nasswischbar und lässt sich in einem Zug reinigen. Bei Bedarf lässt sich der Schutz mit Steinöl oder Wachs auffrischen, ohne die ganze Fläche zu erneuern.',
    ],
    [
        'q' => 'Aus welchem Material besteht die Oberfläche?',
        'a' => 'Wir arbeiten mit Cosmato, einer mineralischen Spachtelmasse. Sie ist emissionsfrei, lösemittel- und weichmacherfrei und damit auch für Wohnräume unbedenklich. Die Oberfläche ist offenporig, reißt, blättert und schuppt nicht und lässt sich mit anorganischen Pigmenten von hell bis dunkel abtönen.',
    ],
    [
        'q' => 'Wie belastbar ist ein fugenloses Bad?',
        'a' => 'Die ausgehärtete Oberfläche hat eine Härte vergleichbar mit einem Parkettboden und ist auf normale Alltagsbelastung im Bad ausgelegt. Für stark beanspruchte Bereiche wie die Dusche verwenden wir eine widerstandsfähigere PU-Versiegelung. Ehrlich gesagt: Für sehr harte Stoß- und Schlagbelastung ist die Technik nicht gedacht. Genau das prüfen wir bei der Beratung mit Ihnen.',
    ],
];

$faqSchema = [];
foreach ($faqs as $item) {
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
            '@type'       => 'Service',
            'serviceType' => 'Fugenloses Bad – Mikrozement und Betonoptik',
            'provider'    => [
                '@type'     => 'LocalBusiness',
                'name'      => SITE_NAME,
                'url'       => SITE_URL,
                'telephone' => CONTACT_PHONE,
                'email'     => CONTACT_EMAIL,
                'address'   => [
                    '@type'           => 'PostalAddress',
                    'streetAddress'   => CONTACT_ADDRESS_STREET,
                    'addressLocality' => CONTACT_ADDRESS_CITY,
                    'postalCode'      => CONTACT_ADDRESS_ZIP,
                    'addressCountry'  => 'DE',
                ],
            ],
            'areaServed'  => SITE_REGION,
            'description' => 'Fugenlose Bäder in Mikrozement- und Betonoptik ohne Fliesen – nahtlose, pflegeleichte Wand- und Bodenflächen mit Dracholin Cosmato.',
        ],
        [
            '@type'      => 'FAQPage',
            'mainEntity' => $faqSchema,
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
<body class="page-fugenloses-bad">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <!-- Hero -->
    <section class="page-header">
        <div class="page-header-bg">
            <img src="/assets/img/fugenlos.webp" alt="" class="page-header-bg-image" width="1920" height="1080" loading="eager">
            <div class="page-header-overlay"></div>
        </div>
        <div class="container">
            <span class="page-header-label">Spezialgebiet ohne Fliesen</span>
            <h1 class="page-header-title">Fugenloses Bad in Mikrozement und Betonoptik</h1>
            <p class="page-header-subtitle">Nahtlose Wände und Böden ohne eine einzige Fuge. Pflegeleicht, modern und oft ganz ohne Abschlagen der alten Fliesen umsetzbar.</p>
            <a href="#anfrage" class="btn btn-primary btn-lg" style="margin-top: var(--space-lg);">Kostenlose Beratung anfragen</a>
        </div>
    </section>

    <!-- Was ist ein fugenloses Bad -->
    <section class="section">
        <div class="container">
            <div class="content-split">
                <div class="content-split-text">
                    <span class="section-label">Die Alternative zur Fliese</span>
                    <h2 class="section-title">Ein Bad ohne Fliesen und ohne Fugen</h2>
                    <p>Ein fugenloses Bad ersetzt klassische Fliesen durch eine durchgehende, mineralische Oberfläche. Das Ergebnis ist eine ruhige, hochwertige Optik in Mikrozement- oder Betonlook – ganz ohne sichtbare Fugen.</p>
                    <p>Wir setzen diese Technik mit Dracholin Cosmato um, einem mineralischen Beschichtungssystem für Wand und Boden. Die Oberfläche ist versiegelt, wasserdicht und individuell in Farbe und Struktur wählbar.</p>
                    <ul class="check-list">
                        <li>Nahtlose Flächen in Mikrozement- und Betonoptik</li>
                        <li>Mineralische Beschichtung mit Dracholin Cosmato</li>
                        <li>Frei wählbar in Farbe, Struktur und Glanzgrad</li>
                    </ul>
                </div>
                <div class="content-split-visual">
                    <img src="/assets/img/fugenfrei.webp" alt="Fugenloses Bad in Betonoptik mit Dracholin Cosmato – Tokmak GmbH" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Vorteile -->
    <section class="section section-alt" id="vorteile">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Vorteile</span>
                <h2 class="section-title">Warum sich ein fugenloses Bad lohnt</h2>
                <p class="section-subtitle">Weniger Pflege, mehr Hygiene und eine moderne Optik, die klassische Fliesen nicht bieten.</p>
            </div>
            <div class="grid grid-3">
                <div class="card">
                    <h3 class="card-title">Keine Fugen, kein Schimmel</h3>
                    <p class="card-text">Ohne Fugen gibt es keine Rillen, in denen sich Schimmel, Kalk und Schmutz festsetzen. Das Bad bleibt dauerhaft hygienisch.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Oft ohne Fliesen abschlagen</h3>
                    <p class="card-text">Bei tragfähigem Untergrund tragen wir die Beschichtung direkt auf die alten Fliesen auf. Weniger Schmutz, weniger Aufwand, weniger Kosten.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Spürbar pflegeleicht</h3>
                    <p class="card-text">Die versiegelte Oberfläche lässt sich in einem Zug abwischen. Kein Fugenschrubben, kein Verfärben über die Jahre.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Individuelle Optik</h3>
                    <p class="card-text">Mikrozement, Betonoptik oder warme Naturtöne: Farbe, Struktur und Glanzgrad bestimmen Sie. Jede Fläche wird zum Unikat.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Wasserdicht und langlebig</h3>
                    <p class="card-text">Fachgerecht aufgebaut mit normgerechter Abdichtung und mineralischer Versiegelung. Dicht in Dusche, Wanne und Nassbereich.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Nahtlose Raumwirkung</h3>
                    <p class="card-text">Durchgehende Flächen lassen Bäder größer und ruhiger wirken. Eine moderne Optik aus einem Guss, ohne unterbrechende Fugenraster.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Anwendungsbereiche -->
    <section class="section" id="anwendung">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Anwendung</span>
                <h2 class="section-title">Wo fugenlose Oberflächen überzeugen</h2>
            </div>

            <div class="content-split" style="margin-bottom: var(--space-section);">
                <div class="content-split-text">
                    <h3 class="section-title" style="font-size: var(--text-2xl);">Fugenlose Dusche</h3>
                    <p>Gerade in der Dusche spielt eine fugenlose Oberfläche ihre Stärken aus: keine Fugen, in denen sich Kalk und Schimmel sammeln, eine durchgehend dichte Fläche und eine klare, moderne Optik. Pflege auf ein Minimum reduziert.</p>
                    <ul class="check-list">
                        <li>Vollständig wasserdichter Aufbau</li>
                        <li>Keine Silikonfugen als Schwachstelle</li>
                        <li>Bodengleich und nahtlos kombinierbar</li>
                    </ul>
                </div>
                <div class="content-split-visual">
                    <img src="/assets/img/fugenlos.webp" alt="Fugenlose Dusche ohne Fugen – Tokmak GmbH" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);" loading="lazy">
                </div>
            </div>

            <div class="content-split content-split-reverse">
                <div class="content-split-text">
                    <h3 class="section-title" style="font-size: var(--text-2xl);">Wand und Boden im ganzen Bad</h3>
                    <p>Ob als Akzentwand oder durchgehend im gesamten Bad: Mikrozement und Betonoptik lassen sich auf Wand und Boden umsetzen. Auch auf bestehende Fliesen, ohne aufwendigen Rückbau, mit nahtlosem Übergang zwischen den Flächen.</p>
                    <ul class="check-list">
                        <li>Wand- und Bodenflächen aus einem Material</li>
                        <li>Direkt auf alte Fliesen bei geeignetem Untergrund</li>
                        <li>Auch für Gäste-WC, Küche und Wohnräume</li>
                    </ul>
                </div>
                <div class="content-split-visual">
                    <img src="/assets/img/3.webp" alt="Fugenlose Mikrozement-Wand und Boden im Bad – Tokmak GmbH" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Aufbau / Schicht für Schicht -->
    <section class="section" id="aufbau">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Schicht für Schicht</span>
                <h2 class="section-title">So entsteht eine fugenlose Oberfläche</h2>
                <p class="section-subtitle">Eine fugenlose Fläche ist kein Anstrich, sondern ein mehrlagiger mineralischer Aufbau. Jede Schicht hat eine Aufgabe. Das macht die Oberfläche dauerhaft, wasserabweisend und belastbar.</p>
            </div>
            <div class="grid grid-2" style="max-width: 920px; margin-inline: auto;">
                <div class="card">
                    <h3 class="card-title">1. Untergrund & Haftgrund</h3>
                    <p class="card-text">Der Untergrund wird geprüft und mit einem Haftgrund vorbereitet. Das funktioniert auf Putz, Estrich und auch direkt auf bestehenden Fliesen, ohne Abschlagen. Im Feuchtbereich kommt ein passender Ausgleichsputz darunter.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">2. Erste Spachtellage</h3>
                    <p class="card-text">Die mineralische Cosmato-Spachtelmasse wird in einer ersten Lage von Hand aufgezogen (ca. 0,8 bis 1,0 kg pro m²). Sie bildet die tragende Grundfläche der späteren Optik.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">3. Zweite Lage & Schliff</h3>
                    <p class="card-text">Eine zweite Lage wird aufgespachtelt und geschliffen. Erst dadurch entsteht die typische Tiefenwirkung und die nahtlose Mikrozement- oder Betonoptik. Jede Fläche wird so zum Unikat.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">4. Versiegelung</h3>
                    <p class="card-text">Zum Schluss wird die Fläche versiegelt: mit natürlichem Steinöl für Wand und Boden, mit einer widerstandsfähigen PU-Versiegelung für stark beanspruchte Bereiche wie die Dusche. Das macht sie wasserabweisend und nasswischbar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mid-Page CTA-Band -->
    <section class="section section-alt" id="cta-mid">
        <div class="container">
            <div class="section-header is-centered">
                <span class="section-label">Unverbindlich starten</span>
                <h2 class="section-title">Passt ein fugenloses Bad zu Ihrem Raum?</h2>
                <p class="section-subtitle">Wir prüfen Ihren Untergrund und beraten Sie ehrlich, ob Mikrozement oder Betonoptik für Ihr Bad geeignet ist. Kostenlos und ohne Verpflichtung.</p>
                <a href="#anfrage" class="btn btn-primary btn-lg" style="margin-top: var(--space-md);">Jetzt kostenlose Beratung sichern</a>
            </div>
        </div>
    </section>

    <!-- Ablauf -->
    <section class="section" id="ablauf">
        <div class="container">
            <div class="section-header is-centered">
                <span class="section-label">Ihr Weg zum fugenlosen Bad</span>
                <h2 class="section-title">So gehen wir vor</h2>
                <p class="section-subtitle">Transparent, strukturiert und mit einem festen Ansprechpartner.</p>
            </div>
            <div class="grid grid-2" style="max-width: 900px; margin-inline: auto;">
                <div class="feature-block">
                    <h3 class="feature-title">1. Beratung & Untergrund-Check</h3>
                    <p class="feature-text">Wir kommen zu Ihnen, prüfen den Untergrund und klären, ob die alten Fliesen bleiben können. Dauer: ca. 60 Minuten, unverbindlich.</p>
                </div>
                <div class="feature-block">
                    <h3 class="feature-title">2. Farb- & Strukturauswahl</h3>
                    <p class="feature-text">Sie wählen Optik, Farbton und Glanzgrad. Mikrozement, Betonlook oder warme Naturtöne – passend zu Ihrem Raum.</p>
                </div>
                <div class="feature-block">
                    <h3 class="feature-title">3. Festpreis-Angebot</h3>
                    <p class="feature-text">Sie erhalten ein verbindliches, transparent aufgeschlüsseltes Angebot. Ohne versteckte Positionen.</p>
                </div>
                <div class="feature-block">
                    <h3 class="feature-title">4. Saubere Umsetzung</h3>
                    <p class="feature-text">Abdichtung, Beschichtung und Versiegelung in abgestimmter Reihenfolge. Sauber gearbeitet, termingerecht übergeben.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fachbetrieb / Vertrauen -->
    <section class="section section-alt" id="fachbetrieb">
        <div class="container">
            <div class="content-split">
                <div class="content-split-text">
                    <span class="section-label">Meisterbetrieb der Region</span>
                    <h2 class="section-title">Fugenlose Bäder vom Fachbetrieb aus Reutlingen</h2>
                    <p>Ein fugenloses Bad ist Präzisionsarbeit: Untergrund, Abdichtung und Beschichtung müssen exakt aufeinander abgestimmt sein. Genau darauf sind wir spezialisiert. Als Meisterbetrieb begleiten wir Sie persönlich von der ersten Beratung bis zur Übergabe.</p>
                    <p>Bei Tokmak haben Sie einen festen Ansprechpartner, einen verbindlichen Festpreis und eine saubere, termingerechte Umsetzung. Kein Subunternehmer-Chaos, keine versteckten Kosten.</p>
                    <ul class="check-list">
                        <li>Persönliche Beratung und Aufmaß vor Ort</li>
                        <li>Ein fester Ansprechpartner über das gesamte Projekt</li>
                        <li>Verbindlicher Festpreis und Termingarantie</li>
                        <li>Spezialisiert auf fugenlose Technik mit Dracholin Cosmato</li>
                    </ul>
                </div>
                <div class="content-split-visual">
                    <img src="/assets/img/1.webp" alt="Modernes fugenloses Bad mit Betonoptik-Boden – Tokmak GmbH" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section" id="faq">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Häufige Fragen</span>
                <h2 class="section-title">Antworten rund ums fugenlose Bad</h2>
            </div>
            <div class="faq-list">
                <?php foreach ($faqs as $i => $item): ?>
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

    <!-- Inline-Kontaktformular -->
    <section class="section section-alt" id="anfrage">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-sidebar">
                    <div class="contact-sidebar-header">
                        <span class="section-label">Ihr fugenloses Bad</span>
                        <h2 class="section-title">Unverbindliche Anfrage stellen</h2>
                        <p class="section-subtitle">Beschreiben Sie kurz Ihr Vorhaben – wir melden uns innerhalb von 48 Stunden.</p>
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
</body>
</html>
