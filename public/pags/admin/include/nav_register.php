<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../../../assets/img/logo.png" width="100" height="40" alt="Alpino">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../main.php" style="font-size:16px;">Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href alp-link="./users/registerNewUser.php" alp-destino=".pagina"
                        style="font-size:16px;">Criar Usuário<span class="sr-only"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:16px;">
                        Cadastro Padrão
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../registerStandard/registerWlan.php">WLAN'S</a>
                        <a class="dropdown-item" href="../registerStandard/registerSetores.php">Setores</a>
                        <a class="dropdown-item" href="../registerStandard/registerModelMaquinas.php">Modelos de Máquinas</a>
                        <a class="dropdown-item" href="../registerStandard/registerTipoMaquinas.php">Tipo de Máquinas</a>
                        <a class="dropdown-item" href="../registerStandard/registerSO.php">Sistemas Operacionais</a>
                        <a class="dropdown-item" href="../registerStandard/registerModelMsoffice.php">Modelos MS Office</a>
                        <a class="dropdown-item" href="../registerStandard/registerModelRamal.php">Modelos Ramais</a>
                        <a class="dropdown-item" href="../registerStandard/registerModelPrinter.php">Modelos Impressoras</a>
                        <a class="dropdown-item" href="../registerStandard/registerProcessador.php">Processadores</a>
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