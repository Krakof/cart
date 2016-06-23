<?php

class CartService {
    private $db = null;

    public function getProducts($ids){
        $this->db = ConnectDB::getDB();
        $products = $this->db->select($ids);
        return $products;
    }
}