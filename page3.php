<?php
$page_title = "Page 3";
$file_title = "page3";
require "modules/head.php";
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
        <table>
            <caption> Tableau de calcul </caption>
            <tr>
                <th> </th>
                <th> Type de tomate</th>
                <th> Masse voulue (en kg)</th>
                <th> Prix au kilo (en €)</th>
                <th> Prix final (en €)</th>
            </tr>
            <tr>
                <td> </td>
                <td> <input type="text" id="input" size="50" placeholder="Écrivez quelque chose..."></td>
                <td> <input type="number" id="num1" placeholder="Entrer nombre..."></td>
                <td> <input type="number" id="num2" placeholder="Entrer nombre..."></td>
                <td> 
                    <option value="multiply">Multiplication</option>
                    <p id="result"></p>
                    <script src="script.js"></script>
                </td>
            </tr>
            <tr>
                <td>Prix du panier</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> hh</td>
            </tr>
        </table>
        <br>
        <button><a href="index.php">Revenir à la page principale</a></button>

        <script src="script.js"></script>
    </body>
</html>