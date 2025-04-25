// Définition des variables et intégration des boutons et photos du carroussel du HTML (DOM)
var back_button = document.getElementById("back_button");
var next_button = document.getElementById("next_button");
var image = document.getElementsByClassName("carrousel_photo");

// Boucle for qui va cacher toutes les images sauf la première
for(let i = 1; i < image.length; i++) {
    image[i].classList.add("display_none");
}

// Définition d'une variable qui va indiquer l'image actuelle du carrousel (actuellement la première)
var actual_image = 0;

// Définition de la fonction change() avec le paramètre action
function change(action) {
    // On cache l'image actuelle par l'ajout de la class css display_none
    image[actual_image].classList.add("display_none");
    // Création d'un switch pour les différentes actions de changements d'images
    switch(action) {
        // Dans le cas de l'image précédente on enlève 1 la variable de l'image actuelle
        case "back":
            actual_image--;
            // Si l'image actuelle est l'image d'index -1 alors don affiche la dernière image de la liste
            if (actual_image<0) {
                actual_image = image.length-1;
            }
        // Dans le cas de l'image suivante on ajoute 1 à la variable de l'image actuelle
        case "next":
            actual_image++;
            // Si l'image actuelle est l'image d'index de la dernière image +1 alors don affiche la dernière image de la liste
            if (actual_image==image.length) {
                actual_image=0;
            }
    }
    // On retire la classe display_none de la nouvelle image actuelle pour l'afficher
    image[actual_image].classList.remove("display_none");
}

// On exécute la fonction change() avec l'argument "next" pour afficher l'image toutes les deux secondes
setInterval(() => change("next"), 2000);
