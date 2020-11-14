<?php
    include_once("../../../../src/config/conexaodb.php");

    $coleta = mysqli_query($conn, "SELECT * FROM modelo_maquina order by modelo_maquina asc");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Modelo Máquinas - Admin</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../../assets/css/"> -->
</head>

<body>
    <?php
        include_once '../include/nav_register.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="py-3 text-center">
                    <h5 class="display-5 m-2">MODELO DE MÁQUINAS</h5>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="py-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar Modelo de Máquinas</h5>
                            <div class="row">
                                <div class="col">
                                    <form action="../../../../src/db/modeloMaquina/insert.php" method="POST">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-5">
                                                <label for="inputModelMaquina" class="pt-3">Modelo Máquina</label>
                                                <input type="text" name="inputModelMaquina" class="form-control" placeholder="Máquina">
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="form-row justify-content-end">
                                                <button type="submit" class="btn btn-info mr-2">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="py-3">
                    <table class="table">
                        <caption>Modelos de Máquinas Cadastradas</caption>
                        <thead>
                            <tr class="table-info">
                                <th scope="col">MODELO MÁQUINA</th>
                                <th scope="col">BOTÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($linha = mysqli_fetch_assoc($coleta)) { ?>
                            <tr>
                                <td>
                                    <?php echo $linha['modelo_maquina']; ?>
                                </td>
                                <td>
                                    <a href="../../../../src/db/modeloMaquina/delete.php?id=<?php echo $linha['id']; ?>">
                                        <button type="button" class="btn btn-danger btn-sm">Excluir</button>    
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap/Jquery/Popper.js -->
    <script src="../../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../../../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!-- <script src="./assets/js/"></script> -->
</body>

</html>