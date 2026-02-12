<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'Über uns';
$pageDescription = 'Lernen Sie die Tokmak GmbH kennen – Ihr regionaler Partner für Badsanierung, Fliesenarbeiten und Innenausbau in ' . SITE_REGION . '.';
$pageSlug        = 'ueber-uns';
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require_once INCLUDES_PATH . '/head-meta.php'; ?>
</head>
<body class="page-ueber-uns">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <section class="page-header">
        <div class="container">
            <span class="page-header-label"><?php echo SITE_NAME; ?></span>
            <h1 class="page-header-title">Über uns</h1>
            <p class="page-header-subtitle">Handwerk mit Anspruch. Räume mit Stil.</p>
        </div>
    </section>

    <!-- Wer wir sind -->
    <section class="section">
        <div class="container">
            <div class="content-split">
                <div class="content-split-text">
                    <span class="section-label">Wer wir sind</span>
                    <h2 class="section-title">Ein Betrieb, der Verantwortung übernimmt.</h2>
                    <p>Die Tokmak GmbH steht für hochwertige Badsanierungen, Fliesenarbeiten und Innenausbau in <?php echo SITE_REGION; ?>. Wir sind kein reiner Fliesenleger – wir sind der Partner, der Ihr Badprojekt von der Planung bis zur Übergabe komplett betreut.</p>
                    <p>Unser Fokus liegt auf Planungssicherheit, transparenter Kommunikation und sauberer Ausführung. Jedes Projekt wird individuell geplant und mit einem festen Ansprechpartner koordiniert.</p>
                </div>
                <div class="content-split-visual">
                    <!-- <img src="/assets/img/team.jpg" alt="Team Tokmak GmbH" width="600" height="450" loading="lazy"> -->
                    <div class="placeholder-visual"><span>Team- / Firmenfoto</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Was uns antreibt -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header is-centered">
                <span class="section-label">Was uns antreibt</span>
                <h2 class="section-title">Handwerk mit Anspruch – nicht Handwerk von der Stange.</h2>
            </div>

            <div class="grid grid-3">
                <div class="card">
                    <h3 class="card-title">Planungssicherheit</h3>
                    <p class="card-text">3D-Planung und Materialauswahl in unserer Ausstellung – damit Sie sicher entscheiden können.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Transparenz</h3>
                    <p class="card-text">Verbindliche Angebote, klare Zeitpläne und offene Kommunikation. Keine Überraschungen.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Koordination</h3>
                    <p class="card-text">Alle Gewerke über einen Ansprechpartner. Sie müssen sich um nichts kümmern.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ausstellung -->
    <section class="section">
        <div class="container">
            <div class="content-split content-split-reverse">
                <div class="content-split-text">
                    <span class="section-label">Unsere Ausstellung</span>
                    <h2 class="section-title">Materialien erleben, nicht nur im Katalog sehen.</h2>
                    <p>In unserer Ausstellung zeigen wir Ihnen aktuelle Fliesen, Oberflächen und Materialien. Großformate, fugenlose Oberflächen, verschiedene Farben und Strukturen – alles zum Anfassen und Vergleichen.</p>
                    <p>Vereinbaren Sie einen Termin und lassen Sie sich persönlich beraten.</p>
                    <a href="/kontakt" class="btn btn-primary" style="margin-top: var(--space-md);">Ausstellungstermin vereinbaren</a>
                </div>
                <div class="content-split-visual">
                    <div class="placeholder-visual" style="min-height: 350px;"><span>Bild: Ausstellung</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Zahlen -->
    <section class="section section-dark">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">Jahre Erfahrung</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Projekte</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50 km</span>
                    <span class="stat-label">Einsatzradius</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">1</span>
                    <span class="stat-label">Ansprechpartner</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta-block">
        <div class="container">
            <div class="cta-block">
                <h2 class="cta-title">Lernen Sie uns kennen.</h2>
                <p class="cta-text">Vereinbaren Sie ein unverbindliches Erstgespräch – persönlich, vor Ort oder telefonisch.</p>
                <a href="/kontakt" class="btn btn-primary btn-lg">Kontakt aufnehmen</a>
            </div>
        </div>
    </section>

</main>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>

<?php require_once INCLUDES_PATH . '/scripts.php'; ?>
</body>
</html>
