<!-- Balise indiquant que la page est en HTML -->
<!DOCTYPE html>
<!-- Balise HTML et changement de la langue du site web par Français -->
<html lang="fr">
    <head>
        <!-- On indique au navigateur que les caractères du site web sont codé en UTF-8 -->
        <meta charset="UTF-8">
        <!-- Code pour le responsive du site web -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Importation des styles -->
        <link rel="stylesheet" href="./css/all.css">
        <!-- Importation du style pour l'impression -->
        <link rel="stylesheet" href="./css/print.css" media="print">
        <!-- Titre de la page -->
        <title><?php echo $page_title; ?></title>
        <!-- Importation de la favicon -->
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
        <!-- Importation de la police Roboto depuis Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
    <!-- Ajout de la barre de navigation -->
    <header class="no-print">
        <!-- Ajout des différents liens de la barre de navigation sous forme de liste -->
        <ul>
            <li><a href="index.php" <?php if ($file_title == "index") { echo "class='navbar-a-active'"; } ?>>Accueil</a></li>
            <li><a href="page2.php" <?php if ($file_title == "page2") { echo "class='navbar-a-active'"; } ?>>Les variétés</a></li>
            <li><a href="page3.php" <?php if ($file_title == "page3") { echo "class='navbar-a-active'"; } ?>>Calculs</a></li>
            <li><a href="page4.php" <?php if ($file_title == "page4") { echo "class='navbar-a-active'"; } ?>>Recettes</a></li>
        </ul>
        <!-- Ajout du bouton pour ouvrir le menu de la barre de navigation sur mobile -->
        <div class="mobile-button">
            <!-- Lignes du bouton -->
            <div class="mobile-button-line-1"></div>
            <div class="mobile-button-line-2"></div>
            <div class="mobile-button-line-3"></div>
        </div>
    </header>