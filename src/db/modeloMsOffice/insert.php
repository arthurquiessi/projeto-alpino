<?php
 
include_once("../../config/conexaodb.php");

$modelo_ms_office = $_POST['inputMsOffice'];

$coleta = mysqli_query($conn, "SELECT * FROM modelo_ms_office WHERE modelo_ms_office = '{$modelo_ms_office}'");

// Verificações
if($modelo_ms_office != "") {
    if(mysqli_num_rows($coleta) == 0) {
        $result = mysqli_query($conn, "INSERT INTO `modelo_ms_office` (`id`, `modelo_ms_office`) VALUES (NULL, '$modelo_ms_office')");

        if(mysqli_affected_rows($conn) != 0){ 
            echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script>
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelMsoffice.php'>";       
        }else{
            echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelMsoffice.php'>";
        }
    } else {
        echo "<script type=\"text/javascript\">alert(\"Modelo office já cadastrado\");</script>
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelMsoffice.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Campo vazio! Obrigatório preencher para cadastrar\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelMsoffice.php'>";
}

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>