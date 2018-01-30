<?php

class Session{
	public static function setUID($uid){
		$_SESSION['id_usuario'] = $uid;
	}

	public static function unsetUID(){
		if(isset($_SESSION['id_usuario']))
			unset($_SESSION['id_usuario']);
	}

	public static function issetUID(){
		if(isset($_SESSION['id_usuario']))
			return true;
		else return false;
	}

	public static function getUID(){
		if(isset($_SESSION['id_usuario']))
			return $_SESSION['id_usuario'];
		else return false;
	}

}

?>