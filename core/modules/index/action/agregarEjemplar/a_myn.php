<?php

    if(count($_POST)>0){
        $usuario = new DatosEjemplar();
        $usuario -> codigo = $_POST["codigo"];
        $usuario -> id_libro = $_POST["id_libro"];
        $usuario -> id_estado = $_POST["id_estado"];
        $usuario -> agregar();

        print "<script>window.location='index.php?view=ejemplares&id=$_POST[id_libro]';</script>";


    }

?>