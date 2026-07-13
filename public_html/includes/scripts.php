    <!-- ========================================== -->
    <!-- COOKIE BANNER INSERT AREA – START          -->
    <!-- Hier Cookie-Banner-Script einfügen,        -->
    <!-- z.B. Borlabs Cookie, Cookiebot, etc.       -->
    <!-- ========================================== -->

    <!-- COOKIE BANNER INSERT AREA – END -->

    <!-- Ad-Klick-Kennung (gclid/wbraid/gbraid) für OS-Herkunft erfassen. Bei iOS-Klicks liefert Google wbraid/gbraid statt gclid. -->
    <script>
    (function(){
        var p = new URLSearchParams(window.location.search);
        var g = p.get('gclid') || p.get('wbraid') || p.get('gbraid');
        if (g) { try { sessionStorage.setItem('_gclid', g); } catch(e){} }
        function fillGclid() {
            var inp = document.getElementById('gclid_field');
            if (inp) { try { inp.value = sessionStorage.getItem('_gclid') || ''; } catch(e){} }
            var sp = document.getElementById('source_page_field');
            if (sp) { try { sp.value = window.location.pathname || ''; } catch(e){} }
        }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', fillGclid);
        } else {
            fillGclid();
        }
    })();
    </script>

    <!-- Anruf-Klick auf Telefonnummer als Conversion (Anruf-Klick Website) -->
    <script>
    (function(){
        function trackCall(){
            if (typeof gtag === 'function') {
                gtag('event', 'conversion', { 'send_to': 'AW-18147927014/1EefCJ2SsrIcEObHzc1D', 'value': 150.0, 'currency': 'EUR' });
            }
        }
        function bind(){
            var links = document.querySelectorAll('a[href^="tel:"]');
            for (var i = 0; i < links.length; i++) {
                links[i].addEventListener('click', trackCall);
            }
        }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', bind);
        } else { bind(); }
    })();
    </script>

    <!-- PLZ → Stadt Erkennung -->
    <script>
    (function(){
        function initPlz(plzId, stadtId) {
            var p = document.getElementById(plzId);
            var s = document.getElementById(stadtId);
            if (!p || !s) return;
            p.addEventListener('input', function() {
                var v = this.value.trim();
                if (/^\d{5}$/.test(v)) {
                    fetch('https://api.zippopotam.us/de/' + v)
                        .then(function(r){ return r.ok ? r.json() : null; })
                        .then(function(d){
                            if (d && d.places && d.places[0]) {
                                s.value = d.places[0]['place name'];
                            } else {
                                s.value = '';
                            }
                        })
                        .catch(function(){});
                } else {
                    s.value = '';
                }
            });
        }
        function init() {
            initPlz('plz', 'stadt');
            initPlz('ab_plz', 'ab_stadt');
            initPlz('bs_plz', 'bs_stadt');
        }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else { init(); }
    })();
    </script>

    <!-- Haupt-JavaScript (Cache-Busting per Datei-Aenderungszeit) -->
    <script src="<?php echo ASSETS_URL; ?>/js/main.js?v=<?php echo @filemtime(BASE_PATH . '/assets/js/main.js') ?: '1'; ?>" defer></script>
