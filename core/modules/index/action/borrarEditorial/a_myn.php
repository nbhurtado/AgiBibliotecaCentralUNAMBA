<?php
    //Segun se el editorial - libro, pertenezca a una categoria
    $categoria = EditorialData::getById($_GET["id"]);
    $categoria -> borrar();
    Core::redir("./index.php?view=editoriales");

?>