<?php
/**
 * Dezenter Inline-CTA – fuegt sich ruhig zwischen die Sektionen,
 * leitet zum Anfrageformular (#anfrage).
 * Optional vor dem include: $ctaHeadline (kurze Zeile ueber dem Button).
 */
$ctaHeadline = isset($ctaHeadline) ? $ctaHeadline : 'Interesse an Ihrem Projekt?';
?>
<div class="cta-inline">
    <div class="container cta-inline-inner">
        <p class="cta-inline-text"><?php echo htmlspecialchars($ctaHeadline, ENT_QUOTES, 'UTF-8'); ?></p>
        <a href="#anfrage" class="btn btn-primary cta-inline-btn">Jetzt unverbindlich anfragen</a>
    </div>
</div>
<?php $ctaHeadline = null; ?>
