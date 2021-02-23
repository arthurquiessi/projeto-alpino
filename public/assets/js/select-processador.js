function selecionaTodosProcessadores() {
    var primeiroCheckbox = document.getElementById("i3")

    if (primeiroCheckbox.checked) {
        document.getElementById("i3").checked = false;
        document.getElementById("i5").checked = false;
        document.getElementById("i7").checked = false;
        document.getElementById("i9").checked = false;
        document.getElementById("pentium").checked = false;
        document.getElementById("dualCore").checked = false;
        document.getElementById("xeon").checked = false;
    } else {
        document.getElementById("i3").checked = true;
        document.getElementById("i5").checked = true;
        document.getElementById("i7").checked = true;
        document.getElementById("i9").checked = true;
        document.getElementById("pentium").checked = true;
        document.getElementById("dualCore").checked = true;
        document.getElementById("xeon").checked = true;
    }
}