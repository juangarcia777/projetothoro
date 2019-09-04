<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THORO-BT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   
</head>
<body style="background-color:purple">
<div class="container">

<?php 
require 'config.php';

$id = 0;

if(isset($_GET['id']) && empty($_GET['id']==false)) {
    $id = addslashes($_GET['id']);
    $sql = "SELECT * FROM gestao WHERE id= '$id'";
    $sql= $pdo->query($sql);
    if($sql->rowCount()>0) {
        $dado = $sql->fetch();
    } else {
        header("location:index.php");
    } 
    
}
if (isset($_POST['nome']) && empty($_POST['nome'])==false) {
$nome = addslashes($_POST['nome']);
$rg = $_POST['rg'];
$data = $_POST['nascimento'];
$funcao = $_POST['funcao'];
$faixa = $_POST['faixa'];
$salario = $_POST['salario'];
$admis = $_POST['data_admissao'];

$sql = "UPDATE gestao SET nome='$nome', rg='$rg', data_nasc='$data', funcao='$funcao', faixa_salarial='$faixa',salario='$salario',data_admissao='$data'
WHERE id='$id'";
$sql = $pdo->query($sql);

header("location:index.php");
} 
?>
<a href="index.php" ><button class="btn btn-primary" style="margin-top:15px">Voltar</button></a>
<hr/>
<form method="POST">

<div class="form-group" style="border:1px solid #000;padding:20px;margin-top:50px;background-color:#CCC">

<strong>Nome:</strong> </br>
<input type="text" class="form-control" name=nome value="<?php echo $dado['nome'];?>"/></br></br>
<strong>RG :</strong></br>
<input type="text" class="form-control" name=rg value="<?php echo$dado['rg'];?>"/></br></br>
<strong>Data de Nascimento:</strong></br>
<input type="date" class="form-control" name=nascimento value="<?php echo $dado['data_nasc'];?>"/></br></br>
<strong>Cargo :</strong>
<input type="text" class="form-control" name=funcao value="<?php echo $dado['funcao'];?>"/></br></br>
<strong>Faixa Salarial :</strong></br>
<input type="number" class="form-control" name=faixa value="<?php echo $dado['faixa_salarial'];?>"/></br></br>
<strong>Salario :</strong></br>
<input type="text" class="form-control" name=salario value="<?php echo $dado['salario'];?>"/></br></br>
<strong>Data de Admissão:</strong></br>
<input type="date" class="form-control" name=data_admissao value="<?php echo $dado['data_admissao'];?>"/></br></br>
<input type="submit" class="btn btn-primary btn-block" value="Atualizar">

</div>

</form>



</div>
</body>
</html>



