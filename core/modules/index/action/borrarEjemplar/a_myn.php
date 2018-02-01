<?php

    $ejemplar = DatosEjemplar::getById($_GET["id"]);
    $id_libro = $ejemplar->id_libro;
    $ejemplar->borrar();
    Core::redir("./index.php?view=ejemplar&id=$id_libro");

?>