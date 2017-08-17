<?php

include("Includes/Agregarinc.php"); 

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ANADIC-Agregar Noticia</title>

  <!-- Bootstrap core CSS -->

    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="tinymce/init-tinymce.js"></script>
    <link rel="stylesheet" href="css/Estilos.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap datetimepicker/css/bootstrap-datetimepicker.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="bootstrap-tags/src/bootstrap-tagsinput.css">
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="plugins/pnotify/pnotify.custom.min.css" rel="stylesheet">
    <link href="plugins/CustomAlerts/css/jquery-confirm.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link href="css/spinner.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap datetimepicker/css/bootstrap-datetimepicker.min.css" media="screen">


  <script src="js/jquery.min.js"></script>



</head>


<body class="nav-md">



  <div class="container body">


    <div class="main_container">

      <!-- Navigation bar left -->
      <?php include("navigation_left.php"); ?>
      <!-- /Navigation bar left -->

      <!-- Navigation bar top -->
      <?php include("navigation_top.php"); ?>
      <!-- /Navigation bar top -->

      <!-- page content -->
      <div class="right_col" role="main">


        <div class="">

        <div class="panel panel-info">

          <div class="panel-heading">
               <h4 align="center">Componentes de la noticia</h4>
          </div>
          
          <div class="panel-body">

            <div class="col-xs-4">
               <input type="text" id="header" class="form-control" placeholder="Encabezado..."></input>
            </div>

            <div class="col-xs-4">

              <select id="select_categoria" class="form-control">
              <option value=0"">Elija una categoria</option>
              <?php
                echo $options; 

              ?>
              </select>

            </div>
             <div class="col-xs-4">

               <form id="formtags">
              

              <input id="tags" value=""  class="form-control" data-role="tagsinput" placeholder="Etiquetas..."><br><br>



            </form>

             </div>
            
            
          </div>
        </div>
      
          </div>

          <div class="panel panel-success">
      <div class="panel-heading"><h4 align="center">Cuerpo e imagen</h4></div>
      <div class="panel-body">

      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
               

                 <form enctype="multipart/form-data" class="formulario" id="formimage">

                 
                  <p align="center"><label >Subir imagen</label></p>

                  <p align="center"><input name="archivo" type="file" id="imagen" ></input></p><br />

                  <p align="center"><img src="#" id="imageadd"  style="display:none"></p>

                   <div class="messages" id="messages"></div><br /><br />

              

                  <!-- start project list -->
                <form id="get-data-form" method="POST">

                  <textarea class="tinymce" id="textadd" value=""></textarea>

                </form><br>


                
                  <button type="button" id="Subirimage" class="btn btn-success" style="float:right">Agregar Contenido</button>

              


                  <!-- end project list -->

                
              </div>
            </div>
          </div>
        </div>
        


      </div>
    </div>

         
          

        <!-- footer content -->
     
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>

    



    <script src="js/bootstrap.min.js"></script>

    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>

    <!-- pace -->
    <script src="js/pace/pace.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap-tags/src/bootstrap-tagsinput.js"></script>
    <script type="text/javascript" src="EasyAutocomplete/jquery.easy-autocomplete.js"></script>
    <script type="text/javascript" src="bootstrap datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/pnotify/pnotify.custom.min.js"></script>
    <script src="js/main.js"></script>
    <script src="plugins/CustomAlerts/js/jquery-confirm.js"></script>
    <script src="js/jQueryTables.js"></script>
    <script src="js/spinner.js"></script>
    <script src="js/index.js"></script>

</body>

</html>