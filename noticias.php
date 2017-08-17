<?php

    include("Administrador/Includes/NoticiaPrincipal.php"); 

    
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Anadic Noticias</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v3.10.5, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/anadic-logo-257x128.png" type="image/x-icon">
    <meta name="description" content="">
    <script src="assets/js/jquery.toaster.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
  
    
    <link rel="stylesheet" href="assets/css/spinner.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/plugins/CustomAlerts/css/jquery-confirm.css">
    <link rel="stylesheet" href="assets/css/noticias.css">


    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>

<body>
    <section id="ext_menu-0">

    <?php include('includes/nav.php'); ?> 

    </section>

    <div class="social-media-opts">
        <ul class="social-media-ul">
            <li class="social-media-li">
                <?php
                    echo $Facebook; 
                ?>

                    <img src="assets/images/redes/fb2.jpg" alt="" class="social-media-item">
                </a> 

            </li> 

            <li class="social-media-li">
               <?php
                echo $Twitter; 
               ?>
                <img src="assets/images/redes/tw.jpg" alt="" class="social-media-item">
                </a> 

            </li> 

            <li class="social-media-li">
                <?php
                    echo $Whatsapp
                ?>
                <img src="assets/images/redes/wh.png" alt="" class="social-media-item">
                </a> 

            </li> 

        </ul> 
    </div>

    <section class="engine">

        <a rel="external" href="http://www.tecnologiascositec.com"></a>

    </section>
    

    <section class="mbr-section" id="msg-box6-1" style=" padding-top: 120px; padding-bottom: 200px;">

        <div class="mbr-overlay" style="opacity: 0.5; background-color:#fff;">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-xs-12 header-noticia">
                    <h1><?php echo $header_main; ?></h1>
                    <hr>
                    <p>Por <b>ANADIC COLIMA</b>  <?php echo $Fecha_main;  ?></p>
                </div>
                
                <div class="col-md-8 col-xs-12" style="margin-bottom: 50px">
                    

                    <div class="row">
                        <?php
                            echo $Image_main; 
                        ?>

                    </div>

                    <div class="row body-noticia">
                       
                        <?php 

                            echo $Texto_main; 
                         ?>



                    
                    </div>
                </div>

                <div class="col-md-3 col-md-offset-1 col-xs-12">

                    <div class="row noticia-min">
                        <h5>Lo mas visto</h5>
                        <hr>
                    </div>

                    
                        <?php 
                        
                                 
                             echo $Noticiasviews;  
                        
                           

                         ?>
                
                   
                    
                </div>

            


            </div>
        </div>

    </section>

    
   

   

   
    <section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">

        <div class="container">
            <div class="row">
                <div class="mbr-footer-content col-xs-12 col-md-3">
                    <p>
                        <strong>Dirección</strong>
                        <br> Av. Constitución 1599, Bugambilias, 28017 Colima, Col., México
                        <br><br><br>
                        <strong>Contacto</strong><br> Email: asistente.colima@edcom.mx
                        <br> Telefono: 6906468<br>
                    </p>
                </div>
                <div class="mbr-footer-content col-xs-12 col-md-3">
                    <!-- <strong>Links</strong>
                    <ul>
                        <li><a class="text-white lnk-footer" href="#">Link 1</a></li>
                        <li><a class="text-white lnk-footer" href="#">Link 2</a></li>
                        <li><a class="text-white lnk-footer" href="#">Link 3</a></li>
                    </ul> -->
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJl_YtWbhaJYQRj1-2KX2-49M" allowfullscreen=""></iframe></div>
                </div>
            </div>
        </div>
    </section>

    <!-- <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-c" style="background-color: rgb(0, 0, 0); padding: 15px 0px 10px 0;"> -->
    <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="" style="background-color: rgb(0, 0, 0); padding: 15px 0px 10px 0;">

        <div class="container">
            <p class="text-xs-center">Todos los derechos reservados Anadic Colima - Diseñado por <a href="http://www.tecnologiascositec.com/" target="_blank">COSITEC</a></p>
        </div>
    </footer>


    <!-- <script src="assets/js/jquery.min.js"></script> -->

    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/plugins/CustomAlerts/js/jquery-confirm.js"></script>
    <script src="assets/js/spinner.js"></script>
    <script src="assets/js/index.js"></script>

    
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smooth-scroll/SmoothScroll.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="assets/jarallax/jarallax.js"></script>
    <script src="assets/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/mobirise-gallery/player.min.js"></script>
    <script src="assets/mobirise-gallery/script.js"></script>
    <!-- <script src="assets/formoid/formoid.min.js"></script> -->


    <input name="animation" type="hidden">
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>


    
   
   
    
</body>
</html>