<?php

    if($_SESSION["id_usuario"]!=""){
        $prestamo = DatosPrestamo::getById($_GET["id"]);
        $ejemplar = DatosEjemplar::getById($prestamo->id_ejemplar);
        $ejemplar->avaiable();
        $prestamo->borrar();
        Core::redir("./?view=prestamo");
    }

?>