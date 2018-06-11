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
		//echo MD5('desa');
	}

	function index()
	{
		$this->vista->render('index/index');	
	}
} 