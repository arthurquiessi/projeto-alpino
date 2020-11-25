<?php

include_once("../../../config/conexaodb.php");

$setor = $_POST['filterSetor'];
$homeOffice = $_POST['filterHomeOffice'];

echo $setor . '<br>';
echo $homeOffice . '<br>';

mysqli_close($conn);
?>