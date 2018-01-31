<?php
    //Segun se el editorial - libro, pertenezca a una categoria
    $editorial = EditorialData::getById($_GET["id"]);
    $editorial -> borrar();
    Core::redir("./index.php?view=editoriales");

?>