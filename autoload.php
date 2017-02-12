<?php 


	define('ROOT',dirname(__FILE__));
	define('DS',DIRECTORY_SEPARATOR);
	


	spl_autoload_register(function ($clase){

		$clase = ROOT . DS . str_replace('\\',DS,$clase).'.php';


		if (!file_exists($clase)) { 
			throw new Exception("Error al cargar la clase: ".$clase, 1);
			
		}else {
			require_once($clase);
		}
	});



 ?>