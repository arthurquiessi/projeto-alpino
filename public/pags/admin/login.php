<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- BootStrap CSS-->
    <link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style-login.css">
</head>

<body class="text-center">
    <form class="form-signin" method="POST" action="main.php">
        <img class="mb-4" src="../../assets/img/logo.png" alt="Alpino" width="180" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login Administrador</h1>

        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="SENHA" class="form-control" placeholder="Senha">
        <button class="btn btn-lg btn-primary btn-block" id="login" name="login" type="submit">Acessar</button>
    </form>

    <!-- Bootstrap/Jquery/Popper.js -->
    <script src="../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../../../node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!-- <script src="./assets/js/"></script> -->
</body>

</html>