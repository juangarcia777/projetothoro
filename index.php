<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="90">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THORO-BT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/media.css"> 
    
</head>
<body style="background-image:url('thoro.png');background-size:100,100;
background-position:center;padding-bottom:20px;">

<div class="container">

<?php
session_start();
require 'config.php';

if(empty($_SESSION['logado'])) {
    header("location:login.php");
    exit;
}

?>


 
<button class="btn btn-primary" style="margin-top:10px">
<a href="sair.php"><h4 style="text-decoration:none;color:#FFF;"><-Finalizar Sessão</h4></a>
</button>
  <hr/>

  <div class="jumbotron" style="border:10px outset #000;height:250px" id="caixa">

  <div class="d-flex justify-content-between flex-column align-items-center">

<div style="height:40px" class="d-flex">
  <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" id="slide">
    <div class="carousel-item active">
    <h1 style="color: #4287ae;font-family:Algerian;font-size:30px">Bem-Vindo ao Thoro !</h1>
     </div>
    <div class="carousel-item">
    <h1 style="color: #4287ae;font-family:Algerian;font-size:20px">Onde voçe tem o poder na mão.</h1>
      </div>
    <div class="carousel-item">
    <h1 style="color: #4287ae;font-family:Algerian;font-size:20px">Saiba Mais em <small>www.softecksistems.epizy.com</small></h1>
     </div>
  </div>
</div>
</div>
<div class="default" style="height:50px;padding-bottom:20px;">
<img src="thoro.png" width="200" height="60">
</div>

<strong>Data Atual</strong>

<div class="hora" id="h1">
    
<?php
date_default_timezone_set('America/Sao_Paulo');
$dataatual = date('d-m-Y //  H:i');
echo "<p class='text-dark' style='font-size:15px;font-family:Roboto'>".$dataatual."</p>";
?>
     </div>
  </div>
</div>



<div class="btn-group d-flex justify-content-center">

<button class="btn btn-primary btn-md">
<a href="cadastrar .php" style="text-decoration:none;color:#FFF;text-shadow:1px 1px 1px #000">
NOVO COLABORADOR
</a></button>

<button class="btn btn-primary btn-md">
<a href="folha.php" style="text-decoration:none;color:#FFF;text-shadow:1px 1px 1px #000">
FOLHA DE PAGAMENTO
</a></button>

<button class="btn btn-primary btn-md">
<a href="funcionarios.php" style="text-decoration:none;color:#FFF;text-shadow:1px 1px 1px #000">
FUNCIONARIOS
</a></button>

<button class="btn btn-primary btn-md">
<a href="thoro estoque/login.php" style="text-decoration:none;color:#FFF;text-shadow:1px 1px 1px #000">
ESTOQUE
</a></button>

<button class="btn btn-primary btn-md" >
<a href="http://bancoruan.epizy.com/login.php" style="text-decoration:none;color:#FFF;text-shadow:1px 1px 1px #000">
CAIXA
</a></button>

  </div>

</div>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>


</body>
</html>





