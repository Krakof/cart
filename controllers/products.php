<?php

class ProductsController {
    private $db = null;
    private $renderer = null;

    public function getProducts() {
        $this->db = ConnectDB::getDB();
        $products = $this->db->selectAll();
        return $products;
    }

    public function renderProducts($products) {
        $this->renderer = Plates::getPlates();
        $page = $this->renderer->renderProducts($products);
        return $page;
    }
}