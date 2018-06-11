<?php 
/**
* 
*/
class Index extends Controlador
{
	
	function __construct()
	{
		parent::__construct();
		//echo 'Estoy en el controlador Index';
	}

	function index()
	{
		$this->vista->render('index/index');	
	}
} 