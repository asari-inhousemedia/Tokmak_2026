<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'Leistungen';
$pageDescription = 'Leistungen der Tokmak GmbH – Badsanierung, Fliesenarbeiten, Innenausbau und mehr in ' . SITE_REGION . '.';
$pageSlug        = 'leistungen';
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require_once INCLUDES_PATH . '/head-meta.php'; ?>
</head>
<body class="page-leistungen">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <section class="page-header">
        <div class="page-header-bg">
            <img src="/assets/img/hero.webp" alt="" class="page-header-bg-image" width="1920" height="1080" loading="eager">
            <div class="page-header-overlay"></div>
        </div>
        <div class="container">
            <span class="page-header-label"><?php echo SITE_NAME; ?></span>
            <h1 class="page-header-title">Unsere Leistungen</h1>
            <p class="page-header-subtitle">Badsanierung, Fliesenarbeiten und Innenausbau – geplant, koordiniert und zuverlässig umgesetzt.</p>
        </div>
    </section>

    <!-- Badsanierung -->
    <section class="section" id="badsanierung-uebersicht">
        <div class="container">
            <div class="content-split">
                <div class="content-split-text">
                    <span class="section-label">Kernleistung</span>
                    <h2 class="section-title">Komplett-Badsanierung</h2>
                    <p>Unsere Kernleistung. Wir planen Ihr neues Bad in 3D, koordinieren alle Gewerke – Sanitär, Elektro, Estrich, Abdichtung, Fliesen – und übergeben Ihnen ein fertiges Bad. Alles über einen Ansprechpartner.</p>
                    <ul class="check-list">
                        <li>3D-Planung und Materialauswahl in unserer Ausstellung</li>
                        <li>Koordination aller Gewerke durch uns</li>
                        <li>Großformatfliesen, fugenlose Oberflächen, barrierefreie Lösungen</li>
                        <li>Verbindliches Angebot nach persönlichem Aufmaß</li>
                    </ul>
                    <a href="/badsanierung" class="btn btn-primary" style="margin-top: var(--space-lg);">Mehr zur Badsanierung</a>
                </div>
                <div class="content-split-visual">
                    <div class="content-split-image"><img src="/assets/img/badsanierung.webp" alt="Komplett-Badsanierung von Tokmak" width="600" height="450" loading="lazy"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fliesenarbeiten -->
    <section class="section section-alt" id="fliesenarbeiten">
        <div class="container">
            <div class="content-split content-split-reverse">
                <div class="content-split-text">
                    <span class="section-label">Fachkompetenz</span>
                    <h2 class="section-title">Fliesenarbeiten</h2>
                    <p>Ob klassische Formate, Großformat bis 120×120 cm oder Mosaik – wir verlegen Fliesen auf höchstem Niveau. Präzise Schnitte, saubere Übergänge, fachgerechte Abdichtung.</p>
                    <ul class="check-list">
                        <li>Wand- und Bodenfliesen in allen Formaten</li>
                        <li>Großformatfliesen mit Spezialwerkzeug</li>
                        <li>Außenbereiche: Terrassen und Balkone</li>
                        <li>Treppen und Sonderformate</li>
                    </ul>
                </div>
                <div class="content-split-visual">
                    <div class="content-split-image"><img src="/assets/img/fliessenarbeiten.webp" alt="Fliesenarbeiten von Tokmak" width="600" height="450" loading="lazy"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fugenlose Oberflächen -->
    <section class="section" id="fugenlos">
        <div class="container">
            <div class="content-split">
                <div class="content-split-text">
                    <span class="section-label">Spezialgebiet</span>
                    <h2 class="section-title">Fugenlose Oberflächen</h2>
                    <p>Fugenlose Wand- und Bodengestaltung mit Dracholin Cosmato. Hochwertig, pflegeleicht und visuell beeindruckend. Wir beraten Sie, ob diese Technik für Ihren Raum geeignet ist.</p>
                    <ul class="check-list">
                        <li>Dracholin Cosmato – mineralische Beschichtung</li>
                        <li>Nahtlose Oberflächen ohne Fugen</li>
                        <li>Für Bad, Küche und Wohnräume</li>
                    </ul>
                </div>
                <div class="content-split-visual">
                    <div class="content-split-image"><img src="/assets/img/fugenlos.webp" alt="Fugenlose Oberflächen mit Cosmato" width="600" height="450" loading="lazy"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Innenausbau -->
    <section class="section section-alt" id="innenausbau">
        <div class="container">
            <div class="content-split content-split-reverse">
                <div class="content-split-text">
                    <span class="section-label">Ergänzend</span>
                    <h2 class="section-title">Innenausbau</h2>
                    <p>Trockenbau, Spachtelarbeiten und Unterkonstruktionen – als eigenständige Leistung oder im Rahmen einer Sanierung. Saubere Ausführung, termingerecht und abgestimmt auf das Gesamtprojekt.</p>
                    <ul class="check-list">
                        <li>Trockenbau und Ständerwände</li>
                        <li>Deckenverkleidungen</li>
                        <li>Unterkonstruktionen für Verkleidungen</li>
                        <li>Spachtel- und Vorbereitungsarbeiten</li>
                    </ul>
                </div>
                <div class="content-split-visual">
                    <div class="placeholder-visual" style="min-height: 350px;"><span>Bild: Innenausbau</span></div>
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
                    <h2 class="cta-title">Welche Leistung passt zu Ihrem Projekt?</h2>
                    <p class="cta-text">Lassen Sie uns darüber sprechen. Unverbindlich und persönlich.</p>
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
