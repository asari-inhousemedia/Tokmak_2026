<?php
/**
 * Inline-CTA-Band – leitet zum Anfrageformular (#anfrage).
 * Optional vor dem include: $ctaHeadline (Ueberschrift).
 */
$ctaHeadline = isset($ctaHeadline) ? $ctaHeadline : 'Bereit für Ihr neues Bad?';
?>
<section class="cta-band">
    <div class="container cta-band-inner">
        <p class="cta-band-text"><?php echo htmlspecialchars($ctaHeadline, ENT_QUOTES, 'UTF-8'); ?></p>
        <a href="#anfrage" class="btn btn-primary btn-lg cta-band-btn">Jetzt unverbindlich anfragen</a>
    </div>
</section>
<?php $ctaHeadline = null; ?>
