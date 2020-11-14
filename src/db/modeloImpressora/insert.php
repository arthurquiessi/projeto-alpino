<?php
 
include_once("../../config/conexaodb.php");

$modelo_impressora = $_POST['inputModelImpressora'];

$coleta = mysqli_query($conn, "SELECT * FROM modelo_impressora WHERE modelo_impressora = '{$modelo_impressora}'");

// Verificações
if($modelo_impressora != "") {
    if(mysqli_num_rows($coleta) == 0) {
        $result = mysqli_query($conn, "INSERT INTO `modelo_impressora` (`id`, `modelo_impressora`) VALUES (NULL, '$modelo_impressora')");

        if(mysqli_affected_rows($conn) != 0){ 
            echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script>
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelPrinter.php'>";       
        }else{
            echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelPrinter.php'>";
        }
    } else {
        echo "<script type=\"text/javascript\">alert(\"Modelo de impressora já cadastrado\");</script>
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelPrinter.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Campo vazio! Obrigatório preencher para cadastrar\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelPrinter.php'>";
}

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>