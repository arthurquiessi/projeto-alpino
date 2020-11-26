<?php
    include_once("../../../../src/config/conexaodb.php");

    $sql_maquina = mysqli_query($conn, "SELECT * FROM maquina");

    $sql_modelo_maquina = mysqli_query($conn, "SELECT * FROM modelo_maquina");

    $sql_tipo_maquina = mysqli_query($conn, "SELECT * FROM tipo_maquina");

    $sql_processador = mysqli_query($conn, "SELECT * FROM processador");

    $sql_sistema_operacional = mysqli_query($conn, "SELECT * FROM sistema_operacional");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Máquinas - T.I</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
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
                    <h3 class="display-3 m-2">Registro de Máquinas</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="py-5">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="../../../../src/db/ti/maquinas/insert.php" method="POST">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="inputTag">Tag</label>
                                                <input type="text" name="inputTag" class="form-control" id="inputTag">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputModelo">Modelo</label>
                                                <select name="inputModelo" id="inputModelo" class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <?php while($linha_modelo = mysqli_fetch_assoc($sql_modelo_maquina)) { ?>
                                                    <option value="<?php echo $linha_modelo['modelo_maquina']; ?>">
                                                        <?php echo $linha_modelo['modelo_maquina']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputTipo">Tipo</label>
                                                <select name="inputTipo" id="inputTipo" class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <?php while($linha_tipo = mysqli_fetch_assoc($sql_tipo_maquina)) { ?>
                                                    <option value="<?php echo $linha_tipo['tipo_maquina']; ?>">
                                                        <?php echo $linha_tipo['tipo_maquina']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputProcessador">Processador</label>
                                                <select name="inputProcessador" id="inputProcessador"
                                                    class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <?php while($linha_processador = mysqli_fetch_assoc($sql_processador)) { ?>
                                                    <option value="<?php echo $linha_processador['processador']; ?>">
                                                        <?php echo $linha_processador['processador']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputMemoria">Memória (Ram)</label>
                                                <input type="text" name="inputMemoria" class="form-control"
                                                    id="inputMemoria">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputArmazenamento">Armazenagem</label>
                                                <input type="text" name="inputArmazenamento" class="form-control"
                                                    id="inputArmazenamento">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputTipoArmazenamento">Tipo Armazenagem</label>
                                                <select name="inputTipoArmazenamento" id="inputTipoArmazenamento"
                                                    class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <option value="HDD">HDD</option>
                                                    <option value="SSD">SSD</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSo">Sistema Operacional</label>
                                                <select name="inputSo" id="inputSo" class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <?php while($linha_sistema_operacional = mysqli_fetch_assoc($sql_sistema_operacional)) { ?>
                                                    <option
                                                        value="<?php echo $linha_sistema_operacional['sistema_operacional']; ?>">
                                                        <?php echo $linha_sistema_operacional['sistema_operacional']; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputNfCompra">NF Compra</label>
                                                <input type="text" name="inputNfCompra" class="form-control"
                                                    id="inputNfCompra">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputCompra">Data Compra</label>
                                                <input type="text" name="inputCompra" class="form-control"
                                                    id="inputCompra">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputDistribuidora">Distribuidora</label>
                                                <input type="text" name="inputDistribuidora" class="form-control"
                                                    id="inputDistribuidora">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputNfGarantia">NF Garantia</label>
                                                <input type="text" name="inputNfGarantia" class="form-control"
                                                    id="inputNfGarantia">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputGarantia">Data Garantia</label>
                                                <input type="text" name="inputGarantia" class="form-control"
                                                    id="inputGarantia">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-2">
                                                <label for="inputStatus">Status</label>
                                                <select name="inputStatus" id="inputStatus" class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <option value="ATIVO">ATIVO</option>
                                                    <option value="INATIVO">INATIVO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="form-row justify-content-end">
                                                <button type="submit" class="btn btn-info mr-2">Cadastrar</button>
                                                <button type="reset" value="Apagar Campos"
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
        <div class="row justify-content-left">
            <div class="col" style="margin-left: 90px; margin-bottom: 15px;">
                <button type="submit" class="btn btn-outline-secondary mr-2" data-toggle="modal"
                    data-target="#filtros">FILTRAR ITENS DA TABELA</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table id="tabelaMaquina" class="table">
                    <caption>Máquinas cadastradas</caption>
                    <thead>
                        <th scope="col">TAG</th>
                        <th scope="col">MODELO DA MÁQUINA</th>
                        <th scope="col">TIPO DA MÁQUINA</th>
                        <th scope="col">GARANTIA</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">BOTÃO</th>
                    </thead>
                    <tbody>
                        <?php while($linha_tabela = mysqli_fetch_assoc($sql_maquina)) { ?>
                        <tr>
                            <td>
                                <?php echo $linha_tabela['tag']; ?>
                            </td>
                            <td>
                                <?php echo $linha_tabela['modelo']; ?>
                            </td>
                            <td>
                                <?php echo $linha_tabela['tipo']; ?>
                            </td>
                            <td>
                                <?php echo $linha_tabela['datagarantia']; ?>
                            </td>
                            <td>
                                <?php echo $linha_tabela['statusmaq']; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                                    data-target="#editar">Editar
                                </button>
                                <a
                                    href="../../../../src/db/ti/maquinas/delete.php?id=<?php echo $linha_tabela['id']; ?>">
                                    <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal de edição -->
        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="Register" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Register">Máquinas</h5>
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
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#tabelaMaquina').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
    });
    </script>
    <!-- <script src="../../assets/js/"></script> -->
</body>

</html>