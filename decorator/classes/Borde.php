<?php

class Borde implements MonoGraphic, Graphic{
    public Graphic $graphic;

    public function draw(){
        $this->graphic->draw();
        $this->drawBorde();
    }

    public function drawBorde(){
        // some extra functionality
    }
}