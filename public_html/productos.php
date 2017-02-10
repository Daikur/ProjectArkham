<?php
include("loginserv.php");


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Armonic</title>
        <!-- CSS  -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="vendor/materialize/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/materialize/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
                <?php include("header.php")?>

        <div class="row">
            <div class="col s7">
                <p class='grey-text'>Ordenar por:</p>
                <form action="#">

                    <p class='col s3'>
                        <input name="group1" type="radio" id="test1" />
                        <label for="test1">Nombre</label>
                    </p>
                    <p class='col s3'>
                        <input name="group1" type="radio" id="test2" />
                        <label for="test2">Descripcion</label>
                    </p>
                    <p class='col s3'>
                        <input  name="group1" type="radio" id="test3"  />
                        <label for="test3">Precio</label>
                    </p>

                </form>


            </div>     
            <div class="col s5 ">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">search</i>
                        <input type="text" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">Buscar</label>
                    </div>
                </div>
            </div>
        </div>

        <div  class='col s12'>
            <div id="productos" class='row'>



            </div>        
        </div>
        <div>
            <div id="modal-compra" class="modal modal-fixed-footer">

            </div>


            <div id="modal-carrito" class="modal bottom-sheet modal-fixed-footer">
                <div class="modal-content">
                    <h4>Carrito</h4>
                    <div id='carrito'>
                                
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" onclick="carrito.realizarPago()">Realizar Pago</a>
                </div> 
            </div>
        </div>
     
        <footer class="page-footer footer teal darken-3" >
            <div class="container ">
                <div class="row">
                    <div class="col l6 s12 ">
                        <h5 class="black-text">Contacta con nosotros</h5>
                        <p class="black-text text-lighten-4">Somos un grupo de DAW del CIPFP Mislata y estamos realizando Armonic como propuesta para nuestro proyecto</p>


                    </div>
                    <div class="col l3 s12 footer-separator">
                        <h5 class="black-text ">Redes sociales</h5>
                        <ul>
                            <li><a class="black-text" href="#!">Twitter</a></li>
                            <li><a class="black-text" href="#!">Facebook</a></li>
                            <li><a class="black-text" href="#!">Google plus</a></li>
                        </ul>
                    </div>

                    <div class="col l3 s12 ">
                        <h5 class="black-text">Suscribete a nuestro boletin</h5> 
                        <input type='text' placeholder="email para suscribirse"/>
                        <button class='btn blue-grey' type="submit">Enviar</button>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container black-text">
                    Made by <a class="black-text text-lighten-1" href="http://materializecss.com">Materialize</a>
                </div>
            </div>
        </footer>


        <!--  Scripts-->

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
