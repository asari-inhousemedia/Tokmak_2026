<?php
require_once __DIR__ . '/includes/config.php';

// Nur nach erfolgreicher Formularübermittlung erreichbar
if (empty($_SESSION['form_success'])) {
    header('Location: /kontakt');
    exit;
}
// Session-Flag nach Anzeige löschen (Reload verhindert erneute Anzeige)
unset($_SESSION['form_success']);

$pageTitle       = 'Vielen Dank';
$pageDescription = 'Ihre Anfrage wurde erfolgreich an die Tokmak GmbH gesendet.';
$pageSlug        = 'danke';
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require_once INCLUDES_PATH . '/head-meta.php'; ?>
</head>
<body class="page-danke">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <section class="page-header">
        <div class="page-header-bg">
            <img src="/assets/img/hero.webp" alt="" class="page-header-bg-image" width="1920" height="1080" loading="eager">
            <div class="page-header-overlay"></div>
        </div>
        <div class="container">
            <h1 class="page-header-title">Vielen Dank!</h1>
            <p class="page-header-subtitle">Ihre Anfrage ist bei uns eingegangen.</p>
        </div>
    </section>

    <section class="section section-thankyou">
        <div class="container content-narrow" style="text-align: center;">

            <div style="font-size: 3rem; margin-bottom: var(--space-lg);">&#10003;</div>

            <h2>Wir haben Ihre Nachricht erhalten.</h2>
            <p style="font-size: var(--text-lg); margin-bottom: var(--space-md); color: var(--color-text-light);">
                Vielen Dank für Ihr Interesse an einer Zusammenarbeit mit der Tokmak GmbH.
            </p>
            <p style="font-size: var(--text-lg); margin-bottom: var(--space-2xl); color: var(--color-text-light);">
                Wir melden uns schnellstmöglich bei Ihnen &ndash; in der Regel innerhalb von 48 Stunden.
            </p>

            <a href="/" class="btn btn-primary btn-lg">Zurück zur Startseite</a>

        </div>
    </section>

</main>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>

<?php require_once INCLUDES_PATH . '/scripts.php'; ?>
</body>
</html>
