<?php
    include_once("../../../../src/config/conexaodb.php");

    $coleta_setor = "SELECT * FROM setor";
    $sql_setor = mysqli_query($conn, $coleta_setor);

    $sql_usuario = mysqli_query($conn, "SELECT * FROM usuario order by ip asc");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuário - T.I</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
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
                                    <form action="../../../../src/db/ti/usuarios/insert.php" method="POST">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-4">
                                                <label for="inputWlan">Wlan</label>
                                                <input type="text" name="inputWlan" placeholder="192.168.1." class="form-control" disabled>
                                            </div>
                                            <div class="form-group col-sm-2">
                                                <label for="inputIp">IP</label>
                                                <input type="text" name="inputIp" class="form-control" placeholder="IP" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputUsuario">Usuário</label>
                                                <input type="text" name="inputUsuario" class="form-control" placeholder="Usuário">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group col-md-5">
                                                <label for="inputSetor">Setor</label>
                                                <select class="custom-select" name="inputSetor">
                                                    <option selected>Escolha...</option>
                                                    <?php while($linha = mysqli_fetch_assoc($sql_setor)) { ?>
                                                        <option value="<?php echo $linha['setor']; ?>"><?php echo $linha['setor']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputHomeOffice">Home Office</label>
                                                <select class="custom-select" name="inputHomeOffice">
                                                    <option selected>Escolha...</option>
                                                    <option value="SIM">SIM</option>
                                                    <option value="NÃO">NÃO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="form-row justify-content-end">
                                                <button type="submit" class="btn btn-info mr-2">Cadastrar</button>
                                                <button type="reset" value="Apagar Campos" class="btn btn-warning mr-1">Limpar</button>
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
            <div class="col-md-10">
                <div class="py-3">
                    <table class="table">
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
                                    <button type="button" class="btn btn-warning btn-sm">Editar</button>    
                                    <a href="../../../../src/db/ti/usuarios/delete.php?id=<?php echo $linha_tabela['ip']; ?>">
                                        <button type="button" class="btn btn-danger btn-sm">Excluir</button>    
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

    <!-- Bootstrap/Jquery/Popper.js -->
    <script src="../../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../../../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../../assets/js/datatable-usuarios.js"></script>
</body>

</html>