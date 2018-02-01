<?php
    //Segun se el autor - libro, pertenezca a una categoria 
    $categoria = DatosAutor::getById($_GET["id"]);
    $categoria -> borrar();
    Core::redir("./index.php?view=autor");

?>