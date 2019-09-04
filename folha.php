<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THORO-BT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   
</head>
<body style="background-color:#c4cbca">

<div class="container">

<a href="index.php"><button class="btn btn-primary" style="margin-top:15px;"><-Voltar</button></a>
<hr/>

<?php 

require 'config.php';

?>
<table border="1" width="100%" style="margin-top:50px;" 
class="table table-border table-dark ">

<tr>
    <th>Nome</th>
    <th>Faixa Salarial </th>
    <th>Salário</th>

</tr>


<?php 
if (isset($_GET['ordem']) && empty($_GET['ordem']) == false ) {
    $ordem = $_GET['ordem'];
    $sql = "SELECT * FROM gestao ORDER BY ".$ordem;
} else {
$sql = "SELECT nome,faixa_salarial,salario FROM gestao";
}

$sql = $pdo->query($sql);


if($sql->rowCount() > 0){
    foreach ($sql->fetchAll() as $gestao):
         ?>
        <tr>
          <td><?php echo $gestao['nome'];?></td>
          <td><?php echo $gestao['faixa_salarial'];?></td>
          <td><?php echo $gestao['salario'];?></td>
        </tr>

         <?php
    endforeach;
    
    
}
?>
</table>
<form method="GET">
  <select name="ordem" class="btn btn-info" onchange="this.form.submit()">
             <option>Ordenar</option>
             <option value="nome">Nome</option>
             <option value="salario">Salario</option>
  
  </select>

</form>

<?php 
if(isset($_POST['nome_msg']) && empty($_POST['nome_msg'])== false) {
  $nome = $_POST['nome_msg'];
  $msg = $_POST['msg'];
   
  $sql = $pdo->prepare("INSERT INTO comentarios SET nome_msg= :nome_msg, msg= :msg, data_msg= NOW()");
  $sql->bindValue(":nome_msg",$nome);
  $sql->bindValue(":msg",$msg);
  $sql->execute();
}

?>

<?php

$sql= "SELECT SUM(salario) AS salario FROM gestao";
$sql= $pdo->query($sql);
if ($sql->rowCount() > 0) {
    foreach($sql->fetchAll() as $salarios) {

        $resultado = $salarios['salario'];
        $nfinal = number_format($resultado, 3);
    }
}

echo "<br/>";
echo "<div class='bg-warning'>";
echo "<p class='text-dark'>DESPESA SALARIAL MENSAL ATUAL: R$ ".$nfinal."</p>";
echo "</div>";

?>


<hr/>
<h3 class="bg-info" >Notas de Atualização</h3>



  <form method="POST">
    <div class="input-group">
      <div class="input-group-prepend-sm"> 
     <span class="input-group-text"> Nome:</span>
     </div>
    <input type="text"name="nome_msg" class="form-control"/><br/><br/>
    </div>
  

    <div class="input-group">
    
    <div class="input-group-prepend-lg"> 
     <span class="input-group-text" style="height:70px;"> Mensagem</span>
     </div>
    <textarea name="msg" class="form-control"/></textarea>

    </div>
          
      <br/>
    <input type="submit" class="btn btn-info" value="Enviar Mensagem"/>
  </form>

   <br/>

  
  <button  class="btn btn-danger"
  data-toggle="modal" data-target="#box">Excluir Ultima Mensagem</button>

  
  <div id="box" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
         Deseja realmente excluir o ultimo comentário? 
         </div>
         <div class="modal-body">
         <div class="d-flex justify-content-between">
         <a href="folha.php"><input type="submit" class="btn btn-warning" value="Não"></a>
         <form action="apagamsg.php">
         <input type="submit" class="btn btn-success" value="Sim">
         </form>
         </div>
         </div>
      </div>
    </div>
  </div>

  <br/>
  <br/>

<?php 
$sql = "SELECT * FROM comentarios ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
if ($sql->rowCount()>0 ) {
  foreach($sql->fetchAll() as $comentarios):
    ?>

    <ul class="list-unstylied">
      <li class="media">
      <span class="mr-3 avatar align-self-center" style="background-color:#a7f1d6">
      <small>
      <?php echo "IDm: ".$comentarios['id']; ?>
       </small>
      </span>

      <div class="media-body" style="background-color:#FFF;padding:15px">
        <h5><strong><?php echo $comentarios['nome_msg']; ?></strong></h5>
         <p><?php echo $comentarios['msg']; ?></p>


      </div>
      </li>
    </ul>
 


<hr/>

    <?php
    endforeach;
} else {
  echo "Não há Mensagens.";
}

?>
 
  </div>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>

 </body>
</html>
