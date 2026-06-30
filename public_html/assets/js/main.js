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
       PROCESS STEPS – Hover-Pop (Desktop) +
       Staggered Scroll-Reveal (Mobile)
       ============================================ */
    function initProcessSteps() {
        var section = document.getElementById('ablauf');
        if (!section) return;

        var steps = section.querySelectorAll('.process-step');
        if (!steps.length) return;

        // Klasse für Animation-Startzustand setzen
        steps.forEach(function (step) {
            step.classList.add('step-animate');
        });

        if ('IntersectionObserver' in window) {
            // Beobachte die gesamte Sektion (nicht einzelne Steps)
            var sectionObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        // Gestaffeltes Auto-Pop von links nach rechts
                        steps.forEach(function (step, i) {
                            setTimeout(function () {
                                step.classList.add('step-visible');
                                step.classList.add('step-pop');
                            }, i * 180);
                        });
                        sectionObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2,
                rootMargin: '0px 0px -40px 0px'
            });

            sectionObserver.observe(section);
        } else {
            // Fallback: Alles sofort sichtbar
            steps.forEach(function (step) {
                step.classList.add('step-visible');
            });
        }
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
                        var offset = (progress - 0.5) * 120; // Deutlicher Parallax
                        ctaBg.style.transform = 'translate3d(0, ' + offset + 'px, 0) scale(1.05)';
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

        // Endlos sanftes Wackeln wenn sichtbar und nicht gehovered
        var isInView = false;

        if ('IntersectionObserver' in window) {
            var tiltObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    isInView = entry.isIntersecting;
                    if (isInView && !isUserInteracting) {
                        card.classList.add('is-idle-wobble');
                    } else if (!isInView) {
                        card.classList.remove('is-idle-wobble');
                    }
                });
            }, { threshold: 0.3 });
            tiltObserver.observe(card);
        }

        // Desktop: Maus-Tracking
        card.addEventListener('mousemove', function (e) {
            isUserInteracting = true;
            card.classList.remove('is-idle-wobble');

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
            // Wackel-Animation wieder starten
            if (isInView) {
                setTimeout(function () {
                    if (!isUserInteracting) card.classList.add('is-idle-wobble');
                }, 600);
            }
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
       PAGE HEADER – Parallax (Unterseiten)
       ============================================ */
    function initPageHeaderParallax() {
        var headerBgImg = document.querySelector('.page-header-bg-image');
        var pageHeader = document.querySelector('.page-header');
        if (!headerBgImg || !pageHeader) return;
        if (window.innerWidth < 680) return;

        var ticking = false;

        function onScroll() {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    var scrollY = window.scrollY;
                    var headerHeight = pageHeader.offsetHeight;
                    if (scrollY < headerHeight) {
                        headerBgImg.style.transform = 'translate3d(0, ' + (scrollY * 0.3) + 'px, 0)';
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }

        window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ============================================
       CTA PARALLAX – Alle Seiten (querySelectorAll)
       ============================================ */
    function initAllCtaParallax() {
        var ctaBlocks = document.querySelectorAll('.cta-block-image');
        if (!ctaBlocks.length) return;
        if (window.innerWidth < 680) return;

        var ticking = false;

        function onScroll() {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    var windowH = window.innerHeight;
                    ctaBlocks.forEach(function (block) {
                        var bg = block.querySelector('.cta-block-bg');
                        if (!bg) return;
                        var rect = block.getBoundingClientRect();
                        if (rect.bottom > 0 && rect.top < windowH) {
                            var progress = (windowH - rect.top) / (windowH + rect.height);
                            var offset = (progress - 0.5) * 120;
                            bg.style.transform = 'translate3d(0, ' + offset + 'px, 0) scale(1.05)';
                        }
                    });
                    ticking = false;
                });
                ticking = true;
            }
        }

        window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ============================================
       CARD STAGGERED REVEAL
       ============================================ */
    function initCardReveal() {
        var cards = document.querySelectorAll('.grid .card');
        if (!cards.length) return;

        if (!('IntersectionObserver' in window)) {
            cards.forEach(function(c) { c.classList.add('card-visible'); });
            return;
        }

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var card = entry.target;
                    var parent = card.closest('.grid');
                    var siblings = Array.prototype.slice.call(parent.querySelectorAll('.card'));
                    var idx = siblings.indexOf(card);
                    setTimeout(function() {
                        card.classList.add('card-visible');
                    }, idx * 120);
                    observer.unobserve(card);
                }
            });
        }, { threshold: 0.15 });

        cards.forEach(function(c) { observer.observe(c); });
    }

    /* ============================================
       BENEFIT CARDS – Staggered Pop (Karriere)
       ============================================ */
    function initBenefitCards() {
        var cards = document.querySelectorAll('.benefit-card');
        if (!cards.length) return;

        if (!('IntersectionObserver' in window)) {
            cards.forEach(function(c) { c.classList.add('benefit-visible'); });
            return;
        }

        var grid = cards[0].closest('.benefits-grid');
        if (!grid) return;

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    cards.forEach(function(card, i) {
                        setTimeout(function() {
                            card.classList.add('benefit-visible');
                        }, i * 200);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        observer.observe(grid);
    }

    /* ============================================
       FEATURE BLOCKS – Staggered Slide-In
       ============================================ */
    function initFeatureBlocks() {
        var blocks = document.querySelectorAll('.feature-block');
        if (!blocks.length) return;

        if (!('IntersectionObserver' in window)) {
            blocks.forEach(function(b) { b.classList.add('feature-visible'); });
            return;
        }

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var parent = entry.target.closest('.grid');
                    if (!parent) {
                        entry.target.classList.add('feature-visible');
                        observer.unobserve(entry.target);
                        return;
                    }
                    var siblings = Array.prototype.slice.call(parent.querySelectorAll('.feature-block'));
                    var idx = siblings.indexOf(entry.target);
                    setTimeout(function() {
                        entry.target.classList.add('feature-visible');
                    }, idx * 150);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        blocks.forEach(function(b) { observer.observe(b); });
    }

    function initClickTracking() {
        if (typeof gtag !== 'function') return;
        document.querySelectorAll('a[href^="tel:"]').forEach(function(el) {
            el.addEventListener('click', function() {
                gtag('event', 'conversion', { 'send_to': 'AW-18147927014/1EefCJ2SsrIcEObHzc1D' });
            });
        });
        document.querySelectorAll('a[href^="mailto:"]').forEach(function(el) {
            el.addEventListener('click', function() {
                gtag('event', 'conversion', { 'send_to': 'AW-18147927014/sNyPCKCSsrIcEObHzc1D' });
            });
        });
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
        initProcessSteps();
        initCardReveal();
        initBenefitCards();
        initFeatureBlocks();
        initAllCtaParallax();
        initPageHeaderParallax();
        initTiltCard();
        initClickTracking();
    });

})();

/* ============================================
   MULTI-STEP KONTAKTFORMULAR
   Progressive Enhancement: ohne JS bleiben alle Schritte sichtbar.
   ============================================ */
(function () {
    'use strict';
    function initContactMultiStep() {
        var form = document.querySelector('.contact-form-multistep');
        if (!form) return;
        var steps = Array.prototype.slice.call(form.querySelectorAll('.ms-step'));
        if (steps.length < 2) return;

        form.classList.add('js-multistep');
        var fill  = form.querySelector('.ms-progress-fill');
        var curEl = form.querySelector('.ms-cur');
        var total = steps.length;
        var current = 0;

        function show(i, doScroll) {
            current = Math.max(0, Math.min(i, total - 1));
            steps.forEach(function (s, idx) { s.classList.toggle('is-active', idx === current); });
            if (fill) fill.style.width = ((current + 1) / total * 100) + '%';
            if (curEl) curEl.textContent = (current + 1);
            var active = steps[current];
            var firstInput = active.querySelector('input:not([type=hidden]):not([type=radio]), textarea, select');
            if (firstInput) { try { firstInput.focus({ preventScroll: true }); } catch (e) {} }
            if (doScroll) form.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // Auswahl-Karten (Schritt 1)
        var cards = Array.prototype.slice.call(form.querySelectorAll('.ms-card'));
        cards.forEach(function (card) {
            card.addEventListener('click', function () {
                var radio = card.querySelector('input[type=radio]');
                if (radio) radio.checked = true;
                cards.forEach(function (c) { c.classList.remove('is-selected'); });
                card.classList.add('is-selected');
                // Direkt weiter zu Schritt 2 – kurze Verzoegerung, damit die Auswahl sichtbar wird
                setTimeout(function () { show(1, true); }, 220);
            });
        });

        // Validierung pro Schritt
        function validateStep(idx) {
            var step = steps[idx];
            var ok = true;
            if (idx === 0) {
                ok = !!form.querySelector('input[name="project_type"]:checked');
            } else {
                var reqs = step.querySelectorAll('[required]');
                reqs.forEach(function (inp) {
                    inp.classList.remove('is-invalid');
                    var val = (inp.value || '').trim();
                    if (!val) { inp.classList.add('is-invalid'); ok = false; return; }
                    if (inp.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
                        inp.classList.add('is-invalid'); ok = false;
                    }
                });
            }
            if (!ok) {
                var bad = step.querySelector('.is-invalid');
                if (bad) { bad.focus(); bad.scrollIntoView({ behavior: 'smooth', block: 'center' }); }
            }
            return ok;
        }

        form.addEventListener('click', function (e) {
            var next = e.target.closest('.ms-next');
            var prev = e.target.closest('.ms-prev');
            if (next) { e.preventDefault(); if (validateStep(current)) show(current + 1, true); }
            if (prev) { e.preventDefault(); show(current - 1, true); }
        });

        show(0, false);
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initContactMultiStep);
    } else {
        initContactMultiStep();
    }
})();
