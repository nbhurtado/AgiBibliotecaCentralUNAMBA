<?php


if(Session::getUID()!=""){
	$usuario = DatosUsuario::getById(Session::getUID());
	$contrasenha = sha1(md5($_POST["contrasenha"]));
	if($contrasenha==$usuario->contrasenha){
		$usuario->contrasenha = sha1(md5($_POST["nuevacontrasenha"]));
		$usuario->editar();
		setcookie("contrasenha_actualizada","true");
		print "<script>window.location='logout.php';</script>";
	}else{
		print "<script>window.location='index.php?view=security&msg=invalidpasswd';</script>";		
	}

}else {
		print "<script>window.location='index.php';</script>";
}


?>