<?php

    if(count($_POST)>0){
	    $usuario = new DatosAutor();
	    $usuario -> nombre = $_POST["nombre"];
	    $usuario -> apellidos = $_POST["apellidos"];
	    $usuario -> agregar();
    
        print "<script>window.location='index.php?view=autores';</script>";

	}
	
?>