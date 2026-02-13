    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo htmlspecialchars($pageTitle); ?> | <?php echo SITE_NAME; ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo SITE_URL . '/' . ($pageSlug === 'startseite' ? '' : $pageSlug); ?>">

    <!-- OpenGraph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?> | <?php echo SITE_NAME; ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . '/' . ($pageSlug === 'startseite' ? '' : $pageSlug); ?>">
    <meta property="og:locale" content="de_DE">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?> – <?php echo SITE_TAGLINE; ?>">
    <!-- <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/img/og-image.jpg"> -->

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/png" href="/assets/img/favicon.png"> -->

    <!-- Karla Font (Lokal, DSGVO-konform) -->
    <link rel="preload" href="<?php echo ASSETS_URL; ?>/fonts/karla-bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo ASSETS_URL; ?>/fonts/karla-regular.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Leaflet Map (DSGVO-konform, kein Google) -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>/css/styles.css">

    <?php if ($pageSlug === 'startseite'): ?>
    <!-- JSON-LD LocalBusiness -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "<?php echo SITE_NAME; ?>",
        "description": "<?php echo SITE_CLAIM; ?> in <?php echo SITE_REGION; ?>. Badsanierung, Fliesenarbeiten, Innenausbau.",
        "url": "<?php echo SITE_URL; ?>",
        "telephone": "<?php echo CONTACT_PHONE; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo CONTACT_ADDRESS_STREET; ?>",
            "postalCode": "<?php echo CONTACT_ADDRESS_ZIP; ?>",
            "addressLocality": "<?php echo CONTACT_ADDRESS_CITY; ?>",
            "addressCountry": "DE"
        },
        "areaServed": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": "48.4265",
                "longitude": "9.2508"
            },
            "geoRadius": "50000"
        },
        "priceRange": "$$",
        "image": "<?php echo SITE_URL; ?>/assets/img/og-image.jpg"
    }
    </script>
    <?php endif; ?>
