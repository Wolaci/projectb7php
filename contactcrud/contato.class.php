<?php

class Contato{
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=contactcrud;host=localhost", "root", "");
        echo 'teste';
    }
}