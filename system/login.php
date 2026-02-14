<?php
/* ============================================
   DIGITAL CONTROL CENTER – LOGIN
   ============================================
   Einfache Session-basierte Passwortabfrage.

   ANPASSUNG PRO KUNDE:
   Nur das Passwort in Zeile 14 ändern.
   ============================================ */

session_start();

// ── Passwort hier anpassen ──
$password = 'tokmak2026!';

// ── Login prüfen ──
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['password']) && $_POST['password'] === $password) {
        $_SESSION['dcc_authenticated'] = true;
        header('Location: index.html');
        exit;
    } else {
        $error = 'Falsches Passwort. Bitte erneut versuchen.';
    }
}

// ── Bereits eingeloggt? ──
if (isset($_SESSION['dcc_authenticated']) && $_SESSION['dcc_authenticated'] === true) {
    header('Location: index.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Zugang – Digital Control Center</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <div class="login-wrapper">
        <div class="login-box">
            <h1>Control Center</h1>
            <p>Bitte geben Sie Ihr Zugangspasswort ein.</p>

            <?php if ($error): ?>
                <div class="login-error"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <input
                    type="password"
                    name="password"
                    class="login-input"
                    placeholder="Passwort"
                    autocomplete="current-password"
                    autofocus
                    required
                >
                <button type="submit" class="login-submit">Zugang erhalten</button>
            </form>
        </div>
    </div>

</body>
</html>
