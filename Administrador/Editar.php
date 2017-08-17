<?php
	
	require('Includes/Editarsinc.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SIADOC - Clientes</title>

  <!-- Bootstrap core CSS -->

	<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="tinymce/init-tinymce.js"></script>

	<link rel="stylesheet" href="css/Estilos.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
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
            <h4 align="center">Componentes de la noticia</h3>
            
          </div>
          
          <div class="panel-body">

          <input id='imagen_actual' value=<?php echo $Url; ?> hidden ></input>


            <div class="col-xs-6">
              <?php
                echo $header; 
              ?>

            

            </div>

            <div class="col-xs-3">

              <select id="Editcat" class="form-control">
              <option value=0"">Elija una categoria</option>
              <?php
                echo $options; 

              ?>
              </select>

            </div>
             <div class="col-xs-3">

               <?php

                echo $labels; 

               ?>

             </div>
            
            
          </div>
              
              </div> 
           
            
          <div class="panel panel-success">
      <div class="panel-heading">
         <h4 align="center">Cuerpo e imagen</h3>
      </div>
      <div class="panel-body">
        
    <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
               
                <div id="tableContainer" class="x_content table-responsive">

                  <!-- start project list -->
                 

                <textarea class="tinymce" id="texteditar" >
                <?php 

                 echo $body; 

                ?>

                </textarea>

                    <form enctype="multipart/form-data" class="formedit" id="formimage" hidden >
                      
                       <input name="archivo" id="imagenedit"  type="file"  ></input>

                    </form><br>

                    <div class="containerimage">
                      
                       <div class="col-md-12"   ><?php echo $image; ?>
                      
                      <div class="middle" style="position: absolute; ">
                        <span class="text"  >Cambiar Imagen<br> 
                        Minimo: 400x250 Maximo: 900x600 </span>
                      </div>                  
    
                    </div >

                  </div>             
              </div>
          </div>
    </div>

         

          
                 <br>
                <div class="messages" id="messages"></div>

        
               
					 <button class="btn btn-primary" id="Guardar_cambios" style="float:right">Guardar Cambios</button>
                </div>
              </div>
            </div>
          </div>
      

        <!-- footer content -->
        <?php include("footer.html"); ?>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>






  <!-- MODAL CLIENTES -->
  

	<script src="js/bootstrap.min.js"></script>

	<!-- bootstrap progress js -->
	<script src="js/progressbar/bootstrap-progressbar.min.js"></script>
	<script src="js/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- icheck -->
	<script src="js/icheck/icheck.min.js"></script>


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
