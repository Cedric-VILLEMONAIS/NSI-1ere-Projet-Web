<?php
$page_title = "Les tomates - Accueil";
$file_title = "index";
require "php/head.php";
?>


<h1> Tout sur les tomates !!</h1>
<br>
<p><em>On vous dit tout sur ces fruits que l'on confond souvent avec des légumes: les <a href="https://fr.wikipedia.org/wiki/Tomate" target="_blank">tomates</a></em></p>
<h2 class="introduction"> Découvrez tout d'abord ce que nous vous proposons sur notre site:</h2>
<br><br>
<h3> Sommaire:</h3>
<ul class="sommaire">
    <li><a href="page2.php">Les différentes variétés</a></li>
    <li id="alerte"><a href="page3.php">Rapides calculs pour un achat sûr</a></li>
    <li><a href="page4.php">Petites Recettes</a></li>
</ul>


<?php
require "php/footer.php";
?>