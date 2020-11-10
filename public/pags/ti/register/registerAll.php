<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Geral - T.I</title>

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
                    <h3 class="display-3 m-2">Registro Geral</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="py-5">
                    <div class="card bg-white">
                        <div class="card-body">
                            <h5 class="card-title">USUÁRIOS</h5>
                            <div class="row">
                                <div class="col">
                                    <form action="">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputWlan">Wlan</label>
                                                <input type="text" class="form-control" id="inputWlan" disabled>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="inputIp">IP</label>
                                                <input type="text" class="form-control" id="inputIp" placeholder="IP">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputUsuario">Usuário</label>
                                                <input type="text" class="form-control" id="inputUsuario" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-4">
                                                <label for="inputSetor">Setor</label>
                                                <input type="text" class="form-control" id="inputSetor" disabled>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputHomeOffice">Home Office</label>
                                                <input type="text" class="form-control" id="inputHomeOffice" disabled>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="card-title">MÁQUINAS</h5>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="inputTag">Tag</label>
                                                <select id="inputTag" class="form-control">
                                                    <option selected>Escolher...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputModelo">Modelo</label>
                                                <input type="text" class="form-control" id="inputModelo" disabled>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputTipo">Tipo</label>
                                                <input type="text" class="form-control" id="inputTipo" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputProcessador">Processador</label>
                                                <input type="text" class="form-control" id="inputProcessador" disabled>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputMemoria">Memória (Ram)</label>
                                                <input type="text" class="form-control" id="inputMemoria" disabled>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputArmazenamento">Armazenagem</label>
                                                <input type="text" class="form-control" id="inputArmazenamento"
                                                    disabled>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSo">Sistema Operacional</label>
                                                <input type="text" class="form-control" id="inputSo" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputNfCompra">NF Compra</label>
                                                <input type="text" class="form-control" id="inputNfCompra" disabled>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputCompra">Data Compra</label>
                                                <input type="text" class="form-control" id="inputCompra" disabled>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputDistribuidora">Distribuidora</label>
                                                <input type="text" class="form-control" id="inputDistribuidora"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputNfGarantia">NF Garantia</label>
                                                <input type="text" class="form-control" id="inputNfGarantia" disabled>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputGarantia">Data Garantia</label>
                                                <input type="text" class="form-control" id="inputGarantia" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-2">
                                                <label for="inputStatus">Status</label>
                                                <input type="text" class="form-control" id="inputStatus" disabled>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="card-title">MICROSOFT OFFICE</h5>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="inputOffice">Início do Office</label>
                                                <select id="inputOffice" class="form-control">
                                                    <option selected>Escolher...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputVersao">Versão do Office</label>
                                                <input type="text" class="form-control" id="inputVersao" disabled>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputSerial">Product Key do Office</label>
                                                <input type="text" class="form-control" id="inputTipo" disabled>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="card-title">RAMAL</h5>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputWlan1">Wlan</label>
                                                <input type="text" class="form-control" id="inputWlan1" disabled>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="inputIp1">IP</label>
                                                <input type="text" class="form-control" id="inputIp1" placeholder="IP">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputRamal">Nº Ramal</label>
                                                <input type="text" class="form-control" id="inputRamal" disabled>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputModeloRamal">Modelo Ramal</label>
                                                <input type="text" class="form-control" id="inputModeloRamal" disabled>
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
                        <h5 class="modal-title" id="Register">Registro Geral</h5>
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
    <!-- <script src="../../assets/js/"></script> -->
</body>

</html>