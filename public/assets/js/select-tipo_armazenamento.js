function selecionaTodosTipoArmazenagem() {
    var primeiroCheckbox = document.getElementById("ssd")

    if (primeiroCheckbox.checked) {
        document.getElementById("ssd").checked = false;
        document.getElementById("hdd").checked = false;
        document.getElementById("ssdhdd").checked = false;
    } else {
        document.getElementById("ssd").checked = true;
        document.getElementById("hdd").checked = true;
        document.getElementById("ssdhdd").checked = true;
    }
}