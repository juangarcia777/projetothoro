<?php

class saida {

    private $pdo;

    public function __construct() {
        try {

       $this->pdo = new PDO("mysql:dbname=sistemaestoque;host=localhost","root","");

        } catch (PDOException $e) {

       echo "FALHOU...".$e->getMessage();

        }
    }

    public function saidaEstoque($quant, $id) {
        $sql = $this->pdo->prepare("UPDATE produtos SET quantidade = quantidade - ?
        WHERE id = ? ");
        $sql->bindValue(1,$quant);
        $sql->bindValue(2,$id);
        $sql->execute();
    }

}

?>
