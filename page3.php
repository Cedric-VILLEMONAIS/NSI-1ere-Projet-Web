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
    <!-- Légende du tableau (son titre) -->
    <caption id="calculs-table-title"> Tableau de calcul </caption>
    <!-- Création du corps du tableau -->
    <tbody id="calculs-table-tbody">
        <!-- Ligne d'en-tête -->
        <tr id="calculs-table-head">
            <th>Type de tomate</th>
            <th>Masse voulue (en kg)</th>
            <th>Prix au kilo (en €)</th>
            <th>Prix final (en €)</th>
            <th class="no-print"></th>
        </tr>
        <!-- Formulaire pour ajouter une ligne au tableau -->
        <tr id="calculs-table-name" class="no-print">
            <td><input type="text" id="calculs-input-name" size="50" placeholder="Écrivez quelque chose..."></td>
            <td><input id="calculs-input-weight" type="number" placeholder="Entrer nombre..."></td>
            <td><input id="calculs-input-price" type="number" placeholder="Entrer nombre..."></td>
            <td></td>
            <td class="no-print"><button id="calculs-input-submit">Ajouter</button></td>
        </tr>
        <!-- Dernière ligne avec le prix total des articles -->
        <tr id="calculs-table-total-row">
            <td></td>
            <td></td>
            <td></td>
            <td id="calculs-table-total"></td>
            <td class="no-print"></td>
        </tr>
    </tbody>
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