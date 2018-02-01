<?php

    if(count($_POST)>0){
        $editorial = new DatosEditorial();
        $editorial -> nombre = $_POST["nombre"];
        $editorial -> agregar();

        print "<script>window.location='index.php?view=editorial';</script>";
    }

?>