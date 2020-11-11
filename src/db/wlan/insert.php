<?php

include_once("../../config/conexaodb.php");

$wlan = $_POST['inputWlan'];

$insert = "INSERT INTO wlan(wlan) VALUES('$wlan')";
$result = mysqli_query($conn, $insert);

$conn->close();

echo 'Verificar!';
