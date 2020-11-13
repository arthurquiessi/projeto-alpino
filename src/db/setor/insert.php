<?php
 
include_once("../../config/conexaodb.php");

$setor = $_POST['inputSetor'];

$coleta = mysqli_query($conn, "SELECT * FROM setor WHERE setor = '{$setor}'");

// Verificações
if($setor != "") {
    if(mysqli_num_rows($coleta) == 0) {
        $result = mysqli_query($conn, "INSERT INTO `setor` (`id`, `setor`) VALUES (NULL, '$setor')");

        if(mysqli_affected_rows($conn) != 0){ 
            echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script>
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerSetores.php'>";       
        }else{
            echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerSetores.php'>";
        }
    } else {
        echo "<script type=\"text/javascript\">alert(\"Setor já cadastrado\");</script>
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerSetores.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Campo vazio! Obrigatório preencher para cadastrar\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerSetores.php'>";
}

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>