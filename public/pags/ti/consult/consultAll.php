<?php
    include_once("../../../../src/config/conexaodb.php");

    $sql_geral = mysqli_query($conn, "SELECT * FROM geral");

    $sql_tag = mysqli_query($conn, "SELECT * FROM maquina WHERE statusmaq='ATIVO' ORDER BY tag asc");

    $sql_office = mysqli_query($conn, "SELECT * FROM msoffice WHERE statusoffice='ATIVO' ORDER BY inicio asc");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Geral - T.I</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/style-consultAll.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
</head>

<body class="bg-light">
    <?php 
        include '../include/nav_register.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="py-2 text-center">
                    <h3 class="display-3 m-2">Consulta Geral</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="py-5">
                    <div>
                        <table id="tabelaUsuario" class="table">
                            <caption>Usuários cadastrados</caption>
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">IP</th>
                                    <th scope="col">USUÁRIO</th>
                                    <th scope="col">SETOR DO USUÁRIO</th>
                                    <th scope="col">TAG</th>
                                    <th scope="col">TIPO</th>
                                    <th scope="col">OFFICE</th>
                                    <th scope="col">BOTÃO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($linha_tabela = mysqli_fetch_assoc($sql_geral)) { ?>
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
                                        <?php echo $linha_tabela['tag']; ?>
                                    </td>
                                    <td>
                                        <?php echo $linha_tabela['tipo']; ?>
                                    </td>
                                    <td>
                                        <?php echo $linha_tabela['versao_office']; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                                            data-target="#editar" data-ip="<?php echo $linha_tabela['ip']; ?>"
                                            data-usuario="<?php echo $linha_tabela['usuario']; ?>"
                                            data-setor="<?php echo $linha_tabela['setor']; ?>"
                                            data-home_office="<?php echo $linha_tabela['home_office']; ?>"
                                            data-tag="<?php echo $linha_tabela['tag']; ?>"
                                            data-modelo="<?php echo $linha_tabela['modelo']; ?>"
                                            data-tipo="<?php echo $linha_tabela['tipo']; ?>"
                                            data-pcid="<?php echo $linha_tabela['pcid']; ?>"
                                            data-processador="<?php echo $linha_tabela['processador']; ?>"
                                            data-memoria="<?php echo $linha_tabela['memoria']; ?>"
                                            data-armazenamento="<?php echo $linha_tabela['armazenamento']; ?>"
                                            data-tipo_armazenamento="<?php echo $linha_tabela['tipo_armazenamento']; ?>"
                                            data-sistema_operacional="<?php echo $linha_tabela['sistema_operacional']; ?>"
                                            data-nfcompra="<?php echo $linha_tabela['nfcompra']; ?>"
                                            data-datacompra="<?php echo $linha_tabela['datacompra']; ?>"
                                            data-distribuidora="<?php echo $linha_tabela['distribuidora']; ?>"
                                            data-nfgarantia="<?php echo $linha_tabela['nfgarantia']; ?>"
                                            data-datagarantia="<?php echo $linha_tabela['datagarantia']; ?>"
                                            data-inicio="<?php echo $linha_tabela['inicio']; ?>"
                                            data-chave_produto="<?php echo $linha_tabela['chave_produto']; ?>"
                                            data-versao_office="<?php echo $linha_tabela['versao_office']; ?>"
                                            data-ip_ramal="<?php echo $linha_tabela['ip_ramal']; ?>"
                                            data-ramal="<?php echo $linha_tabela['ramal']; ?>"
                                            data-modelo_ramal="<?php echo $linha_tabela['modelo_ramal']; ?>">
                                            Visualizar
                                        </button>
                                        <a
                                            href="../../../../src/db/ti/geral/delete.php?id=<?php echo $linha_tabela['id']; ?>">
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
    </div>
    <!-- Modal de edição de dados-->
    <div class="modal fade bd-example-modal-xl" id="editar" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../../../src/db/ti/geral/edit.php" method="POST">
                        <div class="form-row justify-content-center">
                            <div><input type="hidden" name="inputId" class="form-control" id="id"></div>
                            <div class="form-group col-md-3">
                                <label for="inputWlan">Wlan</label>
                                <input type="text" name="inputWlan" class="form-control" id="wlan"
                                    placeholder="192.168.1." disabled>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputIp">IP</label>
                                <input type="text" name="inputIp" class="form-control" id="ip" placeholder="IP">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputUsuario">Usuário</label>
                                <input type="text" name="inputUsuario" class="form-control" id="usuario"
                                    readonly=“true”>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-4">
                                <label for="inputSetor">Setor</label>
                                <input type="text" name="inputSetor" class="form-control" id="setor" readonly=“true”>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputHomeOffice">Home Office</label>
                                <input type="text" name="inputHomeOffice" class="form-control" id="home_office"
                                    readonly=“true”>
                            </div>
                        </div>
                        <div class="pt-3">
                            <h5 class="card-title">MÁQUINAS</h5>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputTag">Tag</label>
                                <select id="tag" name="inputTag" class="form-control">
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
                                <input type="text" name="inputModelo" class="form-control" id="modelo" readonly=“true”>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputTipo">Tipo</label>
                                <input type="text" name="inputTipo" class="form-control" id="tipo" readonly=“true”>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputIdpc">ID do PC</label>
                                <input type="text" name="inputIdpc" class="form-control" id="pcid" readonly=“true”>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-3">
                                <label for="inputProcessador">Processador</label>
                                <input type="text" name="inputProcessador" class="form-control" id="processador"
                                    readonly=“true”>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputMemoria">Memória (Ram)</label>
                                <input type="text" name="inputMemoria" class="form-control" id="memoria"
                                    readonly=“true”>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputArmazenamento">Armazenagem</label>
                                <input type="text" name="inputArmazenamento" class="form-control" id="armazenamento"
                                    readonly=“true”>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputTipoArmazenamento">Tipo Armazenagem</label>
                                <input type="text" name="inputTipoArmazenamento" class="form-control"
                                    id="tipo_armazenamento" readonly=“true”>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputSo">Sistema Operacional</label>
                                <input type="text" name="inputSo" class="form-control" id="sistema_operacional"
                                    readonly=“true”>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-3">
                                <label for="inputNfCompra">NF Compra</label>
                                <input type="text" name="inputNfCompra" class="form-control" id="nfcompra"
                                    readonly=“true”>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCompra">Data Compra</label>
                                <input type="text" name="inputCompra" class="form-control" id="datacompra"
                                    readonly=“true”>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputDistribuidora">Distribuidora</label>
                                <input type="text" name="inputDistribuidora" class="form-control" id="distribuidora"
                                    readonly=“true”>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-3">
                                <label for="inputNfGarantia">NF Garantia</label>
                                <input type="text" name="inputNfGarantia" class="form-control" id="nfgarantia"
                                    readonly=“true”>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputGarantia">Data Garantia</label>
                                <input type="text" name="inputGarantia" class="form-control" id="datagarantia"
                                    readonly=“true”>
                            </div>
                        </div>
                        <div class="pt-3">
                            <h5 class="card-title">MICROSOFT OFFICE</h5>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputOffice">Início do Office</label>
                                <select id="inicio" name="inputOffice" class="form-control">
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
                                <input type="text" name="inputSerial" class="form-control" id="chave_produto"
                                    readonly=“true”>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputVersao">Versão do Office</label>
                                <input type="text" name="inputVersao" class="form-control" id="versao_office"
                                    readonly=“true”>
                            </div>
                        </div>
                        <div class="pt-3">
                            <h5 class="card-title">RAMAL</h5>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-3">
                                <label for="inputWlan1">Wlan</label>
                                <input type="text" name="inputWlan1" class="form-control" id="inputWlan1"
                                    placeholder="192.168.2." readonly=“true”>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputIpRamal">IP</label>
                                <input type="text" name="inputIpRamal" class="form-control" id="ip_ramal"
                                    placeholder="IP">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputRamal">Nº Ramal</label>
                                <input type="text" name="inputRamal" class="form-control" id="ramal" readonly=“true”>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputModeloRamal">Modelo Ramal</label>
                                <input type="text" name="inputModeloRamal" class="form-control" id="modelo_ramal"
                                    readonly=“true”>
                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="form-row justify-content-end">
                                <button type="submit" class="btn btn-outline-info mr-2">Editar</button>
                                <button type="reset" class="btn btn-outline-warning mr-1">Limpar</button>
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
    <script src="../../../../public/assets/js/edit-all.js"></script>
    <script src="../../../assets/js/function-usuario.js"></script>
    <script src="../../../assets/js/function-maquina.js"></script>
    <script src="../../../assets/js/function-office.js"></script>
    <script src="../../../assets/js/function-ramal.js"></script>
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