<?php
 
 include_once("../../../config/conexaodb.php");

$processador = $_POST['inputProcessador'];

$coleta = mysqli_query($conn, "SELECT * FROM processador WHERE processador = '{$processador}'");

// Verificações
if($processador != "") {
    if(mysqli_num_rows($coleta) == 0) {
        $result = mysqli_query($conn, "INSERT INTO `processador` (`id`, `processador`) VALUES (NULL, '$processador')");

        if(mysqli_affected_rows($conn) != 0){ 
            echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script>
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerProcessador.php'>";       
        }else{
            echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerProcessador.php'>";
        }
    } else {
        echo "<script type=\"text/javascript\">alert(\"Processador já cadastrado\");</script>
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerProcessador.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Campo vazio! Obrigatório preencher para cadastrar\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerProcessador.php'>";
}

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>