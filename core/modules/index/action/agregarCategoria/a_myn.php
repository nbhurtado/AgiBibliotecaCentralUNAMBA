<?php

    if(count($_POST)>0){
        $categoria = new DatosCategoria();
        $categoria -> nombre = $_POST["nombre"];
        $categoria -> agregar();

        print "<script>window.location='index.php?view=categoria';</script>";
    }

?>