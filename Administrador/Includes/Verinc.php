<?php

	require('Administrador/clases/Persona.class.php');

	$Content = new Persona();


	
	$data=($Content->get());

	$contenido=$data[0];


	


	date_default_timezone_set ( "America/Mexico_City");

	$Noticia = "";

	for ($i=0; $i <count($contenido) ; $i++) { 

		$Body=strip_tags($contenido[$i]["Texto"]);


		$Noticia .= "<div class='mbr-cards-col col-xs-12 col-lg-3' style='padding-top: 80px; padding-bottom: 80px;'>
                <div class='container'>
                    <div class='card cart-block'>
                        <div class='card-img'><img src='Administrador/{$contenido[$i]["Url"]}' class='card-img-top' alt='titulo-de-noticia' title='anadic-noticia1'></div>
                        <div class='card-block'>
                            <h4 class='card-title'>".$contenido[$i]["Cabecera"]."</h4>
                            <p class='card-text'>".$Body."<br></p>
                            <div class='card-btn'><a href='noticias.php?id={$contenido[$i]["Id"]}' class='btn btn-primary' >Leer mas</a></div>
                        </div>
                    </div>
                </div>
            </div>";


         
	}





	


?>
