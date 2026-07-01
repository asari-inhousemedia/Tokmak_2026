<?php
/**
 * Zentrale Multi-Step-Kontaktformular-Komponente.
 * Eine Quelle fuer alle Seiten – verhindert Copy-Paste-Drift.
 *
 * Optional vor dem include setzbar:
 *   $formPreselect : project_type fuer Landingpages (badsanierung|altersgerecht|fugenloses-bad|sonstiges).
 *                    Gesetzt -> Karten-Schritt entfaellt, project_type als Hidden-Feld.
 *                    Leer    -> Schritt 1 zeigt die 4 Auswahl-Karten.
 *   $formFields    : Array fehlerhafter Felder (fuer is-invalid-Markierung nach ?status=error).
 */
$formFields = isset($formFields) && is_array($formFields) ? $formFields : [];
$inv = function (string $field) use ($formFields): string {
    return in_array($field, $formFields, true) ? ' is-invalid' : '';
};
?>
<form id="kontakt-formular" class="contact-form contact-form-multistep" action="/includes/form-handler.php" method="POST" enctype="multipart/form-data" novalidate>

    <div class="form-field-hp" aria-hidden="true" tabindex="-1">
        <label for="website_url">Website</label>
        <input type="text" name="website_url" id="website_url" autocomplete="off" tabindex="-1">
    </div>
    <input type="hidden" name="gclid" id="gclid_field" value="">

    <div class="ms-progress" aria-hidden="true">
        <span class="ms-progress-bar"><span class="ms-progress-fill"></span></span>
        <span class="ms-progress-label">Schritt <span class="ms-cur">1</span> von <span class="ms-total">3</span></span>
    </div>

    <!-- SCHRITT 1: Projektauswahl -->
    <div class="ms-step" data-step="cards">
        <h3 class="ms-step-title">Was planen Sie?</h3>
        <div class="ms-cards">
            <label class="ms-card">
                <input type="radio" name="project_type" value="badsanierung">
                <img src="/assets/img/badsanierung.webp" alt="Komplett-Badsanierung" loading="lazy">
                <span class="ms-card-label">Komplett-Badsanierung</span>
                <span class="ms-card-check" aria-hidden="true">&check;</span>
            </label>
            <label class="ms-card">
                <input type="radio" name="project_type" value="altersgerecht">
                <img src="/assets/img/altersgerecht.png" alt="Altersgerechter Badumbau" loading="lazy">
                <span class="ms-card-label">Altersgerechter Umbau</span>
                <span class="ms-card-check" aria-hidden="true">&check;</span>
            </label>
            <label class="ms-card">
                <input type="radio" name="project_type" value="fugenloses-bad">
                <img src="/assets/img/fugenlos.webp" alt="Fugenloses Bad" loading="lazy">
                <span class="ms-card-label">Fugenloses Bad</span>
                <span class="ms-card-check" aria-hidden="true">&check;</span>
            </label>
            <label class="ms-card">
                <input type="radio" name="project_type" value="sonstiges">
                <img src="/assets/img/materialien.webp" alt="Sonstiges Projekt" loading="lazy">
                <span class="ms-card-label">Sonstiges</span>
                <span class="ms-card-check" aria-hidden="true">&check;</span>
            </label>
        </div>
    </div>

    <!-- SCHRITT: Kontaktdaten -->
    <div class="ms-step" data-ga="contact">
        <h3 class="ms-step-title">Ihre Kontaktdaten</h3>
        <div class="form-group">
            <label for="name" class="form-label">Name <span class="required" aria-label="Pflichtfeld">*</span></label>
            <input type="text" id="name" name="name" class="form-input<?php echo $inv('name'); ?>" required minlength="2" maxlength="100" placeholder="Ihr vollständiger Name" autocomplete="name">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">E-Mail <span class="required" aria-label="Pflichtfeld">*</span></label>
            <input type="email" id="email" name="email" class="form-input<?php echo $inv('email'); ?>" required placeholder="ihre@email.de" autocomplete="email">
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Telefon <span class="optional">(optional)</span></label>
            <input type="tel" id="phone" name="phone" class="form-input<?php echo $inv('phone'); ?>" placeholder="+49 123 456 789" autocomplete="tel">
        </div>
        <div class="ms-nav">
            <button type="button" class="btn btn-ghost ms-prev">Zurück</button>
            <button type="button" class="btn btn-primary btn-lg ms-next">Weiter</button>
        </div>
    </div>

    <!-- SCHRITT: Details (optional) -->
    <div class="ms-step" data-ga="details">
        <h3 class="ms-step-title">Details <span class="optional">(optional)</span></h3>
        <div class="form-row">
            <div class="form-group">
                <label for="plz" class="form-label">Postleitzahl <span class="optional">(optional)</span></label>
                <input type="text" id="plz" name="plz" class="form-input" maxlength="5" pattern="[0-9]{5}" autocomplete="postal-code" inputmode="numeric">
            </div>
            <div class="form-group">
                <label for="stadt" class="form-label">Ort</label>
                <input type="text" id="stadt" name="stadt" class="form-input" placeholder="wird automatisch erkannt" autocomplete="address-level2">
            </div>
        </div>
        <div class="form-row">
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
            <div class="form-group">
                <label for="timeframe" class="form-label">Zeitraum <span class="optional">(optional)</span></label>
                <select id="timeframe" name="timeframe" class="form-select">
                    <option value="">Bitte wählen</option>
                    <option value="asap">So bald wie möglich</option>
                    <option value="1-3">In 1–3 Monaten</option>
                    <option value="3-6">In 3–6 Monaten</option>
                    <option value="offen">Noch offen</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="form-label">Nachricht <span class="optional">(optional)</span></label>
            <textarea id="message" name="message" class="form-input form-textarea<?php echo $inv('message'); ?>" maxlength="5000" rows="4" placeholder="Beschreiben Sie kurz Ihr Projekt – Raumgröße, Wünsche, offene Fragen..."></textarea>
        </div>
        <div class="form-group">
            <label for="photos" class="form-label">Fotos Ihres Bades <span class="optional">(optional, max. 3 Bilder, je 5 MB)</span></label>
            <input type="file" id="photos" name="photos[]" class="form-input form-file" multiple accept=".jpg,.jpeg,.png,.webp,.heic,image/jpeg,image/png,image/webp,image/heic">
            <span class="form-hint">Erlaubte Formate: JPG, PNG, WebP, HEIC</span>
        </div>
        <div class="form-group">
            <p class="form-privacy">
                Mit dem Absenden stimmen Sie der Verarbeitung Ihrer Daten gemäß unserer
                <a href="/datenschutz" target="_blank">Datenschutzerklärung</a> zu.
            </p>
        </div>
        <div class="ms-nav">
            <button type="button" class="btn btn-ghost ms-prev">Zurück</button>
            <button type="submit" class="btn btn-primary btn-lg">Jetzt unverbindlich anfragen</button>
        </div>
    </div>
</form>
