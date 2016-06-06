<?php
use League\Plates\Engine as PlatesEngine;
use Zend\Expressive\Plates\PlatesRenderer;

class Plates
{
    // Create the engine instance:
    public function plates() {
        $plates =  new PlatesEngine();
        $plates->addFolder('templates', 'templates/');
        $renderer = new PlatesRenderer($plates);
        return $renderer;
    }

}