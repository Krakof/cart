<?php

class CartController {
    private $renderer = null;

    public function getCartPage() {
        $this->renderer = new CartService();
        $page = $this->renderer->renderCart();
        return $page;
    }
}