<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THORO-BT</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>
   <div class="container">
    <?php
      require_once 'topo.php';  
       ?>
        <div id="loading">
    <img src="https://media.giphy.com/media/l0Iy29zHAcTFJ7jXO/giphy.gif" id="imagem" />
</div>
      <div id="conteudo" style="display: none">

         <!--Tabela de Produtos  -->
          <table class="table table-bordered table-hover">
             <thead class="thead-inverse table-dark">
                <tr>
                    <th>ID </th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                </tr>
                </thead>

                <?php 
               include 'class/relatorio.class.php';
                 $user= new Relatorio();
                  $tabela = $user->getTabela();
                    foreach($tabela as $lista):
                 ?>

                <tbody>
                    <tr>
                    
                        <td><?php echo $lista['id']; ?></td>
                        <td><?php echo $lista['produto']; ?></td>
                        <td><?php echo $lista['quantidade']; ?></td>
                    </tr>
                </tbody>
           <?php endforeach; ?>

        </table>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/script.js"></script>        
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>    
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
