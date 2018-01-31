<?php
class DatosLibro {
	public static $tabla = "libro";


	public function DatosLibro(){
		$this->isbn = "";
		$this->titulo = "";
		$this->subtitulo = "";
        $this->descripcion = "";
        $this->num_pag = "";
        $this->anho = "";
		$this->created_at = "NOW()";
	}

	public function getCategoria(){ return $this->id_categoria!=null? DatosCategoria::getById($this->id_categoria) : null ; }
	public function getEditorial(){ return $this->id_editorial!=null? DatosEditorial::getById($this->id_editorial) : null ; }
	public function getAutor(){ return $this->id_autor!=null? DatosAutor::getById($this->id_autor) : null ; }

    //CRUD para la tabla LIBRO
	public function agregar(){
		$sql = "insert into libro (isbn,titulo,subtitulo,descripcion,num_pag,anho,id_categoria,id_editorial,id_autor) ";
		$sql .= "value (\"$this->isbn\",\"$this->titulo\",\"$this->subtitulo\",\"$this->descripcion\",\"$this->num_pag\",\"$this->anho\",$this->id_categoria,$this->id_editorial,$this->id_autor)";
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
		$sql = "update ".self::$tabla." set title=\"$this->title\",subtitle=\"$this->subtitle\",isbn=\"$this->isbn\",description=\"$this->description\",n_pag=\"$this->n_pag\",year=\"$this->year\",category_id=$this->category_id,editorial_id=$this->editorial_id,author_id=$this->author_id where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tabla." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DatosLibro());
	}

	public static function getByMail($email){
		$sql = "select * from ".self::$tabla." where email=\"$email\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DatosLibro());
	}

	public static function getEvery(){
		$sql = "select *,date_add( concat(concat(date_at,\"T\"), time_at),interval duration minute) as time_end  from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosLibro());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tabla;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosLibro());
	}

	public static function getLike($q){
		$sql = "select * from ".self::$tabla." where isbn like '%$q%' or titulo like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DatosLibro());
	}


}

?>