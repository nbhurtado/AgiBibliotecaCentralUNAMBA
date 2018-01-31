<?php
    session_start();
    // -- eliminamos el usuario
    if(isset($_SESSION['id_usuario'])){
        unset($_SESSION['id_usuario']);
    }

    session_destroy();

    print "<script>window.location='index.php';</script>";
?>