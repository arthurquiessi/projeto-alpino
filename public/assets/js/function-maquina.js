// mauqinas
$(document).ready(function () {
    $("select[name='inputTag']").on("click", function () {
        var $modelo = $("input[name='inputModelo']");
        var $tipo = $("input[name='inputTipo']");
        var $processador = $("input[name='inputProcessador']");
        var $memoria = $("input[name='inputMemoria']");
        var $armazenamento = $("input[name='inputArmazenamento']");
        var $tipoArmazenamento = $("input[name='inputTipoArmazenamento']");
        var $so = $("input[name='inputSo']");
        var $nfCompra = $("input[name='inputNfCompra']");
        var $compra = $("input[name='inputCompra']");
        var $distribuidora = $("input[name='inputDistribuidora']");
        var $nfGarantia = $("input[name='inputNfGarantia']");
        var $garantia = $("input[name='inputGarantia']");
        $.getJSON('../../../../src/db/ti/geral/functionMaquina.php', {
            inputTag: $(this).val()
        }, function (json) {
            $modelo.val(json.modelo);
            $tipo.val(json.tipo);
            $processador.val(json.processador);
            $memoria.val(json.memoria);
            $armazenamento.val(json.armazenamento);
            $tipoArmazenamento.val(json.tipoArmazenamento);
            $so.val(json.so);
            $nfCompra.val(json.nfCompra);
            $compra.val(json.compra);
            $distribuidora.val(json.distribuidora);
            $nfGarantia.val(json.nfGarantia);
            $garantia.val(json.garantia);
        });
    });
});