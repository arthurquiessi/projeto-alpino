<?php

include_once("../../../config/conexaodb.php");

$id = $_POST['inputId'];
$inicio = $_POST['inputInicio'];
$serial = $_POST['inputSerial'];
$versao = $_POST['inputVersao'];
$status = $_POST['inputStatus'];

$edit = "UPDATE `msoffice` SET inicio = '$inicio', chave_produto = '$serial', versao_office = '$versao', statusoffice = '$status' WHERE id = '$id'";
$result = mysqli_query($conn, $edit);

if(mysqli_affected_rows($conn) != 0){
    echo "<script type=\"text/javascript\">alert(\"Registro alterado com sucesso\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerOffice.php'>";
            
}else{
    echo "<script type=\"text/javascript\">alert(\"Erro na alteração do registro\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerOffice.php'>";
}

mysqli_close($conn);
?>