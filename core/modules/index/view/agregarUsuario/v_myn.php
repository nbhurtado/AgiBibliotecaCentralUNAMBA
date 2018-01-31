<?php

	if(count($_POST)>0){
		$es_admin=0;
		if(isset($_POST["es_admin"])){$es_admin = 1;}
		$usuario = new UserData();
		$usuario -> nombre = $_POST["nombre"];
		$usuario -> apellidos = $_POST["apellidos"];
		$usuario -> usuario = $_POST["usuario"];
		$usuario -> email = $_POST["email"];
		$usuario -> es_admin = $es_admin;
		$usuario -> contrasenha = sha1(md5($_POST["contrasenha"]));
		$usuario -> agregar();

	print "<script>window.location='index.php?view=usuarios';</script>";


	}

?>