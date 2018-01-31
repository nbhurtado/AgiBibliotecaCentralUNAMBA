<?php
class DatosEditorial {
	public static $tabla = "editorial";


	public function DatosEditorial(){
		$this->nombre = "";
		$this->created_at = "NOW()";
	}
    //CRUD para la tabla EDITORIAL
	public function agregar(){
		$sql = "insert into editorial (nombre) ";
		$sql .= "value (\"$this->nombre\")";
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
		$sql = "update ".self::$tabla." set name=\"$this->name\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tabla." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DatosEditorial());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tabla;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosEditorial());

	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tabla." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosEditorial());
	}


}

?>