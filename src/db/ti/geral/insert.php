<?php

include_once("../../../config/conexaodb.php");

$ip = $_POST['inputIp'];
$usuario = $_POST['inputUsuario'];
$setor = $_POST['inputSetor'];
$homeOffice = $_POST['inputHomeOffice'];
$tag = $_POST['inputTag'];
$modelo = $_POST['inputModelo'];
$tipo = $_POST['inputTipo'];
$pcid = $_POST['inputIdpc'];
$processador = $_POST['inputProcessador'];
$memoria = $_POST['inputMemoria'];
$armazenamento = $_POST['inputArmazenamento'];
$tipoArmazenamento = $_POST['inputTipoArmazenamento'];
$so = $_POST['inputSo'];
$nfCompra = $_POST['inputNfCompra'];
$compra = $_POST['inputCompra'];
$distribuidora = $_POST['inputDistribuidora'];
$nfGarantia = $_POST['inputNfGarantia'];
$garantia = $_POST['inputGarantia'];
$office = $_POST['inputOffice'];
$serial = $_POST['inputSerial'];
$versao = $_POST['inputVersao'];
$ipRamal = $_POST['inputIpRamal'];
$ramal = $_POST['inputRamal'];
$modeloRamal = $_POST['inputModeloRamal'];

echo $ip . '<br>';
echo $usuario . '<br>';
echo $setor . '<br>';
echo $homeOffice . '<br>';
echo $tag . '<br>';
echo $modelo . '<br>';
echo $tipo . '<br>';
echo $pcid . '<br>';
echo $processador . '<br>';
echo $memoria . '<br>';
echo $armazenamento . '<br>';
echo $tipoArmazenamento . '<br>';
echo $so . '<br>';
echo $nfCompra . '<br>';
echo $compra . '<br>';
echo $distribuidora . '<br>';
echo $nfGarantia . '<br>';
echo $garantia . '<br>';
echo $office . '<br>';
echo $serial . '<br>';
echo $versao . '<br>';
echo $ipRamal . '<br>';
echo $ramal . '<br>';
echo $modeloRamal . '<br>';


mysqli_close($conn);
?>