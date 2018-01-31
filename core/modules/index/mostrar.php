<?php
    //Si nuestra accion a mostrar esta definido evitamos
    //Ejecutmos la accion sin una preview
    if(!isset($_GET["action"])){
        Module::cargarLayout("index");
    }else{
	    Action::cargarAction($_GET["action"]);
    }
?>