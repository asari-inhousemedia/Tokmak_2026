    <!-- ========================================== -->
    <!-- COOKIE BANNER INSERT AREA – START          -->
    <!-- Hier Cookie-Banner-Script einfügen,        -->
    <!-- z.B. Borlabs Cookie, Cookiebot, etc.       -->
    <!-- ========================================== -->

    <!-- COOKIE BANNER INSERT AREA – END -->

    <!-- gclid erfassen für server-seitiges Conversion-Tracking -->
    <script>
    (function(){
        var p = new URLSearchParams(window.location.search);
        var g = p.get('gclid');
        if (g) { try { sessionStorage.setItem('_gclid', g); } catch(e){} }
        function fillGclid() {
            var inp = document.getElementById('gclid_field');
            if (inp) { try { inp.value = sessionStorage.getItem('_gclid') || ''; } catch(e){} }
        }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', fillGclid);
        } else {
            fillGclid();
        }
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

    <!-- Haupt-JavaScript -->
    <script src="<?php echo ASSETS_URL; ?>/js/main.js" defer></script>
