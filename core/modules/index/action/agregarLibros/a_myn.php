<?php

    if(!empty($_POST)){
    $usuario = new DatosLibro();
    $usuario -> titulo = $_POST["titulo"];
    $usuario -> subtitulo = $_POST["subtitulo"];
    $usuario -> descripcion = $_POST["descripcion"];
    $usuario -> isbn = $_POST["isbn"];
    $usuario -> num_pag = $_POST["num_pag"];
    $usuario -> anho = $_POST["anho"];
    $usuario -> id_categoria = $_POST["id_categoria"]!="" ? $_POST["id_categoria"] : "NULL";
    $usuario -> id_editorial = $_POST["id_editorial"]!="" ? $_POST["id_editorial"] : "NULL";
    $usuario -> id_autor = $_POST["id_autor"]!="" ? $_POST["id_autor"] : "NULL";
    $usuario -> agregar();
    }

    //Core::alert("Agregado exitosamente!");
    Core::redir("./index.php?view=libros");

?>