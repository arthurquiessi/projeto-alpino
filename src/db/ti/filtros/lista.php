<?php
    include_once("../../../config/conexaodb.php");

    $usuario = $_GET['usuarios'];
    $homeSim = $_GET['sim'];
    $homeNao = $_GET['nao'];
    
    // Setores
    $administracao = $_GET['administracao'];
    $almoxarifado = $_GET['almoxarifado'];
    $almoxarifadoTubo = $_GET['almoxarifadoTubo'];
    $compras = $_GET['compras'];
    $curvadeira = $_GET['curvadeira'];
    $desenvolvimento = $_GET['desenvolvimento'];
    $diretoria = $_GET['diretoria'];
    $engenharia = $_GET['engenharia'];
    $expedicao = $_GET['expedicao'];
    $ferramentaria = $_GET['ferramentaria'];
    $financeiro = $_GET['financeiro'];
    $fiscal = $_GET['fiscal'];
    $gerenteComercial = $_GET['gerenteComercial'];
    $gerenteControladoria = $_GET['gerenteControladoria'];
    $gerenteIndustrial = $_GET['gerenteIndustrial'];
    $gerenteLogistica = $_GET['gerenteLogistica'];
    $laboratorio = $_GET['laboratorio'];
    $logistica = $_GET['logistica'];
    $manutencao = $_GET['manutencao'];
    $metrologia = $_GET['metrologia'];
    $portaria = $_GET['portaria'];
    $producao = $_GET['producao'];
    $projetos = $_GET['projetos'];
    $qualidade = $_GET['qualidade'];
    $recepcao = $_GET['recepcao'];
    $recursosHumanos = $_GET['recursosHumanos'];
    $salaClean = $_GET['salaClean'];
    $salaTreinamento = $_GET['salaTreinamento'];
    $sgi = $_GET['sgi'];
    $solda = $_GET['solda'];
    $tecnologiaInformacao = $_GET['tecnologiaInformacao'];
    $vendas = $_GET['vendas'];

    // Modelo Máquina
    $dellLatitude3440 = $_GET['dellLatitude3440'];
    $dellLatitudeE5140 = $_GET['dellLatitudeE5140'];
    $dellLatitudeE5410 = $_GET['dellLatitudeE5410'];
    $dellLatitudeE5420 = $_GET['dellLatitudeE5420'];
    $dellLatitudeE5430 = $_GET['dellLatitudeE5430'];
    $dellLatitudeE6430 = $_GET['dellLatitudeE6430'];
    $dellOptiplex3010 = $_GET['dellOptiplex3010'];
    $dellOptiplex3050 = $_GET['dellOptiplex3050'];
    $dellOPtiplex320 = $_GET['dellOPtiplex320'];
    $dellOptiplex380 = $_GET['dellOptiplex380'];
    $dellOptiplex390 = $_GET['dellOptiplex390'];
    $dellOptiplex7070 = $_GET['dellOptiplex7070'];
    $dellOptiplex745 = $_GET['dellOptiplex745'];
    $dellOptiplex755 = $_GET['dellOptiplex755'];
    $dellOPtiplexGX260 = $_GET['dellOptiplexGX260'];
    $dellOPtiplexGX620 = $_GET['dellOptiplexGX620'];
    $dellPowerEdgeT410 = $_GET['dellPowerEdgeT410'];
    $dellPowerEdgeT440 = $_GET['dellPowerEdgeT440'];
    $dellPrecisionT3500 = $_GET['dellPrecisionT3500'];
    $dellPrecisionT3600 = $_GET['dellPrecisionT3600'];
    $dellVostro1014 = $_GET['dellVostro1014'];
    $dellVostro143468 = $_GET['dellVostro143468'];
    $dellVostro220s = $_GET['dellVostro220s'];
    $dellVostro3460 = $_GET['dellVostro3460'];
    $dellXPS8920 = $_GET['dellXPS8920'];
    $lenovoIdeapadB320 = $_GET['lenovoIdeapadB320'];
    $lenovoIdeapadB330s = $_GET['lenovoIdeapadB330s'];
    $lenovoThinkpadE14 = $_GET['lenovoThinkpadE14'];
    $lenovoThinkpadE480 = $_GET['lenovoThinkpadE480'];
    $lenovothinkpadE490 = $_GET['lenovothinkpadE490'];
    $lenovoThinkpadT440P = $_GET['lenovoThinkpadT440P'];
    $lenovoV310 = $_GET['lenovoV310'];
    $lenovoV520s = $_GET['lenovoV520s'];
    $lenovoV530s = $_GET['lenovoV530s'];
    $lenovoW10S510 = $_GET['lenovoW10S510'];
    $ncomputing = $_GET['ncomputing'];

    // Tipo Máquina
    $desktop = $_GET['desktop'];
    $notebook = $_GET['notebook'];
    $servidor = $_GET['servidor'];
    $virtualizacao = $_GET['virtualizacao'];

    // Processadores
    $i3 = $_GET['i3'];
    $i5 = $_GET['i5'];
    $i7 = $_GET['i7'];
    $i9 = $_GET['i9'];
    $pentium = $_GET['pentium'];
    $dualCore = $_GET['dualCore'];
    $xeon = $_GET['xeon'];

    // Tipo de armazenagem
    $ssd = $_GET['ssd'];
    $hdd = $_GET['hdd'];
    $ssdhdd = $_GET['ssdhdd'];

    // Sistemas Operacionais
    $linux = $_GET['linux'];
    $windows10 = $_GET['windows10'];
    $windows732 = $_GET['windows732'];
    $windows764 = $_GET['windows764'];
    $windows8 = $_GET['windows8'];
    $windowsServer2019 = $_GET['windowsServer2019'];

    // Garantia
    $todas = $_GET['todas'];
    $vencidas = $_GET['vencidas'];
    $ativas = $_GET['ativas'];

    // Status das máquinas
    $todos = $_GET['todos'];
    $ativos = $_GET['ativos'];
    $inativos = $_GET['inativos'];

    // Office
    $libreOffice = $_GET['libreOffice'];
    $off2007 = $_GET['2007'];
    $off2010 = $_GET['2010'];
    $off2013 = $_GET['2013'];
    $off2016 = $_GET['2016'];
    $off365 = $_GET['365'];

    // Status do Office
    $todosOffice = $_GET['todosOffice'];
    $ativosOffice = $_GET['ativosOffice'];
    $inativosOffice = $_GET['inativosOffice'];

    // Ramais
    $DP722 = $_GET['DP722'];
    $GXP1628 = $_GET['GXP1628'];
    $SIPT19P = $_GET['SIPT19P'];
    
    // echo $usuario . '<br>';
    // echo $homeSim . '<br>';
    // echo $homeNao . '<br>';

    // echo $administracao . '<br>';
    // echo $almoxarifado . '<br>';
    // echo $almoxarifadoTubo . '<br>';
    // echo $compras . '<br>';
    // echo $curvadeira . '<br>';
    // echo $desenvolvimento . '<br>';
    // echo $diretoria . '<br>';
    // echo $engenharia . '<br>';
    // echo $expedicao . '<br>';
    // echo $ferramentaria . '<br>';
    // echo $financeiro . '<br>';
    // echo $fiscal . '<br>';
    // echo $gerenteComercial . '<br>';
    // echo $gerenteControladoria . '<br>';
    // echo $gerenteIndustrial . '<br>';
    // echo $gerenteLogistica . '<br>';
    // echo $laboratorio . '<br>';
    // echo $logistica . '<br>';
    // echo $manutencao . '<br>';
    // echo $metrologia . '<br>';
    // echo $portaria . '<br>';
    // echo $producao . '<br>';
    // echo $projetos . '<br>';
    // echo $qualidade . '<br>';
    // echo $recepcao . '<br>';
    // echo $recursosHumanos . '<br>';
    // echo $salaClean . '<br>';
    // echo $salaTreinamento . '<br>';
    // echo $sgi . '<br>';
    // echo $solda . '<br>';
    // echo $tecnologiaInformacao . '<br>';
    // echo $vendas . '<br>';

    // echo $dellLatitude3440 . '<br>'; 
    // echo $dellLatitudeE5140 . '<br>'; 
    // echo $dellLatitudeE5410 . '<br>'; 
    // echo $dellLatitudeE5420 . '<br>'; 
    // echo $dellLatitudeE5430 . '<br>'; 
    // echo $dellLatitudeE6430 . '<br>'; 
    // echo $dellOptiplex3010 . '<br>'; 
    // echo $dellOptiplex3050 . '<br>'; 
    // echo $dellOPtiplex320 . '<br>'; 
    // echo $dellOptiplex380 . '<br>'; 
    // echo $dellOptiplex390 . '<br>'; 
    // echo $dellOptiplex7070 . '<br>'; 
    // echo $dellOptiplex745 . '<br>'; 
    // echo $dellOptiplex755 . '<br>'; 
    // echo $dellOPtiplexGX260 . '<br>'; 
    // echo $dellOPtiplexGX620 . '<br>'; 
    // echo $dellPowerEdgeT410 . '<br>'; 
    // echo $dellPowerEdgeT440 . '<br>'; 
    // echo $dellPrecisionT3500 . '<br>'; 
    // echo $dellPrecisionT3600 . '<br>'; 
    // echo $dellVostro1014 . '<br>'; 
    // echo $dellVostro143468 . '<br>'; 
    // echo $dellVostro220s . '<br>'; 
    // echo $dellVostro3460 . '<br>'; 
    // echo $dellXPS8920 . '<br>'; 
    // echo $lenovoIdeapadB320 . '<br>'; 
    // echo $lenovoIdeapadB330s . '<br>'; 
    // echo $lenovoThinkpadE14 . '<br>'; 
    // echo $lenovoThinkpadE480 . '<br>';
    // echo $lenovothinkpadE490 . '<br>'; 
    // echo $lenovoThinkpadT440P . '<br>'; 
    // echo $lenovoV310 . '<br>';
    // echo $lenovoV520s . '<br>';
    // echo $lenovoV530s . '<br>'; 
    // echo $lenovoW10S510 . '<br>';
    // echo $ncomputing . '<br>'; 

    // echo $desktop . '<br>'; 
    // echo $notebook . '<br>'; 
    // echo $servidor . '<br>'; 
    // echo $virtualizacao . '<br>';

    // echo $i3 . '<br>';
    // echo $i5 . '<br>';
    // echo $i7 . '<br>';
    // echo $i9 . '<br>';
    // echo $pentium . '<br>'; 
    // echo $dualCore . '<br>';
    // echo $xeon . '<br>';

    // echo $ssd . '<br>';
    // echo $hdd . '<br>';
    // echo $ssdhdd . '<br>';

    // echo $linux . '<br>';
    // echo $windows10 . '<br>';
    // echo $windows732 . '<br>';
    // echo $windows764 . '<br>';
    // echo $windows8 . '<br>';
    // echo $windowsServer2019 . '<br>';

    // echo $todas . '<br>';
    // echo $vencidas . '<br>';
    // echo $ativas . '<br>';

    // echo $todos . '<br>';
    // echo $ativos . '<br>';
    // echo $inativos . '<br>';

    // echo $libreOffice . '<br>';
    // echo $off2007 . '<br>';
    // echo $off2010 . '<br>';
    // echo $off2013 . '<br>';
    // echo $off2016 . '<br>';
    // echo $off365 . '<br>';

    // echo $todosOffice . '<br>';
    // echo $ativosOffice . '<br>';
    // echo $inativosOffice . '<br>';

    // echo $DP722 . '<br>';
    // echo $GXP1628 . '<br>';
    // echo $SIPT19P . '<br>';

    // $sql_filtro = mysqli_query($conn, "SELECT * FROM geral INNER JOIN usuario ON geral.ip = usuario.ip");
    // $sql_filtro_resultado = mysqli_num_rows($sql_filtro);

    mysqli_close($conn);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" />


    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#result').DataTable({
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf']
        });
        table.buttons().container().appendTo('#result_wrapper .col-md-6:eq(0)');
    });
    </script>

    <title>Filtro Geral - T.I</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="nav justify-content-end">
            <ul class="nav">
                <li class="nav-item">
                    <div class="align-self-center mr-2">
                        <a href="../../../../public/pags/ti/consult/filter/filter.php"
                            class="btn btn-outline-success my-4 my-sm-4">Voltar</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="align-self-center mr-2">
                        <a href="#" class="btn btn-outline-danger my-4 my-sm-4">Copiar URL</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="align-self-center mr-3">
                        <a href="./public/pags/admin/login.php" class="btn btn-outline-primary my-4 my-sm-4">Usuário
                            logado</a>
                    </div>
                </li>
            </ul>
            <br>
        </nav>
        <div class="text-center">
            <h3>Filtro Geral do Sistema</h2>
                <p class="lead">Filtro das informações de Usuários, Máquinas, Office e Ramal.</p>
        </div>


        <div class="card">
            <div class="card-body">
                <table id="result" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                        <tr>
                            <?php 
                                if ($usuario != "") {
                                    echo '<th scope="col">IP</th>';
                                    echo '<th scope="col">USUÁRIO</th>';
                                }

                                if ($homeSim != "" || $homeNao != "") {
                                    echo '<th scope="col">HOME OFFICE</th>'; 
                                }
                                
                                foreach($setores as $setor) {
                                    if ($setor != "") {
                                        echo '<th scope="col">SETOR</th>'; 
                                        exit;
                                    }
                                }

                                if ($administracao != "" || $almoxarifado != "" || $almoxarifadoTubo != "" || $compras != "" 
                                    || $curvadeira != "" || $desenvolvimento != "" || $diretoria != "" || $engenharia != "" 
                                    || $expedicao != "" || $ferramentaria != "" || $financeiro != "" || $fiscal != "" 
                                    || $gerenteComercial != "" || $gerenteControladoria != "" || $gerenteIndustrial != "" || $gerenteLogistica != "" 
                                    || $laboratorio != "" || $logistica != "" || $manutencao != "" || $metrologia != "" 
                                    || $portaria != "" || $producao != "" || $projetos != "" || $qualidade != "" 
                                    || $recepcao != "" || $recursosHumanos != "" || $salaClean != "" || $salaTreinamento != "" 
                                    || $sgi != "" || $solda != "" || $tecnologiaInformacao != "" || $vendas != "") {
                                        echo '<th scope="col">SETOR</th>'; 
                                    }
                                    
                                if ($dellLatitude3440 != "" || $dellLatitudeE5140 != "" || $dellLatitudeE5410 != "" || $dellLatitudeE5420 != "" ||
                                    $dellLatitudeE5430 != "" || $dellLatitudeE6430 != "" || $dellOptiplex3010 != "" || $dellOptiplex3050 != "" ||
                                    $dellOPtiplex320 != "" || $dellOptiplex380 != "" || $dellOptiplex390 != "" || $dellOptiplex7070 != "" || 
                                    $dellOptiplex745 != "" || $dellOptiplex755 != "" || $dellOPtiplexGX260 != "" || $dellOPtiplexGX620 != "" ||
                                    $dellPowerEdgeT410 != "" || $dellPowerEdgeT440 != "" || $dellPrecisionT3500 != "" || $dellPrecisionT3600 != "" || 
                                    $dellVostro1014 != "" || $dellVostro143468 != "" || $dellVostro220s != "" || $dellVostro3460 != "" ||
                                    $dellXPS8920 != "" || $lenovoIdeapadB320 != "" || $lenovoIdeapadB330s != "" || $lenovoThinkpadE14 != "" ||
                                    $lenovoThinkpadE480 != "" || $lenovothinkpadE490 != "" || $lenovoThinkpadT440P != "" || $lenovoV310 != "" ||
                                    $lenovoV520s != "" || $lenovoV530s != "" || $lenovoW10S510 != "" || $ncomputing != "") {
                                        echo '<th scope="col">MODELO MÁQUINA</th>';
                                }

                                if ($desktop != "" || $notebook != "" || $servidor != "" || $virtualizacao != "") {
                                    echo '<th scope="col">TIPO MÁQUINA</th>'; 
                                }

                                if ($i3 != "" || $i5 != "" || $i7 != "" || $i9 != "" || $pentium != "" || $dualCore != "" || $xeon != "") {
                                    echo '<th scope="col">PROCESSADOR</th>';
                                }

                                if ($ssd != "" || $hdd != "" || $ssdhdd != "") {
                                    echo '<th scope="col">MEMORIA RAM</th>';
                                    echo '<th scope="col">ARMAZENAMENTO</th>';
                                    echo '<th scope="col">TIPO ARMAZENAMENTO</th>';
                                }

                                if ($linux != "" || $windows10 != "" || $windows732 != "" || $windows764 != "" || $windows8 != "" || $windowsServer2019 != "") {
                                    echo '<th scope="col">SIST. OPERACIONAL</th>';
                                }

                                if ($todas != "" || $vencidas != "" || $ativas != "") {
                                    echo '<th scope="col">GARANTIA</th>';
                                }

                                if ($todos != "" || $ativos != "" || $inativos != "") {
                                    echo '<th scope="col">STATUS MÁQ.</th>';
                                }

                                if ($libreOffice != "" || $off2007 != "" || $off2010 != "" || $off2013 != "" || $off2016 != "" || $off365 != "") {
                                    echo '<th scope="col">INÍCIO OFFICE</th>';
                                    echo '<th scope="col">SERIAL OFFICE</th>';
                                    echo '<th scope="col">MODELO OFFICE</th>';

                                    if ($todosOffice != "" || $ativosOffice != "" || $inativosOffice != "") {
                                        echo '<th scope="col">OFFICE ATIVO</th>';
                                    }
                                }   

                                if ($DP722 != "" || $SIPT19P != "" || $GXP1628 != "") {
                                    echo '<th scope="col">IP RAMAL</th>';
                                    echo '<th scope="col">Nº RAMAL</th>';
                                    echo '<th scope="col">MODELO RAMAL</th>';
                                }

                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($rows_tabela = mysqli_fetch_assoc($sql_filtro)) { ?>
                        <tr>
                            <?php
                                if ($usuario != "") {
                                    if ($homeSim != "" && $homeNao != "") {
                                        echo '<td>';
                                        echo $rows_tabela['ip'];
                                        echo '</td>';
                                        echo '<td>';
                                        echo $rows_tabela['usuario'];
                                        echo '</td>'; 
                                        echo '<td>';
                                        echo $rows_tabela['home_office'];
                                        echo '</td>';
                                    } elseif ($homeSim === "Sim") {
                                        if ($rows_tabela['home_office'] == "SIM") {
                                            echo '<td>';
                                            echo $rows_tabela['ip'];
                                            echo '</td>';
                                            echo '<td>';
                                            echo $rows_tabela['usuario'];
                                            echo '</td>'; 
                                            echo '<td>';
                                            echo $rows_tabela['home_office'];
                                            echo '</td>';
                                        }
                                    } elseif ($homeNao === "Não") {
                                        if ($rows_tabela['home_office'] == "NÃO") {
                                            echo '<td>';
                                            echo $rows_tabela['ip'];
                                            echo '</td>';
                                            echo '<td>';
                                            echo $rows_tabela['usuario'];
                                            echo '</td>'; 
                                            echo '<td>';
                                            echo $rows_tabela['home_office'];
                                            echo '</td>';
                                        }
                                    } else {
                                        echo '<td>';
                                        echo $rows_tabela['ip'];
                                        echo '</td>';
                                        echo '<td>';
                                        echo $rows_tabela['usuario'];
                                        echo '</td>'; 
                                    }
                                }
                            ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>