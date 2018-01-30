<?php

class Executor {

	public static function doit($sql){
		$conexion = Database::getCon();
		return array($con->query($sql),$conexion->insert_id);
	}
}
?>