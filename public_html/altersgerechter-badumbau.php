<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle       = 'Altersgerechter Badumbau';
$pageDescription = 'Altersgerechter Badumbau in ' . SITE_REGION . ' – bodengleiche Dusche, barrierefreies Bad, Förderberatung. Tokmak GmbH – ein Ansprechpartner, alles aus einer Hand.';
$pageSlug        = 'altersgerechter-badumbau';
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php require_once INCLUDES_PATH . '/head-meta.php'; ?>
</head>
<body class="page-altersgerechter-badumbau">

<?php require_once INCLUDES_PATH . '/header.php'; ?>

<main class="site-main">

    <section class="page-header">
        <div class="page-header-bg">
            <img src="/assets/img/altersgerecht.webp" alt="" class="page-header-bg-image" width="1920" height="1080" loading="eager">
            <div class="page-header-overlay"></div>
        </div>
        <div class="container">
            <span class="page-header-label">Tokmak GmbH – <?php echo SITE_REGION; ?></span>
            <h1 class="page-header-title">Altersgerechter Badumbau</h1>
            <p class="page-header-subtitle">Sicher, komfortabel, selbstbestimmt – wir planen und bauen Ihr barrierefreies Bad. Alles aus einer Hand, mit einem festen Ansprechpartner.</p>
            <div class="page-header-cta"><a href="#anfrage" class="btn btn-primary btn-lg">Jetzt unverbindlich anfragen</a></div>
        </div>
    </section>

    <!-- Einleitung -->
    <section class="section">
        <div class="container">
            <div class="content-split">
                <div class="content-split-text">
                    <span class="section-label">Warum jetzt umbauen</span>
                    <h2 class="section-title">Das Bad sollte mitwachsen – nicht zum Hindernis werden.</h2>
                    <p>Eine Badewanne, über die man steigen muss. Ein rutschiger Boden. Kein Haltegriff, wenn man ihn braucht. Das sind keine Kleinigkeiten – das sind Risiken.</p>
                    <p>Ein altersgerechter Badumbau schafft Sicherheit, erhöht den Wohnkomfort und steigert den Wert Ihrer Immobilie. Am besten plant man ihn, bevor er dringend wird.</p>
                    <ul class="check-list">
                        <li>Bodengleiche Dusche statt Badewanne oder hoher Duschtasse</li>
                        <li>Rutschfeste Bodenbeläge und Haltesysteme</li>
                        <li>Schwellenloser Zugang, ausreichend Bewegungsfläche</li>
                        <li>Beratung zu KfW- und Pflegekassen-Förderung</li>
                    </ul>
                </div>
                <div class="content-split-visual">
                    <img src="/assets/img/altersgerecht.webp" alt="Altersgerechter Badumbau – Tokmak GmbH" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Leistungen -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Was wir umbauen</span>
                <h2 class="section-title">Was ein altersgerechter Badumbau beinhaltet</h2>
                <p class="section-subtitle">Von der Planung bis zur Übergabe – alle Gewerke koordiniert, ein Ansprechpartner.</p>
            </div>

            <div class="grid grid-3">
                <div class="card">
                    <h3 class="card-title">Bodengleiche Dusche</h3>
                    <p class="card-text">Schwellenloser Einstieg, rutschfester Belag, gefälliger Ablauf. Der häufigste und wirkungsvollste Umbauschritt für mehr Sicherheit im Bad.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Haltesysteme & Griffe</h3>
                    <p class="card-text">Wandmontierte Haltegriffe an Dusche, WC und Waschtisch – DIN-gerecht, belastbar, dezent integriert ohne Klinik-Optik.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Rutschfeste Beläge</h3>
                    <p class="card-text">Fliesen der Rutschklasse R10 bis R12, oder fugenlose Oberflächen mit Anti-Slip-Eigenschaften. Sicherheit und Ästhetik schließen sich nicht aus.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Sitzmöglichkeiten</h3>
                    <p class="card-text">Duschsitz, Klappsitz oder ein komplett barrierefrei geplanter Duschbereich mit Sitzbank – je nach Platzverhältnissen und Wunsch.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Badewanne entfernen</h3>
                    <p class="card-text">Kompletter Rückbau der alten Badewanne, Neugestaltung der Fläche als Duschbereich oder Sitzbad. Inklusive Estrich, Abdichtung, Fliesen.</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Förderberatung</h3>
                    <p class="card-text">Wir informieren Sie über KfW-Programm 455-B und Zuschüsse der Pflegekasse (bis 4.000 €). Welche Maßnahmen förderbar sind, klären wir gemeinsam.</p>
                </div>
            </div>
        </div>
    </section>

    <?php $ctaHeadline = 'Bereit für ein sicheres, barrierefreies Bad?'; include __DIR__ . '/includes/cta-band.php'; ?>

    <!-- Förderung -->
    <section class="section">
        <div class="container">
            <div class="content-split content-split-reverse">
                <div class="content-split-text">
                    <span class="section-label">Finanzielle Unterstützung</span>
                    <h2 class="section-title">Förderung nutzen – Umbau günstiger machen.</h2>
                    <p>Für altersgerechte Umbauten gibt es staatliche Förderprogramme, die viele Eigentümer und Mieter nicht kennen.</p>
                    <ul class="check-list">
                        <li><strong>KfW-Programm 455-B:</strong> Bis zu 6.250 € Zuschuss für barrierereduzierende Maßnahmen im Bestand</li>
                        <li><strong>Pflegekasse:</strong> Bis zu 4.000 € Zuschuss bei anerkanntem Pflegegrad (§ 40 SGB XI)</li>
                        <li><strong>Berufsgenossenschaft:</strong> Kann bei Arbeitsunfall-bedingtem Umbaubedarf unterstützen</li>
                    </ul>
                    <p>Wir beraten Sie im Erstgespräch welche Förderung für Ihr Projekt realistisch ist. Kein Bürokratie-Chaos – einfach nachfragen.</p>
                </div>
                <div class="content-split-visual">
                    <img src="/assets/img/hero.webp" alt="Beratung Badumbau – Tokmak GmbH" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-md);" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <?php $ctaHeadline = 'Förderung nutzen – jetzt unverbindlich anfragen.'; include __DIR__ . '/includes/cta-band.php'; ?>

    <!-- Prozess -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header is-centered">
                <span class="section-label">Ihr Weg zum barrierefreien Bad</span>
                <h2 class="section-title">So läuft der Umbau bei uns ab</h2>
                <p class="section-subtitle">Transparent, koordiniert, termingerecht.</p>
            </div>

            <div class="grid grid-2" style="max-width: 900px; margin-inline: auto;">
                <div class="feature-block">
                    <h3 class="feature-title">1. Erstberatung & Aufmaß</h3>
                    <p class="feature-text">Wir kommen zu Ihnen, schauen uns die Situation an und besprechen was möglich und sinnvoll ist. Unverbindlich, ca. 60 Minuten.</p>
                </div>
                <div class="feature-block">
                    <h3 class="feature-title">2. Planung & Fördercheck</h3>
                    <p class="feature-text">Wir planen den Umbau in 3D und prüfen welche Förderungen für Ihr Projekt infrage kommen. Sie sehen das Ergebnis, bevor wir anfangen.</p>
                </div>
                <div class="feature-block">
                    <h3 class="feature-title">3. Verbindliches Angebot</h3>
                    <p class="feature-text">Transparente Kalkulation, alle Gewerke aufgeführt, keine versteckten Kosten. Sie entscheiden in Ruhe.</p>
                </div>
                <div class="feature-block">
                    <h3 class="feature-title">4. Umbau & Übergabe</h3>
                    <p class="feature-text">Alle Gewerke koordiniert durch uns. Saubere Übergabe, termingerecht. Typische Dauer: 1–3 Wochen je nach Umfang.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Inline-Kontaktformular -->
    <section class="section section-alt" id="anfrage">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-sidebar">
                    <div class="contact-sidebar-header">
                        <span class="section-label">Ihr Umbau. Ihr Komfort.</span>
                        <h2 class="section-title">Anfrage direkt stellen</h2>
                        <p class="section-subtitle">Beschreiben Sie kurz Ihr Vorhaben – wir melden uns innerhalb von 48 Stunden und klären Förderoptionen gemeinsam.</p>
                    </div>
                </div>
                <div class="contact-form-wrap">
                    <?php include __DIR__ . "/includes/contact-form.php"; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/sticky-cta.php'; ?>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>
<?php require_once INCLUDES_PATH . '/scripts.php'; ?>
</body>
</html>
