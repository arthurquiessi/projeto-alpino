function selecionaTodosModelosOffice() {
    var primeiroCheckbox = document.getElementById("libreOffice")

    if (primeiroCheckbox.checked) {
        document.getElementById("libreOffice").checked = false;
        document.getElementById("2007").checked = false;
        document.getElementById("2010").checked = false;
        document.getElementById("2013").checked = false;
        document.getElementById("2016").checked = false;
        document.getElementById("365").checked = false;
    } else {
        document.getElementById("libreOffice").checked = true;
        document.getElementById("2007").checked = true;
        document.getElementById("2010").checked = true;
        document.getElementById("2013").checked = true;
        document.getElementById("2016").checked = true;
        document.getElementById("365").checked = true;
    }
}