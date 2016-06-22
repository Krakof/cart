<?php

class CartService {
    private $plates = null;

    public function renderCart() {
        $this->plates = new Plates();
        $renderer = $this->plates->getRenderer();
        $page = $renderer->render('templates::cart');
        return $page;
    }
}