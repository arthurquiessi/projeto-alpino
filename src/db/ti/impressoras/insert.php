<?php
include_once("../../../config/conexaodb.php");

$ip = $_POST['inputIp'];
$nome_impressora = $_POST['inputNomeImpressora'];
$setor = $_POST['inputSetor'];
$numero_serie = $_POST['inputSerie'];
$modelo = $_POST['inputModelo'];

$coleta = mysqli_query($conn, "SELECT * FROM impressora where ip = '{$ip}'");

if(mysqli_num_rows($coleta) == 0) {
    $cadastro = "INSERT INTO `impressora` (`ip`, `nome_impressora`, `setor`, `numero_serie`, `modelo`) 
                VALUES ('$ip', '$nome_impressora', '$setor', '$numero_serie', '$modelo')";
    $result = mysqli_query($conn, $cadastro);

    if(mysqli_affected_rows($conn) != 0){ 
        echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerPrinter.php'>";
    }else {
        echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerPrinter.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Impressora já cadastrado\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/ti/register/registerPrinter.php'>";
}

mysqli_close($conn);
?>