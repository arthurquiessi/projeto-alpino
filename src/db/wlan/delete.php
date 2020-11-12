<?php

include_once("../../config/conexaodb.php");

$id  = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM `wlan` WHERE `id` = '$id'");

mysqli_close($conn);