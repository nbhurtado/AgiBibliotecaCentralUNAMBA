<?php

	if(count($_POST)>0){
		$usuario = DatosAutor::getById($_POST["id_usuario"]);
		$usuario -> nombre = $_POST["nombre"];
		$usuario -> apellidos = $_POST["apellidos"];
		$usuario -> editar();
		print "<script>window.location='index.php?view=autor';</script>";
	}

?>