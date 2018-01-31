<?php

    class LabelForm {
	public function LabelForm(){
		$this->arreglo = array();
	}

	public function addField($nombre,$arreglo){
		$this->arreglo[$nombre] = $arreglo;
	}

	public function render($arreglo){
		return $this->getField($arreglo)->render();

	}

	public function label($arreglo){
		return $this->getField($arreglo)->renderLabel();

	}

	public function getField($nombre){
		$arreglo = $this->arreglo[$nombre]['type'];
		$arreglo->setName($nombre);
		return $arreglo;
	}
}

?>