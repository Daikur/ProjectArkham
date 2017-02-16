
<nav class="white navbar-main header-background" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="./index.php" class="brand-logo">
            <img style="margin-top:5px" class="header-logo" src="assets/images/armonic_white_logo.png" height="50" width="75" alt="logo" />
        </a>

        <ul class="right hide-on-med-and-down">
            <li style="color:white"class=" my-account-item"><span  class=" user-text">Bienvenido 

                    <?php
                    
                        if (empty($_SESSION['username'])) {
                            echo '';
                        } else {
                            echo $_SESSION['username'];
                        }
                        
                            ?></span><a class="waves-effect waves-light material-icons" href="login.php"><i class="material-icons white-text">account_circle</i></a></li>
            <li class=' my-logout-item '><a class=" waves-effect waves-light material-icons" href="./logout.php">input</a></li>
            <li class=' my-cart-item'><a class="waves-effect waves-light material-icons" href="#modal-carrito">shopping_basket</a></li>

        </ul>

        <ul id="categorias" class="right hide-on-med-and-down">

        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li class="lighten-2"><a href="#">Mi cuenta</a></li>
            <li class='lighten-2'><a href='#'>Carrito</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="clearfix" style=""></div>
