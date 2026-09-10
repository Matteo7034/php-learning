<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mio Sito Web</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="<?php echo htmlspecialchars($currentTheme ?? 'dark'); ?>">
    <header>
        <nav class="navbar">
            <div class="nav-links">
                <a href="index.php?page=home" class="nav-btn <?php echo ($page === 'home') ? 'active' : ''; ?>">Home</a>
                <a href="index.php?page=about" class="nav-btn <?php echo ($page === 'about') ? 'active' : ''; ?>">Chi Siamo</a>
            </div>
            
            <div class="theme-toggle">
                <span class="theme-label">Tema:</span>
                <a href="index.php?page=<?php echo htmlspecialchars($page); ?>&theme=dark" class="theme-btn <?php echo ($currentTheme === 'dark') ? 'active' : ''; ?>">Scuro</a>
                <a href="index.php?page=<?php echo htmlspecialchars($page); ?>&theme=light" class="theme-btn <?php echo ($currentTheme === 'light') ? 'active' : ''; ?>">Chiaro</a>
            </div>
        </nav>
    </header>
    <main>
