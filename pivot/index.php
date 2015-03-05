<?php 

	error_reporting (E_ALL);
	session_start();
	//use d($some_var); to dump var to screen.
	require_once('kint/Kint.class.php');
	//d($_SERVER['REQUEST_URI']);
	//d($_SERVER['SCRIPT_NAME']);
	//d($_GET);
	$route = explode('/', $_SERVER['REQUEST_URI']);
	//d($route);

	
	require_once("controller/controller.php");
	$controller = new Controller();
	$controller->start($route);

?>
