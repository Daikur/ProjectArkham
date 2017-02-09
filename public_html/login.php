<?php
include("loginserv.php");


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Armonic</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="vendor/materialize/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/materialize/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid card-container red darken-3">
            <div class="row ">
                <div>
                    <div class="col s12 m4 offset-m4">
                        <div class="card card-login red lighten-5">
                            <div class="card-content row white-text">
                                <div class="col m12">
                                <div class=" offset-m4 col m8">
                                    <div class="">
                                        <img class="center-align " src="assets/images/armonic_logo.png" alt="" width="150" height="100"/>
                                        <p class="title">Bienvenido a Armonic</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="card-action">
                                <form action="" method="post">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="user" name="user" type="text" class="validate ">
                                        <label for="username"><i class="tiny material-icons prefix">account_circle</i><span class="login-input">Usuario</span></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="pass" name="pass" password="password" type="text" class="validate">
                                        <label for="password"><i class="tiny material-icons prefix">lock</i><span class="login-input">Contraseña</span></label>
                                    </div>
                                </div>
                                <div class="center-align">
                                    <input class="btn btn-large red waves-effect waves-light"type="submit" value="Login" name="submit">
                                </div>
                               </form>
                                <span class="text-lighten-5 card-title center-align"><?php echo $error ?></span>
                            </div>
                            <?php
                               
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="vendor/jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="vendor/materialize/js/materialize.min.js" type="text/javascript"></script>
        <script src="vendor/materialize/js/init.js" type="text/javascript"></script>
        <script src="app/main.js"></script>
        <script src="app/gestionProductos.js" type="text/javascript"></script>
        <script src="app/clases/Carrito.js" type="text/javascript"></script>
        <script src="app/clases/Producto.js" type="text/javascript"></script>
        <script src="app/clases/Pedido.js" type="text/javascript"></script>
    </body>
</html>






