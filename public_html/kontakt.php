<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'Kontakt';
$pageDescription = 'Kontaktieren Sie die Tokmak GmbH für Ihr Badprojekt – unverbindliche Erstberatung in ' . SITE_REGION . '.';
$pageSlug        = 'kontakt';

$formStatus = $_GET['status'] ?? '';
$formFields = isset($_GET['fields']) ? explode(',', $_GET['fields']) : [];
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require_once INCLUDES_PATH . '/head-meta.php'; ?>
</head>
<body class="page-kontakt">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <section class="page-header">
        <div class="page-header-bg">
            <img src="/assets/img/hero.webp" alt="" class="page-header-bg-image" width="1920" height="1080" loading="eager">
            <div class="page-header-overlay"></div>
        </div>
        <div class="container">
            <span class="page-header-label">Projekt besprechen</span>
            <h1 class="page-header-title">Kontakt</h1>
            <p class="page-header-subtitle">Sprechen Sie mit uns über Ihr Badprojekt – persönlich, unverbindlich und strukturiert.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="contact-single">

                <div class="contact-form-wrap">

                    <?php if ($formStatus === 'success'): ?>
                    <div class="form-message form-message-success" role="alert">
                        <strong>Vielen Dank!</strong> Ihre Anfrage wurde erfolgreich gesendet. Wir melden uns innerhalb von 24 Stunden bei Ihnen.
                    </div>
                    <?php elseif ($formStatus === 'error'): ?>
                    <div class="form-message form-message-error" role="alert">
                        <strong>Fehler:</strong> Bitte überprüfen Sie Ihre Eingaben und versuchen Sie es erneut.
                    </div>
                    <?php elseif ($formStatus === 'rate_limit'): ?>
                    <div class="form-message form-message-error" role="alert">
                        <strong>Bitte warten:</strong> Sie haben kürzlich eine Nachricht gesendet. Versuchen Sie es in <?php echo FORM_RATE_LIMIT_SECONDS; ?> Sekunden erneut.
                    </div>
                    <?php elseif ($formStatus === 'mail_error'): ?>
                    <div class="form-message form-message-error" role="alert">
                        <strong>Fehler:</strong> Die Nachricht konnte nicht gesendet werden. Bitte kontaktieren Sie uns direkt telefonisch.
                    </div>
                    <?php endif; ?>

                    <?php include __DIR__ . "/includes/contact-form.php"; ?>
                </div>

            </div>
        </div>
    </section>

    <section class="section section-process-after">
        <div class="container">
            <div class="process-after-header">
                <span class="section-label">So geht es weiter</span>
                <h2 class="section-title">Was nach Ihrer Anfrage passiert</h2>
                <p class="section-subtitle">Kein Sofort-Angebot, sondern ein persönlicher Prozess. So stellen wir sicher, dass unser Angebot zu Ihrem Projekt passt.</p>
            </div>
            <ol class="process-after-steps">
                <li class="process-after-step"><span class="process-after-num">1</span><span class="process-after-text">Ihre Anfrage geht bei uns ein</span></li>
                <li class="process-after-step"><span class="process-after-num">2</span><span class="process-after-text">Wir melden uns innerhalb von 24 Stunden</span></li>
                <li class="process-after-step"><span class="process-after-num">3</span><span class="process-after-text">Persönliches Gespräch &amp; Aufmaß vor Ort</span></li>
                <li class="process-after-step"><span class="process-after-num">4</span><span class="process-after-text">3D-Planung &amp; detailliertes Festpreis-Angebot</span></li>
            </ol>
        </div>
    </section>

</main>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>
<?php require_once INCLUDES_PATH . '/scripts.php'; ?>
</body>
</html>
