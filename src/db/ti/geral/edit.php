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

// $edit = "UPDATE `geral` SET ip = '$ip', usuario = '$usuario', setor = '$setor', homeOffice = '$homeOffice',
//                             tag = '$tag', modelo = '$modelo', tipo = '$tipo', pcid = '$pcid',
//                             processador = '$processador', memoria = '$memoria', armazenamento = '$armazenamento', tipo_armazenamento = '$tipoArmazenamento',
//                             sistema_operacional = '$so', nfcompra = '$nfCompra', datacompra = '$compra', distribuidora = '$distribuidora',
//                             nfgarantia = '$nfGarantia', datagarantia = '$garantia', inicio = '$office', chave_produto = '$serial',
//                             versao_office = '$versao', ipRamal = '$ipRamal', ramal = '$ramal', modelo_ramal = '$modeloRamal',
//                             WHERE ip = '$ip'";
// $result = mysqli_query($conn, $edit);

// if(mysqli_affected_rows($conn) != 0){
//     echo "<script type=\"text/javascript\">alert(\"Registro alterado com sucesso\");</script>";
//     echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/consult/consultAll.php'>";
            
// }else{
//     echo "<script type=\"text/javascript\">alert(\"Erro na alteração do registro\");</script>";
//     echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/consult/consultAll.php'>";
// }

mysqli_close($conn);
?>