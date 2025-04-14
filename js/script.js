document.getElementById("alerte").addEventListener("click", function() {
    alert("Attention ! Vous devez bien respecter l'unité des éléments que vous rentrez dans le tableau ! Vos résultats peuvent être faussés !");
});


function changeCouleur() {
    var paragraphe = document.getElementById("important");
    paragraphe.classList.add("rouge");
}
// Important est présent nul part


document.getElementById('addtomatoes');{
    float: left
}
// C'est du CSS le code est dans le mauvais fichier


 function calcul_tomates() {
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    if (num2>0) {
        let resultat = num1 * num2;
        document.getElementById("resultat").innerHTML = resultat;
    }
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