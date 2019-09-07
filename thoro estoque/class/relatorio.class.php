<?php
    
     class Relatorio {
          
        private $db;

        public function __construct() {
            try {
            $this->db = new PDO("mysql:dbname=sistemaestoque;host=localhost","root","");
            } catch (PDOException $e){
                   echo "FALHA..".$e->getMessage();
            }
        }

        public function getTabela() {
         $sql= $this->db->prepare("SELECT * FROM produtos");
         $sql->execute();

          if($sql->rowCount() > 0) {
              return $sql->fetchAll();
          }
        }

     }

?>