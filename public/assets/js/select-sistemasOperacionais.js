function selecionaTodosSO() {
    var primeiroCheckbox = document.getElementById("linux")

    if (primeiroCheckbox.checked) {
        document.getElementById("linux").checked = false;
        document.getElementById("windows10").checked = false;
        document.getElementById("windows732").checked = false;
        document.getElementById("windows764").checked = false;
        document.getElementById("windows8").checked = false;
        document.getElementById("windowsServer2019").checked = false;
    } else {
        document.getElementById("linux").checked = true;
        document.getElementById("windows10").checked = true;
        document.getElementById("windows732").checked = true;
        document.getElementById("windows764").checked = true;
        document.getElementById("windows8").checked = true;
        document.getElementById("windowsServer2019").checked = true;
    }
}