<?php  

	require_once('MySQL.class.php');

	Class Persona extends MySQL{

		public function read(){

		
			
		

				$consulta = "SELECT  A.Id, A.Cabecera, B.Categorias, CONCAT(SUBSTR(A.Texto,1,190),'...'),A.Url, A.Etiquetas, A.Fecha FROM contenido A INNER JOIN categorias B on A.Categoria=B.Id ";
			

			

			return $this->query_row($consulta); 
		}


		public function searchead($info){

			$consulta = "SELECT  A.Id, A.Cabecera, B.Categorias, CONCAT(SUBSTR(A.Texto,1,190),'...'),A.Url, A.Etiquetas, A.Fecha FROM contenido A INNER JOIN categorias B on A.Categoria=B.Id 
			             WHERE Cabecera LIKE '%{$info}%' 
			            ";


			return $this->query_row($consulta); 
		}

		public function search($info){

			if($info!=0){

				$consulta = "SELECT  A.Id, A.Cabecera, B.Categorias,  CONCAT(SUBSTR(A.Texto,1,190),'...'),A.Url ,A.Etiquetas,A.Fecha FROM contenido A INNER JOIN categorias B on A.Categoria=B.Id WHERE A.Categoria LIKE '%{$info}%'";

					return $this->query_row($consulta);

			}else{

				$consulta="SELECT  A.Id, A.Cabecera, B.Categorias, CONCAT(SUBSTR(A.Texto,1,190),'...'), A.Url,A.Etiquetas,A.Fecha FROM contenido A INNER JOIN categorias B on A.Categoria=B.Id ";

				return $this->query_row($consulta);


			}

			


			
		}


		public function add ($info){

			date_default_timezone_set ( "America/Mexico_City" );

			$date=date("d/m/Y");




			$Cabecera=$info["header"];
			$Categoria=$info["categoria"];
			$Text= $info["Texto"];
			$Url=$info["nameimage"];
			$Etiqueta=$info["Etiquetas"];

			

			

			

			$add= "INSERT INTO contenido (Cabecera,Categoria,Texto,Fecha,Url, Etiquetas) 
			VALUES ('$Cabecera','$Categoria','$Text','$date' ,'$Url','$Etiqueta')";


			return $this->query($add);
		
		}

		
		public function edit ($info){
			

			date_default_timezone_set ( "America/Mexico_City" );

		

			$id=$info["id"];

			$header=$info["header"];

			$Texto= $info["texto"];

			$Url=$info["imagen_nueva"];

			$Etiqueta=$info["Etiquetas"];

			$Cat=$info["Cat"];

			$Url_vieja=$info["imagen_actual"]; 

			


		

		
			 

			if ($Url=="js/images/"){

				

				$edit="UPDATE contenido SET Cabecera='$header',Texto='$Texto', Etiquetas='$Etiqueta', Categoria='$Cat' WHERE id='$id'";

				return $this->query($edit);

			}else{

				

				unlink("../".$Url_vieja);

			

				$edit="UPDATE contenido SET Cabecera='$header', Texto='$Texto', Etiquetas='$Etiqueta' ,Url='$Url' , Categoria='$Cat' WHERE id='$id'";

				return $this->query($edit);




			}



			

			
			
		}

		

	
		
		public function get(){

		

	

			$get= "SELECT Id,Cabecera, CONCAT(SUBSTR(Texto,1,190),'...') Texto, Url FROM contenido  ORDER BY  Fecha DESC LIMIT 4";

				$cat = "SELECT * FROM categorias";

			return array($this->query_assoc($get), $this->query_assoc($cat));
			
			}

			public function getedit($info){

		

			$get= "SELECT * FROM contenido  WHERE Id= '$info'";

				$cat = "SELECT * FROM categorias";

			return array($this->query_assoc($get), $this->query_assoc($cat));
			
			}

			
		public function getcat(){

			$consulta="SELECT * FROM categorias";

			return $this->query_assoc($consulta);
			

		}

		public function Agregar_cat($info){


			$consulta="INSERT INTO categorias (Categorias) VALUES ('$info')";

			return $this->query($consulta); 

		}

		public function getmainotice($info){


			$consulta="SELECT Id,  Cabecera, Texto, Url, Fecha  FROM contenido WHERE Id='$info'";

			return $this->query_assoc($consulta); 

		}

		public function Getnoticemostview($info){

			$idex=$info; 

			$Consulta="SELECT Id, Cabecera, Texto, Fecha, Url   from contenido  WHERE Id != $idex ORDER BY RAND() Limit 4 ";

			return $this->query_assoc($Consulta);



		}

		public function Getinfodate($info){

			$date1=$info["Date1"];
			$date2=$info["Date2"];

			$get="SELECT  A.Id, A.Cabecera, B.Categorias,  CONCAT(SUBSTR(A.Texto,1,190),'...'), A.Url, A.Etiquetas ,A.Fecha FROM contenido A INNER JOIN categorias B on A.Categoria=B.Id WHERE Fecha >= '$date1' AND Fecha <='$date2'";

			return $this->query_row($get);



			// $longitud= count($fechas);

			// $arraydate= array();

			 
 
			// for ($i=0; $i <$longitud ; $i++) { 

			// 	if($date1<=$fechas[$i][1] && $date2>=$fechas[$i][1]){

			// 		array_push($arraydate, $fechas[$i][1]);
			// 	}
			// 	# code...
			// }


			// $get="SELECT * FROM contenido WHERE "


		}			


		}






		
		

	
	
?>