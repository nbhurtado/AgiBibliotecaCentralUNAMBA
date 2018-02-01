<?php

    if(count($_POST)>0){
        $usuario = DatosEjemplar::getById($_POST["id_ejemplar"]);
        $usuario -> codigo = $_POST["codigo"];
        $usuario -> id_estado = $_POST["id_estado"];
        $usuario -> editar();

        Core::alert("Actualizado exitosamente!");
        print "<script>window.location='index.php?view=ejemplar&id=$usuario->id_libro';</script>";


    }


?>