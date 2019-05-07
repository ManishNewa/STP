<?php

//load configuration and helper files
	
	// require_once(ROOT . DS . 'config' . DS . 'config.php');
	// require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');

//Autoload classes

	function __autoload($className){

		if(file_exists(ROOT . '/core' . '/' . $className . '.php')){
			require_once(ROOT . '/core' . '/' . $className . '.php');
		}elseif (ROOT . '/core' . '/' . $className . '.php') {
			require_once(ROOT . '/core' . '/' . $className . '.php');
		}elseif (ROOT . '/core' . '/' . $className . '.php') {
			require_once(ROOT . '/core' . '/' . $className . '.php');
		}

	}

	Router::route($url);

?>