<?php

include_once("../../../config/conexaodb.php");

$ip = $_POST['inputIp'];
$usuario = $_POST['inputUsuario'];
$setor = $_POST['inputSetor'];
$homeOffice = $_POST['inputHomeOffice'];

$edit = "UPDATE `usuario` SET ip = '$ip', usuario = '$usuario', setor = '$setor', homeOffice = '$homeOffice' WHERE ip = '$ip'";
$result = mysqli_query($conn, $edit);

if(mysqli_affected_rows($conn) != 0){
    echo "<script type=\"text/javascript\">alert(\"Registro alterado com sucesso\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerUser.php'>";
            
}else{
    echo "<script type=\"text/javascript\">alert(\"Erro na alteração do registro\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerUser.php'>";
}
mysqli_close($conn);
?>