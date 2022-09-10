<?php

abstract class Conexao

{
    private $username = 'root';
    private $password = '';
    private $meubanco = 'google';
    public $conn;

    public function __construct()
    {
        try {

            $this->conn = new PDO('mysql:host=localhost;dbname=' . $this->meubanco, $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn;
        } catch (PDOException $e) {

            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
