<?php

class ProductsController {

    private $prodServClass = null;
    private $renderClass = null;
    private $template = 'content';

    public function getProdPage() {
        $this->prodServClass = new ProductsService();
        $products = $this->prodServClass->getProducts();

        $this->renderClass = new RenderService();
        $page = $this->renderClass->renderPage($this->template, $products);
        return $page;
    }
}