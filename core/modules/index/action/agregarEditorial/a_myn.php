<?php

    if(count($_POST)>0){
        $usuario = new DatosEditorial();
        $usuario -> nombre = $_POST["nombre"];
        $usuario -> agregar();

        print "<script>window.location='index.php?view=editoriales';</script>";
    }

?>