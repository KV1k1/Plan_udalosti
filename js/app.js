var form = document.getElementById("contact");
var meno = document.getElementById("meno");
var priezvisko = document.getElementById("priezvisko");
var email = document.getElementById("email");
var eventy = document.getElementById("event");
var taskAdded = false; // skontroluje, či bola pridaná úloha

form.addEventListener("submit", validateForm);

function validateForm(event) {
    event.preventDefault();
    if (!taskAdded && (meno.value == "" || priezvisko.value == "" || email.value == "" || eventy.value == "")) {
        alert("Prosím vyplnte všetky polia.");
    } else {
        if (!taskAdded) {
            // otvorí ty.html keď, polia sú vyplnené
            window.open("ty.php", '_blank');
        }
    }
    // vynuluje taskAdded po overení
    taskAdded = false;
}

window.onload = function() {
    var form = document.getElementById("contact");
    form.reset();
};

function addTask() {
    var input = document.getElementById('taskInput').value;
    var ul = document.getElementById('taskList');
    var li = document.createElement('li');
    li.appendChild(document.createTextNode(input));
    ul.appendChild(li);

    li.onclick = function() {
        this.parentNode.removeChild(this);
    };

    document.getElementById('taskInput').value = '';
    // true, keď je pridaná úloha
    taskAdded = true;
}