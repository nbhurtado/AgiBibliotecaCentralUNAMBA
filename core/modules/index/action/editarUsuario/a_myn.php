<?php

    if(count($_POST)>0){
        $es_admin = 0;
        if(isset($_POST["is_admin"])){$es_admin = 1;}
        $esta_activo = 0;
        if(isset($_POST["esta_activo"])){$esta_activo = 1;}
        $usuario = DatosUsuario::getById($_POST["id_usuario"]);
        $usuario -> nombre = $_POST["nombre"];
        $usuario -> apellidos = $_POST["apellidos"];
        $usuario -> usuario = $_POST["usuario"];
        $usuario -> email = $_POST["email"];
        $usuario -> es_admin = $es_admin;
        $usuario -> esta_activo = $esta_activo;
        $usuario -> editar();

        if($_POST["contrasenha"]!=""){
            $usuario -> contrasenha = sha1(md5($_POST["contrasenha"]));
            $usuario -> editar_contrasenha();
            print "<script>alert('Se ha actualizado la contraseña');</script>";

        }

        print "<script>window.location='index.php?view=usuario';</script>";

    }

?>