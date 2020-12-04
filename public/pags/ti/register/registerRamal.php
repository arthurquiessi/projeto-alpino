<?php
    include_once("../../../../src/config/conexaodb.php");

    $sql_ramal = mysqli_query($conn, "SELECT * FROM ramal ORDER BY ip");

    $sql_modelo_ramal = mysqli_query($conn, "SELECT * FROM modelo_ramal");
    $sql_modelo_ramal_edit = mysqli_query($conn, "SELECT * FROM modelo_ramal");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Ramais - T.I</title>

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
                    <h3 class="display-3 m-2">Registro de Ramais</h3>
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
                                    <form action="../../../../src/db/ti/ramal/insert.php" method="POST">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-3">
                                                <label for="inputWlan">Wlan</label>
                                                <input type="text" class="form-control" id="inputWlan"
                                                    placeholder="192.168.2." disabled>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <label for="inputIp">IP</label>
                                                <input type="text" name="inputIp" class="form-control" id="inputIp"
                                                    placeholder="IP" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputRamal">Nº Ramal</label>
                                                <input type="text" name="inputRamal" class="form-control"
                                                    id="inputRamal">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputModeloRamal">Modelo Ramal</label>
                                                <select id="inputModeloRamal" name="inputModeloRamal"
                                                    class="form-control">
                                                    <option value="" selected>Escolher...</option>
                                                    <?php while($linha = mysqli_fetch_assoc($sql_modelo_ramal)) {?>
                                                    <option value="<?php echo $linha['modelo_ramal']; ?>">
                                                        <?php echo $linha['modelo_ramal']; ?></option>
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
        <div class="row justify-content-left">
            <div class="col" style="margin-left: 90px; margin-bottom: 15px;">
                <button type="submit" class="btn btn-outline-secondary mr-2" data-toggle="modal"
                    data-target="#filtros">FILTRAR ITENS DA TABELA</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div>
                    <table id="tabelaOffice" class="table">
                        <caption>Ramais cadastrados</caption>
                        <thead>
                            <tr class="table-info">
                                <th scope="col">IP</th>
                                <th scope="col">USUÁRIO</th>
                                <th scope="col">SETOR DO USUÁRIO</th>
                                <th scope="col">BOTÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($linha_tabela = mysqli_fetch_assoc($sql_ramal)) { ?>
                            <tr>
                                <td>
                                    <?php echo $linha_tabela['ip']; ?>
                                </td>
                                <td>
                                    <?php echo $linha_tabela['ramal']; ?>
                                </td>
                                <td>
                                    <?php echo $linha_tabela['modelo_ramal']; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                                        data-target="#editar" data-ip="<?php echo $linha_tabela['ip']; ?>"
                                        data-ramal="<?php echo $linha_tabela['ramal']; ?>"
                                        data-modelo_ramal="<?php echo $linha_tabela['modelo_ramal']; ?>">
                                        Editar
                                    </button>
                                    <a
                                        href="../../../../src/db/ti/ramal/delete.php?id=<?php echo $linha_tabela['ip']; ?>">
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
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-xl" id="editar" tabindex="-1" role="dialog" aria-labelledby="Register"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Register">Ramais</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../../../src/db/ti/ramal/edit.php" method="POST">
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-3">
                                <label for="inputWlan">Wlan</label>
                                <input type="text" class="form-control" id="inputWlan" placeholder="192.168.2."
                                    disabled>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputIp">IP</label>
                                <input type="text" name="inputIp" class="form-control" id="ip" placeholder="IP">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputRamal">Nº Ramal</label>
                                <input type="text" name="inputRamal" class="form-control" id="ramal">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputModeloRamal">Modelo Ramal</label>
                                <select id="modelo_ramal" name="inputModeloRamal" class="form-control">
                                    <option value="" selected>Escolher...</option>
                                    <?php while($linha_edit_ramal = mysqli_fetch_assoc($sql_modelo_ramal_edit)) {?>
                                    <option value="<?php echo $linha_edit_ramal['modelo_ramal']; ?>">
                                        <?php echo $linha_edit_ramal['modelo_ramal']; ?></option>
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
    <script src="../../../../public/assets/js/edit-ramal.js"></script>
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
        $('#tabelaOffice').DataTable({
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