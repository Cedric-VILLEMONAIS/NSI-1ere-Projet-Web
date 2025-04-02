<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="carrousel.css">
    <title>Carrousel</title>
</head>
<body>
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
        <div class="carrousel_point">
            <ul>
            <?php
                foreach($images as $fichier){
                    echo "<li class='carrousel_point'>•</li>";
                }
            ?>
            </ul>
        </div>
        <button id="next_button" onclick="change('next')"><span class="material-icons">arrow_forward</span></button>
    </div>
    <script src="carrousel.js"></script>
</body>
</html>