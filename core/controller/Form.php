<?php

class Form {

	public static function exists($formnombre){
		$fullpath = self::getFullpath($formnombre);
		$buscar=false;
		if(file_exists($fullpath)){
			$buscar = true;
		}
		return $buscar;
	}

	public static function getFullpath($formnombre){
		return "core/modules/".Module::$module."/forms/".$formnombre.".php";
	}

}
?>