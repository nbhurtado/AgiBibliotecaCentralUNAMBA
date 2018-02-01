<?php
    //Segun se el editorial - libro, pertenezca a una categoria
    $editorial = DatosEditorial::getById($_GET["id"]);
    $editorial -> borrar();
    Core::redir("./index.php?view=editorial");

?>