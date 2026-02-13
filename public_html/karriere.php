<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'Karriere';
$pageDescription = 'Karriere bei Tokmak GmbH – Wir suchen Fliesenleger, Trockenbauer und Auszubildende in ' . SITE_REGION . '.';
$pageSlug        = 'karriere';
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require_once INCLUDES_PATH . '/head-meta.php'; ?>
</head>
<body class="page-karriere">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <section class="page-header">
        <div class="page-header-bg">
            <img src="/assets/img/hero.webp" alt="" class="page-header-bg-image" width="1920" height="1080" loading="eager">
            <div class="page-header-overlay"></div>
        </div>
        <div class="container">
            <span class="page-header-label">Team verstärken</span>
            <h1 class="page-header-title">Karriere bei Tokmak</h1>
            <p class="page-header-subtitle">Wir suchen Fachkräfte, die Qualität genauso ernst nehmen wie wir.</p>
        </div>
    </section>

    <!-- Warum Tokmak -->
    <section class="section">
        <div class="container">
            <div class="section-header is-centered">
                <span class="section-label">Warum Tokmak</span>
                <h2 class="section-title">Was Sie bei uns erwartet</h2>
                <p class="section-subtitle">Wir bieten ein Arbeitsumfeld, in dem Qualität zählt – nicht Masse.</p>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon" aria-hidden="true">&#9733;</div>
                    <h3 class="benefit-title">Anspruchsvolle Projekte</h3>
                    <p class="benefit-text">Großformatfliesen, fugenlose Oberflächen, Komplett-Badsanierungen – abwechslungsreiche Arbeit auf hohem Niveau.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon" aria-hidden="true">&#9829;</div>
                    <h3 class="benefit-title">Faires Miteinander</h3>
                    <p class="benefit-text">Kleines Team, direkte Kommunikation, klare Verantwortlichkeiten. Kein anonymer Großbetrieb.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon" aria-hidden="true">&#9650;</div>
                    <h3 class="benefit-title">Weiterentwicklung</h3>
                    <p class="benefit-text">Schulungen zu neuen Techniken und Materialien. Wer Qualität liefern will, muss dazulernen können.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Offene Stellen -->
    <section class="section section-alt" id="stellen">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Offene Stellen</span>
                <h2 class="section-title">Aktuelle Stellenangebote</h2>
            </div>

            <div class="grid grid-2" style="max-width: 900px;">
                <div class="feature-block">
                    <h3 class="feature-title">Fliesenleger/in (m/w/d)</h3>
                    <p class="feature-text">Erfahrung mit Großformat und anspruchsvollen Verlegetechniken. Vollzeit, unbefristet.</p>
                </div>
                <div class="feature-block">
                    <h3 class="feature-title">Trockenbauer/in (m/w/d)</h3>
                    <p class="feature-text">Trockenbau im Rahmen unserer Badsanierungen. Teamfähigkeit und saubere Arbeitsweise.</p>
                </div>
                <div class="feature-block">
                    <h3 class="feature-title">Auszubildende/r (m/w/d)</h3>
                    <p class="feature-text">Ausbildung zum Fliesen-, Platten- und Mosaikleger. Praxis von Anfang an.</p>
                </div>
                <div class="feature-block">
                    <h3 class="feature-title">Initiativbewerbung</h3>
                    <p class="feature-text">Ihre Stelle ist nicht dabei? Schreiben Sie uns trotzdem – wir freuen uns über motivierte Fachkräfte.</p>
                </div>
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
                    <h2 class="cta-title">Interesse? Melden Sie sich bei uns.</h2>
                    <p class="cta-text">Schicken Sie uns eine kurze Nachricht oder rufen Sie an. Unkompliziert und direkt.</p>
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
