<?php

    if(count($_POST)>0){
        $user = DatosCategoria::getById($_POST["id_usuario"]);
        $user -> nombre = $_POST["nombre"];
        $user -> editar();

        Core::alert("Actualizado exitosamente!");
        print "<script>window.location='index.php?view=categoria';</script>";
    }

?>