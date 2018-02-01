<?php
class Database {
	public static $db;
	public static $conexion;
	function Database(){
		$this->user="root";$this->pass="";$this->host="localhost";$this->ddbb="biblioteca_central";
	}

	function conectar(){
		$conexion = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $conexion;
	}

	public static function getConectar(){
		if(self::$conexion==null && self::$db==null){
			self::$db = new Database();
			self::$conexion = self::$db->conectar();
		}
		return self::$conexion;
	}
	
}
?>
