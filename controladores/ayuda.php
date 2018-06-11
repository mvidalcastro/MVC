<?php 
/**
* 
*/
class Ayuda extends Controlador
{
	
	function __construct()
	{
		parent::__construct();
		//echo 'Estoy en el controlador Ayuda <br/> ';
		//$this->vista = new Vista();
	}

	function index() {
		$this->vista->render('ayuda/index');	
	}

	public function otra($param1 = false)
	{
		echo " Estoy en la Funcion Otra <br/>";
	//	echo " Parametro =".$param1. "<br/>";
	}

} 