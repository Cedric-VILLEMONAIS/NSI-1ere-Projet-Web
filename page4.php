<?php
$page_title = "Les tomates - Recettes";
$file_title = "page4";
require "php/head.php";
?>

<!-- titre principal de la page -->
<h1> Petites recettes </h1>
<br><!-- retour à la ligne -->

<!-- balise div ayant pour classe 'warning' et contanant 2 paragraphe dont un qui est surligné -->
<div class="warning">
  <p>Vous n'êtes pas obligés de suivre les recettes à la lettre !</p>
  <p><mark>Laissez parler votre esprit créatif</mark><p>
</div><!-- fin balise div -->
<br><!-- retour à la ligne -->

<!-- taille de titre 3 avec comme id 'sommaire2' -->
<h3 id="sommaire2">Sommaire des différentes espèces</h3>
<!-- liste non ordonnée (avec des points) qui correspond à la classe sommaire -->
<ul class="sommaire">
    <!-- les différentes variétés expliquées dans la page avec des liens pour y accéder directement et qui affiche le commentaire'Allez directement ici' lorsqu'on laisse la souris dessus  -->
    <li><p title="Allez directement ici !"><a href="#salade">Salade de tomates</a></p></li>
    <li><p title="Allez directement ici !"><a href="#tartines">Tartines tomates-mozza</a></p></li>
    <li><p title="Allez directement ici !"><a href="#pates">Pâtes tomates ail</a></p></li>
    <li><p title="Allez directement ici !"><a href="#oeufs">Œufs à la provençale</a></p></li>
    <li><p title="Allez directement ici !"><a href="#poelees">Tomates Poêlées</a></p></li>
</ul><!-- fin liste-->
<br><br><!-- 2 retours à la ligne -->

<!-- taille de titre 3 comportant l'id 'salade' pour y accéder plus rapidement via la sommaire -->
<h3 id="salade">Salade de tomates
</h3>
<br><!-- retour à la ligne -->
<!-- paragraphe avec un retour à la ligne et des span de classe 'ingredient' pour la mise en pae-->
<p>Coupe les tomates, ajoute un <span class="ingredient">filet d’huile d’olive</span>, un peu de <span class="ingredient">vinaigre</span>, <span class="ingredient">sel</span>, <span class="ingredient">poivre</span>, et quelques <span class="ingredient">feuilles de basilic</span>, du jardin de préférence ! <br> C’est prêt en 5 minutes !</p>
<br><!-- retour à la ligne -->
<a href="#sommaire2">Retourner au sommaire</a>
<br><br><!-- 2 retours à la ligne -->

<br><!-- retour à la ligne -->
<!-- taille de titre 3 comportant l'id 'tartines' pour y accéder plus rapidement via la sommaire -->
<h3 id="tartines">Tartines tomates-mozza</h3>
<br><!-- retour à la ligne -->
<!-- paragraphe avec un retour à la ligne et des span de classe 'ingredient' pour la mise en page-->
<p>Dispose des <span class="ingredient">rondelles de tomates</span> et de <span class="ingredient">mozza</span> sur une <span class="ingredient">tranche de pain grillé</span>, arrose <span class="ingredient">d’huile d’olive</span>, saupoudre <span class="ingredient">d’herbes</span>. <br><br> Petit plus:<br> Passe 5 minutes sous le grill pour faire fondre la mozza !</p>
<br><!-- retour à la ligne -->
<!-- lien pour retourner au sommaire grâce à son id -->
<a href="#sommaire2">Retourner au sommaire</a>
<br><br><!-- 2 retours à la ligne -->

<br><!-- retour à la ligne -->
<!-- taille de titre 3 comportant l'id 'pates' pour y accéder plus rapidement via la sommaire -->
<h3 id="pates">Pâtes tomates ail</h3>
<br><!-- retour à la ligne -->
<!-- paragraphe avec un retour à la ligne et des span de classe 'ingredient' pour la mise en page-->
<p>Fais revenir de l’<span class="ingredient">ail</span> dans l’<span class="ingredient">huile d’olive</span>, ajoute les <span class="ingredient">tomates coupées</span>, laisse mijoter 10-15 min. Mélange avec des <span class="ingredient">pâtes chaudes</span>. <br> Simple et savoureux !</p>
<br><!-- retour à la ligne -->
<!-- lien pour retourner au sommaire grâce à son id -->
<a href="#sommaire2">Retourner au sommaire</a>
<br><br><!-- 2 retours à la ligne -->

<br><!-- retour à la ligne -->
<!-- taille de titre 3 comportant l'id 'œufs' pour y accéder plus rapidement via la sommaire -->
<h3 id="oeufs">Œufs à la provençale</h3>
<br><!-- retour à la ligne -->
<!-- paragraphe avec un retour à la ligne et des span de classe 'ingredient' pour la mise en page-->
<p>Fais revenir les <span class="ingredient">oignons</span> et <span class="ingredient">tomates</span> dans une poêle, ajoute des <span class="ingredient">herbes</span>(<em>celles de ton choix</em>). Casse les <span class="ingredient">œufs</span> dessus, couvre et laisse cuire jusqu’à ce que le blanc soit pris.</p>
<br><!-- retour à la ligne -->
<!-- lien pour retourner au sommaire grâce à son id -->
<a href="#sommaire2">Retourner au sommaire</a>
<br><br><!-- 2 retours à la ligne -->

<br><!-- retour à la ligne -->
<!-- taille de titre 3 comportant l'id 'poelees' pour y accéder plus rapidement via la sommaire -->
<h3 id="poelees">Tomates poêlées</h3>
<br><!-- retour à la ligne -->
<!-- paragraphe avec un retour à la ligne et des span de classe 'ingredient' pour la mise en page-->
<p>Fais revenir les <span class="ingredient">tomates coupées en deux</span> avec un peu d’<span class="ingredient">ail</span>, du <span class="ingredient">thym</span>, <span class="ingredient">sel</span>, <span class="ingredient">poivre</span>. 5 à 7 minutes à la poêle, parfait en accompagnement !</p>
<br><!-- retour à la ligne -->
<!-- lien pour retourner au sommaire grâce à son id -->
<a href="#sommaire2">Retourner au sommaire</a>
<br><br><!-- 2 retours à la ligne -->

<!-- balise div ayant pour classe 'warning' et contanant un paragraphe -->
<div class="warning">
  <!-- paragraphe -->
  <p>Régalez-vous !</p>
</div><!-- fin balise div -->
<br><!-- retour à la ligne -->

<!-- création d'un bouton avec un lien pour retourner à la page principale rapidement -->
<button><a href="index.php">Revenir à la page principale</a></button>


<?php
require "php/footer.php";
?>