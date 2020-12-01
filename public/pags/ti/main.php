<?php
    include_once("../../../src/config/conexaodb.php");

    $sql_usuario = mysqli_query($conn, "SELECT * FROM usuario WHERE usuario='LIVRE'");

    $sql_setor_edit = mysqli_query($conn, "SELECT * FROM setor");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - T.I</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../../assets/css/"> -->

</head>

<body class="bg-light">
    <?php 
        include './include/nav_main.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="py-2 text-center">
                    <h2 class="display-3 m-2">Tecnologia da Informação</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="py-5">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <table class="table">
                                        <caption>IP's Livres</caption>
                                        <thead>
                                            <tr class="table-info">
                                                <th scope="col">IP</th>
                                                <th scope="col">USUÁRIO</th>
                                                <th scope="col">BOTÃO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($tabela_ip = mysqli_fetch_assoc($sql_usuario)) { ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $tabela_ip['ip']; ?>
                                                </th>
                                                <td>
                                                    <?php echo $tabela_ip['usuario']; ?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-warning btn-sm"
                                                        data-toggle="modal" data-target="#editar"
                                                        data-ip="<?php echo $tabela_ip['ip']; ?>"
                                                        data-usuario="<?php echo $tabela_ip['usuario']; ?>"
                                                        data-setor="<?php echo $tabela_ip['setor']; ?>"
                                                        data-home="<?php echo $tabela_ip['homeOffice']; ?>">
                                                        Editar
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="py-5">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <table class="table">
                                        <caption>Impressoras Alpino</caption>
                                        <thead>
                                            <tr class="table-info">
                                                <th scope="col">#</th>
                                                <th scope="col">Primeiro</th>
                                                <th scope="col">Último</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../../src/db/ti/usuarios/edit.php" method="POST">
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-4">
                                <label for="inputWlan">Wlan</label>
                                <input type="text" name="inputWlan" placeholder="192.168.1." class="form-control"
                                    disabled>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="ip">IP</label>
                                <input type="text" name="inputIp" class="form-control" placeholder="IP" id="ip"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="usuario">Usuário</label>
                                <input type="text" name="inputUsuario" class="form-control" id="usuario"
                                    placeholder="Usuário">
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-7">
                                <label for="setor">Setor</label>
                                <select class="custom-select" name="inputSetor" id="setor">
                                    <option value="">Escolha...</option>
                                    <?php
                                        while($modal_edit = mysqli_fetch_assoc($sql_setor_edit)) { 
                                    ?>
                                    <option value="<?php echo $modal_edit['setor']; ?>">
                                        <?php echo $modal_edit['setor']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="homeOffice">Home Office</label>
                                <select class="custom-select" name="inputHomeOffice" id="home">
                                    <option value="">Escolha...</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NÃO">NÃO</option>
                                </select>
                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="form-row justify-content-end">
                                <button type="submit" class="btn btn-outline-info mr-2">Editar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap/Jquery/Popper.js -->
    <script src="../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../../../public/assets/js/edit-usuario.js"></script>
    <!-- <script src="../../assets/js/"></script> -->
</body>

</html>