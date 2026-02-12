<footer class="site-footer">
    <div class="container footer-inner">
        <div class="footer-grid">
            <div class="footer-col">
                <span class="footer-brand"><?php echo SITE_NAME; ?></span>
                <p class="footer-tagline"><?php echo SITE_TAGLINE; ?></p>
                <p class="footer-desc">Komplett-Badsanierung, Fliesenarbeiten und Innenausbau – geplant, koordiniert und zuverlässig umgesetzt.</p>
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
