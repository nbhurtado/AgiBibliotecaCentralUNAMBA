<?php

class Action {
	public static function load($action){
		
		if(!isset($_GET['action'])){
			include "core/modules/".Module::$module."/action/".$action."/a_myn.php";
		}else{

			if(Action::isValid()){
				include "core/modules/".Module::$module."/action/".$_GET['action']."/a_myn.php";				
			}else{
				Action::Error("<b>404 NOT FOUND</b> Action <b>".$_GET['action']."</b> folder  !!");
			}
		}
	}

	public static function isValid(){
		$valid=false;
		if(file_exists($file = "core/modules/".Module::$module."/action/".$_GET['action']."/a_myn.php")){
			$valid = true;
		}
		return $valid;
	}

	public static function Error($message){
		print $message;
	}

	public function execute($action,$params){
		$fullpath =  "core/modules/".Module::$module."/action/".$action."/a_myn.php";
		if(file_exists($fullpath)){
			include $fullpath;
		}else{
			assert("Error not found");
		}
	}

}

?>