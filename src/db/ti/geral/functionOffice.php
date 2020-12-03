<?php

include_once("../../../config/conexaodb.php");

function retorna($inicio, $conn) {
    $search = mysqli_query($conn, "SELECT * FROM msoffice WHERE inicio = '$inicio' LIMIT 1"); 
    if($search->num_rows) {
        $row_usuario = mysqli_fetch_assoc($search);
        $valores['serial'] = $row_usuario['chave_produto'];
        $valores['versao'] = $row_usuario['versao_office'];
    } else {
        $valores['serial'] = 'Office sem cadastro';
    }

    return json_encode($valores);
}

if(isset($_GET['inputOffice'])) {
    echo retorna($_GET['inputOffice'], $conn);
}

mysqli_close($conn);
?>