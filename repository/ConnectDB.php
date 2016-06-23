<?php

class ConnectDB
{
    private $servername = "localhost";
    private $username = "user";
    private $password = "moloko";
    private $dbname = "Cart";
    private $conn;

    public static function getDB() {
        return $db = new ConnectDB();
    }

    private function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
//        if (!$this->conn) {
//            die("Connection failed: " . mysqli_connect_error());
//        }
    }

    public function selectAll(){
        $query = "SELECT id, name, price FROM product";
        $products = mysqli_query($this->conn, $query);
        if (!$products) return false;
        return $products;
    }

    public function select($ids){
        $query = "SELECT * FROM product WHERE id IN ({$ids}) ORDER BY FIELD(id, {$ids});";
        $products = mysqli_query($this->conn, $query);
//        var_dump($query);
//        var_dump($products->fetch_assoc());

        if (!$products) return false;
        return $products;
    }
}