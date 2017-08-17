<?php

	

	
	require('clases/Persona.class.php');

	$Content= new Persona(); 

	$id=$_GET["id"]; 

	$data=($Content->getmainotice($id)); 

	$header_main=$data[0]["Cabecera"];

	$Texto_main= $data[0]["Texto"];

	$Image_main= "<img src='{$data[0]["Url"]}' class='img-main' alt=''>";



	$Fecha_main=$data[0]["Fecha"];

	$Content= new Persona();

	$data2=($Content->Getnoticemostview($id));

	$Noticiasviews = "";


	for ($i=0; $i <count($data2) ; $i++) { 

		$Noticiasviews.="<div class='row noticia-min'>
                        <a href='../noticias.php?id={$data2[$i]["Id"]}' class='lnk-noticia-min'>
                            <img src='{$data2[$i]["Url"]}' alt='img1' class='img-sec'>
                            <p><strong>".$data2[$i]["Cabecera"]."</strong></p>
                        </a>
					</div>";

		
	
		
	}

	//**SOCIAL MEDIA**//

	$Facebook="<a href='https:/www.facebook.com/sharer.php?u=http://localhost/anadic/noticias.php?id={$data[0]["Id"]}' target='_blank' rel='noopener' aria-label='Compartir en Facebook'>";  

	$Twitter="<a href='https:/twitter.com/intent/tweet?text=http://localhost/anadic/noticias.php?id={$data[0]["Id"]}' target='_blank' rel='noopener' aria-label='Compartir en Twitter'> "; 

	$Whatsapp="<a href='https:/api.whatsapp.com/send?text=http://localhost/anadic/noticias.php?id={$data[0]["Id"]}' target='_blank' rel='noopener' aria-label='Compartir en Whats app'> "










?>