<?php


include('clases/Persona.class.php');

	
$Content = new Persona();

	


	$data=($Content->getcat());

	$categorias = $data; 

	$options = "";

	for ($i=0; $i < count($categorias); $i++) { 

			$options .= '<option value="' .$categorias[$i]['Id']. '">' .$categorias[$i]['Categorias']. '</option>';
		
	}


?>