// ramal
$(document).ready(function () {
    $("input[name='inputIpRamal']").blur(function () {
        var $ramal = $("input[name='inputRamal']");
        var $modeloRamal = $("input[name='inputModeloRamal']");
        $.getJSON('../../../../src/db/ti/geral/functionRamal.php', {
            inputIpRamal: $(this).val()
        }, function (json) {
            $ramal.val(json.ramal);
            $modeloRamal.val(json.modeloRamal);
        });
    });
});