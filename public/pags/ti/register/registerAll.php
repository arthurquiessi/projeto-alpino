<?php
    include_once("../../../../src/config/conexaodb.php");

    $sql_tag = mysqli_query($conn, "SELECT * FROM maquina WHERE statusmaq='ATIVO' ORDER BY tag asc");

    $sql_office = mysqli_query($conn, "SELECT * FROM msoffice WHERE statusoffice='ATIVO' ORDER BY inicio asc");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Geral - T.I</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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
                                    <form action="../../../../src/db/ti/geral/insert.php" method="POST">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputWlan">Wlan</label>
                                                <input type="text" name="inputWlan" class="form-control" id="wlan"
                                                    placeholder="192.168.1." disabled>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="inputIp">IP</label>
                                                <input type="text" name="inputIp" class="form-control" id="inputIp"
                                                    placeholder="IP">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputUsuario">Usuário</label>
                                                <input type="text" name="inputUsuario" class="form-control"
                                                    id="inputUsuario" readonly=“true”>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-4">
                                                <label for="inputSetor">Setor</label>
                                                <input type="text" name="inputSetor" class="form-control"
                                                    id="inputSetor" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputHomeOffice">Home Office</label>
                                                <input type="text" name="inputHomeOffice" class="form-control"
                                                    id="inputHomeOffice" readonly=“true”>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="card-title">MÁQUINAS</h5>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="inputTag">Tag</label>
                                                <select id="inputTag" name="inputTag" class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <?php
                                                        while($linha_tag = mysqli_fetch_assoc($sql_tag)) {
                                                    ?>
                                                    <option value="<?php echo $linha_tag['tag'] ?>">
                                                        <?php echo $linha_tag['tag'] ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputModelo">Modelo</label>
                                                <input type="text" name="inputModelo" class="form-control"
                                                    id="inputModelo" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputTipo">Tipo</label>
                                                <input type="text" name="inputTipo" class="form-control" id="inputTipo"
                                                    readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputIdpc">ID do PC</label>
                                                <input type="text" name="inputIdpc" class="form-control" id="inputIdpc"
                                                    readonly=“true”>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputProcessador">Processador</label>
                                                <input type="text" name="inputProcessador" class="form-control"
                                                    id="inputProcessador" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputMemoria">Memória (Ram)</label>
                                                <input type="text" name="inputMemoria" class="form-control"
                                                    id="inputMemoria" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputArmazenamento">Armazenagem</label>
                                                <input type="text" name="inputArmazenamento" class="form-control"
                                                    id="inputArmazenamento" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputTipoArmazenamento">Tipo Armazenagem</label>
                                                <input type="text" name="inputTipoArmazenamento" class="form-control"
                                                    id="inputTipoArmazenamento" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSo">Sistema Operacional</label>
                                                <input type="text" name="inputSo" class="form-control" id="inputSo"
                                                    readonly=“true”>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputNfCompra">NF Compra</label>
                                                <input type="text" name="inputNfCompra" class="form-control"
                                                    id="inputNfCompra" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputCompra">Data Compra</label>
                                                <input type="text" name="inputCompra" class="form-control"
                                                    id="inputCompra" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputDistribuidora">Distribuidora</label>
                                                <input type="text" name="inputDistribuidora" class="form-control"
                                                    id="inputDistribuidora" readonly=“true”>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputNfGarantia">NF Garantia</label>
                                                <input type="text" name="inputNfGarantia" class="form-control"
                                                    id="inputNfGarantia" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputGarantia">Data Garantia</label>
                                                <input type="text" name="inputGarantia" class="form-control"
                                                    id="inputGarantia" readonly=“true”>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="card-title">MICROSOFT OFFICE</h5>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="inputOffice">Início do Office</label>
                                                <select id="inputOffice" name="inputOffice" class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <?php
                                                        while($linha_office = mysqli_fetch_assoc($sql_office)) {
                                                    ?>
                                                    <option value="<?php echo $linha_office['inicio'] ?>">
                                                        <?php echo $linha_office['inicio'] ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputSerial">Product Key do Office</label>
                                                <input type="text" name="inputSerial" class="form-control"
                                                    id="inputSerial" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputVersao">Versão do Office</label>
                                                <input type="text" name="inputVersao" class="form-control"
                                                    id="inputVersao" readonly=“true”>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="card-title">RAMAL</h5>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputWlan1">Wlan</label>
                                                <input type="text" name="inputWlan1" class="form-control"
                                                    id="inputWlan1" placeholder="192.168.2." readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="inputIpRamal">IP</label>
                                                <input type="text" name="inputIpRamal" class="form-control"
                                                    id="inputIpRamal" placeholder="IP">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputRamal">Nº Ramal</label>
                                                <input type="text" name="inputRamal" class="form-control"
                                                    id="inputRamal" readonly=“true”>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputModeloRamal">Modelo Ramal</label>
                                                <input type="text" name="inputModeloRamal" class="form-control"
                                                    id="inputModeloRamal" readonly=“true”>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="form-row justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-outline-info mr-2">Cadastrar</button>
                                                <button type="reset"
                                                    class="btn btn-outline-warning mr-1">Limpar</button>
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
        <!-- Bootstrap/Jquery/Popper.js -->
        <script src="../../../../node_modules/popper.js/dist/popper.min.js"></script>
        <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="../../../assets/js/function-usuario.js"></script>
        <script src="../../../assets/js/function-maquina.js"></script>
        <script src="../../../assets/js/function-office.js"></script>
        <script src="../../../assets/js/function-ramal.js"></script>
</body>

</html>