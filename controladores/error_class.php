<?php 
/**
* 
*/
class Error_class extends Controlador
{
	
	function __construct()
	{
		parent::__construct();

	}
	function index(){
		$this->vista->msg ="Esta página no existe";	
		$this->vista->render('error/index');
	}


} 