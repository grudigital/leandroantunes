<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Leandro Antunes - Painel de gerenciamento</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Agencia Grudigital" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App Icons -->
    <link rel="icon" href="assets/images/favicon2.png">

    <!-- Basic Css files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>


<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-0">
                <a href="index.php" class="logo logo-admin"><img src="assets/images/logo1.png" width="200" alt="logo"></a>
            </h3>

            <div class="p-3">
                <h4 style="color: #2a2a2a" class="font-18 m-b-5 text-center">Acesso ao sistema</h4>
                <p class="text-muted text-center">Insira os dados abaixo para entrar:</p>

                <form method="post" action="functions/valida.php" class="form-horizontal m-t-30">

                    <div class="form-group">
                        <label style="color: #2a2a2a" for="username">E-mail</label>
                        <input type="text" class="form-control" id="username" name="email" placeholder="Seu e-mail">
                    </div>

                    <div class="form-group">
                        <label style="color: #2a2a2a" for="userpassword">Senha</label>
                        <input type="password" class="form-control" id="userpassword" name="senha" placeholder="Sua senha">
                    </div>

                    <div class="form-group row m-t-20">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-dark w-md waves-effect waves-light" type="submit">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center">
        <p class="text-white">© 2020 Leandro Antunes. Desenvolvido com <i class="mdi mdi-heart text-danger"></i> por Wetrends</p>
    </div>

</div>


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>
</html>