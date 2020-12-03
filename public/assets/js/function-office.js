//ms office
$(document).ready(function () {
    $("select[name='inputOffice']").on("click", function () {
        var $serial = $("input[name='inputSerial']");
        var $versao = $("input[name='inputVersao']");
        $.getJSON('../../../../src/db/ti/geral/functionOffice.php', {
            inputOffice: $(this).val()
        }, function (json) {
            $serial.val(json.serial);
            $versao.val(json.versao);
        });
    });
});