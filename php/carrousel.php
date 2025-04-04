<div class="carrousel_container">
    <button id="back_button" onclick="change('back')"><span class="material-icons">arrow_back</span></button>
    <div class="carrousel_photo_container">
        <?php
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
    <button id="next_button" onclick="change('next')"><span class="material-icons">arrow_forward</span></button>
</div>