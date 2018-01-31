<?php
class DatosUsuario {
	public static $tabla = "usuario";

	public function DatosUsuario(){
		$this->nombre = "";
		$this->apellidos = "";
		$this->usuario = "";
		$this->contrasenha = "";
		$this->esta_activo = "0";
		$this->fecha_creacion = "NOW()";
    }
    //CRUD para la tabla USUARIO 
	public function agregar(){
		$sql = "insert into ".self::$tabla." (nombre,apellidos,usuario,contrasenha,esta_activo,es_admin,fecha_creacion) ";
		$sql .= "value (\"$this->nombre\",\"$this->apellidos\",\"$this->usuario\",\"$this->contrasenha\",$this->esta_activo,$this->es_admin,$this->fecha_creacion)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tabla." where id=$id";
		Executor::doit($sql);
	}
	public function borrar(){
		$sql = "delete from ".self::$tabla." where id=$this->id";
		Executor::doit($sql);
	}

	public function editar(){
		$sql = "update ".self::$tabla." set nombre=\"$this->nombre\",apellidos=\"$this->apellidos\",usuario=\"$this->usuario\",contrasenha=\"$this->contrasenha\",esta_activo=$this->esta_activo,es_admin=$this->es_admin where id=$this->id";
		Executor::doit($sql);
	}

	public function editar_contrasenha(){
		$sql = "update ".self::$tabla." set contrasenha=\"$this->contrasenha\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tabla." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DatosUsuario());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tabla." order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosUsuario());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tabla." where nombre like '%$q%' or apellidos like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosUsuario());
	}


}

?>