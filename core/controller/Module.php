<?php

class Module {
	public static $module;
	public static $view;
	public static $mensaje;

	public static function setModule($module){
		self::$module = $module;
	}

	public static function loadLayout(){
		include "core/modules/".Module::$module."/view/layout.php";
	}

	public static function isValid(){
		$valid = false;
		$folder = "core/modules/".Module::$module;
		
			if(is_dir($folder)){
				$valid=true;

			}else { self::$mensaje= "<b>Error no encontrado</b> Modulo <b>".Module::$module."</b>"; }
		
	
		return $valid;
	}

	public static function Error(){
		echo self::$mensaje;
		die();
	}

}
?>