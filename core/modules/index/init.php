<?php
    //Si nuestra accion a mostrar esta definido evitamos
    //Ejecutamos la accion sin una preview
    if(!isset($_GET["action"])){
        Module::loadLayout("index");
    }else{
	    Action::cargarAction($_GET["action"]);
    }
?>