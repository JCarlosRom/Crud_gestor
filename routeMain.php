<?php  
	
	session_start();

	require('../clases/Main.class.php');

	$Main = new Main();

	$action = $_POST['action'];
	
	if(isset($_POST['info']))
		$info = $_POST['info'];

	switch ($action) {
		case 'mail':
			$mailTo = "serolmos22@gmail.com";
			// $bcc = "thekamitorres@gmail.com";
			$subject = "Contacto via www.ranchomontegrande.com";

			$contactMsg = $info['msg'];
			$contactEmail = $info['email'];
			$contactName = $info['name'];


			$html = '
				<!DOCTYPE html>
				<html lang="en">
				<head>
					<meta charset="UTF-8">
					<title>Correo</title>

				<meta name="viewport" content="width=device-width, initial-scale=1">

				</head>
				<body style="font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;line-height: 1.5;">
					
					<div class="container">
						<div class="card" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); border: 1px solid rgba(0, 0, 0, 0.125);">
						    <h3 class="card-header primary-color white-text" style="background-color: #921c2f!important;font-weight: 300; padding: 0.75rem 1.25rem;margin: 0;border-bottom: 1px solid rgba(0, 0, 0, 0.125);color: #FFFFFF !important;">Contacto via <a style="color: #FFFFFF !important;">www.ranchomontegrande.com</a></h3>
						    <div class="card-block" style="padding: 1.25rem;">
						        <h4 class="card-title" style="margin-bottom: 0.75rem;">Datos de contacto: </h4>
						        <p><strong>Nombre</strong>: '.$contactName.' </p>
						        <p><strong>Email</strong>: '.$contactEmail.' </p>
						        <p class="card-text"><strong>Mensaje</strong>: </p> 
						        <p>'.$contactMsg.'</p>
						    </div>
						</div>
					</div>

				</body>
				</html>
			';

			echo json_encode($Main->sendMailLocal($mailTo, $html, $subject));
			break;
	}
	
?>