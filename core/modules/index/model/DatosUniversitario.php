<?php
class DatosUniversitario {
	public static $tabla = "universitario";
	public function DatosUniversitario(){
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}
	//CRUD para la tabla UNIVERSITARIO
	public function agregar(){
		$sql = "insert into ".self::$tabla." (nombre,apellidos,direccion,telefono,email,fecha_creacion) ";
		$sql .= "value (\"$this->nombre\",\"$this->apellidos\",\"$this->direccion\",\"$this->telefono\",\"$this->email\",$this->fecha_creacion)";
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

	public function editar_activo(){
		$sql = "update ".self::$tabla." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function editar(){
		$sql = "update ".self::$tabla." set nombre=\"$this->nombre\",apellidos=\"$this->apellidos\",direccion=\"$this->direccion\",telefono=\"$this->telefono\",email=\"$this->email\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tabla." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DatosUniversitario());
	}


	public static function getAll(){
		$sql = "select *  from ".self::$tabla." order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosUniversitario());
	}

	public static function getAllActive(){
		$sql = "select * from universitario where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosUniversitario());
	}

	public static function getAllUnActive(){
		$sql = "select * from universitario where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosUniversitario());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tabla." where nombre like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosUniversitario());
	}


}

?>