<header class="site-header" id="site-header">
    <div class="header-inner container">
        <a href="/" class="site-logo" aria-label="Zur Startseite">
            <img src="/assets/img/TOKMAK_Logo.svg" alt="<?php echo SITE_NAME; ?> – <?php echo SITE_TAGLINE; ?>" width="160" height="48" class="logo-img">
            <!--<span class="logo-text"><?php echo SITE_NAME; ?></span>
            <span class="logo-tagline"><?php echo SITE_TAGLINE; ?></span>-->
        </a>

        <button class="nav-toggle" id="nav-toggle" aria-label="Navigation öffnen" aria-expanded="false" aria-controls="main-nav">
            <span class="nav-toggle-bar"></span>
            <span class="nav-toggle-bar"></span>
            <span class="nav-toggle-bar"></span>
        </button>

        <nav class="main-nav" id="main-nav" aria-label="Hauptnavigation">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="/leistungen" class="nav-link<?php echo ($pageSlug === 'leistungen') ? ' is-active' : ''; ?>">Leistungen</a>
                </li>
                <li class="nav-item">
                    <a href="/badsanierung" class="nav-link<?php echo ($pageSlug === 'badsanierung') ? ' is-active' : ''; ?>">Badsanierung</a>
                </li>
                <li class="nav-item">
                    <a href="/referenzen" class="nav-link<?php echo ($pageSlug === 'referenzen') ? ' is-active' : ''; ?>">Referenzen</a>
                </li>
                <li class="nav-item">
                    <a href="/ueber-uns" class="nav-link<?php echo ($pageSlug === 'ueber-uns') ? ' is-active' : ''; ?>">Über uns</a>
                </li>
                <li class="nav-item">
                    <a href="/karriere" class="nav-link<?php echo ($pageSlug === 'karriere') ? ' is-active' : ''; ?>">Karriere</a>
                </li>
                <li class="nav-item">
                    <a href="/kontakt" class="nav-link nav-link-cta<?php echo ($pageSlug === 'kontakt') ? ' is-active' : ''; ?>">Kontakt</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
