<?php
$page_title = "Les tomates - Accueil";
$file_title = "index";
require "php/head.php";
require "php/loading-animation.php";
?>
<div id="contents">
<!-- Titre principal de la page -->
<h1> Tout sur les tomates !!</h1>
<br><!-- retour à la ligne -->
<!-- paragraphe mis en italique avec un lien menant à une page wikipedia pour expliquer plus en détail les tomates, et qui s'ouvre dzns un autre onglet -->
<p><em>On vous dit tout sur ces fruits que l'on confond souvent avec des légumes: les <a href="https://fr.wikipedia.org/wiki/Tomate" target="_blank">tomates</a></em></p>
<!-- taille de titre 2 auquel on ajoute une classe nommer 'introduction' -->
<h2 class="introduction"> Découvrez tout d'abord ce que nous vous proposons sur notre site:</h2>
<br><br><!-- 2 retour à la ligne -->
<!-- taille de titre 3 pour présenter le sommaire -->
<h3> Sommaire:</h3>
<!-- liste non ordonnée (avec des points) qui correspond à la classe sommaire -->
<ul class="sommaire">
    <!-- Les 3 autres pages du site accessible par un lien respectif -->
    <li><a href="page2.php">Les différentes variétés</a></li>
    <li><a href="page3.php">Rapides calculs pour un achat sûr</a></li>
    <li><a href="page4.php">Petites Recettes</a></li>
</ul><!-- fin de la liste -->
<br><!-- retour à la ligne -->
<!-- paragraphe avec l'id 'important' -->
<p id="important">On espère que ce site vous a plû ! </p>
</div>
<?php
require "php/footer.php";
?>