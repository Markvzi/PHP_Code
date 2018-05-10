<?php
	class MvcController
	#LLAMADA A LA PLANTILLA
	#-------------------------------------------
	{
		public function plantilla()
		{
			#echo "views/template.php"; muestrame el archivo como cadena de texto.
			#Include : incluye todo el archivo
			include "views/template.php";
		}

		#INTERACCION DEL USUARIO
		#-------------------------------------------
		public function enlacesPaginasController()
		{
			if (isset($_GET["action"]))
			{
				$enlacesController = $_GET["action"];
			}
			
			else
			{
				$enlacesController = "index.php";
			}
			
			$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
			include $respuesta;

		}


	}
?>