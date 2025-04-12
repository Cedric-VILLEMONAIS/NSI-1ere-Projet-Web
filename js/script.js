document.getElementById("alerte").addEventListener("click", function() {
    alert("Attention ! Vous devez bien respecter l'unité des éléments que vous rentrez dans le tableau ! <br> Vos résultats peuvent être faussés !");
});
function changeCouleur() {
    var paragraphe = document.getElementById("important");
    paragraphe.classList.add("rouge");
}


function multiplication() {
    // Récupérer les valeurs des cellules
    const valA = parseInt(document.getElementById("num1").textContent);
    const valB = parseInt(document.getElementById("num2").textContent);
    
    // Effectuer la multiplication
    const resultat = valA * valB;

    // Afficher le résultat dans la cellule
    document.getElementById("resultat").textContent = resultat;
  }


document.getElementById('addtomatoes').addEventListener("click", function() {
    let taskInput = document.getElementById('taskInput');
    let taskText = taskInput.value;

    taskInput.value = '';

    let li = document.createElement("li");
    li.textContent = taskText;

    let completeButton = document.createElement("button");
    completeButton.textContent = 'Compléter';
    completeButton.addEventListener('click', function() {
        li.style.textDecoration = 'line-through';
    });

    let deleteButton = document.createElement("button");
    deleteButton.textContent = 'Supprimer';
    deleteButton.addEventListener('click', function() {
        li.remove();
    });

    li.appendChild(completeButton);
    li.appendChild(deleteButton);

    document.getElementById("taskList").appendChild(li);
});