<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./css/all.css">

        <title><?php echo $page_title; ?></title>
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

        <!-- Roboto font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
    <header>
        <ul>
            <li><a href="index.php" <?php if ($file_title == "index") { echo "class='navbar-a-active'"; } ?>>Accueil</a></li>
            <li><a href="page2.php" <?php if ($file_title == "page2") { echo "class='navbar-a-active'"; } ?>>Les variétés</a></li>
            <li><a href="page3.php" <?php if ($file_title == "page3") { echo "class='navbar-a-active'"; } ?>>Calculs</a></li>
        </ul>
        <div class="mobile-button">
            <div class="mobile-button-line-1"></div>
            <div class="mobile-button-line-2"></div>
            <div class="mobile-button-line-3"></div>
        </div>
    </header>