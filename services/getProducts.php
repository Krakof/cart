<?php

class ProductsService {
    private $db = null;
    private $plates = null;

    private function getProducts() {
        $this->db = ConnectDB::getDB();
        $products = $this->db->selectAll();
        return $products;
    }

    public function renderProducts() {
        $this->plates = new Plates();
        $renderer = $this->plates->getRenderer();

        $products = $this->getProducts();
        $page = $renderer->render('templates::content', ['result' => $products]);
        return $page;
    }
}