<?php

class CartController {
    private $renderClass = null;
    private $template = 'cart';

    public function getCartPage() {
        $this->renderClass = new RenderService();
        $page = $this->renderClass->renderPage($this->template, false);
        return $page;
    }
}