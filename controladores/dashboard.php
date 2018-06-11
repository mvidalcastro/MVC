<?php

/**
* 
*/
class Dashboard extends Controlador
{
	
	function __construct()
	{
		parent::__construct();
		
		Session::iniciar();
		$logueado = Session::obtener('logueado');
		if($logueado==false){
			Session::terminar();
			header('location: login.php');
			exit;
		}

	}

	function index() {
		$this->vista->render('dashboard/index');	
	}


}