<?php
    include_once("../../../../src/config/conexaodb.php");

    $sql_setor = mysqli_query($conn, "SELECT * FROM setor");

    $sql_usuario = mysqli_query($conn, "SELECT * FROM usuario order by ip asc");
    
    $sql_filter = mysqli_query($conn, "SELECT * FROM setor");

    $sql_edit = mysqli_query($conn, "SELECT * FROM setor");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuário - T.I</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
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
            <div class="col-md-7">
                <div class="py-5">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="../../../../src/db/ti/usuarios/insert.php" method="POST">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-4">
                                                <label for="inputWlan">Wlan</label>
                                                <input type="text" name="inputWlan" placeholder="192.168.1."
                                                    class="form-control" disabled>
                                            </div>
                                            <div class="form-group col-sm-2">
                                                <label for="inputIp">IP</label>
                                                <input type="text" name="inputIp" class="form-control" placeholder="IP"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputUsuario">Usuário</label>
                                                <input type="text" name="inputUsuario" class="form-control"
                                                    placeholder="Usuário">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-6">
                                                <label for="inputSetor">Setor</label>
                                                <select class="custom-select" name="inputSetor">
                                                    <option value="" selected>Escolha...</option>
                                                    <?php while($linha = mysqli_fetch_assoc($sql_setor)) { ?>
                                                    <option value="<?php echo $linha['setor']; ?>">
                                                        <?php echo $linha['setor']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputHomeOffice">Home Office</label>
                                                <select class="custom-select" name="inputHomeOffice">
                                                    <option value="" selected>Escolha...</option>
                                                    <option value="SIM">SIM</option>
                                                    <option value="NÃO">NÃO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="form-row justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-outline-info mr-2">Cadastrar</button>
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
            <div class="col-lg-12">
                <div>
                    <table id="tabelaUsuario" class="table">
                        <caption>Usuários cadastrados</caption>
                        <thead>
                            <tr class="table-info">
                                <th scope="col">IP</th>
                                <th scope="col">USUÁRIO</th>
                                <th scope="col">SETOR DO USUÁRIO</th>
                                <th scope="col">HOME OFFICE</th>
                                <th scope="col">BOTÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($linha_tabela = mysqli_fetch_assoc($sql_usuario)) { ?>
                            <tr>
                                <td>
                                    <?php echo $linha_tabela['ip']; ?>
                                </td>
                                <td>
                                    <?php echo $linha_tabela['usuario']; ?>
                                </td>
                                <td>
                                    <?php echo $linha_tabela['setor']; ?>
                                </td>
                                <td>
                                    <?php echo $linha_tabela['homeOffice']; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                                        data-target="#editar" data-ip="<?php echo $linha_tabela['ip']; ?>"
                                        data-usuario="<?php echo $linha_tabela['usuario']; ?>"
                                        data-setor="<?php echo $linha_tabela['setor']; ?>"
                                        data-home="<?php echo $linha_tabela['homeOffice']; ?>">
                                        Editar
                                    </button>
                                    <a
                                        href="../../../../src/db/ti/usuarios/delete.php?id=<?php echo $linha_tabela['ip']; ?>">
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
    <!-- Modal de filtros da tabela -->
    <div class="modal fade" id="filtros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FILTRAR DADOS DA TABELA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../../../src/db/ti/usuarios/filter.php" method="POST">
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-7">
                                <label for="filterSetor">Setor</label>
                                <select class="custom-select" name="filterSetor">
                                    <option value="">Escolha...</option>
                                    <?php
                                        while($modal_filter = mysqli_fetch_assoc($sql_filter)) { 
                                    ?>
                                    <option value="<?php echo $modal_filter['setor']; ?>">
                                        <?php echo $modal_filter['setor']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="filterHomeOffice">Home Office</label>
                                <select class="custom-select" name="filterHomeOffice">
                                    <option value="" selected>Escolha...</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NÃO">NÃO</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Filtrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal de edição de dados-->
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
                    <form action="../../../../src/db/ti/usuarios/edit.php" method="POST">
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
                                        while($modal_edit = mysqli_fetch_assoc($sql_edit)) { 
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
    <script src="../../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../../../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../../../public/assets/js/edit-usuario.js"></script>
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
        $('#tabelaUsuario').DataTable({
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
</body>

</html>