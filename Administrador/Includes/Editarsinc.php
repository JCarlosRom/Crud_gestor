<?php

include('clases/Persona.class.php');

	
$Content = new Persona();

	$id= $_GET["id"];

	$data=($Content->getedit($id));

	$contenido  = $data[0];
	$categorias = $data[1];

	$options = "";

	for ($i=0; $i < count($categorias); $i++) { 

		if ($contenido[0]['Categoria'] == $categorias[$i]['Id']) 
			$options .= '<option value="' .$categorias[$i]['Id']. '" selected>' .$categorias[$i]['Categorias']. '</option>';
		else
			$options .= '<option value="' .$categorias[$i]['Id']. '">' .$categorias[$i]['Categorias']. '</option>';
		
	}

	$header="<input type='hidden' class='form-control' value='{$contenido[0]["Id"]}' id='idedit' hidden ></input>
				<input type='text' class='form-control' value='{$contenido[0]["Cabecera"]}' id='headeredit'></input><br>";

	$image="<image id='profile-image' style='margin-left:auto; margin-right:auto' class='image' src=".$contenido[0]["Url"]." ></image >";


	$body = $contenido[0]["Texto"];

	$labels="<input type='text' class='form-control' value='{$contenido[0]["Etiquetas"]}' id='marksedit' data-role='tagsinput'></input>";


	$Url=$contenido[0]["Url"];






?>