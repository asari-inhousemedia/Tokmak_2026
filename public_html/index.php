<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'Komplett-Badsanierung & Fliesenarbeiten';
$pageDescription = 'Tokmak GmbH – Ihr regionaler Partner für Komplett-Badsanierung in ' . SITE_REGION . '. 3D-Planung, koordinierte Umsetzung, ein Ansprechpartner.';
$pageSlug        = 'startseite';
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require_once INCLUDES_PATH . '/head-meta.php'; ?>
</head>
<body class="page-home">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<!-- ============================================
     SEKTION 1 – HERO / ABOVE THE FOLD
     ============================================ -->
<section class="hero" id="hero">
    <div class="hero-background">
        <img src="/assets/img/hero.webp" alt="" class="hero-bg-image" width="1920" height="1080" loading="eager">
        <div class="hero-overlay"></div>
    </div>

    <div class="hero-content container">
        <p class="hero-kicker reveal-stagger" data-delay="0"><?php echo SITE_NAME; ?> · <?php echo SITE_REGION; ?></p>
        <h1 class="hero-headline reveal-stagger" data-delay="1">
            Ihr neues Bad<br>
            <span class="hero-headline-accent">beginnt mit Anspruch.</span>
        </h1>
        <p class="hero-subheadline reveal-stagger" data-delay="2">
            Komplett-Badsanierung aus einer Hand – mit 3D-Planung,
            koordinierter Umsetzung aller Gewerke und einem festen
            Ansprechpartner von der ersten Idee bis zur Übergabe.
        </p>
        <div class="hero-actions reveal-stagger" data-delay="3">
            <a href="http://tokmak-gmbh.de/kontakt" class="btn btn-primary btn-lg btn-glow">Jetzt unverbindlich anfragen</a>
        </div>

        <div class="hero-trust reveal-stagger" data-delay="4">
            <span class="hero-trust-item"><strong>3D-Planung</strong> vor Baubeginn</span>
            <span class="hero-trust-item"><strong>Alle Gewerke</strong> koordiniert</span>
            <span class="hero-trust-item"><strong>Ausstellung</strong> vor Ort</span>
        </div>
    </div>

    <!-- Scroll-Indikator entfernt -->
</section>

<main class="site-main">

    <!-- ============================================
         SEKTION 2 – PROBLEMADRESSIERUNG
         ============================================ -->
    <section class="section" id="warum-tokmak">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Warum Tokmak</span>
                <h2 class="section-title">Sie bleiben Entscheider.<br>Wir übernehmen die Bauleitung.</h2>
                <p class="section-subtitle">Koordination, Zeitplan, Verantwortung – bei uns liegt alles in einer Hand. Sie entscheiden, wie Ihr Bad aussehen soll. Wir kümmern uns um alles andere.</p>
            </div>

            <div class="contrast-cards">
                <div class="contrast-card contrast-card-problem">
                    <span class="contrast-label">Der klassische Weg</span>
                    <h3 class="contrast-title">Eigenkoordination</h3>
                    <ul class="contrast-list">
                        <li>Mehrere Handwerker einzeln anfragen und terminieren</li>
                        <li>Kein Überblick über Zeitplan und Abhängigkeiten</li>
                        <li>Unklare Zuständigkeiten bei Problemen</li>
                        <li>Budget schwer kalkulierbar durch Einzelangebote</li>
                        <li>Keine Visualisierung vor Baubeginn</li>
                    </ul>
                </div>
                <div class="contrast-card contrast-card-solution">
                    <span class="contrast-label">Unser Weg</span>
                    <h3 class="contrast-title">Komplettkoordination</h3>
                    <ul class="contrast-list">
                        <li>Ein Ansprechpartner für alle Gewerke</li>
                        <li>Verbindlicher Zeitplan von Anfang an</li>
                        <li>Klare Verantwortung – bei uns gebündelt</li>
                        <li>Transparentes Gesamtangebot nach Aufmaß</li>
                        <li>3D-Planung: Sie sehen Ihr Bad, bevor wir anfangen</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SEKTION 3 – PROZESS (5 Schritte)
         ============================================ -->
    <section class="section" id="ablauf">
        <div class="container">
            <div class="section-header is-centered">
                <span class="section-label">Unser Ablauf</span>
                <h2 class="section-title">In fünf Schritten zum neuen Bad</h2>
                <p class="section-subtitle">Strukturiert, transparent und ohne Überraschungen.</p>
            </div>

            <div class="process-steps">
                <div class="process-step">
                    <div class="process-step-number">1</div>
                    <div>
                        <h3 class="process-step-title">Erstberatung</h3>
                        <p class="process-step-text">Persönliches Gespräch und Aufmaß vor Ort. Wir erfassen Ihre Wünsche und die baulichen Gegebenheiten.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-step-number">2</div>
                    <div>
                        <h3 class="process-step-title">3D-Planung</h3>
                        <p class="process-step-text">Sie sehen Ihr neues Bad als 3D-Visualisierung. Materialauswahl in unserer Ausstellung.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-step-number">3</div>
                    <div>
                        <h3 class="process-step-title">Angebot</h3>
                        <p class="process-step-text">Verbindliches, transparentes Gesamtangebot. Keine versteckten Kosten.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-step-number">4</div>
                    <div>
                        <h3 class="process-step-title">Umsetzung</h3>
                        <p class="process-step-text">Koordinierte Durchführung aller Gewerke. Ein fester Ansprechpartner.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-step-number">5</div>
                    <div>
                        <h3 class="process-step-title">Übergabe</h3>
                        <p class="process-step-text">Gemeinsame Abnahme. Ihr neues Bad – termingerecht und sauber übergeben.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SEKTION 4 – REFERENZ-TEASER (vorübergehend ausgeblendet)
         ============================================ -->
    <!--
    <section class="section" id="referenzen-preview">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Referenzen</span>
                <h2 class="section-title">Echte Projekte. Echte Ergebnisse.</h2>
                <p class="section-subtitle">Jedes Bad ist individuell – hier ein Einblick in aktuelle Projekte.</p>
            </div>
            <div class="project-grid">
                <div class="project-card">
                    <div class="project-card-image">
                        <div class="placeholder-visual"><span>Projektbild 1</span></div>
                    </div>
                    <div class="project-card-body">
                        <span class="project-card-type">Komplett-Badsanierung</span>
                        <h3 class="project-card-title">Einfamilienhaus, Region Reutlingen</h3>
                        <p class="project-card-desc">Inkl. Sanitär, Elektro und Großformatfliesen 120×120. Bodengleiche Dusche mit Rinnenablauf.</p>
                        <div class="project-card-tags">
                            <span class="project-tag">Großformat</span>
                            <span class="project-tag">Bodengleich</span>
                            <span class="project-tag">3D-geplant</span>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-image">
                        <div class="placeholder-visual"><span>Projektbild 2</span></div>
                    </div>
                    <div class="project-card-body">
                        <span class="project-card-type">Altersgerechter Umbau</span>
                        <h3 class="project-card-title">Eigentumswohnung, Lichtenstein</h3>
                        <p class="project-card-desc">Barrierefreier Umbau mit bodengleicher Dusche, Haltegriffen und rutschfestem Belag.</p>
                        <div class="project-card-tags">
                            <span class="project-tag">Barrierefrei</span>
                            <span class="project-tag">Fugenlos</span>
                            <span class="project-tag">Komplett</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-cta">
                <a href="/referenzen" class="btn btn-outline-dark">Alle Referenzen ansehen</a>
            </div>
        </div>
    </section>
    -->

    <!-- ============================================
         SEKTION 5 – 3D-PLANUNG & AUSSTELLUNG
         ============================================ -->
    <section class="section section-alt" id="planung">
        <div class="container">
            <div class="content-split">
                <div class="content-split-text">
                    <span class="section-label">Planungssicherheit</span>
                    <h2 class="section-title">Sie sehen Ihr Bad, bevor wir anfangen.</h2>
                    <p>Viele Kunden können sich schwer vorstellen, wie ihr neues Bad am Ende aussehen wird. Deshalb planen wir jedes Projekt in 3D – damit Sie Materialien, Farben und Raumwirkung beurteilen können, bevor der erste Handgriff erfolgt.</p>
                    <p>In unserer Ausstellung sehen und greifen Sie die Materialien. Keine Entscheidung aus dem Katalog – sondern auf Basis von dem, was Sie vor sich haben.</p>
                    <ul class="check-list">
                        <li>3D-Visualisierung Ihres neuen Bades</li>
                        <li>Materialauswahl in unserer Ausstellung</li>
                        <li>Entscheidung auf Basis von Sichtbarkeit, nicht Vorstellung</li>
                    </ul>
                </div>
                <div class="content-split-visual">
                    <div class="tilt-card" id="tilt-card">
                        <div class="tilt-card-inner">
                            <img src="/assets/img/badsanierung.webp" alt="3D-Planung Badsanierung" width="600" height="450" loading="lazy" class="tilt-card-image">
                            <div class="tilt-card-grid" aria-hidden="true"></div>
                            <div class="tilt-card-shine"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SEKTION 6 – VERTRAUEN & FAKTEN
         ============================================ -->
    <section class="section section-dark" id="fakten">
        <div class="container">
            <div class="section-header is-centered">
                <span class="section-label">Tokmak in Zahlen</span>
                <h2 class="section-title">Erfahrung, die Sie sehen.</h2>
            </div>

            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">Jahre Erfahrung</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100+</span>
                    <span class="stat-label">Projekte realisiert</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Gewerke-Koordination</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">1</span>
                    <span class="stat-label">Ansprechpartner</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SEKTION 7 – HÄUFIGE FRAGEN
         ============================================ -->
    <section class="section" id="faq">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Häufige Fragen</span>
                <h2 class="section-title">Was Sie wissen sollten</h2>
            </div>

            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Wie lange dauert eine Komplett-Badsanierung?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" aria-hidden="true">
                        <div class="faq-answer-inner">
                            <p>Eine typische Komplett-Badsanierung dauert bei uns 2 bis 4 Wochen – abhängig von Raumgröße und Umfang. Den genauen Zeitplan besprechen wir vor Baubeginn verbindlich.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Wie verbindlich ist das Angebot?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" aria-hidden="true">
                        <div class="faq-answer-inner">
                            <p>Unsere Beratung und Angebotserstellung sind unverbindlich. Sie erhalten eine transparente Kalkulation und entscheiden in Ruhe. Verbindlich wird es erst mit Ihrer Beauftragung – klar geregelt und nachvollziehbar.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Koordinieren Sie alle Gewerke?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" aria-hidden="true">
                        <div class="faq-answer-inner">
                            <p>Ja. Sanitär, Elektro, Estrich, Abdichtung, Fliesen und Montage – wir koordinieren alle beteiligten Gewerke. Sie haben einen festen Ansprechpartner.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Kann ich Materialien vorab sehen und anfassen?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" aria-hidden="true">
                        <div class="faq-answer-inner">
                            <p>Ja. In unserer Ausstellung zeigen wir Ihnen aktuelle Fliesen, Oberflächen und Materialien. Zusätzlich sehen Sie Ihr Bad als 3D-Visualisierung vor Baubeginn.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Was kostet eine Badsanierung?</span>
                        <span class="faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="faq-answer" aria-hidden="true">
                        <div class="faq-answer-inner">
                            <p>Die Kosten hängen von Raumgröße, Materialwahl und Umfang ab. Pauschalpreise geben wir bewusst nicht an, weil jedes Projekt individuell ist. Nach dem Aufmaß erhalten Sie ein transparentes, detailliertes Angebot.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SEKTION 8 – CTA BLOCK
         ============================================ -->
    <section class="section section-cta-block">
        <div class="container">
            <div class="cta-block cta-block-image" id="cta-block">
                <img src="/assets/img/5.webp" alt="" class="cta-block-bg" loading="lazy" aria-hidden="true">
                <div class="cta-block-overlay"></div>
                <div class="cta-block-content">
                    <h2 class="cta-title">Bereit für Ihr neues Bad?</h2>
                    <p class="cta-text">Lassen Sie uns Ihr Badprojekt besprechen – unverbindlich und persönlich. Wir nehmen uns Zeit für Ihre Fragen.</p>
                    <a href="http://tokmak-gmbh.de/kontakt" class="btn btn-cta-highlight btn-lg btn-glow">Jetzt unverbindlich anfragen</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>

<?php require_once INCLUDES_PATH . '/scripts.php'; ?>
</body>
</html>
