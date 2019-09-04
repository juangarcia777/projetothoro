<?php
session_start();
require 'class/login.class.php';
$user = new login();

if(!empty($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $user->logar($usuario,$senha);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Esthoro</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="background-color:#C5E0DC">
<div class="container" >

<div id="carouselId" class="carousel slide bg-info" style="margin-top:25px" data-ride="carousel">
  
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    <h2 style="text-align:center" class="font-italic ">Bem-Vindo ao Projeto THORO ! </h2>
    </div>
    <div class="carousel-item">
      <h2 style="text-align:center" class="font-italic text-dark">Desenvolvido por &copySOFTECK .</h2>
    </div>
  </div>
  
</div>


<div class="jumbotron d-flex" style="margin-top:50px">

<div class="card" style="width: 18rem;">
  <img src="img/thoro.png" class="card-img-top" alt="...">
  <img src="img/logosof.png" class="card-img-top" alt="...">

</div>

<form method="POST" style="width:250px;margin-left:100px;">
<div class="form-group">
  <label for="">Usuário :</label>
  <input type="text" class="form-control" name="usuario" >
</div>
<div class="form-group">
  <label for="">Senha :</label>
  <input type="password" class="form-control" name="senha" >
</div>
<button class="btn btn-primary">Enviar</button>
</form>

</div>

</div>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>    
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>