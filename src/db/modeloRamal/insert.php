<?php
 
include_once("../../config/conexaodb.php");

$modelo_ramal = $_POST['inputModelRamal'];

$coleta = mysqli_query($conn, "SELECT * FROM modelo_ramal WHERE modelo_ramal = '{$modelo_ramal}'");

// Verificações
if($modelo_ramal != "") {
    if(mysqli_num_rows($coleta) == 0) {
        $result = mysqli_query($conn, "INSERT INTO `modelo_ramal` (`id`, `modelo_ramal`) VALUES (NULL, '$modelo_ramal')");

        if(mysqli_affected_rows($conn) != 0){ 
            echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script>
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelRamal.php'>";       
        }else{
            echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelRamal.php'>";
        }
    } else {
        echo "<script type=\"text/javascript\">alert(\"Modelo de ramal já cadastrada\");</script>
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelRamal.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Campo vazio! Obrigatório preencher para cadastrar\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelRamal.php'>";
}

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>