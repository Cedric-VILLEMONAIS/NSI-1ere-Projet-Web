document.getElementById("alerte").addEventListener("click", function() {
    alert("Attention ! Vous devez bien respecter l'unité des éléments que vous rentrez dans le tableau ! <br> Vos résultats peuvent être faussés !");
});
function changeCouleur() {
    var paragraphe = document.getElementById("important");
    paragraphe.classList.add("rouge");
}

document.getElementById('calculate').addEventListener('change', function() {
    let num1 = parseFloat(document.getElementById('num1').value);
    let num2 = parseFloat(document.getElementById('num2').value);
    let operation = document.getElementById('operation').value;
    let result;
        result = num1 * num2;
document.getElementById('result').textContent = 'Résultat : ' + result;
});

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