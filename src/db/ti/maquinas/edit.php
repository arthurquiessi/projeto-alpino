<?php

include_once("../../../config/conexaodb.php");

$id = $_POST['inputId'];
$tag = $_POST['inputTag'];
$modelo = $_POST['inputModelo'];
$tipo = $_POST['inputTipo'];
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

$edit = "UPDATE `maquina` SET tag = '$tag', modelo = '$modelo', tipo = '$tipo',
        processador = '$processador', memoria = '$memoria', armazenamento = '$armazenamento',
        tipo_armazenamento = '$tipo_armazenamento', sistema_operacional = '$so', nfcompra = '$nfCompra',
        datacompra = '$compra', distribuidora = '$distribuidora', nfgarantia = '$nfGarantia',
        datagarantia = '$garantia', statusmaq = '$status' WHERE id = '$id'";

$result = mysqli_query($conn, $edit);

if(mysqli_affected_rows($conn) != 0){
    echo "<script type=\"text/javascript\">alert(\"tag '$tag' alterada com sucesso\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerMachine.php'>";
            
}else{
    echo "<script type=\"text/javascript\">alert(\"Erro na alteração do registro\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerMachine.php'>";
}

mysqli_close($conn);
?>