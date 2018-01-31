<?php

    if(count($_POST)>0){
        $user = DatosCategoria::getById($_POST["user_id"]);
        $user -> nombre = $_POST["nombre"];
        $user -> editar();

        Core::alert("Actualizado exitosamente!");
        print "<script>window.location='index.php?view=categorias';</script>";
    }

?>