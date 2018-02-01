<?php
class DatosPrestamo {
	public static $tabla = "prestamo";


	public function DatosPrestamo(){

		$this->created_at = "NOW()";
	}

	public function getEjemplar(){ return DatosEjemplar::getById($this->id_ejemplar); }
	public function getUniversitario(){ return DatosUniversitario::getById($this->id_universitario); }

    //CRUD para la tabla PRESTAMO
	public function agregar(){
		$sql = "insert into ".self::$tabla." (id_ejemplar,id_universitario,fecha_inicio,fecha_fin,id_usuario) ";
		$sql .= "value (\"$this->id_ejemplar\",\"$this->id_universitario\",\"$this->fecha_inicio\",\"$this->fecha_fin\",\"$this->id_usuario\")";
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

	public function finalize(){
		$sql = "update ".self::$tabla." set returned_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tabla." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DatosPrestamo());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tabla;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosPrestamo());
	}
	public static function getRentsByRange($inicio,$fin){
		$sql = "select * from ".self::$tabla." where (  (\"$inicio\">=fecha_inicio and \"$fin\"<=fecha_fin) or (fecha_inicio>=\"$inicio\" and fecha_fin<=\"$fin\") )  and returned_at is NULL ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosPrestamo());
	}


	public static function getByRange($inicio,$fin){
		$sql = "select * from ".self::$tabla." where fecha_retorno>=\"$inicio\" and fecha_retorno<=\"$fin\" and fecha_retorno is not NULL ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosPrestamo());
	}

	public static function getRents(){
		$sql = "select * from ".self::$tabla." where fecha_retorno is NULL";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosPrestamo());
	}

	public static function getAllByItemId($id){
		$sql = "select * from ".self::$tabla." where id_ejemplar=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosPrestamo());
	}

	public static function getAllByItemIdAndRange($id,$inicio,$fin){
		$sql = "select * from ".self::$tabla." where id_ejemplar=$id and ((fecha_retorno>=\"$inicio\" and fecha_retorno<=\"$finish\") or (fecha_inicio>=\"$inicio\" and fecha_inicio<=\"$fin\") or (fecha_fin>=\"$inicio\" and fecha_fin<=\"$fin\")) ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosPrestamo());
	}
	public static function getAllByClientId($id){
		$sql = "select * from ".self::$tabla." where id_universitario=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosPrestamo());
	}

	public static function getAllByClientIdAndRange($id,$inicio,$fin){
		$sql = "select * from ".self::$tabla." where id_universitario=$id and ((fecha_retorno>=\"$inicio\" and fecha_retorno<=\"$fin\") or (fecha_inicio>=\"$inicio\" and fecha_inicio<=\"$fin\") or (fecha_fin>=\"$inicio\" and fecha_fin<=\"$fin\")) ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosPrestamo());
	}

	
	public static function getLike($q){
		$sql = "select * from ".self::$tabla." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosPrestamo());
	}


}

?>