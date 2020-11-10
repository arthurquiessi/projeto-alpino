<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal Admin</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../../assets/css/"> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../../assets/img/logo.png" width="100" height="40" alt="Alpino">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.html" style="font-size:16px;">Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href alp-link="./users/registerNewUser.html" alp-destino=".pagina"
                        style="font-size:16px;">Criar Usuário<span class="sr-only"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:16px;">
                        Cadastro Padrão
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href alp-link="./registerStandard/registerWlan.php"
                            alp-destino=".pagina">WLAN'S</a>
                        <a class="dropdown-item" href alp-link="./registerStandard/registerSetores.php"
                            alp-destino=".pagina">Setores</a>
                        <a class="dropdown-item" href alp-link="./registerStandard/registerModelMaquinas.php"
                            alp-destino=".pagina">Modelos de Máquinas</a>
                        <a class="dropdown-item" href alp-link="./registerStandard/registerTipoMaquinas.php"
                            alp-destino=".pagina">Tipo de Máquinas</a>
                        <a class="dropdown-item" href alp-link="./registerStandard/registerSO.php"
                            alp-destino=".pagina">Sistemas Operacionais</a>
                        <a class="dropdown-item" href alp-link="./registerStandard/registerModelMsoffice.php"
                            alp-destino=".pagina">Modelos MS Office</a>
                        <a class="dropdown-item" href alp-link="./registerStandard/registerModelRamal.php"
                            alp-destino=".pagina">Modelos Ramais</a>
                        <a class="dropdown-item" href alp-link="./registerStandard/registerModelPrinter.php"
                            alp-destino=".pagina">Modelos Impressoras</a>
                        <a class="dropdown-item" href alp-link="./registerStandard/registerProcessador.php"
                            alp-destino=".pagina">Processadores</a>
                    </div>
                </li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a href="#"><input type="text" class="form-control-plaintext text-white" data-toggle="modal"
                            data-target="#" value="Admin logado"></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="pagina"></div>

    <!-- Bootstrap/Jquery/Popper.js -->
    <script src="../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../assets/js/ajax-nav.js"></script>
</body>

</html>