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

<?php
require 'config.php';


if(isset($_POST['nome']) && empty($_POST['nome'])== false){

$nome = addslashes($_POST['nome']);
$rg = $_POST['rg'];
$data = $_POST['nascimento'];
$funcao = $_POST['funcao'];
$faixa = $_POST['faixa'];
$salario = $_POST['salario'];
$admis = $_POST['data_admissao'];

$sql = "INSERT INTO gestao (nome,rg,data_nasc,funcao,faixa_salarial,salario,data_admissao)
VALUES ('$nome','$rg','$data','$funcao','$faixa','$salario','$admis')";
$sql = $pdo->query($sql);

header("Location:index.php");
}

?>
<h1 class="text-info text-center" style="text-shadow:1px -1px 1px #FFF">Adicionar Novo Colaborador</h1>
<div style="border:1px dotted #000;padding:20px;" class="bg-info">
<form  method="POST">
  <div class="form-row">
    <div class="col">
    <h6>Nome :</h6>
        <input type="text" class="form-control" name="nome" placeholder="NOME">
    </div>
    <div class="col">
    <h6>RG :</h6>
        <input type="text" class="form-control" name="rg" placeholder="RG">
    </div>

  </div>
  <hr/>
  <div class="form-row">
    <div class="col">
          <h6>Data de Nascimento :</h6>
        <input type="date" class="form-control" name="nascimento" placeholder="NASCIMENTO">
    </div>
    <div class="col">
    <h6>Função :</h6>
        <input type="text" class="form-control" name="funcao" placeholder="FUNÇÃO">
    </div>

  </div>
  <hr/>

  <div class="form-row">
    <div class="col">
    <h6>Faixa Salarial :</h6>
        <input type="number" class="form-control" name="faixa" placeholder="FAIXA SALARIAL">
    </div>
    <div class="col">
    <h6>Salario :</h6>
        <input type="text" class="form-control" name="salario" placeholder="SALÁRIO">
    </div> 
    <div class="col">
    <h6>Data de Admissão :</h6>
        <input type="date" class="form-control" name="data_admissao" placeholder="DATA DE ADMISSÃO">
    </div>

       </div>
   

</div>
<br/>
<button type="submit" class="btn btn-primary btn-block">ENVIAR</button>
</form>
<hr/>
<button class="btn btn-dark"><a href="index.php">Voltar</a></button>

</div>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>






