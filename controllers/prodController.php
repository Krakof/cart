<?php

class ProductsController {

    private $renderer = null;

    public function getProdPage() {
        $this->renderer = new ProductsService();
        $page = $this->renderer->renderProducts();
        return $page;
    }
}