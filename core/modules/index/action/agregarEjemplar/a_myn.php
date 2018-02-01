<?php

    if(count($_POST)>0){
        $ejemplar = new DatosEjemplar();
        $ejemplar -> codigo = $_POST["codigo"];
        $ejemplar -> id_libro = $_POST["id_libro"];
        $ejemplar -> id_estado = $_POST["id_estado"];
        $ejemplar -> agregar();

        print "<script>window.location='index.php?view=ejemplar&id=$_POST[id_libro]';</script>";


    }

?>