<?php

include_once("../../../config/conexaodb.php");

function retorna($tag, $conn) {
    $search = mysqli_query($conn, "SELECT * FROM maquina WHERE tag = '$tag' LIMIT 1"); 
    if($search->num_rows) {
        $row_usuario = mysqli_fetch_assoc($search);
        $valores['modelo'] = $row_usuario['modelo'];
        $valores['tipo'] = $row_usuario['tipo'];
        $valores['processador'] = $row_usuario['processador'];
        $valores['memoria'] = $row_usuario['memoria'];
        $valores['armazenamento'] = $row_usuario['armazenamento'];
        $valores['tipoArmazenamento'] = $row_usuario['tipo_armazenamento'];
        $valores['so'] = $row_usuario['sistema_operacional'];
        $valores['nfCompra'] = $row_usuario['nfcompra'];
        $valores['compra'] = $row_usuario['datacompra'];
        $valores['distribuidora'] = $row_usuario['distribuidora'];
        $valores['nfGarantia'] = $row_usuario['nfgarantia'];
        $valores['garantia'] = $row_usuario['datagarantia'];
    } else {
        $valores['modelo'] = 'Máquina sem cadastro';
    }

    return json_encode($valores);
}

if(isset($_GET['inputTag'])) {
    echo retorna($_GET['inputTag'], $conn);
}

mysqli_close($conn);
?>