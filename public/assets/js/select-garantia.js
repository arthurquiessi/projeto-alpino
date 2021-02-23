function selecionaTodosGarantia() {
    var primeiroCheckbox = document.getElementById("todas")

    if (primeiroCheckbox.checked) {
        document.getElementById("todas").checked = false;
        document.getElementById("vencidas").checked = false;
        document.getElementById("ativas").checked = false;
    } else {
        document.getElementById("todas").checked = true;
        document.getElementById("vencidas").checked = true;
        document.getElementById("ativas").checked = true;
    }
}