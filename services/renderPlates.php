<?php
use League\Plates\Engine as PlatesEngine;
use Zend\Expressive\Plates\PlatesRenderer;

class Plates {
    private $engine = null;
    private $render = null;
    private $renderer = null;
    // Create the engine instance:


    public function getRenderer() {
        $this->engine =  new PlatesEngine();
        $this->render = $this->engine->addFolder('templates', 'templates/');
        $this->renderer = new PlatesRenderer($this->render);
        return $this->renderer;
    }

}