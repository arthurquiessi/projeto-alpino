function selecionaTodosTipoMaquina() {
    var primeiroCheckbox = document.getElementById("desktop")

    if (primeiroCheckbox.checked) {
        document.getElementById("desktop").checked = false;
        document.getElementById("notebook").checked = false;
        document.getElementById("servidor").checked = false;
        document.getElementById("virtualizacao").checked = false;
    } else {
        document.getElementById("desktop").checked = true;
        document.getElementById("notebook").checked = true;
        document.getElementById("servidor").checked = true;
        document.getElementById("virtualizacao").checked = true;
    }
}