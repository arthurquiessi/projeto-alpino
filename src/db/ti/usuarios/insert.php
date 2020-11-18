<?php

include_once("../../../config/conexaodb.php");

$ip = $_POST['inputIp'];
$usuario = $_POST['inputUsuario'];
$setor = $_POST['inputSetor'];
$homeOffice = $_POST['inputHomeOffice'];

$coleta = mysqli_query($conn, "SELECT * FROM usuario WHERE ip = '{$ip}' OR usuario = '{$usuario}'");

if(mysqli_num_rows($coleta) == 0) {
    $cadastro = "INSERT INTO `usuario` (`ip`, `usuario`, `setor`, `homeOffice`) VALUES ('$ip', '$usuario', '$setor', '$homeOffice')";
    $result = mysqli_query($conn, $cadastro);

    if(mysqli_affected_rows($conn) != 0){ 
        echo "<script type=\"text/javascript\">alert(\"inserido com sucesso\");</script> ";
        header("Location: ../../../../public/pags/ti/register/registerUser.php");
    }else {
        echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerUser.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"IP ou usuário já cadastrado\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerUser.php'>";
}

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>