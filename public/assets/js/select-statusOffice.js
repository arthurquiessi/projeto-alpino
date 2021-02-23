function selecionaTodosStatusOffice() {
    var primeiroCheckbox = document.getElementById("todosOffice")

    if (primeiroCheckbox.checked) {
        document.getElementById("todosOffice").checked = false;
        document.getElementById("ativosOffice").checked = false;
        document.getElementById("inativosOffice").checked = false;
    } else {
        document.getElementById("todosOffice").checked = true;
        document.getElementById("ativosOffice").checked = true;
        document.getElementById("inativosOffice").checked = true;
    }
}