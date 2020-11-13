<?php
 
include_once("../../config/conexaodb.php");

$wlan = $_POST['inputWlan'];

$coleta = mysqli_query($conn, "SELECT * FROM wlan WHERE wlan = '{$wlan}'");

// Verificações
if($wlan != "") {
    if(mysqli_num_rows($coleta) == 0) {
        $result = mysqli_query($conn, "INSERT INTO `wlan` (`id`, `wlan`) VALUES (NULL, '$wlan')");

        if(mysqli_affected_rows($conn) != 0){ 
            echo "<script type=\"text/javascript\">alert(\"Incluído com sucesso\");</script>
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerWlan.php'>";       
        }else{
            echo "<script type=\"text/javascript\">alert(\"Erro de inclusão\");</script> 
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerWlan.php'>";
        }
    } else {
        echo "<script type=\"text/javascript\">alert(\"Wlan já cadastrada\");</script>
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerWlan.php'>";
    }
} else {
    echo "<script type=\"text/javascript\">alert(\"Campo vazio! Obrigatório preencher para cadastrar\");</script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerWlan.php'>";
}

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>