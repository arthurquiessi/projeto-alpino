function selecionaTodosModelosRamais() {
    var primeiroCheckbox = document.getElementById("DP722")

    if (primeiroCheckbox.checked) {
        document.getElementById("DP722").checked = false;
        document.getElementById("GXP1628").checked = false;
        document.getElementById("SIPT19P").checked = false;
    } else {
        document.getElementById("DP722").checked = true;
        document.getElementById("GXP1628").checked = true;
        document.getElementById("SIPT19P").checked = true;
    }
}