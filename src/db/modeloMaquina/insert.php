<?php
 
include_once("../../config/conexaodb.php");

$modelo_maquina = $_POST['inputModelMaquina'];

$coleta = mysqli_query($conn, "SELECT * FROM modelo_maquina WHERE modelo_maquina = '{$modelo_maquina}'");

// Verificações
if($modelo_maquina != "") {
    if(mysqli_num_rows($coleta) == 0) {
        $result = mysqli_query($conn, "INSERT INTO `modelo_maquina` (`id`, `modelo_maquina`) VALUES (NULL, '$modelo_maquina')");

        if(mysqli_affected_rows($conn) != 0){ 
            echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script>
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelMaquinas.php'>";       
        }else{
            echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelMaquinas.php'>";
        }
    } else {
        echo "<script type=\"text/javascript\">alert(\"Modelo de computador já cadastrado\");</script>
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelMaquinas.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Campo vazio! Obrigatório preencher para cadastrar\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerModelMaquinas.php'>";
}

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>