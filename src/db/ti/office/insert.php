<?php

include_once("../../../config/conexaodb.php");

$inicio = $_POST['inputInicio'];
$serial = $_POST['inputSerial'];
$versao = $_POST['inputVersao'];
$status = $_POST['inputStatus'];

$coleta = mysqli_query($conn, "SELECT * FROM msoffice where inicio = '{$inicio}'");

if(mysqli_num_rows($coleta) == 0) {
    $cadastro = "INSERT INTO `msoffice` (`id`, `inicio`, `chave_produto`, `versao_office`, `statusoffice`) 
                VALUES (NULL, '$inicio', '$serial', '$versao', '$status')";
    $result = mysqli_query($conn, $cadastro);

    if(mysqli_affected_rows($conn) != 0){ 
        echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerOffice.php'>";
    }else {
        echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerOffice.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Office já cadastrado\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerOffice.php'>";
}

mysqli_close($conn);
?>