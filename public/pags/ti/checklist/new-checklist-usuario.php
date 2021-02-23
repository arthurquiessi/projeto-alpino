<?php
    include_once("../../../../src/config/conexaodb.php");

    $sql_usuario = mysqli_query($conn, "SELECT * FROM geral ORDER BY ip ASC");

    $sql_setor = mysqli_query($conn, "SELECT * FROM setor ORDER BY id ASC");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário Checklist - T.I</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/style-consultAll.css">
</head>

<body class="bg-light">
    <?php 
        include '../include/nav-checklist.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="py-2 text-center">
                    <h3 class="display-4 m-2">Formulário Checklist</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="py-3">
                    <div class="card bg-light">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="usuario-tab" data-toggle="tab" href="#usuario"
                                        role="tab" aria-controls="usuario" aria-selected="true">Usuário</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#perfil" role="tab"
                                        aria-controls="profile" aria-selected="false">***</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contato" role="tab"
                                        aria-controls="contact" aria-selected="false">***</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="usuario" role="tabpanel"
                                    aria-labelledby="usuario-tab">
                                    <div class="form-row justify-content-center">
                                        <div class="form-group col-sm-3">
                                            <div class="mt-3">
                                                <label for="inputUsuario">Usuário</label>
                                                <select id="inputUsuario" class="form-control">
                                                    <option selected>Escolher...</option>
                                                    <?php
                                                        while($linha_usuario = mysqli_fetch_assoc($sql_usuario)) {
                                                    ?>
                                                    <option value="<?php echo $linha_usuario['usuario'] ?>">
                                                        <?php echo $linha_usuario['usuario'] ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <div class="mt-3">
                                                <label for="inputUsuario">Setor</label>
                                                <select id="inputUsuario" class="form-control">
                                                    <option selected>Escolher...</option>
                                                    <?php
                                                        while($linha_setor = mysqli_fetch_assoc($sql_setor)) {
                                                    ?>
                                                    <option value="<?php echo $linha_setor['setor'] ?>">
                                                        <?php echo $linha_setor['setor'] ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">...
                                </div>
                                <div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="contact-tab">
                                    ...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap/Jquery/Popper.js -->
    <script src="../../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../../../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../../../public/assets/js/edit-all.js"></script>
    <script src="../../../assets/js/function-usuario.js"></script>
    <script src="../../../assets/js/function-maquina.js"></script>
    <script src="../../../assets/js/function-office.js"></script>
    <script src="../../../assets/js/function-ramal.js"></script>
</body>

</html>