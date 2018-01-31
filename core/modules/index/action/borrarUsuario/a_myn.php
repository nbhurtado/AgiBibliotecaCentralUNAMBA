<?php
    //Segun se el usuario 
    $usuario = DatosUsuario::getById($_GET["id"]);
    $usuario -> borrar();
    Core::redir("./index.php?view=usuarios");

?>