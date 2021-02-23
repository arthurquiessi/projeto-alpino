<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet Alpino</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="./assets/css/"> -->
</head>

<body class="bg-light">
    <nav class="nav justify-content-end">
        <ul class="nav">
            <li class="nav-item">
                <!-- <a class="nav-link disabled" href="#">Desativado</a> -->
                <div class="align-self-center mr-4">
                    <a href="./public/pags/admin/login.php"
                        class="btn btn-outline-primary my-4 my-sm-4">Administrador</a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="py-3 text-center">
                    <a href="#"><img class="d-block mx-auto mb-4" src="./public/assets/img/logo.png" alt="" width="250"
                            height="90"></a>
                    <h2 class="display-3 m-2">Intranet de Serviços</h2>
                    <p class="lead"></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-5 text-center">
                <div class="card border-primary" style="max-width: 700px;">
                    <div class="card-body">
                        <h5 class="card-title">Tecnologia da Informação</h5>
                        <p class="card-text text-primary">Controle e gerenciamento da equipe de T.I Alpino</p>
                        <a href="login.php" class="btn btn-primary">Entrar</a>
                        <a href="./public/pags/ti/consult/consultSimple.php"
                            class="btn btn-outline-warning">Consultar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap/Jquery/Popper.js -->
    <script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="./node_modules/popper.js/dist/popper.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!-- <script src="./assets/js/"></script> -->
</body>

</html>