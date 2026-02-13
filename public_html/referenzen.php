<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'Referenzen';
$pageDescription = 'Referenzprojekte der Tokmak GmbH – Komplett-Badsanierungen, Großformatfliesen und fugenlose Bäder in ' . SITE_REGION . '.';
$pageSlug        = 'referenzen';
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require_once INCLUDES_PATH . '/head-meta.php'; ?>
</head>
<body class="page-referenzen">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <section class="page-header">
        <div class="page-header-bg">
            <img src="/assets/img/hero.webp" alt="" class="page-header-bg-image" width="1920" height="1080" loading="eager">
            <div class="page-header-overlay"></div>
        </div>
        <div class="container">
            <span class="page-header-label">Unsere Arbeit</span>
            <h1 class="page-header-title">Referenzen</h1>
            <p class="page-header-subtitle">Echte Projekte, echte Ergebnisse. Jedes Bad ist individuell geplant und umgesetzt.</p>
        </div>
    </section>

    <!-- Projektgalerie -->
    <section class="section">
        <div class="container">
            <div class="project-grid">

                <div class="project-card">
                    <div class="project-card-image">
                        <!-- <img src="/assets/img/ref-01.jpg" alt="Komplett-Badsanierung EFH Reutlingen" width="600" height="450" loading="lazy"> -->
                        <div class="placeholder-visual"><span>Projektbild</span></div>
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
                        <div class="placeholder-visual"><span>Projektbild</span></div>
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

                <div class="project-card">
                    <div class="project-card-image">
                        <div class="placeholder-visual"><span>Projektbild</span></div>
                    </div>
                    <div class="project-card-body">
                        <span class="project-card-type">Fugenloses Bad</span>
                        <h3 class="project-card-title">Neubau, Region Tübingen</h3>
                        <p class="project-card-desc">Fugenlose Wand- und Bodenflächen mit Dracholin Cosmato. Individuelle Farbgebung nach Kundenwunsch.</p>
                        <div class="project-card-tags">
                            <span class="project-tag">Cosmato</span>
                            <span class="project-tag">Fugenlos</span>
                            <span class="project-tag">Neubau</span>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-card-image">
                        <div class="placeholder-visual"><span>Projektbild</span></div>
                    </div>
                    <div class="project-card-body">
                        <span class="project-card-type">Komplett-Badsanierung</span>
                        <h3 class="project-card-title">Doppelhaushälfte, Metzingen</h3>
                        <p class="project-card-desc">Zwei Bäder in einem Projekt. Großformat kombiniert mit Holzoptik-Fliesen. Regendusche und freistehende Badewanne.</p>
                        <div class="project-card-tags">
                            <span class="project-tag">Großformat</span>
                            <span class="project-tag">Holzoptik</span>
                            <span class="project-tag">2 Bäder</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3D-Planung Showcase -->
    <section class="section section-alt" id="3d-showcase">
        <div class="container">
            <div class="section-header is-centered">
                <span class="section-label">3D-Planung</span>
                <h2 class="section-title">So sah die Planung aus – so wurde es umgesetzt.</h2>
                <p class="section-subtitle">Unsere 3D-Visualisierungen geben Ihnen Sicherheit vor Baubeginn.</p>
            </div>

            <!-- Beispiel 1 -->
            <div class="showcase-compare" style="margin-bottom: var(--space-xl);">
                <div class="showcase-compare-item">
                    <!-- <img src="/assets/img/3d-plan-01.jpg" alt="3D-Planung Beispiel" width="600" height="450" loading="lazy"> -->
                    <div class="placeholder-visual"><span>3D-Planung</span></div>
                    <span class="showcase-compare-label">3D-Entwurf</span>
                </div>
                <div class="showcase-compare-item">
                    <!-- <img src="/assets/img/3d-result-01.jpg" alt="Fertiges Ergebnis" width="600" height="450" loading="lazy"> -->
                    <div class="placeholder-visual"><span>Ergebnis</span></div>
                    <span class="showcase-compare-label">Ergebnis</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta-block">
        <div class="container">
            <div class="cta-block cta-block-image" id="cta-block">
                <img src="/assets/img/2.webp" alt="" class="cta-block-bg" loading="lazy" aria-hidden="true">
                <div class="cta-block-overlay"></div>
                <div class="cta-block-content">
                    <h2 class="cta-title">Wie soll Ihr neues Bad aussehen?</h2>
                    <p class="cta-text">Lassen Sie sich Ihr Bad in 3D planen – wir zeigen Ihnen, wie es werden kann.</p>
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
