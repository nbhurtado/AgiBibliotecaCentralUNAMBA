<?php
class Database {
	public static $db;
	public static $conexion;
	function Database(){
		$this->user="root";$this->pass="";$this->host="localhost";$this->ddbb="biblioteca_central";
	}

	function Conectar(){
		$conexion = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $conexion;
	}

	public static function getCon(){
		if(self::$conexion==null && self::$db==null){
			self::$db = new Database();
			self::$conexion = self::$db->Conectar();
		}
		return self::$conexion;
	}
	
}
?>
