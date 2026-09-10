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
        <nav>
            <a href="index.php?page=home">Home</a>
            <a href="index.php?page=about">Chi Siamo</a>
            <!-- Selettore di tema per le preferenze interfaccia --> 
            <span style="float: right;">
                Tema:
                <a href="index.php?page=<?php echo htmlspecialchars($_GET['page'] ?? 'home'); ?>&theme=dark">Scuro</a> | 
                <a href="index.php?page=<?php echo htmlspecialchars($_GET['page'] ?? 'home'); ?>&theme=light">Chiaro</a>
            </span>
        </nav>
    </header>
    <main>
