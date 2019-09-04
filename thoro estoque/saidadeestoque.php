<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Esthoro</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="background-color:#84A4A1">
<div class="container">

<div class="jumbotron bg-info" style="height:100px">
<h1 style="text-align:center;font-size:30px ">Saída de Estoque.</h1>
</div>

<form method="GET" class="form">

<div class="form-group">
  <strong for="">Quantidade :</strong>
  <input type="number" name="quant" class="form-control"  aria-describedby="helpId">
</div>

<div class="form-group">
  <strong for="">ID  :</strong>
  <input type="text" name="id" class="form-control"  aria-describedby="helpId">
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#box">
  Launch
</button>




<!-- Modal -->
<div class="modal fade" id="box" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar Saida de  Produto?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Salvar">
      </div>
    </div>
  </div>
</div>

</form>
<br/>
<?php
require 'class/saida.class.php';

$user= new saida();

if(!empty($_GET['quant'])) {
    $quant = $_GET['quant'];
    $id = $_GET['id'];
  
    $user->saidaEstoque($quant, $id);

    header("Location:index.php");
  }


?>
<table class="table table-info">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PRODUTO</th>
      <th scope="col">Quantidade em Estoque</th>
    </tr>
  </thead>

  <?php
require 'class/entrada.class.php';

$user= new enter();

$lista= $user->getLista();
foreach($lista as $item):
?>

  <tbody>
    <tr>
      <td><?php echo $item['id'] ?></td>
      <td><?php echo $item['produto'] ?></td>
      <td><?php echo $item['quantidade'] ?></td>
    </tr>
<?php endforeach; ?>

  </tbody>
</table>
<div class="alert alert-warning" role="alert">
    <strong>Aviso !!</strong>
    <p>A Tabela e Atualizada automaticamente após a exclusão.</p>
</div>

</div>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>    
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>