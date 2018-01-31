<?php

    if(count($_POST)>0){
        $universitarios = DatosUniversitarios::getById($_POST["id"]);
        $universitarios -> nombre = $_POST["nombre"];
        $universitarios -> apellidos = $_POST["apellidos"];
        $universitarios -> direccion = $_POST["direccion"];
        $universitarios -> email = $_POST["email"];
        $universitarios -> telefono = $_POST["telefono"];
        $universitarios -> editar();

        Core::alert("Actualizado exitosamente!");
        print "<script>window.location='index.php?view=universitarios';</script>";


    }


?>