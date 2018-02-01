<?php

    if(count($_POST)>0){
	    $autor = new DatosAutor();
	    $autor -> nombre = $_POST["nombre"];
	    $autor -> apellidos = $_POST["apellidos"];
	    $autor -> agregar();
    
        print "<script>window.location='index.php?view=autor';</script>";

	}
	
?>