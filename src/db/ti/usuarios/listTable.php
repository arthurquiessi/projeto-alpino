<?php

include_once("../../../config/conexaodb.php");

$requestData = $_REQUEST;

$columns = array(
    array( '0' => 'ip'),
    array( '1' => 'usuario' ),
    array( '2' => 'setor' ),
    array( '3' => 'homeOffice' )
);

$coleta = "SELECT ip, usuario, setor, homeOffice from usuario";
$resultado = mysqli_query($conn, $coleta);
$qtd_linha = mysqli_num_rows($resultado);


$result_usuarios = "SELECT ip, usuario, setor, homeOffice FROM usuario WHERE 1=1";

$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($result_usuarios);

$result_usuarios.= "ORDER BY ". $columns[$requestData['order'][0]['column']]." ".$requestData['order'][0]['dir']." LIMIT ".$requestData['start']." ,".$requestData['length']." ";

$dados = array();
while( $row_usuarios = mysqli_fetch_array($resultado_usuarios)) {
    $dado = array();
    $dado[] = $row_usuarios["ip"];
    $dado[] = $row_usuarios["usuario"];
    $dado[] = $row_usuarios["setor"];
    $dado[] = $row_usuarios["homeOffice"];

    $dado[] = $dado;
}

$json_data = array(
    "draw" => intval($requestData['draw']),
    "recordsTotal": => intval($qtd_linha),
    "recordsFiltered": => intval($totalFiltered),
    "data" => $dados
);

echo json_encode($json_data);