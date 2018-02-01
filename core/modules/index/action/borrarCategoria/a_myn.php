<?php

    $categoria = DatosCategoria::getById($_GET["id"]);
    $categoria -> borrar();
    Core::redir("./index.php?view=categoria");

?>