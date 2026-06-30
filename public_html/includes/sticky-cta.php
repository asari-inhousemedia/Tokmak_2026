<?php
/**
 * Mobile Sticky-CTA-Bar – immer sichtbar am unteren Rand (nur Mobil).
 * Zwei Wege: Anrufen + zum Anfrageformular (#anfrage).
 */
$telRaw = defined('CONTACT_PHONE') ? preg_replace('/[^0-9+]/', '', CONTACT_PHONE) : '';
?>
<div class="sticky-cta" role="navigation" aria-label="Schnellkontakt">
    <?php if ($telRaw !== ''): ?>
    <a href="tel:<?php echo htmlspecialchars($telRaw, ENT_QUOTES, 'UTF-8'); ?>" class="sticky-cta-btn sticky-cta-call">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        <span>Anrufen</span>
    </a>
    <?php endif; ?>
    <a href="#anfrage" class="sticky-cta-btn sticky-cta-form">
        <span>Jetzt anfragen</span>
    </a>
</div>
