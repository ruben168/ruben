<?php

class Database
{
    public $conn;
    private $db = 'ruben';
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';

    public function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

        }

        return $this->conn;
    }
}