<?php
$page_title = "Page 3";
$file_title = "page3";
require "php/head.php";
?>


<h1>Les petits calculs pour des achats sûrs</h1>
<table>
    <caption> Tableau de conversion </caption>
    <tr>
        <th> Kg</th>
        <th> hg</th>
        <th> dag</th>
        <th> g</th>
        <th> dg</th>
        <th> cg</th>
        <th> mg</th>
    </tr>
    <tr>
        <td> </td>
        <td> </td>
        <td> hh </td>
        <td> hh </td>
        <td> hh </td>
        <td> hh </td>
        <td> hh </td>
    </tr>
</table>
<br>



<table id="calculs-table">
    <caption id="calculs-table-title"> Tableau de calcul </caption>
    <tbody id="calculs-table-tbody">
        <tr id="calculs-table-head">
            <th>Type de tomate</th>
            <th>Masse voulue (en kg)</th>
            <th>Prix au kilo (en €)</th>
            <th>Prix final (en €)</th>
            <th></th>
        </tr>
        <tr id="calculs-table-name">
            <td><input type="text" id="calculs-input-name" size="50" placeholder="Écrivez quelque chose..."></td>
            <td><input id="calculs-input-weight" type="number" placeholder="Entrer nombre..."></td>
            <td><input id="calculs-input-price" type="number" placeholder="Entrer nombre..."></td>
            <td></td>
            <td><button id="calculs-input-submit">Ajouter</button></td>
        </tr>
        <tr id="calculs-table-total-row">
            <td></td>
            <td></td>
            <td></td>
            <td id="calculs-table-total"></td>
            <td></td>
        </tr>
    </tbody>
</table> 


<button onclick="window.print();" >Imprimer la page</button>

<br><br>
<button id="button-return-home"><a href="index.php">Revenir à la page principale</a></button>



<?php
require "php/footer.php";
?>