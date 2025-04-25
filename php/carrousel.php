<!-- Container pour le code du carrousel -->
<div class="carrousel_container">
    <!-- Bouton pour voire l'image arrière (utilisation de lafonction js change()) -->
    <button id="back_button" onclick="change('back')">
        <!-- Icone flèche gauche - Google Font material design icons -->
        <span class="material-icons">arrow_back</span>
    </button>
    <!-- Container des images -->
    <div class="carrousel_photo_container">
        <!-- Affichage des images -->
        <?php // Pas de commentaire - rendu en HTML
            $images = [];
            $scandir = scandir("images");
            foreach($scandir as $fichier){
                if(preg_match("#\.(png)$#i", $fichier)){
                    array_unshift($images, $fichier);
                }
            }
            foreach($images as $fichier){
                echo "<img class='carrousel_photo' src='./images/$fichier' alt=''>";
            }
        ?>
    </div>
    <!-- Bouton pour voire l'image suivante (utilisation de lafonction js change()) -->
    <button id="next_button" onclick="change('next')">
        <!-- Icone flèche droite - Google Font material design icons -->
        <span class="material-icons">arrow_forward</span>
    </button>
</div>
<!-- Intégration du code JavaScript pour le carrousel -->
<script src="./js/carrousel.js"></script>