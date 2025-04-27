/* Script pour les calculs */

// On met l'élément "calculs-table-total", trouvé grâce à son id, à 0
document.getElementById("calculs-table-total").textContent = 0;

// Création d'une fonction nommé update_prices qui met a jour le prix total à partir des différents articles
function update_prices() {
    let table_price = document.getElementsByClassName("calculs-table-price"); //déclation variable locale table_price en assignant les éléments situés dan s la classe 'calculs-table-price'
    let total_price = 0 //déclaration d'une variable locale total_price en y assignant la valeur 0
    // Boucle qui incrémente la variable total_price avec les différets articles ajoutés par l'utilisateur dans le tableau
    for (var i = 0; i < table_price.length; i++) { 
        total_price += parseFloat(table_price[i].innerHTML);
    }
    // On change le texte de #calculs-table-total par le prix total calculé précédemment
    document.getElementById("calculs-table-total").textContent = total_price;
}


// Lorsque l'utilisateur clique sur le bouton ajouter dans le formulaire du tableau on exécute la fonction suivante qui ajoute une ligne dans le tableau avec les données renseignées
document.getElementById('calculs-input-submit').addEventListener("click", function() {
    // On récupère les différents champs du formulaire
    let name = document.getElementById('calculs-input-name');
    let weight = document.getElementById('calculs-input-weight');
    let price = document.getElementById('calculs-input-price');

    // On créé des éléments HTML dans des variables pour créer la nouvelle ligne du tableau
    let tr = document.createElement("tr");
    let td_name = document.createElement("td");
    let td_weight = document.createElement("td");
    let td_price = document.createElement("td");
    let td_total = document.createElement("td");
    let action = document.createElement("td");

    // On change le texte des éléments HTML des variables par les données donnés par l'utilisateur
    td_name.textContent = name.value;
    td_weight.textContent = weight.value;
    td_price.textContent = price.value;
    td_total.textContent = weight.value * price.value;

    // On remplace les champs de formulaire par rien pour une nouvelle saisie
    name.value = "";
    weight.value = "";
    price.value = "";

    // On créé le bouton de suppression de la ligne et lorsqu'on clique dessus on supprime la ligne créé puis on met à jour les prix
    let deleteButton = document.createElement("button");
    deleteButton.textContent = 'Supprimer';
    deleteButton.addEventListener('click', function() {
        tr.remove();
        update_prices()
    });

    // On ajoute la class calculs-table-price à notre td contenant le prix de la ligne pour pouvoir être récupéré par la fonctiond e mise à jour des prix
    td_total.classList.add("calculs-table-price");

    // On ajoute les différents enfants à leur parents et on fait en sorte que la colone action ne s'imprime pas
    action.appendChild(deleteButton);
    action.classList.add("no-print");
    tr.appendChild(td_name);
    tr.appendChild(td_weight);
    tr.appendChild(td_price);
    tr.appendChild(td_total);
    tr.appendChild(action);

    // On récupère la dernière ligne du tableau contenant le prix total des articles puis on ajoute notre ligne avant cette ligne pour qu'elle reste toujours la dernière
    var total_row = document.getElementById("calculs-table-total-row")
    document.getElementById("calculs-table-tbody").insertBefore(tr, total_row);

    // On met à jour les prix
    update_prices()
});

