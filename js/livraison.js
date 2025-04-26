const Radio = document.getElementById("#livraison-oui")
const taxes = document.getElementById("#taxes");
Radio.addEventListener("mousedown", function() {
  if (Radio.checked) {
    taxes.style.visibility = "visible";
  } else{
    taxes.style.visibility = "hidden";
  }
});

document.getElementById("taxes").addEventListener("click", function() {
  alert("Le total à payer en comptant les frais de livraison est de:"+str(document.getElementById("calculs-table-total") + 7.50));
});