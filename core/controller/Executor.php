<?php

class Executor {

	public static function doit($sql){
		$conexion = Database::getConectar();
		return array($conexion->query($sql),$conexion->insert_id);
	}
}
?>