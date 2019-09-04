<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THORO-BT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/media.css">
   
</head>
<body style="background-color:#88aac4">
<div class="container">

<?php 
session_start();
require 'config.php';  

if(!empty($_POST['user'])) {
    $user = $_POST['user'];
    $senha = $_POST['senha'];

    $sql = "SELECT id FROM usuarios WHERE user='$user' AND senha='$senha'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0) {
        $info = $sql->fetch();
      
        $_SESSION['logado'] = $info['id'];
        header("location:index.php");
        exit;



    }


}
?>



<div class="jumbotron"  style="margin-top:100px">
<div class="d-flex justify-content-between" id="caixalogin">
<img src="thoro.png" width="500" height="auto">



<form method="POST" >
<div class="form-group" style=" padding:10px;box-shadow:5px 5px 5px #CCC;width:350px;">
	<strong>User:</strong> <br/>
	<input type="text" name="user" class="form-control form-control-md"/><br/><br/>

	<strong>Senha:</strong><br/>
	<input type="password" name="senha" class="form-control form-control-md"/><br/><br/>

	<input type="submit" value="Entrar" class="btn btn-primary btn-block" /> 
    

      </div>
    </form>
    </div>
    </div>
    


</div>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>

