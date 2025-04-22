// document.getElementById("alerte").addEventListener("click", function() {
//     alert("Attention ! Vous devez bien respecter l'unité des éléments que vous rentrez dans le tableau ! Vos résultats peuvent être faussés !");
// });


function changeCouleur() {
   var paragraphe = document.getElementById("important");
    paragraphe.classList.add("rouge");
}



document.getElementById("calculs-table-total").textContent = 0;

function update_prices() {
    let table_price = document.getElementsByClassName("calculs-table-price");
    let total_price = 0
    for (var i = 0; i < table_price.length; i++) {
        total_price += parseFloat(table_price[i].innerHTML);
    }
    document.getElementById("calculs-table-total").textContent = total_price;
}



document.getElementById('calculs-input-submit').addEventListener("click", function() {

    let name = document.getElementById('calculs-input-name');
    let weight = document.getElementById('calculs-input-weight');
    let price = document.getElementById('calculs-input-price');

    let tr = document.createElement("tr");
    let td_name = document.createElement("td");
    let td_weight = document.createElement("td");
    let td_price = document.createElement("td");
    let td_total = document.createElement("td");
    let action = document.createElement("td");

    td_name.textContent = name.value;
    td_weight.textContent = weight.value;
    td_price.textContent = price.value;
    td_total.textContent = weight.value * price.value;


    name.value = "";
    weight.value = "";
    price.value = "";


    let deleteButton = document.createElement("button");
    deleteButton.textContent = 'Supprimer';
    deleteButton.addEventListener('click', function() {
        tr.remove();
        update_prices()
    });

    td_total.classList.add("calculs-table-price");

    action.appendChild(deleteButton);
    tr.appendChild(td_name);
    tr.appendChild(td_weight);
    tr.appendChild(td_price);
    tr.appendChild(td_total);
    tr.appendChild(action);

    var total_row = document.getElementById("calculs-table-total-row")
    document.getElementById("calculs-table-tbody").insertBefore(tr, total_row);

    update_prices()
});

const otherCheckbox = document.querySelector("#other");

otherCheckbox.addEventListener("change", () => {
  if (otherCheckbox.checked) {
    taxes = "visible";
  } else {
    taxes = "hidden";
  }
});

document.getElementById('taxes').addEventListener("click", function() {
    