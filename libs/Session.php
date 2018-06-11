<?php

/**
* 
*/
class Session 
{

	public static function iniciar()
	{
		session_start();	
	}

	public static function agregar($clave, $valor)
	{
		$_SESSION[$clave]  = $valor;
	}

	public static function obtener($clave)
	{
		return $_SESSION[$clave];
	}

	public static function terminar()
	{
		//unset($_SESSION);
		session_destroy();	
	}

	/*
	function __construct(argument)
	{
		# code...
	}
	*/
}