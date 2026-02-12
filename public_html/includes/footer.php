<footer class="site-footer">
    <div class="container footer-inner">
        <div class="footer-grid">
            <div class="footer-col footer-col-brand">
                <a href="/" class="footer-logo-link" aria-label="Zur Startseite">
                    <img src="/assets/img/TOKMAK_Logo.png" alt="<?php echo SITE_NAME; ?>" width="320" height="96" class="footer-logo-img" loading="lazy">
                </a>
                <div class="footer-inhaber">
                    <div class="footer-inhaber-portrait">
                        <img src="/assets/img/inhaber.webp" alt="Tufan Tokmak – Inhaber" width="80" height="80" loading="lazy">
                    </div>
                    <div class="footer-inhaber-info">
                        <span class="footer-inhaber-name">Tufan Tokmak</span>
                        <span class="footer-inhaber-role">Inhaber</span>
                        <blockquote class="footer-inhaber-quote">&bdquo;Qualität zeigt sich da, wo man keine Sicht mehr hat.&ldquo;</blockquote>
                    </div>
                </div>
            </div>

            <div class="footer-col">
                <h3 class="footer-heading">Leistungen</h3>
                <ul class="footer-links">
                    <li><a href="/badsanierung">Badsanierung</a></li>
                    <li><a href="/leistungen">Fliesenarbeiten</a></li>
                    <li><a href="/leistungen">Innenausbau</a></li>
                    <li><a href="/referenzen">Referenzen</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3 class="footer-heading">Kontakt</h3>
                <address class="footer-address">
                    <?php echo CONTACT_ADDRESS_STREET; ?><br>
                    <?php echo CONTACT_ADDRESS_ZIP . ' ' . CONTACT_ADDRESS_CITY; ?><br><br>
                    <a href="tel:<?php echo CONTACT_PHONE; ?>"><?php echo CONTACT_PHONE_DISPLAY; ?></a><br>
                    <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>
                </address>
            </div>

            <div class="footer-col">
                <h3 class="footer-heading">Rechtliches</h3>
                <ul class="footer-links">
                    <li><a href="/impressum">Impressum</a></li>
                    <li><a href="/datenschutz">Datenschutz</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Alle Rechte vorbehalten.</p>
        </div>
    </div>
</footer>
