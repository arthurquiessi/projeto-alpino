<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">
        <img src="../../assets/img/logo.png" width="100" height="40" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
        aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="main.php" style="font-size:16px;">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="font-size:16px;">
                    Cadastrar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./register/registerAll.php">Cadastro Geral</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./register/registerUser.php">Usuários</a>
                    <a class="dropdown-item" href="./register/registerMachine.php">Máquinas</a>
                    <a class="dropdown-item" href="./register/registerOffice.php">MS Office</a>
                    <a class="dropdown-item" href="./register/registerRamal.php">Ramal</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="font-size:16px;">
                    Consultar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./consult/consultAll.php">Consulta Geral</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./consult/filter/filter.php">Filtros</a>
                    <a class="dropdown-item" href="./consult/filter/filterDiretoria.php">Filtro Diretoria</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./register/registerPrinter.php" style="font-size:16px;">Impressoras<span
                        class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./checklist/index.php" style="font-size:16px;">Checklist<span
                        class="sr-only"></span></a>
            </li>
        </ul>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a href="#"><input type="text" class="form-control-plaintext text-black" data-toggle="modal"
                        data-target="#" value="Usuário logado"></a>
            </li>
        </ul>
    </div>
</nav>