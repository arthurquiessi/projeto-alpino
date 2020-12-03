<?php

include_once("../../../config/conexaodb.php");

function retorna($ipramal, $conn) {
    $search = mysqli_query($conn, "SELECT * FROM ramal WHERE ip = '$ipramal' LIMIT 1"); 
    if($search->num_rows) {
        $row_usuario = mysqli_fetch_assoc($search);
        $valores['ramal'] = $row_usuario['ramal'];
        $valores['modeloRamal'] = $row_usuario['modelo_ramal'];
    } else {
        $valores['ramal'] = 'Ramal sem cadastro';
    }

    return json_encode($valores);
}

if(isset($_GET['inputIpRamal'])) {
    echo retorna($_GET['inputIpRamal'], $conn);
}

mysqli_close($conn);
?>