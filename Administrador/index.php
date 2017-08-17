<?php
    include("clases/Persona.class.php");

    $Content = new Persona();


    $categorias=($Content->getcat());

    $options=""; 

    for ($i=0; $i < count($categorias); $i++) { 

    
            $options .= '<option value="' .$categorias[$i]['Id']. '">' .$categorias[$i]['Categorias']. '</option>';
        
    }


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
  <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap datetimepicker/css/bootstrap-datetimepicker.min.css" media="screen">


  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="plugins/pnotify/pnotify.custom.min.css" rel="stylesheet">

  <link href="plugins/CustomAlerts/css/jquery-confirm.css" rel="stylesheet">


  <!-- Custom styling plus plugins -->
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
          <div class="page-title">
            <div class="form-group col-md-12 col-sm-12 col-xs-12 header_tablas">
            	
              

              <div class="col-md-5 col-sm-6 col-xs-6" >

                 <div class="input-group input-daterange">

           <div class="input-group-addon">De</div>

            <?php
               echo  "<input type='text' id='Inputdate1' class='form-control' >" 
            ?>
    
             
              <div class="input-group-addon">a</div>
   
            <?php
            
              echo  "<input type='text' id='Inputdate2' class='form-control' >" 

            ?>  

             <div class="input-group-btn">
               
               <a  class="btn btn-info btn-md" id="Dates">
                <i class="glyphicon glyphicon-search"></i>  
              </a>

              <a class="btn btn-danger btn-md" id="Datesdelete" type="button">
                <i class="glyphicon glyphicon-remove"></i>  
              </a>

             </div>
            
          </div> 


              </div>
              <div class="col-md-3 col-sm-4 col-xs-4">
                <div class="input-group">
                  
                     <select id="select_categoriaload" class="form-control">
                    <option value="0">Busqueda por categoria</option>
                    <?php
                      echo $options; 
                    ?>

                    </select>
                    <div class="input-group-btn">
               
                     <a  class="btn btn-success btn-md" id="Agregar_cat">
                      <i class="glyphicon glyphicon-plus"></i>  
                    </a>
                  </div>

                </div>
                   
                      

              </div>

                <div class="modal fade" id="Modalcat" role="dialog">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Agregar Categoria Nueva</h4>
                    </div>
                    <div class="modal-body">
                      <label >Categoria Nueva</label>
                      <input type="text" class="form-control" id="cat_nueva"></input>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" id="Agregar_Categoria">Agregar</button>
                      <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-2 col-sm-4 col-xs-4">
                
                <input type="text" id="txt_busqueda" class="form-control" placeholder="Busqueda..."></input>
              
              </div> 
               <div class="col-md-2 col-sm-4 col-xs-4">
              <button class="btn btn-primary" id="add_content" >Agregar Noticia</button>
              </div>

            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Noticias</h2>

                  <ul class="nav navbar-right panel_toolbox">
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div id="tableContainer" class="x_content table-responsive">

                  <!-- start project list -->
        					<table class="table table-striped projects">
        						<thead id="thead2">
                      
        						</thead>
        						<tbody id="tbody2">

                     
        						</tbody>
        					</table>
                  
                  <!-- end project list -->

                </div>
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

  <script src="js/custom.js"></script>

  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script type="text/javascript" src="EasyAutocomplete/jquery.easy-autocomplete.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <script src="plugins/pnotify/pnotify.custom.min.js"></script>
  <script src="js/main.js"></script>
  <script src="plugins/CustomAlerts/js/jquery-confirm.js"></script>
  <script src="js/jQueryTables.js"></script>
  <script src="js/spinner.js"></script>
  <script src="js/index.js"></script>
  <link rel="stylesheet" href="css/tags.css">





</body>

</html>
