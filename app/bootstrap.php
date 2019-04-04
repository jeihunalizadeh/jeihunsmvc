<?php 
//require config file
require_once 'config/config.php';

//autoload for libraries
spl_autoload_register(function($className){
	require_once 'libraries/' . $className . '.php';
});







 ?>