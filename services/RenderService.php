<?php

class RenderService {
    private $plates = null;

    public function renderPage($template, $prods) {
        $this->plates = new Plates();
        $renderer = $this->plates->getRenderer();
//        $products = $prods || ' ';
        $page = $renderer->render('templates::'.$template, ['result' => $prods]);
        return $page;
    }
}