<?php
$page_title = "Page 3";
$file_title = "page3";
require "php/head.php";
?>

<h1> Petites recettes </h1>

<div class="warning">
  <p>Vous n'êtes pas obligés de suivre les recettes à la lettre !</p>
  <p><mark>Laissez parler votre esprit créatif</mark><p>
</div>

<h3 id="sommaire2">Sommaire des différentes espèces</h3>
<ol class="sommaire">
    <li><p title="Allez directement ici !"><a href="#salade">Salade de tomates</a></p></li>
 </ol>

 <h3 id="salade">Salade de tomates"</h3>
<p>
    <strong>Préparation</stong>
    <br>
    Coupe les tomates, ajoute un <span class="ingredient">filet d’huile d’olive</span>, un peu de <span class="ingredient">vinaigre</span>, <span class="ingredient">sel</span>, <span class="ingredient">poivre</span>, et quelques <span class="ingredient">feuilles de basilic</span>, du jardin de préférence ! <br> C’est prêt en 5 minutes !
<br>
<a href="#sommaire2">Retourner au sommaire</a>
<br><br>

<?php
require "php/footer.php";
?>