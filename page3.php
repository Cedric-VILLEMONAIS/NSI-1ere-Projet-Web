<?php
$page_title = "Les tomates - Calculs";
$file_title = "page3";
require "php/head.php";
?>

<!-- titre principal de la page -->
<h1>Les petits calculs pour des achats sûrs</h1>
<br><!-- retour à la ligne -->

<!-- création tableau de calculs avec l'id "calculs-table" -->
<table id="calculs-table">
    <!-- titre du tableau avec l'id "calculs-table-title" -->
    <caption id="calculs-table-title"> Tableau de calcul </caption>
    <!-- début du corps (intérieur) du tableau qui a pour id "calculs-table-tbody" -->
    <tbody id="calculs-table-tbody">
        <!-- définition d'une ligne de cellules avec l'id "calculs-table-head" -->
        <tr id="calculs-table-head">
            <!-- création des 5 cellules d'en-tête de la ligne dont la dernière faisant partie de la classe 'no-print' -->
            <th>Type de tomate</th>
            <th>Masse voulue (en kg)</th>
            <th>Prix au kilo (en €)</th>
            <th>Prix final (en €)</th>
            <th class="no-print"></th>
        <!-- fin définition de la ligne de cellules -->
        </tr>
        <!-- définition d'une ligne de cellules avec l'id "calculs-table-name" et faisant partie de la classe "no-print" car cette ligne va servir à rentrer les informations nécessaires par l'utilisateur -->
        <tr id="calculs-table-name" class="no-print">
            <!-- création des 5 cellules, comportant des données, de la ligne dont l'avant dernière étant vide, la dernière faisant partie de la classe 'no-print' (et comportant un bouton pour ajouter les informations grâce à l'id "calculs-input-submit") et les autres cellules ayant respectivement un id, un type, et un placeholder pour maintenir le texte jusqu'à ce que l'on écrive dessus (où il disparait). Et on a rajouter une taille à la première cellule -->
            <td><input type="text" id="calculs-input-name" size="50" placeholder="Écrivez quelque chose..."></td>
            <td><input id="calculs-input-weight" type="number" placeholder="Entrer nombre..."></td>
            <td><input id="calculs-input-price" type="number" placeholder="Entrer nombre..."></td>
            <td></td>
            <td class="no-print"><button id="calculs-input-submit">Ajouter</button></td>
        <!-- fin définition de la ligne de cellules -->
        </tr>
        <!-- définition d'une ligne de cellules avec l'id "calculs-table-total-row" -->
        <tr id="calculs-table-total-row">
            <!-- création des 5 cellules, pour comporter des données, de la ligne qui sont toutes vides et dont l'avant-dernière cellule possède l'id "calculs-table-total" pour pouvoir ajouter le résultat du calcul par la suite, et la dernière cellule qui fait partie de la classe 'no-print' pour ne pas l'imprimer -->
            <td></td>
            <td></td>
            <td></td>
            <td id="calculs-table-total"></td>
            <td class="no-print"></td>
        <!-- fin définition de la ligne de cellules -->
        </tr>
    </tbody><!-- fin du corps (intérieur) du tableau -->
</table> <!-- fin du tableau -->

<br><br><!-- 2 retours à la ligne -->
<!-- création d'une case (ensemble de champs) avec des choix possibles ayant comme id "calculs-livraison-container" et comme classe "no-print" pour ne pas apparaître lors de l'impression de la page -->
<fieldset id="calculs-livraison-container" class="no-print">
  <!-- mettre ce texte en légende de la case -->
  <legend>Voulez-vous être livrés ?</legend>

  <!-- début d'une balise div -->
  <div>
    <!-- mettre l'option oui de type radio, avec l'id 'Livraison-oui' et le nom 'livraison'. Elle sera automatiquement cochée. Puis ont met le texte à côté de l'option et on ajoute le bouton avec l'id 'taxes' pour ajouter les frais de livraison -->
    <input type="radio" id="livraison-oui" name="livraison" checked/>
    <label for="livraison-oui">Oui, voir le prix final avec les frais de livraison</label>
    <button id="taxes">Ajouter 7,50 €</button>
  </div> <!-- fin de div -->

   <!-- début d'une balise div -->
  <div>
    <!-- mettre l'option oui de type radio, avec l'id 'Livraison-non' et le nom 'livraison'. Elle sera automatiquement décochée. Puis ont met le texte à côté de l'option -->
    <input type="radio" id="livraison-non" name="livraison" />
    <label for="livraison-non">Non, c'est bien comme ça</label>
  </div><!-- fin de div -->
  
</fieldset><!-- fin de l'ensemble des champs -->

<br><br><!-- 2 retours à la ligne -->
<!-- création d'un bouton pour imprimer la page -->
<button onclick="window.print();" id="calculs-print-button" class="no-print">Imprimer la page</button>

<br><br><!-- 2 retours à la ligne -->
<!-- création d'un bouton avec un lien pour retourner à la page principale rapidement -->
<button id="button-return-home" class="no-print"><a href="index.php">Revenir à la page principale</a></button>



<?php
require "php/footer.php";
?>