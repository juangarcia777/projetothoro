
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Esthoro</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<?php
include_once 'topo.php';
?>

<div id="loading">
    <img src="https://media.giphy.com/media/l0Iy29zHAcTFJ7jXO/giphy.gif" id="imagem" />
</div>
      <div id="conteudo" style="display: none">

<div class="container-fluid" style="background-color:#F9F9F9;padding-bottom:100px;">
  <div class="jumbotron bg-ligth">
      <h1 class="display-3">Cadastro de Produtos</h1>
      <p class="lead">Insira Abaixo novo produto</p>
     
  </div>

  <?php
  require 'class/cadastro.class.php';
  $user= new cadastro();
  
  if(!empty($_POST['produto'])) {
    $prod = $_POST['produto'];
    $quant = $_POST['quantidade'];

    $user->setProduto($prod, $quant);

  }


   ?>

<form method="POST">
 <div class="form-group">
   <label for="">Produto:</label>
   <input type="text"
     class="form-control" name="produto"  aria-describedby="helpId" placeholder="Insira Produto Aqui !">
   <small id="helpId" class="form-text text-muted">Os produtos podem ser 
   consultados no relatório.</small>
 </div>
 <div class="form-group">
   <label for="">Quantidade:</label>
   <input type="text"
     class="form-control" name="quantidade"  aria-describedby="helpId" placeholder="Insira a quantidade aqui!">
   <small id="helpId" class="form-text text-muted">A quantidade é muito importante para Balanços.</small>
 </div>
 <button type="submit" class="btn btn-primary btn-block">Cadastrar</button><hr/>
    
    <div class="alert alert-warning" role="alert">
      <strong>Atenção!!</strong>
      <hr/>
      <small>O sistema gera um ID automaticamente ao produto, podendo ser consultado futuramente 
      na seção Relatórios.</small>
    </div>

    </form>

</div>

    <script type="text/javascript" src="assets/js/script.js"></script>    
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>    
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>