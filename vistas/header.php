<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL_Base; ?>publico/css/default.css">
	<script type="text/javascript" src= "<?php echo URL_Base; ?>publico/js/jquery.js" >  </script>
	<script type="text/javascript" src= "<?php echo URL_Base; ?>publico/js/custom.js" > </script>
	
</head>
<body>
	<?php /*Session::iniciar(); */?>
<div id="header">
	HEADER
	<br />
	<a href="<?php echo URL_Base; ?>index"> Inicio </a>
	<a href="<?php echo URL_Base; ?>ayuda"> Ayuda </a>
	<?php  
	if (Session::obtener('logueado') == true) // esta logueado
	{
		echo '<a href="'.URL_Base.'dashboard/logOut"> LogOut </a>';	
	}
	else // No esta logueado
	{
		echo '<a href="'.URL_Base.'login"> Login </a>';	
	}	

	?>
	
</div>

<div id="content">