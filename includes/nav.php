<?php 
    
    $url = explode('/', $_SERVER['REQUEST_URI']);

    if (in_array('index.php', $url))
        echo '<nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">';
    else
        echo '<nav class="navbar navbar-dropdown bg-color navbar-fixed-top">';

?>
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <div class="container">

        <div class="mbr-table">
            <div class="mbr-table-cell">

                <div class="navbar-brand">
                    <a href="#top" class="navbar-logo"><img src="assets/images/anadic-logo-257x128.png" alt="Anadic" title="Logo-anadic"></a>
                </div>

            </div>
            <div class="mbr-table-cell">

                <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="hamburger-icon"></div>
            </button>

                <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                    <li class="nav-item">
                        <a class="nav-link link" href="index.php#inicio">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="index.php#nosotros">¿QUIENES SOMOS?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="index.php#socios">SOCIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="index.php#galeria">GALERIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="index.php#noticias">NOTICIAS</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link link" href="#">PROMOCIONES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="#">AFILIATE!</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link link" href="index.php#contacto">CONTACTO</a>
                    </li>
                </ul>
                <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="close-icon"></div>
            </button>

            </div>
        </div>

    </div>
</nav>




<!-- background: #282828;
    width: 100%;
    /* height: 30px !important; */
    text-align: right;
    color: white;
    border: transparent;
    box-shadow: -10px -10px -1px;
    box-shadow: 5px 6px 4px rgba(51, 43, 43, 0.25); -->