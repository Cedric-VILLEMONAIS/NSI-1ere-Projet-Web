<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/navbar.css">
        <title><?php echo $page_title; ?></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>
    <header>
        <ul>
            <li><a href="index.php" <?php if ($file_title == "index") { echo "class='navbar-a-active'"; } ?>>Accueil</a></li>
            <li><a href="page2.php" <?php if ($file_title == "page2") { echo "class='navbar-a-active'"; } ?>>Les variétés</a></li>
            <li><a href="page3.php" <?php if ($file_title == "page3") { echo "class='navbar-a-active'"; } ?>>Calculs</a></li>
            <li><a href="#">Et pour l'instant c'est tout 😉</a></li>
        </ul>
        <div class="mobile-button">
            <div class="mobile-button-line-1"></div>
            <div class="mobile-button-line-2"></div>
            <div class="mobile-button-line-3"></div>
        </div>
    </header>
    <script src="./js/navbar.js"></script>