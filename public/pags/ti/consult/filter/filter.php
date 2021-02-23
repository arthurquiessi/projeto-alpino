<?php
    include_once("../../../../../src/config/conexaodb.php");

    $sql_setores = mysqli_query($conn, "SELECT * FROM  setor");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro - T.I</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../../../assets/css/style-consultAll.css"> -->
</head>

<body>
    <?php 
        include '../../include/nav_filter.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="py-2 text-center">
                    <h3 class="display-4 m-2">Filtrar Dados de Consulta</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="py-3">
                    <div class="card bg-light">
                        <div class="card-body">
                            <form action="../../../../../src/db/ti/filtros/lista.php" method="GET">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="usuario-tab" data-toggle="tab" href="#usuario"
                                            role="tab" aria-controls="usuario" aria-selected="true">Usuários</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="maquinas-tab" data-toggle="tab" href="#maquinas"
                                            role="tab" aria-controls="maquinas" aria-selected="false">Máquinas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="office-tab" data-toggle="tab" href="#office" role="tab"
                                            aria-controls="office" aria-selected="false">MS Office</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="ramais-tab" data-toggle="tab" href="#ramais" role="tab"
                                            aria-controls="ramais" aria-selected="false">Ramais</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="usuario" role="tabpanel"
                                        aria-labelledby="usuario-tab">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-sm-4">
                                                <div class="mt-3">
                                                    <label for="inputIp">USUÁRIOS</label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="usuarios"
                                                            name="usuarios" value="Usuarios">
                                                        <label class="form-check-label" for="inlineCheckbox1">Todas os
                                                            Usuários</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <div class="mt-3">
                                                    <label for="inputIp">HOME OFFICE</label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="sim"
                                                            name="sim" value="Sim">
                                                        <label class="form-check-label"
                                                            for="inlineCheckbox1">Sim</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="nao"
                                                            name="nao" value="Não">
                                                        <label class="form-check-label"
                                                            for="inlineCheckbox1">Não</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label onclick="selecionaTodosSetores()">SETORES</label><br>
                                                    <?php
                                                        include '../../include/select-setor.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="maquinas" role="tabpanel"
                                        aria-labelledby="maquinas-tab">
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label onclick="selecionaTodosModelos()">MODELOS DE
                                                        MÁQUINAS</label><br>
                                                    <?php 
                                                        include '../../include/select-modelo.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label onclick="selecionaTodosTipoMaquina()">TIPOS DE
                                                        MÁQUINAS</label><br>
                                                    <?php 
                                                        include '../../include/select-tipo.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label
                                                        onclick="selecionaTodosProcessadores()">PROCESSADORES</label><br>
                                                    <?php 
                                                        include '../../include/select-processador.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label onclick="selecionaTodosTipoArmazenagem()">TIPO DA
                                                        ARMAZENAGEM</label><br>
                                                    <?php 
                                                        include '../../include/select-tipo_armazenagem.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label onclick="selecionaTodosSO()">SISTEMAS
                                                        OPERACIONAIS</label><br>
                                                    <?php 
                                                        include '../../include/select-so.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label onclick="selecionaTodosGarantia()">GARANTIA</label><br>
                                                    <?php 
                                                        include '../../include/select-garantia.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label onclick="selecionaTodosStatus()">STATUS</label><br>
                                                    <?php 
                                                        include '../../include/select-status.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label onclick="selecionaTodosModelosOffice()">MODELO DO
                                                        OFFICE</label><br>
                                                    <?php 
                                                        include '../../include/select-modelo_office.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label onclick="selecionaTodosStatusOffice()">STATUS DO
                                                        OFFICE</label><br>
                                                    <?php 
                                                        include '../../include/select-status_office.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ramais" role="tabpanel" aria-labelledby="ramais-tab">
                                        <div class="form-row">
                                            <div class="form-group col-sm-12">
                                                <div class="mt-3">
                                                    <label onclick="selecionaTodosModelosRamais()">MODELO DE
                                                        RAMAL</label><br>
                                                    <?php 
                                                        include '../../include/select-modelo_ramal.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <input type="submit" class="btn btn-dark btn-sm btn-block" id="filtrar"
                                        value="Filtrar" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap/Jquery/Popper.js -->
    <script src="../../../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../../../../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../../../assets/js/select-setor.js"></script>
    <script src="../../../../assets/js/select-maquina.js"></script>
    <script src="../../../../assets/js/select-tipo_maquina.js"></script>
    <script src="../../../../assets/js/select-processador.js"></script>
    <script src="../../../../assets/js/select-tipo_armazenamento.js"></script>
    <script src="../../../../assets/js/select-sistemasOperacionais.js"></script>
    <script src="../../../../assets/js/select-garantia.js"></script>
    <script src="../../../../assets/js/select-status.js"></script>
    <script src="../../../../assets/js/select-office.js"></script>
    <script src="../../../../assets/js/select-statusOffice.js"></script>
    <script src="../../../../assets/js/select-ramal.js"></script>

</body>

</html>