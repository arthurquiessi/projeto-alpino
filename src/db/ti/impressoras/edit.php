<?php

include_once("../../../config/conexaodb.php");

$ip = $_POST['inputIp'];
$nome_impressora = $_POST['inputNomeImpressora'];
$setor = $_POST['inputSetor'];
$numero_serie = $_POST['inputSerie'];
$modelo = $_POST['inputModelo'];

$edit = "UPDATE `impressora` SET ip = '$ip', nome_impressora = '$nome_impressora', setor = '$setor', numero_serie = '$numero_serie', modelo = '$modelo' WHERE ip = '$ip'";
$result = mysqli_query($conn, $edit);

if(mysqli_affected_rows($conn) != 0){
    echo "<script type=\"text/javascript\">alert(\"Registro alterado com sucesso\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerPrinter.php'>";
            
}else{
    echo "<script type=\"text/javascript\">alert(\"Erro na alteração do registro\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerPrinter.php'>";
}

mysqli_close($conn);
?>