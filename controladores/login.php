<?php

/**
* 
*/
class Login extends Controlador
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index() {
		$this->vista->render('login/index');	
	}

	function valida() 
	{
		$this->modelo->validar();
		//$this->modelo->hola();	
	}
}