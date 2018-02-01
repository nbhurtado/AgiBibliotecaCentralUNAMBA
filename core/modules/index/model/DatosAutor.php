<?php 
class DatosAutor {
	public static $tabla = "autor";

	public function DatosAutor(){
		$this->nombre = "";
		$this->apellidos = "";
		$this->created_at = "NOW()";
	}
    //CRUD para la tabla AUTOR
	public function agregar(){
		$sql = "insert into autor (nombre,apellidos) ";
		$sql .= "value (\"$this->nombre\",\"$this->apellidos\")";
		return Executor::doit($sql);
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
		$sql = "update ".self::$tabla." set nombre=\"$this->nombre\",apellidos=\"$this->apellidos\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tabla." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DatosAutor());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tabla;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosAutor());

	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tabla." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosAutor());
	}


}

?>