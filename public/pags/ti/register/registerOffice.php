<?php
    include_once("../../../../src/config/conexaodb.php");

    $sql_office = mysqli_query($conn, "SELECT * FROM msoffice ORDER BY inicio");

    $sql_modelo_ms_office = mysqli_query($conn, "SELECT * FROM modelo_ms_office");
    $sql_modelo_ms_office_edit = mysqli_query($conn, "SELECT * FROM modelo_ms_office");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Office - T.I</title>

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
                    <h3 class="display-3 m-2">Registro de Office</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="py-5">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="../../../../src/db/ti/office/insert.php" method="POST">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-2">
                                                <label for="inputInicio">Início do Office</label>
                                                <input type="text" name="inputInicio" class="form-control"
                                                    id="inputInicio" required>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="inputSerial">Product Key do Office</label>
                                                <input type="text" name="inputSerial" class="form-control"
                                                    id="inputTipo">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-5">
                                                <label for="inputVersao">Versão do Office</label>
                                                <select id="inputVersao" name="inputVersao" class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <?php while($linha_versao = mysqli_fetch_assoc($sql_modelo_ms_office)) { ?>
                                                    <option value="<?php echo $linha_versao['modelo_ms_office']; ?>">
                                                        <?php echo $linha_versao['modelo_ms_office']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputStatus">Status</label>
                                                <select id="inputStatus" name="inputStatus" class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <option value="ATIVO">ATIVO</option>
                                                    <option value="INATIVO">INATIVO</option>
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
        <div class="row justify-content-left">
            <div class="col" style="margin-left: 90px; margin-bottom: 15px;">
                <button type="submit" class="btn btn-outline-secondary mr-2" data-toggle="modal"
                    data-target=".bd-example-modal-lg">FILTRAR ITENS DA TABELA</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table id="tabelaMaquina" class="table">
                    <caption>Office's cadastradas</caption>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">INICIO</th>
                            <th scope="col">CHAVE DO PRODUTO</th>
                            <th scope="col">VERSÃO DO PRODUTO</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">BOTÃO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($linha_tabela = mysqli_fetch_assoc($sql_office)) { ?>
                        <tr>
                            <td>
                                <?php echo $linha_tabela['inicio']; ?>
                            </td>
                            <td>
                                <?php echo $linha_tabela['chave_produto']; ?>
                            </td>
                            <td>
                                <?php echo $linha_tabela['versao_office']; ?>
                            </td>
                            <td>
                                <?php echo $linha_tabela['statusoffice']; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                                    data-target="#editar" data-id="<?php echo $linha_tabela['id']; ?>"
                                    data-inicio="<?php echo $linha_tabela['inicio']; ?>"
                                    data-chave_produto="<?php echo $linha_tabela['chave_produto']; ?>"
                                    data-versao_office="<?php echo $linha_tabela['versao_office']; ?>"
                                    data-statusoffice="<?php echo $linha_tabela['statusoffice']; ?>">Editar
                                </button>
                                <a href="../../../../src/db/ti/office/delete.php?id=<?php echo $linha_tabela['id']; ?>">
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
        <div class="modal fade bd-example-modal-lg" id="editar" tabindex="-1" role="dialog" aria-labelledby="Register"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Register">Office</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../../../../src/db/ti/office/edit.php" method="POST">
                            <div class="form-row justify-content-center">
                                <div><input type="hidden" name="inputId" class="form-control" id="id"></div>
                                <div class="form-group col-md-2">
                                    <label for="inputInicio">Início</label>
                                    <input type="text" name="inputInicio" class="form-control" id="inicio" required>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="inputSerial">Product Key do Office</label>
                                    <input type="text" name="inputSerial" class="form-control" id="chave_produto">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-5">
                                    <label for="inputVersao">Versão do Office</label>
                                    <select id="versao_office" name="inputVersao" class="form-control">
                                        <option value="" selected>Escolher...</option>
                                        <?php while($linha_edit_versao = mysqli_fetch_assoc($sql_modelo_ms_office_edit)) { ?>
                                        <option value="<?php echo $linha_edit_versao['modelo_ms_office']; ?>">
                                            <?php echo $linha_edit_versao['modelo_ms_office']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputStatus">Status</label>
                                    <select name="inputStatus" id="statusoffice" class="form-control">
                                        <option value="" selected>Escolher...</option>
                                        <option value="ATIVO">ATIVO</option>
                                        <option value="INATIVO">INATIVO</option>
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
    <script src="../../../../public/assets/js/edit-office.js"></script>
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