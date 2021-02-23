function selecionaTodosStatus() {
    var primeiroCheckbox = document.getElementById("todos")

    if (primeiroCheckbox.checked) {
        document.getElementById("todos").checked = false;
        document.getElementById("ativos").checked = false;
        document.getElementById("inativos").checked = false;
    } else {
        document.getElementById("todos").checked = true;
        document.getElementById("ativos").checked = true;
        document.getElementById("inativos").checked = true;
    }
}