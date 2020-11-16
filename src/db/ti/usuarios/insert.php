<?php

include_once("../../../config/conexaodb.php");

$wlan = "192.168.1.";
$ip = $_POST['inputIp'];
$usuario = $_POST['inputUsuario'];
$setor = $_POST['inputSetor'];
$homeOffice = $_POST['inputHomeOffice'];

$cadastro = "INSERT INTO `usuario` (`wlan`, `ip`, `usuario`, `setor`, `homeOffice`) VALUES ('$wlan', '$ip', '$usuario', '$setor', '$homeOffice')";
$result = mysqli_query($conn, $cadastro);

// fechar a conexão com SQL porta 3307
mysqli_close($conn);
?>