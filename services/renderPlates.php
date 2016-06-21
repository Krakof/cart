<?php
use League\Plates\Engine as PlatesEngine;
use Zend\Expressive\Plates\PlatesRenderer;

class Plates {
    private $engine = null;
    private $render = null;
    private $renderer = null;
    // Create the engine instance:
    public static function getPlates(){
        return new Plates();
    }

    private function __construct() {
        $this->engine =  new PlatesEngine();
        $this->render = $this->engine->addFolder('templates', 'templates/');
        $this->renderer = new PlatesRenderer($this->render);
    }

    public function renderProducts($products) {
        $page = $this->renderer->render('templates::content', ['result' => $products]);
        return $page;
    }

}