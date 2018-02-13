<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- Core CSS - Include with every page -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/estilosLogin.css" rel="stylesheet" />

    </head>

    <body class="body-Login-back">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                    <h1>Login</h1>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">                  
                        <div class="panel-heading">
                            <h3 class="panel-title">Por favor introduce los datos</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" name="formulario_login" id="formulario_login" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="DNI" name="dni" type="dni" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Recuerdame
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-10">
                                            <input class="btn btn-lg btn-success" type="submit" id="login" name="login" value="Entrar"><br>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Scripts - Include with every page -->
        <script src="js/jquery-2.2.0.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/additional-methods.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scriptLogin.js"></script>
    </body>

</html>
