<?php

/**
* 
*/
class Login_Modelo extends Modelo
{
	
	function __construct()
	{
		//echo "Contructor del modelo Login";
		//echo md5('123');
		parent::__construct();		
	}

	public function validar()
	{


		$sth = $this->db->prepare("select usu_id from usuario where usu_login = :login AND usu_password = MD5(:password)" );

		$sth->execute( array(
			':login'     =>  $_POST['login'],
			':password'  =>  $_POST['password']
			));

		$cuenta = $sth->rowCount();
		if($cuenta > 0){
			//Login Existoso!
			Session::iniciar();
			Session::agregar('logueado', true);
			header('location: '.URL_Base.'dashboard');
		}
		else{ //No se pudo loguear
			Session::terminar();
			header('location: '.URL_Base.'login');	
		}	
	}
}