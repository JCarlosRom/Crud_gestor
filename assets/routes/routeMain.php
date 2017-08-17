<?php  

	require('../clases/Main.php');
	$Main= new Main();

	$action = $_POST['action'];
	
	
	if(isset($_POST['info']))
		$info = $_POST['info'];

	switch ($action) {
		case 'enviar':

			$nombre   = $info["nombre"];
			$correo   = $info["correo"];
			$telefono = $info["telefono"];
			$asunto   = "Solicitud de información";
			$mensaje  = $info["mensaje"];

			$msg = '<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="UTF-8">
						<title>Correo</title>

					<meta name="viewport" content="width=device-width, initial-scale=1">

					</head>
					<body style="font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;line-height: 1.5;">
						
						<div class="container">
							<div class="card" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); border: 1px solid rgba(0, 0, 0, 0.125);">
									<h3 class="card-header primary-color white-text" style="background-color: #282828 !important;font-weight: 300; padding: 0.75rem 1.25rem;margin: 0;border-bottom: 1px solid rgba(0, 0, 0, 0.125);color: #FFFFFF !important;">Contacto via <a style="color: #FFFFFF !important;">anadiccolima.com</a>
									</h3>
									<div class="card-block" style="padding: 1.25rem;" style="background-color: rgb(239, 239, 239);">
									<h4 class="card-title" style="margin-bottom: 0.75rem;">Datos de contacto: </h4>
									<p><strong>Nombre</strong>: ' . $nombre . ' </p>
									<p><strong>Email</strong>: ' . $correo . ' </p>
									<p><strong>Telefono</strong>: ' . $telefono . ' </p>
									<p class="card-text"><strong>Mensaje</strong>: </p> 
									<p>' . $mensaje . ' </p>
							    </div>
							</div>
						</div>

					</body>
					</html>';

			echo json_encode($Main->sendMailLocal($msg,$asunto));
			break;
	}
	
?>