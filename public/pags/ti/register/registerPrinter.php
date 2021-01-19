<?php
    include_once("../../../../src/config/conexaodb.php");

    $sql_impressora = mysqli_query($conn, "SELECT * FROM impressora");

    $sql_setor = mysqli_query($conn, "SELECT * FROM setor");
    $sql_setor_edit = mysqli_query($conn, "SELECT * FROM setor");

    $sql_modelo_impressora = mysqli_query($conn, "SELECT * FROM modelo_impressora");
    $sql_modelo_impressora_edit = mysqli_query($conn, "SELECT * FROM modelo_impressora");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Impressoras - T.I</title>

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
                    <h3 class="display-3 m-2">Registro de Impressoras</h3>
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
                                    <form action="../../../../src/db/ti/impressoras/insert.php" method="POST">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputWlan">Wlan</label>
                                                <input type="text" class="form-control" id="inputWlan"
                                                    placeholder="192.168.1." disabled>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="inputIp">IP</label>
                                                <input type="text" name="inputIp" class="form-control" id="inputIp"
                                                    placeholder="IP">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputImpressora">Nome Impressora</label>
                                                <input type="text" name="inputNomeImpressora" class="form-control"
                                                    id="inputImpressora">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputSetor">Setor</label>
                                                <select id="inputSetor" name="inputSetor" class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <?php while($linha_setor = mysqli_fetch_assoc($sql_setor)) {  ?>
                                                    <option value="<?php echo $linha_setor['setor']; ?>">
                                                        <?php echo $linha_setor['setor']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputSerie">Nº de Série</label>
                                                <input type="text" name="inputSerie" class="form-control"
                                                    id="inputSerie">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputModelo">Modelo</label>
                                                <select id="inputModelo" name="inputModelo" class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <?php while($linha_modelo_impressora = mysqli_fetch_assoc($sql_modelo_impressora)) {  ?>
                                                    <option
                                                        value="<?php echo $linha_modelo_impressora['modelo_impressora']; ?>">
                                                        <?php echo $linha_modelo_impressora['modelo_impressora']; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="form-row justify-content-end">
                                                <button type="submit" class="btn btn-info mr-2">Cadastrar</button>
                                                <button type="reset" class="btn btn-warning mr-1">Limpar</button>
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
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div>
                    <table id="tabelaImpressora" class="table">
                        <caption>Impressoras Cadastradas</caption>
                        <thead>
                            <tr class="table-info">
                                <th scope="col">IP</th>
                                <th scope="col">IMPRESSORA</th>
                                <th scope="col">SETOR</th>
                                <th scope="col">N/S</th>
                                <th scope="col">MODELO</th>
                                <th scope="col">BOTÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($linha_tabela = mysqli_fetch_assoc($sql_impressora)) { ?>
                            <tr>
                                <td>
                                    <?php echo $linha_tabela['ip']; ?>
                                </td>
                                <td>
                                    <?php echo $linha_tabela['nome_impressora']; ?>
                                </td>
                                <td>
                                    <?php echo $linha_tabela['setor']; ?>
                                </td>
                                <td>
                                    <?php echo $linha_tabela['numero_serie']; ?>
                                </td>
                                <td>
                                    <?php echo $linha_tabela['modelo']; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                                        data-target="#editar" data-ip="<?php echo $linha_tabela['ip'] ?>"
                                        data-nome_impressora="<?php echo $linha_tabela['nome_impressora'] ?>"
                                        data-setor="<?php echo $linha_tabela['setor'] ?>"
                                        data-numero_serie="<?php echo $linha_tabela['numero_serie'] ?>"
                                        data-modelo="<?php echo $linha_tabela['modelo'] ?>">Editar
                                    </button>
                                    <a
                                        href="../../../../src/db/ti/impressoras/delete.php?id=<?php echo $linha_tabela['ip']; ?>">
                                        <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-xl" id="editar" tabindex="-1" role="dialog" aria-labelledby="Register"
            aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Register">Impressoras</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../../../../src/db/ti/impressoras/edit.php" method="POST">
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-3">
                                    <label for="inputWlan">Wlan</label>
                                    <input type="text" class="form-control" id="inputWlan" placeholder="192.168.1."
                                        disabled>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="inputIp">IP</label>
                                    <input type="text" name="inputIp" class="form-control" id="ip" placeholder="IP">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputImpressora">Nome Impressora</label>
                                    <input type="text" name="inputNomeImpressora" class="form-control"
                                        id="nome_impressora">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-3">
                                    <label for="inputSetor">Setor</label>
                                    <select id="setor" name="inputSetor" class="form-control">
                                        <option value="" selected>Escolher...</option>
                                        <?php while($linha_setor_edit = mysqli_fetch_assoc($sql_setor_edit)) {  ?>
                                        <option value="<?php echo $linha_setor_edit['setor']; ?>">
                                            <?php echo $linha_setor_edit['setor']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputSerie">Nº de Série</label>
                                    <input type="text" name="inputSerie" class="form-control" id="numero_serie">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputModelo">Modelo</label>
                                    <select id="modelo" name="inputModelo" class="form-control">
                                        <option value="" selected>Escolher...</option>
                                        <?php while($linha_modelo_impressora_edit = mysqli_fetch_assoc($sql_modelo_impressora_edit)) {  ?>
                                        <option
                                            value="<?php echo $linha_modelo_impressora_edit['modelo_impressora']; ?>">
                                            <?php echo $linha_modelo_impressora_edit['modelo_impressora']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="form-row justify-content-end">
                                    <button type="submit" class="btn btn-info mr-2">Editar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap/Jquery/Popper.js -->
    <script src="../../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../../../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../../../public/assets/js/edit-printer.js"></script>
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
        $('#tabelaImpressora').DataTable({
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