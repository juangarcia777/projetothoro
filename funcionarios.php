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

<header>
<h2 class="bg-success text-center">COLABORADORES</h2>
<?php

require 'config.php';

?>

<table border="1" class="table table-dark table-hover">
<tr class="table table-light ">
<th>Nome</th>
<th>Rg</th>
<th>Data de nascimento</th>
<th>Função</th>
<th>Faixa Salarial</th>
<th>Data de Admissão</th>
<th>Config</th>
</tr>
<?php
$sql = "SELECT * FROM gestao
";
$sql = $pdo->query($sql);

if($sql->rowCount() > 0) {
    foreach($sql->fetchAll() as $gestao) {
        echo '<tr>';
        echo '<td>'.$gestao['nome'].'</td>';
        echo '<td>'.$gestao['rg'].'</td>';
        echo '<td>'.$gestao['data_nasc'].'</td>';
        echo '<td>'.$gestao['funcao'].'</td>';
        echo '<td>'.$gestao['faixa_salarial'].'</td>';
        echo '<td>'.$gestao['data_admissao'].'</td>';
        echo '<td><a class="btn btn-danger btn-sm"data-toggle="modal" data-target="#box">Excluir</a> <hr/> <a class="btn btn-info btn-sm" href="editar.php?id='.$gestao['id'].'">Editar</a></td>';
        echo '</tr>';

    }
}
?>
<div id="box" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
             Deseja Realmente excluir Funcionário ?
          </div>
          <div class="modal-body">
          <div class="d-flex justify-content-between">
          <?php
             echo '<a href="excluir.php?id='.$gestao['id'].'" class="btn btn-success">Sim</a>';
              ?>
              <a href="funcionarios.php" class="btn btn-danger">Não</a>
          </div>
          </div>
    </div>
  </div>
</div>

</header>
</table>

<a href="index.php"><button class="btn btn-primary"><- Voltar</button></a>


</div>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>


