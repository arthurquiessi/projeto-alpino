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

$coleta = mysqli_query($conn, "SELECT * FROM geral WHERE ip = '{$ip}'");

if(mysqli_num_rows($coleta) == 0) {
    $cadastro = "INSERT INTO `geral` (`ip`, `usuario`, `setor`, `home_office`, `tag`, `modelo`, `tipo`, `pcid`, `processador`, `memoria`, `armazenamento`, `tipo_armazenamento`,
                                    `sistema_operacional`, `nfcompra`, `datacompra`, `distribuidora`, `nfgarantia`, `datagarantia`, `inicio`, `chave_produto`, `versao_office`, 
                                    `ip_ramal`, `ramal`, `modelo_ramal`) 
                                    VALUES
                                    ('$ip', '$usuario', '$setor', '$homeOffice', '$tag', '$modelo', '$tipo', '$pcid', '$processador', '$memoria', '$armazenamento', '$tipoArmazenamento',
                                    '$so', '$nfCompra', '$compra', '$distribuidora', '$nfGarantia', '$garantia', '$office', '$serial', '$versao',
                                    '$ipRamal', '$ramal', '$modeloRamal')";

    $result = mysqli_query($conn, $cadastro);

    if(mysqli_affected_rows($conn) != 0){ 
        echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/consult/consultAll.php'>";
    }else {
        echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerAll.php'>";
    }
} else {
echo "<script type=\"text/javascript\">alert(\"IP já cadastrado\");</script>
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerAll.php'>";
}

mysqli_close($conn);
?>