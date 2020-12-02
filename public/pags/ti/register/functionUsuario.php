<?php

include_once("../../../config/conexaodb.php");

function retorna($ip, $conn) {
    $search = mysqli_query($conn, "SELECT * FROM usuario WHERE ip = '$ip' LIMIT 1"); 
    if($search->num_rows) {
        $row_usuario = mysqli_fetch_assoc($search);
        $valores['usuario'] = $row_usuario['usuario'];
        $valores['setor'] = $row_usuario['setor'];
        $valores['homeOffice'] = $row_usuario['homeOffice'];
    } else {
        $valores['usuario'] = 'Informações não encontradas';
    }

    return json_encode($valores);
}

if(isset($_GET['inputIp'])) {
    echo retorna($_GET['inputIp'], $conn);
}

mysqli_close($conn);
?>