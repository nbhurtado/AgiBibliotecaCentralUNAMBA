<?php

    $ejemplar = DatosEjemplar::getById($_GET["id"]);
    $id = $ejemplar->id_libro;
    $ejemplar -> borrar();
    Core::redir("./index.php?view=ejemplares&id=$id_libro");

?>