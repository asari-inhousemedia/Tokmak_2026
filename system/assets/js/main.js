/* ============================================
   DIGITAL CONTROL CENTER – MAIN JS
   ============================================
   Liest CLIENT-Konfiguration und rendert
   das Dashboard dynamisch.
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {
    injectColors();
    renderHeader();
    renderHero();
    renderDashboard();
    renderExtensions();
    renderFooter();
});

/* --- Farben aus Config in CSS Custom Properties --- */
function injectColors() {
    const root = document.documentElement;
    const c = CLIENT.colors;
    root.style.setProperty('--color-primary', c.primary);
    root.style.setProperty('--color-primary-hover', c.primaryHover);
    root.style.setProperty('--color-bg', c.background);
    root.style.setProperty('--color-surface', c.surface);
    root.style.setProperty('--color-surface-border', c.surfaceBorder);
    root.style.setProperty('--color-text', c.text);
    root.style.setProperty('--color-text-muted', c.textMuted);
}

/* --- Header --- */
function renderHeader() {
    document.getElementById('site-header').innerHTML = `
        <div class="container">
            <div class="header-inner">
                <div class="header-brand">
                    <div class="header-logo">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7"/>
                            <rect x="14" y="3" width="7" height="7"/>
                            <rect x="3" y="14" width="7" height="7"/>
                            <rect x="14" y="14" width="7" height="7"/>
                        </svg>
                    </div>
                    <div>
                        <div class="header-client-name">${CLIENT.name}</div>
                    </div>
                </div>
            </div>
        </div>
    `;
}

/* --- Hero --- */
function renderHero() {
    document.getElementById('hero').innerHTML = `
        <div class="container">
            <div class="hero-center">
                <div class="hero-product">DigiStart Pro</div>
                <h1 class="hero-headline">Management Dashboard</h1>
                <p class="hero-subline">Alle Systeme, Zugänge und digitalen Bausteine Ihres Unternehmens – strukturiert an einem Ort.</p>
                <div class="system-status">
                    <span class="status-dot"></span>
                    <span class="status-label">System aktiv</span>
                    <span>seit ${CLIENT.systemStartDate}</span>
                </div>
            </div>
        </div>
    `;
}

/* --- Dashboard Cards Definition --- */
function getDashboardCards() {
    return [
        {
            id: 'domain',
            title: 'Domain & Hosting',
            description: 'Ihre registrierte Domain und alle Subdomains – gehostet bei All-Inkl.',
            link: CLIENT.links.website,
            btnText: 'Website öffnen',
            domainList: true,
            icon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <line x1="2" y1="12" x2="22" y2="12"/>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
            </svg>`
        },
        {
            id: 'email',
            title: 'E-Mail',
            description: 'Ihre geschäftlichen E-Mail-Adressen unter Ihrer eigenen Domain.',
            link: CLIENT.links.webmail,
            btnText: 'Webmail öffnen',
            emailList: true,
            extraLinks: [
                { label: 'E-Mail-Signatur', link: CLIENT.links.emailSignature },
                { label: 'Einrichtungsanleitung', link: CLIENT.links.emailSetupGuide }
            ],
            icon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                <polyline points="22,6 12,13 2,6"/>
            </svg>`
        },
        {
            id: 'gmail',
            title: 'Google Konto',
            description: 'Das zentrale Google-Konto Ihres Unternehmens – Zugang zu Gmail, Drive, Kalender und allen Google-Diensten.',
            link: CLIENT.links.gmail,
            btnText: 'Google Konto öffnen',
            icon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"/>
                <path d="M2 8l10 6 10-6"/>
            </svg>`
        },
        {
            id: 'google',
            title: 'Google Unternehmensprofil',
            description: 'Ihr Eintrag auf Google Maps und in der lokalen Suche – für regionale Sichtbarkeit.',
            link: CLIENT.links.googleProfile,
            btnText: 'Profil verwalten',
            icon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                <circle cx="12" cy="10" r="3"/>
            </svg>`
        },
        {
            id: 'reviews',
            title: 'Google Rezensionen',
            description: 'Direkter Link für Kundenbewertungen – teilen Sie diesen Link oder den QR-Code mit zufriedenen Kunden.',
            link: CLIENT.links.googleReview,
            btnText: 'Rezensionslink öffnen',
            qrCode: true,
            icon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>`
        },
        {
            id: 'drive',
            title: 'Digitale Ablage',
            description: 'Zentraler Speicherort für alle projektrelevanten Dateien, Logos und Dokumente.',
            link: CLIENT.links.drive,
            btnText: 'Ablage öffnen',
            icon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>
            </svg>`
        },
        {
            id: 'branding',
            title: 'Branding',
            description: 'Ihre Markenfarben, Schriften und Logo-Dateien auf einen Blick.',
            link: CLIENT.links.logoDownload,
            btnText: 'Logo & Dateien laden',
            brandingInfo: true,
            icon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>`
        },
        {
            id: 'credentials',
            title: 'Zugangsdaten',
            description: 'Übersicht aller relevanten Zugangsdaten und Passwörter zu Ihren digitalen Systemen.',
            link: CLIENT.links.signatureDownload,
            btnText: 'Zugänge anzeigen',
            icon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>`
        },
        {
            id: 'walkthrough',
            title: 'Projekt-Erklärung',
            description: 'Video-Walkthrough durch alle umgesetzten Systeme und deren Bedienung.',
            link: CLIENT.links.loomVideo,
            btnText: 'Video ansehen',
            icon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="5 3 19 12 5 21 5 3"/>
            </svg>`
        },
        {
            id: 'documentation',
            title: 'Dokumentation',
            description: 'Technische Dokumentation aller Systeme, Strukturen und Konfigurationen.',
            link: CLIENT.links.documentation,
            btnText: 'Dokumentation öffnen',
            icon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                <polyline points="14 2 14 8 20 8"/>
                <line x1="16" y1="13" x2="8" y2="13"/>
                <line x1="16" y1="17" x2="8" y2="17"/>
                <polyline points="10 9 9 9 8 9"/>
            </svg>`
        }
    ];
}

/* --- Dashboard rendern --- */
function renderDashboard() {
    const cards = getDashboardCards();
    const grid = document.getElementById('dashboard-grid');

    const googleCardIds = ['gmail', 'google', 'reviews', 'drive'];
    let googleHintInserted = false;

    grid.innerHTML = cards.map(card => {
        /* Google-Hinweis vor der ersten Google-Karte einfügen */
        let googleHint = '';
        if (!googleHintInserted && googleCardIds.includes(card.id)) {
            googleHintInserted = true;
            googleHint = `
                <div class="google-hint">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                    <span><strong>Wichtig:</strong> Melden Sie sich zuerst unter <a href="https://mail.google.com" target="_blank" rel="noopener noreferrer">mail.google.com</a> mit Ihrem Google-Konto an – so öffnen sich alle folgenden Links direkt im richtigen Account.</span>
                </div>
            `;
        }
        const hasLink = card.link && card.link.trim() !== '';
        const btnClass = hasLink ? 'card-btn card-btn--primary' : 'card-btn card-btn--disabled';
        const btnLabel = hasLink ? card.btnText : 'Bald verfügbar';
        const btnTag = hasLink
            ? `<a href="${card.link}" target="_blank" rel="noopener noreferrer" class="${btnClass}">${btnLabel}<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>`
            : `<span class="${btnClass}">${btnLabel}</span>`;

        /* Branding-Info für Branding Karte */
        let brandingBlock = '';
        if (card.brandingInfo && CLIENT.branding) {
            const colorsHtml = CLIENT.branding.brandColors.map(c => `
                <div class="brand-color-item">
                    <span class="brand-color-swatch" style="background:${c.hex}"></span>
                    <div class="brand-color-info">
                        <span class="brand-color-name">${c.name}</span>
                        <span class="brand-color-hex">${c.hex}</span>
                        <span class="brand-color-usage">${c.usage}</span>
                    </div>
                </div>
            `).join('');

            const fontsHtml = CLIENT.branding.fonts.map(f => `
                <div class="brand-font-item">
                    <span class="brand-font-name">${f.name}</span>
                    <span class="brand-font-weights">${f.weights}</span>
                    <span class="brand-font-usage">${f.usage}</span>
                </div>
            `).join('');

            brandingBlock = `
                <div class="card-branding">
                    <div class="brand-section">
                        <div class="brand-section-label">Farben</div>
                        <div class="brand-colors">${colorsHtml}</div>
                    </div>
                    <div class="brand-section">
                        <div class="brand-section-label">Schriften</div>
                        ${fontsHtml}
                    </div>
                </div>
            `;
        }

        /* QR-Code für Google Rezensionen */
        let qrBlock = '';
        if (card.qrCode && card.link && card.link.trim() !== '') {
            qrBlock = `
                <div class="card-qr">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=160x160&data=${encodeURIComponent(card.link)}&bgcolor=1A1A1A&color=E8E8E8&margin=8" alt="QR-Code für Google Rezensionen" class="card-qr-img" />
                    <span class="card-qr-hint">QR-Code scannen oder Link teilen</span>
                </div>
            `;
        }

        /* Domain-Liste für Domain & Hosting Karte */
        let domainBlock = '';
        if (card.domainList && CLIENT.subdomains && CLIENT.subdomains.length > 0) {
            const hostingInfo = CLIENT.hosting ? `
                <div class="card-hosting-badge">
                    <span class="hosting-provider">${CLIENT.hosting.provider}</span>
                    <span class="hosting-customer-id">Kundennr. ${CLIENT.hosting.customerId}</span>
                </div>
            ` : '';

            domainBlock = `
                <div class="card-info-list">
                    ${hostingInfo}
                    <ul class="card-info-entries">
                        ${CLIENT.subdomains.map(sub => `
                            <li>
                                <span class="card-info-name">${sub.name}</span>
                                <span class="card-info-label">${sub.label}</span>
                            </li>
                        `).join('')}
                    </ul>
                </div>
            `;
        }

        /* E-Mail-Liste für E-Mail Karte */
        let emailBlock = '';
        if (card.emailList && CLIENT.domain && CLIENT.emails.length > 0) {
            const gmailSection = CLIENT.gmailAddress ? `
                <div class="card-email-divider"></div>
                <div class="card-email-section-label">Google Mail</div>
                <ul class="card-email-addresses">
                    <li>${CLIENT.gmailAddress}</li>
                </ul>
            ` : '';

            emailBlock = `
                <div class="card-info-list">
                    <div class="card-email-section-label">All-Inkl (${CLIENT.domain})</div>
                    <ul class="card-email-addresses">
                        ${CLIENT.emails.map(prefix => `<li>${prefix}${CLIENT.domain}</li>`).join('')}
                    </ul>
                    ${gmailSection}
                </div>
            `;
        }

        /* Extra-Links (sekundäre Buttons) */
        let extraLinksBlock = '';
        if (card.extraLinks && card.extraLinks.length > 0) {
            const links = card.extraLinks.map(el => {
                const hasEl = el.link && el.link.trim() !== '';
                return hasEl
                    ? `<a href="${el.link}" target="_blank" rel="noopener noreferrer" class="card-btn card-btn--secondary">${el.label}<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></a>`
                    : `<span class="card-btn card-btn--disabled">${el.label}</span>`;
            }).join('');
            extraLinksBlock = `<div class="card-extra-links">${links}</div>`;
        }

        return `
            ${googleHint}
            <div class="card" data-card="${card.id}">
                <div class="card-icon">${card.icon}</div>
                <h3 class="card-title">${card.title}</h3>
                <p class="card-description">${card.description}</p>
                ${domainBlock}
                ${emailBlock}
                ${brandingBlock}
                ${qrBlock}
                ${btnTag}
                ${extraLinksBlock}
            </div>
        `;
    }).join('');
}

/* --- Erweiterungen rendern --- */
function renderExtensions() {
    const section = document.getElementById('extensions');
    if (!CLIENT.extensions.show) {
        section.style.display = 'none';
        return;
    }

    section.innerHTML = `
        <div class="container">
            <div class="section-divider"></div>
            <div class="section-label">Zusatzleistungen</div>
            <h2 class="section-title">Optionale Erweiterungen</h2>
            <p class="section-subtitle">Modulare Services zur Weiterentwicklung Ihrer digitalen Infrastruktur.</p>
            <div class="extensions-grid">
                ${CLIENT.extensions.items.map(item => `
                    <div class="ext-card">
                        <h4 class="ext-title">${item.title}</h4>
                        <p class="ext-description">${item.description}</p>
                    </div>
                `).join('')}
            </div>
        </div>
    `;
}

/* --- Footer --- */
function renderFooter() {
    const year = new Date().getFullYear();
    document.getElementById('site-footer').innerHTML = `
        <div class="container">
            <div class="footer-inner">
                <span class="footer-brand">Management Dashboard</span>
                <span>&copy; ${year} ${CLIENT.name} &middot; Bereitgestellt von <a href="https://inhousee.de" target="_blank" rel="noopener noreferrer" class="footer-link">Inhouse Media</a></span>
            </div>
        </div>
    `;
}
