/**
 * Tokmak GmbH – Haupt-JavaScript
 * =================================
 * Vanilla JS – Progressive Enhancement
 * Animationen: Parallax, Scroll-Stop Steps, Count-Up, 3D-Tilt, CTA Parallax
 */

(function () {
    'use strict';

    /* ============================================
       HERO – Staggered Reveal Animation
       ============================================ */
    function initHeroReveal() {
        var elements = document.querySelectorAll('.reveal-stagger');
        if (!elements.length) return;

        elements.forEach(function (el) {
            var delay = parseInt(el.getAttribute('data-delay') || '0', 10);
            setTimeout(function () {
                el.classList.add('is-visible');
            }, 350 + delay * 200);
        });
    }

    /* ============================================
       HEADER – Scroll-Effekt
       ============================================ */
    function initHeaderScroll() {
        var header = document.getElementById('site-header');
        if (!header) return;

        var scrollThreshold = 40;
        var ticking = false;

        function onScroll() {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    if (window.scrollY > scrollThreshold) {
                        header.classList.add('is-scrolled');
                    } else {
                        header.classList.remove('is-scrolled');
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }

        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    /* ============================================
       HERO – Parallax Hintergrund
       ============================================ */
    function initHeroParallax() {
        var heroImg = document.querySelector('.hero-bg-image');
        var hero = document.querySelector('.hero');
        if (!heroImg || !hero) return;

        // Kein Parallax auf Mobile (Performance)
        if (window.innerWidth < 680) return;

        var ticking = false;

        function onScroll() {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    var scrollY = window.scrollY;
                    var heroHeight = hero.offsetHeight;
                    if (scrollY < heroHeight) {
                        heroImg.style.transform = 'translate3d(0, ' + (scrollY * 0.3) + 'px, 0)';
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }

        window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ============================================
       MOBILE NAVIGATION
       ============================================ */
    function initMobileNav() {
        var toggle = document.getElementById('nav-toggle');
        var nav = document.getElementById('main-nav');
        if (!toggle || !nav) return;

        toggle.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('is-open');
            toggle.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        var links = nav.querySelectorAll('.nav-link');
        links.forEach(function (link) {
            link.addEventListener('click', function () {
                nav.classList.remove('is-open');
                toggle.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && nav.classList.contains('is-open')) {
                nav.classList.remove('is-open');
                toggle.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
                toggle.focus();
            }
        });
    }

    /* ============================================
       FAQ AKKORDEON
       ============================================ */
    function initFaqAccordion() {
        var faqItems = document.querySelectorAll('.faq-item');
        if (!faqItems.length) return;

        faqItems.forEach(function (item) {
            var button = item.querySelector('.faq-question');
            var answer = item.querySelector('.faq-answer');
            if (!button || !answer) return;

            button.addEventListener('click', function () {
                var isOpen = item.classList.contains('is-open');

                faqItems.forEach(function (otherItem) {
                    var otherAnswer = otherItem.querySelector('.faq-answer');
                    var otherButton = otherItem.querySelector('.faq-question');
                    otherItem.classList.remove('is-open');
                    if (otherAnswer) otherAnswer.style.maxHeight = null;
                    if (otherButton) otherButton.setAttribute('aria-expanded', 'false');
                    if (otherAnswer) otherAnswer.setAttribute('aria-hidden', 'true');
                });

                if (!isOpen) {
                    item.classList.add('is-open');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    button.setAttribute('aria-expanded', 'true');
                    answer.setAttribute('aria-hidden', 'false');
                }
            });
        });
    }

    /* ============================================
       SMOOTH SCROLL
       ============================================ */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                var targetId = this.getAttribute('href');
                if (targetId === '#') return;

                var target = document.querySelector(targetId);
                if (!target) return;

                e.preventDefault();
                var headerHeight = document.getElementById('site-header')
                    ? document.getElementById('site-header').offsetHeight
                    : 0;

                var top = target.getBoundingClientRect().top + window.scrollY - headerHeight - 20;
                window.scrollTo({ top: top, behavior: 'smooth' });
            });
        });
    }

    /* ============================================
       FORMULAR – Client-seitige Validierung
       ============================================ */
    function initFormValidation() {
        var form = document.querySelector('.contact-form');
        if (!form) return;

        form.addEventListener('submit', function (e) {
            var isValid = true;
            var inputs = form.querySelectorAll('[required]');

            inputs.forEach(function (input) {
                input.classList.remove('is-invalid');

                if (!input.value || !input.value.trim()) {
                    input.classList.add('is-invalid');
                    isValid = false;
                    return;
                }

                if (input.type === 'email' && input.value.trim()) {
                    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(input.value.trim())) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    }
                }
            });

            if (!isValid) {
                e.preventDefault();
                var firstInvalid = form.querySelector('.is-invalid');
                if (firstInvalid) {
                    firstInvalid.focus();
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });

        form.querySelectorAll('.form-input, .form-select').forEach(function (input) {
            input.addEventListener('input', function () {
                this.classList.remove('is-invalid');
            });
            input.addEventListener('change', function () {
                this.classList.remove('is-invalid');
            });
        });
    }

    /* ============================================
       SCROLL REVEAL (Sektionen)
       ============================================ */
    function initScrollReveal() {
        if (!('IntersectionObserver' in window)) {
            document.querySelectorAll('.section').forEach(function (s) {
                s.classList.add('is-visible');
            });
            return;
        }

        var sections = document.querySelectorAll('.section');
        if (!sections.length) return;

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.08,
            rootMargin: '0px 0px -40px 0px'
        });

        sections.forEach(function (section) {
            observer.observe(section);
        });
    }

    /* ============================================
       COUNT-UP ANIMATION – Zahlen-Sektion
       ============================================ */
    function initCountUp() {
        if (!('IntersectionObserver' in window)) return;

        var statNumbers = document.querySelectorAll('.stat-number');
        if (!statNumbers.length) return;

        var hasRun = false;

        function animateCountUp(el) {
            var text = el.textContent.trim();
            var suffix = '';

            if (text.indexOf('+') !== -1) {
                suffix = '+';
                text = text.replace('+', '');
            }
            if (text.indexOf('%') !== -1) {
                suffix = '%';
                text = text.replace('%', '');
            }

            var target = parseInt(text, 10);
            if (isNaN(target)) return;

            var duration = 1800;
            var startTime = null;
            el.textContent = '0' + suffix;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                var progress = Math.min((timestamp - startTime) / duration, 1);
                var eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.round(eased * target) + suffix;
                if (progress < 1) requestAnimationFrame(step);
            }

            requestAnimationFrame(step);
        }

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !hasRun) {
                    hasRun = true;
                    statNumbers.forEach(animateCountUp);
                    observer.disconnect();
                }
            });
        }, { threshold: 0.3 });

        var statsSection = document.getElementById('fakten');
        if (statsSection) observer.observe(statsSection);
    }

    /* ============================================
       SCROLL-STOP STEPS – „5 Schritte" Sektion
       Echtes Scroll-Hijacking: Sektion bleibt fixiert,
       Scrollen steuert intern Schritt 1→5
       ============================================ */
    function initScrollSteps() {
        var section = document.getElementById('ablauf');
        if (!section) return;

        var steps = section.querySelectorAll('.process-step');
        if (steps.length < 2) return;

        var stepsContainer = section.querySelector('.process-steps');
        if (!stepsContainer) return;

        stepsContainer.classList.add('process-steps-scroll');

        var totalSteps = steps.length;
        var currentStep = 0;
        var isLocked = false;
        var scrollAccumulator = 0;
        var scrollThreshold = 120; // Pixel pro Step-Wechsel
        var sectionRect;

        function activateStep(index) {
            if (index < 0) index = 0;
            if (index >= totalSteps) index = totalSteps - 1;
            if (index === currentStep) return;
            currentStep = index;
            steps.forEach(function (s, i) {
                if (i === currentStep) {
                    s.classList.add('is-active');
                } else {
                    s.classList.remove('is-active');
                }
            });
        }

        // Ersten Schritt aktivieren
        activateStep(0);

        function onWheel(e) {
            if (!isLocked) return;

            e.preventDefault();
            scrollAccumulator += e.deltaY;

            if (scrollAccumulator > scrollThreshold) {
                scrollAccumulator = 0;
                if (currentStep < totalSteps - 1) {
                    activateStep(currentStep + 1);
                } else {
                    // Letzter Schritt erreicht → Unlock nach unten
                    unlockScroll();
                    window.scrollBy({ top: 2, behavior: 'auto' });
                }
            } else if (scrollAccumulator < -scrollThreshold) {
                scrollAccumulator = 0;
                if (currentStep > 0) {
                    activateStep(currentStep - 1);
                } else {
                    // Erster Schritt → Unlock nach oben
                    unlockScroll();
                    window.scrollBy({ top: -2, behavior: 'auto' });
                }
            }
        }

        // Touch-Handling für Mobile
        var touchStartY = 0;
        var touchAccumulator = 0;

        function onTouchStart(e) {
            if (!isLocked) return;
            touchStartY = e.touches[0].clientY;
            touchAccumulator = 0;
        }

        function onTouchMove(e) {
            if (!isLocked) return;
            e.preventDefault();

            var touchY = e.touches[0].clientY;
            var delta = touchStartY - touchY;
            touchStartY = touchY;
            touchAccumulator += delta;

            if (touchAccumulator > 60) {
                touchAccumulator = 0;
                if (currentStep < totalSteps - 1) {
                    activateStep(currentStep + 1);
                } else {
                    unlockScroll();
                }
            } else if (touchAccumulator < -60) {
                touchAccumulator = 0;
                if (currentStep > 0) {
                    activateStep(currentStep - 1);
                } else {
                    unlockScroll();
                }
            }
        }

        function lockScroll() {
            if (isLocked) return;
            isLocked = true;
            scrollAccumulator = 0;
            document.body.style.overflow = 'hidden';
            window.addEventListener('wheel', onWheel, { passive: false });
            window.addEventListener('touchstart', onTouchStart, { passive: true });
            window.addEventListener('touchmove', onTouchMove, { passive: false });
        }

        function unlockScroll() {
            if (!isLocked) return;
            isLocked = false;
            scrollAccumulator = 0;
            document.body.style.overflow = '';
            window.removeEventListener('wheel', onWheel);
            window.removeEventListener('touchstart', onTouchStart);
            window.removeEventListener('touchmove', onTouchMove);
        }

        // IntersectionObserver: Lock wenn Sektion voll sichtbar
        if ('IntersectionObserver' in window) {
            var lockObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting && entry.intersectionRatio > 0.6) {
                        // Sektion ist gut sichtbar → lock
                        lockScroll();
                    } else if (!entry.isIntersecting) {
                        unlockScroll();
                    }
                });
            }, {
                threshold: [0, 0.6, 1.0]
            });

            lockObserver.observe(section);
        }

        // Cleanup bei Navigation weg
        window.addEventListener('beforeunload', unlockScroll);
    }

    /* ============================================
       CTA – Parallax Hintergrundbild
       ============================================ */
    function initCtaParallax() {
        var ctaBlock = document.getElementById('cta-block');
        if (!ctaBlock) return;

        var ctaBg = ctaBlock.querySelector('.cta-block-bg');
        if (!ctaBg) return;

        // Kein Parallax auf Mobile
        if (window.innerWidth < 680) return;

        var ticking = false;

        function onScroll() {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    var rect = ctaBlock.getBoundingClientRect();
                    var windowH = window.innerHeight;

                    // Nur wenn sichtbar
                    if (rect.bottom > 0 && rect.top < windowH) {
                        var progress = (windowH - rect.top) / (windowH + rect.height);
                        var offset = (progress - 0.5) * 40; // Subtiler als Hero
                        ctaBg.style.transform = 'translate3d(0, ' + offset + 'px, 0)';
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }

        window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ============================================
       3D TILT CARD – Planungssektion
       Mit Koordinaten-Grid, Auto-Animation, Grab-Cursor
       ============================================ */
    function initTiltCard() {
        var card = document.getElementById('tilt-card');
        if (!card) return;

        var inner = card.querySelector('.tilt-card-inner');
        var shine = card.querySelector('.tilt-card-shine');
        if (!inner) return;

        var maxTilt = 8;
        var isUserInteracting = false;

        // Auto-Animation beim ersten In-View
        if ('IntersectionObserver' in window) {
            var tiltObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        // Initiale Mini-Bewegung
                        card.classList.add('is-animating');
                        setTimeout(function () {
                            if (!isUserInteracting) {
                                card.classList.remove('is-animating');
                            }
                        }, 2200);
                        tiltObserver.disconnect();
                    }
                });
            }, { threshold: 0.4 });
            tiltObserver.observe(card);
        }

        // Desktop: Maus-Tracking
        card.addEventListener('mousemove', function (e) {
            isUserInteracting = true;
            card.classList.remove('is-animating');

            var rect = card.getBoundingClientRect();
            var x = e.clientX - rect.left;
            var y = e.clientY - rect.top;
            var centerX = rect.width / 2;
            var centerY = rect.height / 2;

            var rotateX = ((y - centerY) / centerY) * -maxTilt;
            var rotateY = ((x - centerX) / centerX) * maxTilt;

            inner.style.transform = 'perspective(800px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';

            if (shine) {
                shine.style.setProperty('--shine-x', ((x / rect.width) * 100) + '%');
                shine.style.setProperty('--shine-y', ((y / rect.height) * 100) + '%');
            }
        });

        card.addEventListener('mouseleave', function () {
            isUserInteracting = false;
            inner.style.transform = 'perspective(800px) rotateX(0deg) rotateY(0deg)';
        });

        // Mobile: Gyroscope (subtil, kein Zappeln)
        if (window.DeviceOrientationEvent && 'ontouchstart' in window) {
            var lastBeta = null;
            var lastGamma = null;
            var smoothBeta = 0;
            var smoothGamma = 0;

            window.addEventListener('deviceorientation', function (e) {
                if (e.beta === null || e.gamma === null) return;

                var rect = card.getBoundingClientRect();
                if (rect.bottom < 0 || rect.top > window.innerHeight) return;

                // Smooth interpolation (verhindert Zappeln)
                smoothBeta += ((e.beta - 45) * 0.12 - smoothBeta) * 0.08;
                smoothGamma += (e.gamma * 0.12 - smoothGamma) * 0.08;

                var tiltX = Math.max(-maxTilt, Math.min(maxTilt, smoothBeta));
                var tiltY = Math.max(-maxTilt, Math.min(maxTilt, smoothGamma));

                inner.style.transform = 'perspective(800px) rotateX(' + tiltX + 'deg) rotateY(' + tiltY + 'deg)';
            }, { passive: true });
        }
    }

    /* ============================================
       FOOTER MAP – Dark Leaflet Map
       ============================================ */
    function initFooterMap() {
        var mapEl = document.getElementById('footer-map');
        if (!mapEl) return;
        if (typeof L === 'undefined') {
            /* Leaflet noch nicht geladen – nochmal versuchen */
            setTimeout(initFooterMap, 500);
            return;
        }

        var lat = 48.4265;
        var lng = 9.2508;

        var map = L.map(mapEl, {
            center: [lat, lng],
            zoom: 15,
            zoomControl: false,
            attributionControl: false,
            dragging: false,
            scrollWheelZoom: false,
            doubleClickZoom: false,
            touchZoom: false,
            boxZoom: false,
            keyboard: false
        });

        /* Dark Tile Layer – CartoDB Dark Matter (no labels, minimal) */
        L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_nolabels/{z}/{x}/{y}{r}.png', {
            subdomains: 'abcd',
            maxZoom: 19
        }).addTo(map);

        /* Dezenter weisser Custom-Marker */
        var pinIcon = L.divIcon({
            className: 'footer-map-marker',
            html: '<svg width="28" height="36" viewBox="0 0 24 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 0C5.373 0 0 5.373 0 12c0 9 12 20 12 20s12-11 12-20c0-6.627-5.373-12-12-12z" fill="rgba(255,255,255,0.85)"/><circle cx="12" cy="12" r="5" fill="#1C1917"/></svg>',
            iconSize: [28, 36],
            iconAnchor: [14, 36]
        });

        L.marker([lat, lng], { icon: pinIcon }).addTo(map);

        /* Attribution für Accessibility (unsichtbar, aber vorhanden) */
        L.control.attribution({
            position: 'bottomright',
            prefix: false
        }).addTo(map).addAttribution('&copy; <a href="https://www.openstreetmap.org/copyright">OSM</a> &copy; <a href="https://carto.com/">CARTO</a>');

        /* Map-Size nach kurzer Verzögerung aktualisieren (Leaflet-Bug bei versteckten Containern) */
        setTimeout(function () {
            map.invalidateSize();
        }, 300);
    }

    /* ============================================
       INIT
       ============================================ */
    document.addEventListener('DOMContentLoaded', function () {
        initHeroReveal();
        initHeaderScroll();
        initHeroParallax();
        initMobileNav();
        initFaqAccordion();
        initSmoothScroll();
        initFormValidation();
        initScrollReveal();
        initCountUp();
        initScrollSteps();
        initCtaParallax();
        initTiltCard();
        initFooterMap();
    });

})();
