
const Radio = document.getElementById("livraison-oui")
const taxes = document.getElementById("taxes");
const prix_total = document.getElementById("calculs-table-total").innerHTML


document.getElementById("taxes").addEventListener("click", function() {
  const prix_total = document.getElementById("calculs-table-total").innerHTML
  if (parseFloat(prix_total) == 0) {
    alert("Veuillez ajouter des articles !")
  }
  else if (Radio.checked) {
    alert("Le total à payer en comptant les frais de livraison est de "+String(parseFloat(prix_total) + 7.5) + " €");
  }
  else {
    alert("Le total à payer est de "+prix_total+" €");
  }
});

document.getElementById("calculs-livraison-container").addEventListener("click", function() {
  if (document.getElementById("livraison-non").checked == true) {
    taxes.innerHTML = "Valider";
  }
  else if (document.getElementById("livraison-oui").checked == true) {
    taxes.innerHTML = "Ajouter 7,50 €";
  }
});