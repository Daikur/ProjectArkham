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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="vendor/materialize/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/materialize/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include("header.php")?>
<!--       
        <div class="slider">
            <ul id="slider" class="slides">

            </ul>
        </div>

        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center teal-text darken-4"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Rapidez en la gestion</h5>

                            <p class="light">De forma sencilla y agil conseguiras contratar tus servicios sin perder un segundo</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center teal-text darken-4 "><i class="material-icons">group</i></h2>
                            <h5 class="center">Multitud de opciones</h5>

                            <p class="light">Disfruta de nuestro amplio catalogo de bandas, charangas, orquestas...</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center teal-text darken-4"><i class="material-icons">settings</i></h2>
                            <h5 class="center">Gestion personalizada</h5>

                            <p class="light">¿Quieres un estilo concreto de musica? De forma intuitiva podrás elegir la mejor opción</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="header col s12 white-text text-accent-1">Disfruta de una experiencia musical, a tu manera</h5>
                    </div>
                </div>
            </div>
            <div class="parallax">
                <img src="assets/images/image_headsets.jpg" /></div>
        </div>

        <div class="container">
            <div class="section">

                <div class="row">
                    <div class="col s12 center darken-2">
                        <h3><i class="mdi-content-send black-text"></i></h3>
                        <h4 class="red-text">Fallas</h4>
                        <p class="left-align">Si tu comisión esta interesada en nuestros servicios estas de suerte, nuestras ofertas y la rapida gestión de nuestros servicios te garantizaran las mejores experiencias musicales. Si aparte necesitas charangas para animar los actos falleros o los mejores Djs para fiestas esta es tu plataforma</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="header col s12 black-text light">Valora tu mismo los servicios recibidos para ayudar a escoger a los demas usuarios</h5>
                    </div>
                </div>
            </div>
            <div class="parallax">
                <img src="assets/images/drum.jpg" /></div>
        </div>

        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 center">
                        <h3><i class="mdi-content-send black-text"></i></h3>
                        <h4>Armonic</h4>
                        <p class="left-align">
                            El objetivo principal es agilizar los tramites de contratación de estos servicios para que aparte de ahorrar tiempo tengas la seguridad de que contratas lo que quieres.
                            Nosotros ofrecemos una gestión personalizada en el proceso de elección de tu grupo, banda, charanga.. para que se adapte a lo que buscas.

                        </p></div>
                </div>
            </div>
        </div>
        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="header col s12 white-text light">Facilidad de pago con paypal, tarjeta de credito o cuenta bancaria</h5>
                    </div>
                </div>
            </div>
            <div class="parallax">
                <img src="assets/images/music_black_guitar_wallpaper.jpg" height="1080" width="1920"/></div>
        </div>

        <footer class="page-footer teal darken-3" >
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
                        <button class='btn lighten-3' type="submit">Enviar</button>
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
    </body>
</html>

