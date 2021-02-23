<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist - T.I</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/style-consultAll.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
</head>

<body class="bg-light">
    <?php 
        include '../include/nav-checklist.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="py-2 text-center">
                    <h3 class="display-4 m-2">Criar e Gerar Checklist</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="py-4 text-center">
                    <a href="./new-checklist-usuario.php" class="btn btn-primary btn-lg active" role="button"
                        aria-pressed="true">Iniciar Novo
                        Checklist</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="py-1 text-center">
                    <a href="#" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Gerar
                        Checklist´s Cadastrados</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="criarChecklist" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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