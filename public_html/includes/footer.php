<footer class="site-footer">
    <div class="container footer-inner">
        <div class="footer-grid">
            <div class="footer-col footer-col-brand">
                <a href="/" class="footer-logo-link" aria-label="Zur Startseite">
                    <img src="/assets/img/TOKMAK_Logo.png" alt="<?php echo SITE_NAME; ?>" width="480" height="144" class="footer-logo-img" loading="lazy">
                </a>
                <div class="footer-inhaber">
                    <div class="footer-inhaber-portrait">
                        <img src="/assets/img/inhaber.webp" alt="Tufan Tokmak – Inhaber" width="80" height="80" loading="lazy">
                    </div>
                    <div class="footer-inhaber-info">
                        <span class="footer-inhaber-name">Tufan Tokmak</span>
                        <span class="footer-inhaber-role">Inhaber</span>
                        <blockquote class="footer-inhaber-quote">&bdquo;Qualit&auml;t zeigt sich da, wo man keine Sicht mehr hat.&ldquo;</blockquote>
                    </div>
                </div>
            </div>

            <div class="footer-col">
                <h3 class="footer-heading">Leistungen</h3>
                <ul class="footer-links">
                    <li><a href="/badsanierung">Badsanierung</a></li>
                    <li><a href="/leistungen">Fliesenarbeiten</a></li>
                    <li><a href="/leistungen">Innenausbau</a></li>
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
                <div class="footer-legal-inline">
                    <a href="/impressum">Impressum</a>
                    <span class="footer-legal-sep">&middot;</span>
                    <a href="/datenschutz">Datenschutz</a>
                </div>
            </div>

            <div class="footer-col footer-col-map">
                <h3 class="footer-heading">Unser Standort</h3>
                <div class="footer-map-wrapper">
                    <div class="footer-map">
                        <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=9.2408%2C48.4215%2C9.2608%2C48.4315&layer=mapnik&marker=48.4265%2C9.2508" width="100%" height="100%" style="border:0;" loading="lazy" title="Standort <?php echo SITE_NAME; ?>"></iframe>
                    </div>
                    <div class="footer-map-address">
                        <svg class="footer-map-pin" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span><?php echo CONTACT_ADDRESS_STREET; ?>, <?php echo CONTACT_ADDRESS_ZIP . ' ' . CONTACT_ADDRESS_CITY; ?></span>
                    </div>
                </div>
                <a href="/kontakt" class="btn btn-outline-light btn-sm footer-cta">Jetzt unverbindlich anfragen</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Alle Rechte vorbehalten.</p>
        </div>
    </div>
</footer>
