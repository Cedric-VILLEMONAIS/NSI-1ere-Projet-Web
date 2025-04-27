// Script pour le code de la livraison de la page 3

// Importation des éléments html dans des variables
const Radio = document.getElementById("livraison-oui")
const taxes = document.getElementById("taxes");

// Lorsqu'on clique sur le bouton taxes on exécute la fonction
taxes.addEventListener("click", function() {
  // On importe le prix total du tableau des calculs dans une variable
  const prix_total = document.getElementById("calculs-table-total").innerHTML
  // Si le prix total est de 0 on informe l'utilisateur qu'il faut avant ajouter des articles
  if (parseFloat(prix_total) == 0) {
    alert("Veuillez ajouter des articles !")
  }
  // Sinon si l'utilisateur à choisi d'ajouter le prix de la livraison on lui retourne dans une alert le prix total+la livraison
  else if (Radio.checked) {
    alert("Le total à payer en comptant les frais de livraison est de "+String(parseFloat(prix_total) + 7.5) + " €");
  }
  // Sinon on donne à l'utilisateur le prix total sans les frais de livraison
  else {
    alert("Le total à payer est de "+prix_total+" €");
  }
});

// Quand on clique dans le conteneur de la livraison on exécute la fonction
document.getElementById("calculs-livraison-container").addEventListener("click", function() {
  // Si l'utilisateur ne choisit pas de livraison on change le texte du bouton par "Valider"
  if (document.getElementById("livraison-non").checked == true) {
    taxes.innerHTML = "Valider";
  }
  // Sinon si l'utilisateur choisit la livraison on met "Ajouter 7,50 €" dans le bouton
  else if (document.getElementById("livraison-oui").checked == true) {
    taxes.innerHTML = "Ajouter 7,50 €";
  }
});