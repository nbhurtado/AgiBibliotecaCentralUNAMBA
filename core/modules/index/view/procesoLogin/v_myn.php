<?php

	if(Session::getUID()=="") {
	$usuario = $_POST['email'];
	$contrasenha = sha1(md5($_POST['contrasenha']));

	$basedatos = new Database();
	$conectar = $basedatos->conectar();
	$sql = "select * from usuario where (email= \"".$usuario."\" or usuario= \"".$usuario."\") and contrasenha= \"".$contrasenha."\" and esta_activo=1";

	$consulta = $conectar->query($sql);
	$encontrado = false;
	$id_usuario = null;
	while($r = $consulta->fetch_array()){
		$encontrado = true ;
		$id_usuario = $r['id'];
	}

	if($encontrado==true) {

		$_SESSION['id_usuario']=$id_usuario ;

		print "Cargando ... $usuario";
		print "<script>window.location='index.php?view=calendario';</script>";
	}else {
		print "<script>window.location='index.php?view=login';</script>";
	}

	}else{
		print "<script>window.location='index.php?view=calendario';</script>";
		
	}
?>