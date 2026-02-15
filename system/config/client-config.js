/* ============================================
   CLIENT CONFIGURATION
   ============================================
   Einzige Datei, die pro Kunde angepasst wird.
   Alle Dashboard-Links und Texte werden hieraus gelesen.
   ============================================ */

const CLIENT = {
    /* Firmenname – wird im Header und Hero angezeigt */
    name: "Tokmak GmbH",

    /* Systemstart-Datum (deutsch formatiert) */
    systemStartDate: "13.02.2026",

    /* Farbschema */
    colors: {
        primary: "#C6A87D",
        primaryHover: "#D4B88E",
        background: "#111111",
        surface: "#1A1A1A",
        surfaceBorder: "#2A2A2A",
        text: "#E8E8E8",
        textMuted: "#999999"
    },

    /* Domain & Hosting */
    hosting: {
        provider: "All-Inkl",
        customerId: "847428",
        mailServer: "w020e585.kasserver.com"
    },
    domain: "tokmak-gmbh.de",
    subdomains: [
        { name: "tokmak-gmbh.de", label: "Hauptdomain – Ihre Unternehmenswebsite" },
        { name: "dashboard.tokmak-gmbh.de", label: "Management Dashboard – dieses Portal" }
    ],

    /* E-Mail-Adressen */
    emails: [
        "info@",
        "buchhaltung@",
        "tufantokmak@"
    ],
    gmailAddress: "tokmak.digital@gmail.com",

    /* Branding – Farben & Schriften der Marke */
    branding: {
        fonts: [
            { name: "Karla", weights: "Light 300, Regular 400, Bold 700", usage: "Hauptschrift – Überschriften & Fließtext" }
        ],
        brandColors: [
            { name: "Warmgrau", hex: "#8C8279", usage: "Primärfarbe" },
            { name: "Anthrazit", hex: "#2D2926", usage: "Sekundärfarbe / Hintergrund" },
            { name: "Hellgrau", hex: "#F8F7F5", usage: "Hintergrund Hell" },
            { name: "Textfarbe", hex: "#3D3835", usage: "Fließtext" }
        ]
    },

    /* Externe Dienste mit eigenem Login */
    externalServices: [
        { name: "All-Inkl KAS", url: "https://kas.all-inkl.com", purpose: "Domain, E-Mail, FTP, SSL" },
        { name: "CCM19", url: "https://www.ccm19.de", purpose: "Cookie Consent Manager (DSGVO)" }
    ],

    /* Dashboard-Links – leerer String = "Bald verfügbar" */
    links: {
        website: "https://tokmak-gmbh.de",
        webmail: "https://webmail.all-inkl.com/",
        gmail: "https://mail.google.com/mail/u/?authuser=tokmak.digital@gmail.com",
        googleProfile: "https://share.google/vGZHlVPpeRYTxSe38",
        googleReview: "https://g.page/r/CYTV5e0OsVNZEBM/review",
        drive: "https://drive.google.com/drive/folders/1boNI70euJ1Ff09SI-OL7udHNvb-Y8JMm?usp=share_link",
        logoDownload: "https://docs.google.com/document/d/1anr03rIyde-gOz7dzA_44c80f91MdE-TXvGOqPUj8Cc/edit?usp=drive_link",
        emailSignature: "https://drive.google.com/file/d/1UqhBg24gD-uWWmq3dfpFr6Py2-rM2oAt/view?usp=share_link",
        emailSetupGuide: "email-einrichtung.html",
        signatureDownload: "https://docs.google.com/document/d/1bD97vx-m2_CBYahzamPCqDdfYtX2aYNfuh8O7tqDpZ8/edit?usp=share_link",
        documentation: "dokumentation.html",
        loomVideo: "https://www.loom.com/share/d7b2fdda7dd24655a78745afb88ba995"
    },

    /* Optionale Erweiterungen – sichtbar/unsichtbar */
    extensions: {
        show: true,
        items: [
            {
                title: "Wartung & Updates",
                description: "Regelmäßige technische Pflege, Sicherheitsupdates und Performance-Optimierung Ihrer Website."
            },
            {
                title: "Google Ads Betreuung",
                description: "Professionelle Kampagnensteuerung für messbare Sichtbarkeit in Ihrer Region."
            },
            {
                title: "Content Produktion",
                description: "Texte, Bilder und Medien für Ihre digitale Präsenz – konsistent und markengerecht."
            },
            {
                title: "Automatisierungen mit KI",
                description: "Intelligente Automatisierung wiederkehrender Abläufe durch Künstliche Intelligenz – von Kundenkommunikation bis Angebotsstellung."
            }
        ]
    }
};
