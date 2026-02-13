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
        <div class="container">
            <span class="page-header-label">Projekt besprechen</span>
            <h1 class="page-header-title">Kontakt</h1>
            <p class="page-header-subtitle">Sprechen Sie mit uns über Ihr Badprojekt – persönlich, unverbindlich und strukturiert.</p>
        </div>
    </section>

    <!-- Erwartungsmanagement -->
    <section class="section">
        <div class="container">

            <!-- Was passiert nach der Anfrage -->
            <div class="section-header" style="margin-bottom: var(--space-2xl);">
                <span class="section-label">So geht es weiter</span>
                <h2 class="section-title">Was nach Ihrer Anfrage passiert</h2>
                <p class="section-subtitle">Kein Sofort-Angebot, sondern ein persönlicher Prozess. So stellen wir sicher, dass unser Angebot zu Ihrem Projekt passt.</p>
            </div>

            <div class="contact-process" style="margin-bottom: var(--space-3xl);">
                <div class="contact-process-steps">
                    <div class="contact-process-step"><strong>1</strong> Ihre Anfrage geht bei uns ein</div>
                    <div class="contact-process-step"><strong>2</strong> Wir melden uns innerhalb von 48h</div>
                    <div class="contact-process-step"><strong>3</strong> Persönliches Gespräch & Aufmaß vor Ort</div>
                    <div class="contact-process-step"><strong>4</strong> 3D-Planung & verbindliches Angebot</div>
                </div>
            </div>

            <div class="contact-grid">

                <!-- Kontaktinfos -->
                <div class="contact-info">
                    <h2 class="contact-info-title">So erreichen Sie uns</h2>
                    <address class="contact-details">
                        <div class="contact-detail">
                            <strong>Adresse</strong>
                            <p><?php echo CONTACT_ADDRESS_STREET; ?><br>
                            <?php echo CONTACT_ADDRESS_ZIP . ' ' . CONTACT_ADDRESS_CITY; ?></p>
                        </div>
                        <div class="contact-detail">
                            <strong>Telefon</strong>
                            <p><a href="tel:<?php echo CONTACT_PHONE; ?>"><?php echo CONTACT_PHONE_DISPLAY; ?></a></p>
                        </div>
                        <div class="contact-detail">
                            <strong>E-Mail</strong>
                            <p><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></p>
                        </div>
                        <div class="contact-detail">
                            <strong>Ausstellung</strong>
                            <p>Besichtigung nach Terminvereinbarung</p>
                        </div>
                    </address>

                    <div class="contact-trust">
                        <p>Unverbindliche Erstberatung. Persönlich, nicht automatisiert. Wir nehmen uns Zeit für Ihr Projekt.</p>
                    </div>
                </div>

                <!-- Vorqualifiziertes Anfrageformular -->
                <div class="contact-form-wrap">

                    <?php if ($formStatus === 'success'): ?>
                    <div class="form-message form-message-success" role="alert">
                        <strong>Vielen Dank!</strong> Ihre Anfrage wurde erfolgreich gesendet. Wir melden uns innerhalb von 48 Stunden bei Ihnen.
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

                    <form class="contact-form" action="/includes/form-handler.php" method="POST" novalidate>

                        <!-- Honeypot -->
                        <div class="form-field-hp" aria-hidden="true" tabindex="-1">
                            <label for="website_url">Website</label>
                            <input type="text" name="website_url" id="website_url" autocomplete="off" tabindex="-1">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name" class="form-label">Name <span class="required" aria-label="Pflichtfeld">*</span></label>
                                <input type="text" id="name" name="name" class="form-input<?php echo in_array('name', $formFields) ? ' is-invalid' : ''; ?>" required minlength="2" maxlength="100" placeholder="Ihr vollständiger Name" autocomplete="name">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">E-Mail <span class="required" aria-label="Pflichtfeld">*</span></label>
                                <input type="email" id="email" name="email" class="form-input<?php echo in_array('email', $formFields) ? ' is-invalid' : ''; ?>" required placeholder="ihre@email.de" autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="form-label">Telefon <span class="optional">(optional)</span></label>
                            <input type="tel" id="phone" name="phone" class="form-input<?php echo in_array('phone', $formFields) ? ' is-invalid' : ''; ?>" placeholder="+49 123 456 789" autocomplete="tel">
                        </div>

                        <!-- Vorqualifizierung -->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="project_type" class="form-label">Projektart <span class="required" aria-label="Pflichtfeld">*</span></label>
                                <select id="project_type" name="project_type" class="form-select<?php echo in_array('project_type', $formFields) ? ' is-invalid' : ''; ?>" required>
                                    <option value="">Bitte wählen</option>
                                    <option value="badsanierung">Komplett-Badsanierung</option>
                                    <option value="teilsanierung">Teilsanierung</option>
                                    <option value="fliesenarbeiten">Fliesenarbeiten</option>
                                    <option value="innenausbau">Innenausbau</option>
                                    <option value="sonstiges">Sonstiges</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="object_type" class="form-label">Objektart <span class="optional">(optional)</span></label>
                                <select id="object_type" name="object_type" class="form-select">
                                    <option value="">Bitte wählen</option>
                                    <option value="einfamilienhaus">Einfamilienhaus</option>
                                    <option value="eigentumswohnung">Eigentumswohnung</option>
                                    <option value="neubau">Neubau</option>
                                    <option value="gewerbe">Gewerbeobjekt</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="timeframe" class="form-label">Gewünschter Zeitraum <span class="optional">(optional)</span></label>
                            <select id="timeframe" name="timeframe" class="form-select">
                                <option value="">Bitte wählen</option>
                                <option value="asap">So bald wie möglich</option>
                                <option value="1-3">In 1–3 Monaten</option>
                                <option value="3-6">In 3–6 Monaten</option>
                                <option value="offen">Noch offen</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Nachricht <span class="required" aria-label="Pflichtfeld">*</span></label>
                            <textarea id="message" name="message" class="form-input form-textarea<?php echo in_array('message', $formFields) ? ' is-invalid' : ''; ?>" required minlength="10" maxlength="5000" rows="5" placeholder="Beschreiben Sie kurz Ihr Projekt – Raumgröße, Wünsche, offene Fragen..."></textarea>
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
        </div>
    </section>

</main>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>

<?php require_once INCLUDES_PATH . '/scripts.php'; ?>
</body>
</html>
