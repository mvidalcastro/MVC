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
		if($logueado == false){
			Session::terminar();
			header('location: '.URL_Base.'login');
			exit;
		}

	}

	function index() {
		$this->vista->render('dashboard/index');	
	}

	function logOut() {
			Session::terminar();
			header('location: '.URL_Base.'login');
			exit;
	}

}