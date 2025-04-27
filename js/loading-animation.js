// Fonction exécutée lorsque l'état de chargement du document change
document.onreadystatechange = function () {
    var state = document.readyState; // Récupère l'état actuel du document

    // Si le document est en cours de chargement (état "interactive")
    if (state == 'interactive') {
        // Cache le contenu principal de la page
        document.getElementById('contents').style.display = "none";
    } 
    // Si le document est complètement chargé (état "complete")
    else if (state == 'complete') {
        // Ajoute un délai avant d'afficher le contenu principal
        setTimeout(function () {
            // Cache l'animation de chargement
            document.getElementById('loading-animation').style.display = "none";
            // Affiche le contenu principal de la page
            document.getElementById('contents').style.display = "block";
        }, 1000); // Délai de 1 seconde
    }
}