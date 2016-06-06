<?php

class ConnectDB
{
    private $servername = "localhost";
    private $username = "user";
    private $password = "moloko";
    private $dbname = "Cart";
    private $conn;

    public function connect(){
        return $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }
}