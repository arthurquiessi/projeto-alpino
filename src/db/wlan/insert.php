<?php

include_once("../../config/conexaodb.php");

$wlan = $_POST['inputWlan'];

$result = mysqli_query($conn, "INSERT INTO `wlan` (`id`, `wlan`) VALUES (NULL, '$wlan')");

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title></title>

    <link rel="stylesheet" href="../../../public/assets/css/style-sweetalert.css">
    <script src="../../../public/assets/js/sweetalert.js"></script>
</head>
<body>
    <?php
        if(mysqli_affected_rows($conn) != 0){
            echo "<script type=\"text/javascript\">
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success',
                    timer: 1500
                )
                </script>";

            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../public/pags/admin/registerStandard/registerWlan.php'>";
                    
		}else{
            echo "<script type=\"text/javascript\">
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'error'
                )
                </script>";
        }
        
        
    ?>
</body>
</html>

<?php
    // fechar a conexão com SQL porta 3307
    mysqli_close($conn);
?>