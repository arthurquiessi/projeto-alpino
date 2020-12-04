<?php

// Bd da base de testes/homologação
// Não subir para a prod com esse banco

$servidor = 'localhost:3307';
$db = 'alpinodbteste'; // Em prod, alterar para alpinodbprod
$usuario = 'root';
$senha = 'root';

// conexão ao banco
$conn = mysqli_connect($servidor, $usuario, $senha, $db);

// checar conexão
if(!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

?>