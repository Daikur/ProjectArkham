<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Armonic</title>
        <!-- CSS  -->
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
                            <div class="card-content card-header white-text">
                                <div class=" card-header">
                                    <div class="">
                                        <img class="center-align " src="assets/images/armonic_logo.png" alt="" width="150" height="100"/>
                                        <p>Bienvenido a Armonic</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="input-field col s12">

                                        <input id="icon_prefix" type="text" class="validate ">
                                        <label for="icon_prefix"><i class="tiny material-icons prefix">account_circle</i><span class="input-login">Usuario</span></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">

                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix"><i class="tiny material-icons prefix">lock</i><span class="input-login"> Contraseña</span></label>
                                    </div>
                                </div>

                                <div class="center-align">
                                    <a class="waves-effect waves-light btn red darken-3 center-align">Login</a>
                                </div>

                            </div>
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