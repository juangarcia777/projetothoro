<?php 
require 'config.php';

if (isset($_GET['id']) && empty($_GET['id'])== false) {
    $id = addslashes($_GET['id']);

    $sql = "DELETE FROM gestao WHERE id ='$id'";
    $sql = $pdo->query($sql);

    header("location:index.php");
}

?>