<?php

    class LabelText{
        public function LabelText($config){
            $this->config = $config;

        }
        public function setName($nombre){ $this->nombre = $nombre;}
        public function render(){ return "<input type='text' name='$this->nombre' id='$this->nombre'>"; }
        public function renderLabel(){ return $this->config['label']; }
    }

?>