<?php
// esta funcion elimina el hecho de estar agregando los modelos manualmente

function __autoload($nombremodelo){
	if(Model::exists($nombremodelo)){
		include Model::getFullPath($nombremodelo);
	} 

	if(Form::exists($nombremodelo)){
		include Form::getFullPath($nombremodelo);
	}
}
?>