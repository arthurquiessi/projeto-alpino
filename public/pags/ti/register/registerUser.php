<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuário - T.I</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../../../assets/css/"> -->
</head>

<body class="bg-light">
    <?php 
        include '../include/nav_register.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="py-2 text-center">
                    <h3 class="display-3 m-2">Registro de Usuário</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="py-5">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-4">
                                                <label for="inputWlan">Wlan</label>
                                                <input type="text" class="form-control" id="inputWlan" disabled>
                                            </div>
                                            <div class="form-group col-sm-2">
                                                <label for="inputIp">IP</label>
                                                <input type="text" class="form-control" id="inputIp" placeholder="IP">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputUsuario">Usuário</label>
                                                <input type="text" class="form-control" id="inputUsuario"
                                                    placeholder="Usuário">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-5">
                                                <label for="inputSetor">Setor</label>
                                                <select class="custom-select" id="inputSetor">
                                                    <option selected>Escolha...</option>
                                                    <option value="">...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputHomeOffice">Home Office</label>
                                                <select class="custom-select" id="inputHomeOffice">
                                                    <option selected>Escolha...</option>
                                                    <option value="sim">SIM</option>
                                                    <option value="nao">NÃO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="form-row justify-content-end">
                                                <button type="button" class="btn btn-info mr-2" data-toggle="modal"
                                                    data-target="#modalRegister">Cadastrar</button>
                                                <button type="button" class="btn btn-warning mr-1">Limpar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="Register"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Register">Usuário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Deseja salvar esse cadastro?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap/Jquery/Popper.js -->
    <script src="../../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../../../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!-- <script src="../../../assets/js/datatable.js"></script> -->
</body>

</html>