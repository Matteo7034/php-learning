<?php
    // Avvia la sessione
    session_start();
    // Verifico condizione di consenso cookie 
    $hasConsent = isset($_COOKIE['user_consent']) && $_COOKIE['user_consent'] === 'accepted';
    
    // Preferenza interfaccia Dark / Light
    if(isset($_GET['theme'])) {
        $themeChoice = $_GET['theme'] === 'light' ? 'light' : 'dark';
        $_SESSION['theme'] = $themeChoice;
        if($hasConsent){
            setcookie('site_theme',$themeChoice,time() + (86400 * 30), '/');
        }
    }
    // Tema attivo
    $currentTheme = $_SESSION['theme'] ?? $_COOKIE['site_theme'] ?? 'dark';

    require_once __DIR__ . '/../includes/header.php';

    // Box di Debug per vedere la Sessione e i Cookie
    echo "<div style='background: #222; color: #fff; padding: 12px; margin: 15px; border-radius: 6px; font-family: monospace;'>";
    echo "<strong>ID Sessione PHP:</strong> " . session_id() . "<br>";
    echo "<strong>Tema Attivo:</strong> " . htmlspecialchars($currentTheme) . "<br>";
    echo "<strong>Stato Consenso Privacy:</strong> " . ($hasConsent ? "<span style='color:#4caf50;'>ACCETTATO</span>" : "<span style='color:#ff9800;'>NON ACCETTATO / RIFIUTATO</span>") . "<br>";
    echo "</div>";

    // Routing pagine
    $page = $_GET['page'] ?? 'home';
    switch ($page) {
        case 'about':
            require_once __DIR__ . '/../views/about.php';
            break;
        case 'home':
        default:
            require_once __DIR__ . '/../views/home.php';
            break;
    }

    // Includi il footer comune
    require_once __DIR__ . '/../includes/footer.php';

?>
