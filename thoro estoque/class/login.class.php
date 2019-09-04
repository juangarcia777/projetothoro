<?php

class login {

    private $pdo;

    public function __construct() {
        try {

       $this->pdo = new PDO("mysql:dbname=sistemaestoque;host=localhost","root","");

        } catch (PDOException $e) {

       echo "FALHOU...".$e->getMessage();

        }
    }

    public function logar($usuario, $senha) {
      $sql=$this->pdo->prepare("SELECT id FROM usuarios WHERE usuario= ?
       AND senha= ?");
       $sql->bindValue(1, $usuario);
       $sql->bindValue(2, $senha);
       $sql->execute();
       
       if($sql->rowCount()>0) {
       $info = $sql->fetch();
       $_SESSION['login'] = $info['id'];
       header("location:index.php"); 
           exit;
        } else {
            echo "Senha ou usuario incorretos";
        }
       }

      
    }
?>