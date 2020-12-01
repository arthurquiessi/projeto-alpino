<?php

include_once("../../../config/conexaodb.php");

$ip = $_POST['inputIp'];
$ramal = $_POST['inputRamal'];
$modelo_ramal = $_POST['inputModeloRamal'];

$coleta = mysqli_query($conn, "SELECT * FROM ramal WHERE ramal = '{$ramal}'");

if(mysqli_num_rows($coleta) == 0) {
    $cadastro = "INSERT INTO `ramal` (`ip`, `ramal`, `modelo_ramal`) VALUES ('$ip', '$ramal', '$modelo_ramal')";
    $result = mysqli_query($conn, $cadastro);

    if(mysqli_affected_rows($conn) != 0){ 
        echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerRamal.php'>";
    }else {
        echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerRamal.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Ramal já cadastrado\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerRamal.php'>";
}

mysqli_close($conn);
?>