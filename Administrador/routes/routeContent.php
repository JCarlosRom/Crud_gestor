<?php  
	
	

	require('../clases/Persona.class.php');

	$Content = new Persona();

	$action = $_POST['action'];
	
	if(isset($_POST['info']))
		$info = $_POST['info'];
	

	switch ($action) {
		
		case 'add':
			echo json_encode($Content->add($info));
			break;	
		case "read":
			echo json_encode($Content->read());	
			break; 
		case "get":
			echo json_encode($Content->get($info)); 
			break; 
		case "edit":
			echo json_encode($Content->edit($info));
			break; 
		case "searchead":
			echo json_encode($Content->searchead($info)); 
			break; 	
		case "search":
			echo json_encode($Content->search($info));
			break;
		case "getags":
			echo json_encode($Content->getags($info));
			break; 	
		case "Getinfodate":
			echo json_encode($Content->Getinfodate($info));
			break; 	
		case "Agregar_cat":
			echo json_encode($Content->Agregar_cat($info));
			break; 	
		
		
	}
	
?>