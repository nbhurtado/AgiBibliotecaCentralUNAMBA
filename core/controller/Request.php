<?php

class Request {
	function __get($value){
		if(!$this->exist($value)){
			print "<b>Error de peticion</b> El parametro <b>$value</b> que intentas llamar no existe.";
			die();
		}
		return $_REQUEST[$value];
	}

	function  exist($value){
		$found = false;
		if(isset($_REQUEST[$value])){
			$found=true;
		}
		return $found;
	}
}
?>