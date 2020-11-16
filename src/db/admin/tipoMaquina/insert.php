<?php
 
 include_once("../../../config/conexaodb.php");

$tipo_maquina = $_POST['inputTipoMaquina'];

$coleta = mysqli_query($conn, "SELECT * FROM tipo_maquina WHERE tipo_maquina = '{$tipo_maquina}'");

// Verificações
if($tipo_maquina != "") {
    if(mysqli_num_rows($coleta) == 0) {
        $result = mysqli_query($conn, "INSERT INTO `tipo_maquina` (`id`, `tipo_maquina`) VALUES (NULL, '$tipo_maquina')");

        if(mysqli_affected_rows($conn) != 0){ 
            echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script>
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerTipoMaquinas.php'>";       
        }else{
            echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerTipoMaquinas.php'>";
        }
    } else {
        echo "<script type=\"text/javascript\">alert(\"Tipo de máquina já cadastrado\");</script>
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerTipoMaquinas.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Campo vazio! Obrigatório preencher para cadastrar\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerTipoMaquinas.php'>";
}

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>