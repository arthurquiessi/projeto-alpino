<?php

include_once("../../../config/conexaodb.php");

$tag = $_POST['inputTag'];
$modelo = $_POST['inputModelo'];
$tipo = $_POST['inputTipo'];
$idpc = $_POST['inputIdpc'];
$processador = $_POST['inputProcessador'];
$memoria = $_POST['inputMemoria'];
$armazenamento = $_POST['inputArmazenamento'];
$tipo_armazenamento = $_POST['inputTipoArmazenamento'];
$so = $_POST['inputSo'];
$nfCompra = $_POST['inputNfCompra'];
$compra = $_POST['inputCompra'];
$distribuidora = $_POST['inputDistribuidora'];
$nfGarantia = $_POST['inputNfGarantia'];
$garantia = $_POST['inputGarantia'];
$status = $_POST['inputStatus'];

$coleta = mysqli_query($conn, "SELECT * FROM maquina where tag = '{$tag}'");

if(mysqli_num_rows($coleta) == 0) {
    $cadastro = "INSERT INTO `maquina` (`id`, `tag`, `modelo`, `tipo`, `pcid`, `processador`, `memoria`, `armazenamento`, `tipo_armazenamento`, `sistema_operacional`, `nfcompra`, `datacompra`, `distribuidora`, `nfgarantia`, `datagarantia`, `statusmaq`) 
                VALUES (NULL, '$tag', '$modelo', '$tipo', '$idpc', '$processador', '$memoria', '$armazenamento', '$tipo_armazenamento', '$so', '$nfCompra', '$compra', '$distribuidora', '$nfGarantia', '$garantia', '$status')";
    $result = mysqli_query($conn, $cadastro);

    if(mysqli_affected_rows($conn) != 0){ 
        echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerMachine.php'>";
    }else {
        echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerMachine.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Tag já cadastrado\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerMachine.php'>";
}

mysqli_close($conn);
?>