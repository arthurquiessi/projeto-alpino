<?php

include_once("../../../config/conexaodb.php");

function retorna($tag, $conn) {
    $search = mysqli_query($conn, "SELECT * FROM maquina WHERE tag = '$tag' LIMIT 1"); 
    if($search->num_rows) {
        $row_usuario = mysqli_fetch_assoc($search);
        $valores['modelo'] = $row_usuario['modelo'];
        $valores['tipo'] = $row_usuario['tipo'];
        $valores['pcid'] = $row_usuario['pcid'];
        $valores['processador'] = $row_usuario['processador'];
        $valores['memoria'] = $row_usuario['memoria'];
        $valores['armazenamento'] = $row_usuario['armazenamento'];
        $valores['tipo_armazenamento'] = $row_usuario['tipo_armazenamento'];
        $valores['sistema_operacional'] = $row_usuario['sistema_operacional'];
        $valores['nfcompra'] = $row_usuario['nfcompra'];
        $valores['datacompra'] = $row_usuario['datacompra'];
        $valores['distribuidora'] = $row_usuario['distribuidora'];
        $valores['nfgarantia'] = $row_usuario['nfgarantia'];
        $valores['datagarantia'] = $row_usuario['datagarantia'];
    } else {
        $valores['modelo'] = 'Office sem cadastro';
    }

    return json_encode($valores);
}

if(isset($_GET['inputTag'])) {
    echo retorna($_GET['inputTag'], $conn);
}

mysqli_close($conn);
?>