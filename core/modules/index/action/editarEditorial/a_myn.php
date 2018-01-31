<?php

    if(count($_POST)>0){
        $usuario = DatosEditorial::getById($_POST["id_usuario"]);
        $usuario -> nombre = $_POST["nombre"];
        $usuario -> editar();
        Core::alert("Actualizado exitosamente!");
        print "<script>window.location='index.php?view=editoriales';</script>";

    }

?>