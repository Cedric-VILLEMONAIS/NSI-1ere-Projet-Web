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
            <!-- <img class="carrousel_photo" src="./images/tomate coeur de boeuf coupe.jpeg" alt="">
            <img class="carrousel_photo" src="./images/tomate ananas coupe.webp" alt="">
            <img class="carrousel_photo" src="./images/tomate ananas.jpg" alt="">
            <img class="carrousel_photo" src="./images/tomate coeur de boeuf.jpeg" alt=""> -->




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
        <div class="carrousel_point"></div>
        <button id="next_button" onclick="change('next')"><span class="material-icons">arrow_forward</span></button>
    </div>
    <script src="carrousel.js"></script>
</body>
</html>