<?php

/**
* 
*/
class Vista
{
	
	function __construct()
	{
		//echo "Constructor la vista <br/>";
	}

	public function render($name, $noInclude = false)
	{
		if ($noInclude == true)
		{
			require 'vistas/'.$name.'.php';	
		}
		else
		{
			require 'vistas/header.php';
			require 'vistas/'.$name.'.php';
			require 'vistas/footer.php';			
		}


	}
}