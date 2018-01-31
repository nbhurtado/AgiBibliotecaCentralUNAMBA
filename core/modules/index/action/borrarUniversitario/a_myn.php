<?php

    $universitarios = DatosUniversitarios::getById($_GET["id"]);
    $universitarios -> borrar();
    Core::redir("./index.php?view=universitarios");

?>