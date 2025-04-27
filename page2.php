<?php
$page_title = "Les tomates - Les variétés";
$file_title = "page2";
require "php/head.php";
?>

<!-- titre principal de la page -->
<h1>Les différentes variétés de tomates</h1>
<!-- paragraphe avec un retour à la ligne et des éléments en gras -->
<p>Des <strong>petites</strong> aux <strong>énormes</strong>, les tomates ne cessent de changer de formes. <br> Voici certaines des diverses espèces des ces fruits pas nécessairement rouges !</p>
<br><!-- retour à la ligne -->
<!-- importation du carrousel -->
<?php
    require "php/carrousel.php"
?>
<br><!-- retour à la ligne -->

<!-- taille de titre 3 avec comme id 'sommaire1' -->
<h3 id="sommaire1">Sommaire des différentes espèces</h3>
<!-- liste organisée (avec des chiffres) avec comme classe 'sommaire' -->
<ol class="sommaire">
    <!-- les différentes variétés expliquées dans la page avec des liens pour y accéder directement et qui affiche le commentaire'Allez directement ici' lorsqu'on laisse la souris dessus  -->
    <li><p title="Allez directement ici !"><a href="#classiques">Tomates "Classiques"</a></p></li>
    <li><p title="Allez directement ici !"><a href="#cœur de bœuf">Tomates Cœurs de Bœuf</a></p></li>
    <li><p title="Allez directement ici !"><a href="#ananas">Tomates Ananas</a></p></li>
    <li><p title="Allez directement ici !"><a href="#cornues">Tomates Cornues</a></p></li>
    <li><p title="Allez directement ici !"><a href="#cerises">Tomates Cerises</a></p></li>
</ol><!-- fin de la liste -->
<br><!-- retour à la ligne -->

<!-- taille de titre 3 comportant l'id 'classiques' pour y accéder plus rapidement via la sommaire -->
<h3 id="classiques">Tomates "Classiques"</h3>
<!-- paragraphe comportant des retour à la ligne pour la mise en page -->
<p>La tomate rouge classique est la variété la plus répandue et consommée à travers le monde. De taille moyenne et de forme ronde, elle se distingue par sa peau lisse et sa couleur rouge vif à maturité. <br> Polyvalente en cuisine, elle se déguste aussi bien crue en salade, en sandwich ou en bruschetta, que cuite dans des sauces, des soupes ou des plats mijotés. Riche en eau, en vitamines et en antioxydants, elle est à la fois rafraîchissante et bénéfique pour la santé. <br> Sa culture est relativement simple : elle nécessite un bon ensoleillement, un arrosage régulier et un tuteurage pour les variétés à croissance indéterminée. Présente dans tous les potagers, elle offre une récolte généreuse durant toute la saison estivale.<br></p>
<!-- importation d'une image s'affichant en grand et ayant la mention 'cliquez pour voir en grand' lorsqu'on laisse la souris dessus -->
<a href="images/tomate_classique.png">
    <img src="images/tomate_classique.png" height="100px" weight='10px' alt="Photo d'une tomate classique" title="Cliquez pour voir en grand !">
</a>
<br><br><!-- 2 retours à la ligne -->
<!-- lien pour retourner au sommaire grâce à son id -->
<a href="#sommaire1">Retourner au sommaire</a>
<br><br><!-- 2 retours à la ligne -->

<!-- taille de titre 3 comportant l'id 'cœur de bœuf' pour y accéder plus rapidement via la sommaire -->
<h3 id="cœur de bœuf">Tomates Cœurs de Bœuf</h3>
<!-- paragraphe avec des retours à la ligne pour la mise en page -->
<p>La tomate Cœur de Bœuf est une variété ancienne réputée pour sa chair dense, juteuse et savoureuse, avec peu de graines et une faible acidité. De grande taille, elle se distingue par sa forme en cœur et sa peau fine, souvent de couleur rouge vif ou orangée à maturité. <br> Très appréciée en cuisine, elle est idéale pour les salades grâce à sa texture fondante, mais elle peut aussi être utilisée en carpaccio, en sandwich ou en sauce. <br> Sa culture demande du soleil, un sol riche et un tuteurage solide pour soutenir ses fruits volumineux. Plante indéterminée, elle produit tout au long de la saison, offrant des tomates charnues et parfumées aux amateurs de saveurs authentiques.<br></p>                
<!-- importation de deux images avec la mention 'cliquez pour voir en grand' lorsqu'on laisse la souris sur les images et s'affichant en grand une fois que l'on a cliqué dessus -->
<a href="images/tomate_coeur_de_boeuf.png"> 
    <img src="images/tomate_coeur_de_boeuf.png" height="100px" weight='10px' alt="Photo d'une tomate cœur de bœuf" title="Cliquez pour voir en grand !">                
</a>
<a href="images/tomate_coeur_de_boeuf_coupe.png">
    <img src="images/tomate_coeur_de_boeuf_coupe.png" height="100px" weight='10px' alt="Photo d'une tomate cœur de bœuf coupée" title="Cliquez pour voir en grand !">
</a> 
<br><br><!-- 2 retours à la ligne -->
<!-- lien pour retourner au sommaire grâce à son id -->
<a href="#sommaire1">Retourner au sommaire</a> 
<br><br><!-- 2 retours à la ligne -->

<!-- taille de titre 3 avec l'id 'ananas' pour y accéder rapidement via le sommaire -->
<h3 id="ananas">Tomates Ananas</h3>
<!-- pargagraphe avec des retours à la ligne pour la mise en forme de la page -->
<p>La tomate Ananas est une variété ancienne appréciée pour sa chair juteuse, sucrée et peu acide. De grande taille, elle peut peser plus de 500 g et se distingue par sa forme irrégulière et côtelée. Sa couleur jaune orangé, marbrée de rouge, rappelle l’intérieur d’un ananas, d’où son nom. <br> En cuisine, elle est idéale en salade, en carpaccio ou simplement accompagnée d’un filet d’huile d’olive, mais elle se prête aussi bien aux coulis et aux sauces douces et parfumées. <br> Sa culture nécessite beaucoup de soleil, un bon espacement et un tuteur solide pour supporter le poids des fruits. Plante indéterminée, elle continue de croître tant que les conditions sont favorables, offrant ainsi des récoltes généreuses tout au long de la saison.<br></p>
<!-- importation de deux images avec la mention 'cliquez pour voir en grand' lorsqu'on laisse la souris sur les images et s'affichant en grand une fois que l'on a cliqué dessus -->
<a href="images/tomate_ananas.png">
    <img src="images/tomate_ananas.png" height="100px" weight='10px' alt="Photo d'une tomate ananas" title="Cliquez pour voir en grand !">
</a>
<a href="images/tomate_ananas_coupe.png">
    <img src="images/tomate_ananas_coupe.png" height="100px" weight='10px' alt="Photo d'une tomate ananas coupée" title="Cliquez pour voir en grand !">
</a> 
<br><br><!-- 2 retours à la ligne -->
<!-- lien pour retourner au sommaire grâce à son id -->
<a href="#sommaire1">Retourner au sommaire</a>
<br><br><!-- 2 retours à la ligne -->

<!-- taille de titre 3 avec l'id 'cornues' pour y accéder rapidement via le sommaire -->
<h3 id="cornues">Tomates Cornues</h3>
<!-- pargagraphe avec des retours à la ligne pour la mise en forme de la page -->
<p>La tomate Cornue, aussi appelée "Cornue des Andes", est une variété ancienne reconnaissable à sa forme allongée et pointue, rappelant un piment. Sa peau fine et rouge vif renferme une chair dense, savoureuse et peu acide, avec très peu de graines. <br> Très appréciée en cuisine, elle est idéale pour les sauces, les coulis et les salades, grâce à sa texture fondante et son goût sucré. <br> Facile à cultiver, elle nécessite un bon ensoleillement, un sol riche et un tuteurage solide pour supporter ses fruits allongés. Productive et résistante aux maladies, elle est très prisée des jardiniers pour ses récoltes abondantes tout au long de l’été.<br></p>
<!-- importation d'une image s'affichant en grand et ayant la mention 'cliquez pour voir en grand' lorsqu'on laisse la souris dessus -->
<a href="images/tomate_cornue.png">
    <img src="images/tomate_cornue.png" height="100px" weight='10px' alt="Photo d'une tomate cornue" title="Cliquez pour voir en grand !">
</a>
<br><br><!-- 2 retours à la ligne -->
<!-- lien pour retourner au sommaire grâce à son id -->
<a href="#sommaire1">Retourner au sommaire</a>     
<br><br><!-- 2 retours à la ligne -->

<!-- taille de titre 3 avec l'id 'cerises' pour y accéder rapidement via le sommaire -->
<h3 id="cerises">Tomates Cerises</h3>
<!-- pargagraphe avec des retours à la ligne pour la mise en forme de la page -->
<p>La tomate cerise est une petite variété de tomate très appréciée pour sa saveur sucrée et sa texture croquante. De forme ronde ou allongée, elle se décline en plusieurs couleurs, allant du rouge au jaune, en passant par l’orange et même le noir. <br> Très prisée en cuisine, elle se consomme aussi bien crue en salade, à l’apéritif ou en brochettes, que cuite dans des plats rôtis ou confits. <br> Facile à cultiver, elle pousse en grappes sur des plants vigoureux et nécessite peu d’entretien, ce qui en fait une variété idéale pour les jardiniers amateurs. Grâce à sa production abondante et à sa résistance aux maladies, elle offre des récoltes régulières tout au long de l’été.<br></p>
<!-- importation d'une image s'affichant en grand et ayant la mention 'cliquez pour voir en grand' lorsqu'on laisse la souris dessus -->
<a href="images/tomate_cerise.png">
    <img src="images/tomate_cerise.png" height="100px" weight='10px' alt="Photo d'une tomate cerise" title="Cliquez pour voir en grand !">
</a>
<br><br><!-- 2 retours à la ligne -->
<!-- lien pour retourner au sommaire grâce à son id -->
<a href="#sommaire1">Retourner au sommaire</a>  
<br><br><!-- 2 retours à la ligne -->

<!-- création d'un bouton avec un lien pour retourner à la page principale rapidement -->
<button id="button-return-home"><a href="index.php">Revenir à la page principale</a></button>


<?php
require "php/footer.php";
?>