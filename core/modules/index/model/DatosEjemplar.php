<?php
class DatosEjemplar {
	public static $tabla = "ejemplar";


	public function DatosEjemplar(){

		$this->created_at = "NOW()";
	}

	public function getLibro(){ return DatosLibro::getById($this->id_libro); }
	public function getEstado(){ return DatosEstado::getById($this->id_estado); }

    //CRUD para la tabla EJEMPLAR
	public function agregar(){
		$sql = "insert into ejemplar (codigo,id_estado,id_libro) ";
		$sql .= "value (\"$this->codigo\",\"$this->id_estado\",\"$this->id_libro\")";
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
		$sql = "update ".self::$tabla." set codigo=\"$this->codigo\",id_estado=\"$this->id_estado\" where id=$this->id";
		Executor::doit($sql);
	}

	public function avaiable(){
		$sql = "update ".self::$tabla." set id_estado=1 where id=$this->id";
		Executor::doit($sql);
	}

	public function unavaiable(){
		$sql = "update ".self::$tabla." set id_estado=2 where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tabla." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DatosEjemplar());
	}

	public static function countByBookId($id){
		$sql = "select count(*) as c from ".self::$tabla." where id_libro=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DatosEjemplar());
	}

	public static function countAvaiableByBookId($id){
		$sql = "select count(*) as c from ".self::$tabla." where id_libro=$id and id_estado=1";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DatosEjemplar());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tabla;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosEjemplar());
	}
	
	public static function getAllByBookId($id){
		$sql = "select * from ".self::$tabla." where id_libro=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosEjemplar());
	}

	public static function getAvaiableByBookId($id){
		$sql = "select * from ".self::$tabla." where id_libro=$id and id_estado=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosEjemplar());
	}

	public static function getLike($q){
		$sql = "select * from ".self::$tabla." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosEjemplar());
	}


}

?>