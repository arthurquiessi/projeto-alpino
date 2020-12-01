<?php

include_once("../../../config/conexaodb.php");

$ip = $_POST['inputIp'];
$ramal = $_POST['inputRamal'];
$modelo_ramal = $_POST['inputModeloRamal'];

$edit = "UPDATE `ramal` SET ip = '$ip', ramal = '$ramal', modelo_ramal = '$modelo_ramal' WHERE ip = '$ip'";
$result = mysqli_query($conn, $edit);

if(mysqli_affected_rows($conn) != 0){
    echo "<script type=\"text/javascript\">alert(\"Ramal '$ramal' alterado com sucesso\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerRamal.php'>";
            
}else{
    echo "<script type=\"text/javascript\">alert(\"Erro na alteração do registro\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerRamal.php'>";
}
mysqli_close($conn);
?>