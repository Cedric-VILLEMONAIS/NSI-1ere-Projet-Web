// Définition de la variable div et intégration des éléments marqués comme "important"
var div = document.getElementById("important");
//définition d'une fonction se déclenchant avec l'évènement: quand la souris passe sur le texte, dans la variable div
div.addEventListener("mouseover", function() {
//coloration du texte dans la variable div en rouge
    div.style.color = "red";
});

// Définition de la variable div et intégration des éléments marqués comme "important"
var div = document.getElementById("important");
//définition d'une fonction se déclenchant avec l'évènement: quand l'on clique sur le texte, dans la variable div
div.addEventListener("click", function() {
//coloration du texte dans la variable div en vert
    div.style.color = "green";
});
