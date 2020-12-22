$(document).ready(function () {
    $("select[name='inputTag']").on("click", function () {
        var $modelo = $("input[name='inputModelo']");
        var $tipo = $("input[name='inputTipo']");
        var $pcid = $("input[name='inputIdpc']");
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
            $pcid.val(json.pcid);
            $processador.val(json.processador);
            $memoria.val(json.memoria);
            $armazenamento.val(json.armazenamento);
            $tipoArmazenamento.val(json.tipo_armazenamento);
            $so.val(json.sistema_operacional);
            $nfCompra.val(json.nfcompra);
            $compra.val(json.datacompra);
            $distribuidora.val(json.distribuidora);
            $nfGarantia.val(json.nfgarantia);
            $garantia.val(json.datagarantia);
        });
    });
});