<?php

  class cadastro {

    private $pdo;

    public function __construct() {
        try {

       $this->pdo = new PDO("mysql:dbname=sistemaestoque;host=localhost","root","");

        } catch (PDOException $e) {

       echo "FALHOU...".$e->getMessage();

        }
    }

    public function setProduto($prod, $quant) {
        $sql =$this->pdo->prepare("INSERT INTO produtos (produto,quantidade) 
        VALUES (?,?)");
        $sql->bindValue(1,$prod);
        $sql->bindValue(2,$quant);
        $sql->execute();
    }
  }

?>