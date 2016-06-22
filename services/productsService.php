<?php

class ProductsService {
    private $db = null;

    public function getProducts() {
        $this->db = ConnectDB::getDB();
        $products = $this->db->selectAll();
        return $products;
    }


}