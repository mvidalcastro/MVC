<?php

/**
* 
*/
class Controlador
{
	
	function __construct()
	{
		//echo "Controlador Principal!! <br/>";
		$this->vista = new Vista();		
	}

	public function CargaModelo($name)
	{
		//echo "Carga Modelo ".$name;
		//se busca el modelo asociado a controlador
		$path = 'modelos/'.$name.'_modelo.php';

		if(file_exists($path)) 
		{
			require $path;
			$nombreModelo = $name.'_Modelo';
			$this->modelo = new $nombreModelo();
		}

	}
}


