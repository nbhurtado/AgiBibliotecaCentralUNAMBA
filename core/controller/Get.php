<?php

class Get {
	function __get($valor){
		if(!$this->exist($valor)){
			print "<b>Error get</b> El parametro <b>$valor</b> que intentas llamar no existe!";
			die();
		}
		return $_GET[$valor];
	}

	function  exist($valor){
		$buscar = false;
		if(isset($_GET[$valor])){
			$buscar=true;
		}
		return $buscar;
	}
}
?>