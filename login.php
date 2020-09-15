<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Skip The Laundry - System access </title>
        <meta content="Agencia Grudigital" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="icon" href="assets/images/favicon.png">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="fixed-left">
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center m-0">
                        <a href="index.php" class="logo logo-admin"><img src="assets/images/logo.png" height="80" alt="logo"></a>
                    </h3>
                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">System access</h4>
                        <p class="text-muted text-center">Enter access data:</p>
                        <form method="post" action="functions/valida.php" class="form-horizontal m-t-30">
                            <div class="form-group">
                                <label for="username">Mail</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Seu e-mail">
                            </div>
                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha">
                            </div>
                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="m-t-40 text-center">
                <p class="text-white">© 2020 SkipTheLaundry. Developed with <i class="mdi mdi-heart text-danger"></i> by Wetrends</p>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>