<?php
 
 include_once("../../../config/conexaodb.php");

$sistema_operacional = $_POST['inputSO'];

$coleta = mysqli_query($conn, "SELECT * FROM sistema_operacional WHERE sistema_operacional = '{$sistema_operacional}'");

// Verificações
if($sistema_operacional != "") {
    if(mysqli_num_rows($coleta) == 0) {
        $result = mysqli_query($conn, "INSERT INTO `sistema_operacional` (`id`, `sistema_operacional`) VALUES (NULL, '$sistema_operacional')");

        if(mysqli_affected_rows($conn) != 0){ 
            echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script>
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerSO.php'>";       
        }else{
            echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerSO.php'>";
        }
    } else {
        echo "<script type=\"text/javascript\">alert(\"Sistema Operacional já cadastrado\");</script>
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerSO.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Campo vazio! Obrigatório preencher para cadastrar\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../../public/pags/admin/registerStandard/registerSO.php'>";
}

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>