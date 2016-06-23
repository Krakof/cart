<?php

class CartController {
    private $renderClass = null;
    private $prodServClass = null;
    private $presentClass = null;
    private $template = 'cart';

    public function getCartPage($ids) {
        $this->presentClass = new TransformIDs();
        $idsArray = $this->presentClass->transform($ids);

        $this->prodServClass = new CartService();
        $prods = $this->prodServClass->getProducts($idsArray);

        $this->renderClass = new RenderService();
        $page = $this->renderClass->renderPage($this->template, $prods);
        return $page;
    }
}