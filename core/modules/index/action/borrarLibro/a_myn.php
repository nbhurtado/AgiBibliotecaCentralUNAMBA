<?php

    $usuario = DatosLibro::getById($_GET["id"]);
    $usuario -> borrar();
    print "<script>window.location='index.php?view=libro';</script>";

?>