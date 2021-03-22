<?php

class Desplazamiento implements MonoGraphic, Graphic{
    public Graphic $graphic;

    public function draw(){
        $this->graphic->draw();
        $this->drawDesplazamiento();
    }

    public function drawDesplazamiento(){
        // some extra functionality
    }
}