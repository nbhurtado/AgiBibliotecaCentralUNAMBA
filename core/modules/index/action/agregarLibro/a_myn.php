<?php

    if(!empty($_POST)){
    $libro = new DatosLibro();
    $libro -> titulo = $_POST["titulo"];
    $libro -> subtitulo = $_POST["subtitulo"];
    $libro -> descripcion = $_POST["descripcion"];
    $libro -> isbn = $_POST["isbn"];
    $libro -> num_pag = $_POST["num_pag"];
    $libro -> anho = $_POST["anho"];
    $libro -> id_categoria = $_POST["id_categoria"]!="" ? $_POST["id_categoria"] : "NULL";
    $libro -> id_editorial = $_POST["id_editorial"]!="" ? $_POST["id_editorial"] : "NULL";
    $libro -> id_autor = $_POST["id_autor"]!="" ? $_POST["id_autor"] : "NULL";
    $libro -> agregar();
    }

    //Core::alert("Agregado exitosamente!");
    Core::redir("./index.php?view=libro");

?>