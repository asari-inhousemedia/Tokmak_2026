/**
 * Tokmak GmbH – Haupt-JavaScript
 * =================================
 * Keine externen Bibliotheken. Reines Vanilla JS.
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

                // Alle schließen
                faqItems.forEach(function (otherItem) {
                    var otherAnswer = otherItem.querySelector('.faq-answer');
                    var otherButton = otherItem.querySelector('.faq-question');
                    otherItem.classList.remove('is-open');
                    if (otherAnswer) otherAnswer.style.maxHeight = null;
                    if (otherButton) otherButton.setAttribute('aria-expanded', 'false');
                    if (otherAnswer) otherAnswer.setAttribute('aria-hidden', 'true');
                });

                // Aktuelles öffnen/schließen
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

        // Fehlermarkierung bei Eingabe entfernen
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
        if (!('IntersectionObserver' in window)) return;

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
       INIT
       ============================================ */
    document.addEventListener('DOMContentLoaded', function () {
        initHeroReveal();
        initHeaderScroll();
        initMobileNav();
        initFaqAccordion();
        initSmoothScroll();
        initFormValidation();
        initScrollReveal();
    });

})();
