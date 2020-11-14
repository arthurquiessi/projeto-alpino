<?php

include_once("../../config/conexaodb.php");

$id  = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM `modelo_impressora` WHERE `id` = '$id'");

if(mysqli_affected_rows($conn) != 0){
    echo "<script type=\"text/javascript\">alert(\"Excluído com sucesso\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelPrinter.php'>";
            
}else{
    echo "<script type=\"text/javascript\">alert(\"Erro de exclusão\");</script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelPrinter.php'>";
}

mysqli_close($conn);
?>