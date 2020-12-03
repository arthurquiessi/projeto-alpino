// usuarios
$(document).ready(function () {
    $("input[name='inputIp']").blur(function () {
        var $usuario = $("input[name='inputUsuario']");
        var $setor = $("input[name='inputSetor']");
        var $homeOffice = $("input[name='inputHomeOffice']");
        $.getJSON('../../../../src/db/ti/geral/functionUsuario.php', {
            inputIp: $(this).val()
        }, function (json) {
            $usuario.val(json.usuario);
            $setor.val(json.setor);
            $homeOffice.val(json.homeOffice);
        });
    });
});