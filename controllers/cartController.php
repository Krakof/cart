<?php

class CartController {
    private $renderClass = null;
    private $prodServClass = null;
    private $presentClass = null;
    private $template = 'cart';

    public function getCartPage($ids) {
        $prodIDs = unserialize($ids);

        $this->prodServClass = new CartService();
        $prods = $this->prodServClass->getProducts($prodIDs);

        $this->renderClass = new RenderService();
        $page = $this->renderClass->renderPage($this->template, $prods);
        return $page;
    }
}