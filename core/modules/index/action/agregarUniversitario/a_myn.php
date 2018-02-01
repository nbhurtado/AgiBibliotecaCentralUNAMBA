<?php

    if(count($_POST)>0){
        $universitarios = new DatosUniversitario();
        $universitarios -> nombre = $_POST["nombre"];
        $universitarios -> apellidos = $_POST["apellidos"];
        $universitarios -> direccion = $_POST["direccion"];
        $universitarios -> email = $_POST["email"];
        $universitarios -> telefono = $_POST["telefono"];
        $universitarios -> agregar();

        print "<script>window.location='index.php?view=universitario';</script>";


    }

?>