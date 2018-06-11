<?php
//Mostrar errores y Wrning
error_reporting(E_ALL);
ini_set('display_errors', '1');

//Usado como autoloader
require 'libs/Bootstrap.php';
require 'libs/Controlador.php';
require 'libs/Modelo.php';
require 'libs/Vista.php';

//Librerias
require 'libs/Database.php';
require 'libs/Session.php';


require 'config/path.php';
require 'config/database.php';


$app = new Bootstrap();