<?php 
/**
* 
*/
class Bootstrap 
{
	
	function __construct()
	{
		$url = 	isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/'); //Elimina la barra separadora al final de la URL 
		$url = explode('/', $url) ;
		//print_r($url);
		if (empty($url[0])) // en caso que no se envie un controlador desde la URL 
		{
			require 'controladores/index.php';
			$controlador = new Index();
			$controlador->index();
			return false;
		}



		/*
		$url[0] = Controlador (Clase)
		$url[1] = Metodo (Funcion)
		$url[2] = Paramtro 
		*/

		//Se carga el include correspondiente a al controlador 
		$file = 'controladores/' . $url[0] . '.php';
		if (file_exists($file)){
		  require $file;
		}
		else{ //No existe el controlador
			//echo file_exists('controladores/error.php');

			require 'controladores/error_class.php';
			$controlador = new Error_class();
			return false;
			//throw new Excepction('El archivo '.$file.' no existe');	
		}


		//Crea el controlador
		$controlador = new $url[0];
		//Crea el Modelo
		$controlador->CargaModelo($url[0]);

		// Si hay que enviar algun parametro
		if (isset($url[2])) {
			 if (method_exists($controlador, $url[1])) //verifica que me metodo exista antes de enviar parametros
			 {
			 	$controlador->{$url[1]}($url[2]); 
			 }
			 else // error porque el metodo no existe en la clase del controlador
			 {
 				echo "Método ".$url[1]." No existe en la clase ".$url[0];
			 }	
		 	
		 }

		else{
			//Si hay que crear la Funcion
			 if (isset($url[1])) {
			 	if (method_exists($controlador, $url[1])) //verifica que me metodo exista antes de enviar parametros
			 	{
			 		$controlador->{$url[1]}(); // Funcion del Controlador
			 	}
			 	else // error porque el metodo no existe en la clase del controlador
			 	{
 					echo "Método ".$url[1]." No existe en la clase ".$url[0];
				}
			 	
			 }
			 else // si se ha enviado solo en controlador ($url[0]) Funcion por defecto
			 {
			 	$controlador->Index();	
			 }
	
	}



  } 
}