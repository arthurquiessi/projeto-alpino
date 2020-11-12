<?php

$servidor = 'localhost:3307';
$db = 'alpinodb';
$usuario = 'root';
$senha = 'root';

// conexão ao banco
$conn = mysqli_connect($servidor, $usuario, $senha, $db);

// checar conexão
if(!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

?>