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

    <!-- Haupt-JavaScript -->
    <script src="<?php echo ASSETS_URL; ?>/js/main.js" defer></script>
