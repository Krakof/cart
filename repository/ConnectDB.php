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
        $this->conn = new PDO('mysql:host=localhost;dbname=Cart', $this->username, $this->password);
//        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
//        if (!$this->conn) {
//            die("Connection failed: " . mysqli_connect_error());
//        }
    }

    public function selectAll(){
        $sql = "SELECT id, name, price FROM product";
        $products = $this->conn->query($sql);
        if (!$products) return false;
        return $products->fetchAll();
    }

    public function select($ids){
        $arrayTemp = implode(',', array_fill(0, count($ids), '?'));
        $query = $this->conn->prepare("SELECT * FROM product WHERE id IN($arrayTemp) ORDER BY FIELD(id, $arrayTemp)");
        $query->execute(array_merge($ids,$ids));
        if (!$query) return false;
        return $query->fetchAll();

    }
}