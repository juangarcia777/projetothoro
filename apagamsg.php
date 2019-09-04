<?php
require 'config.php';

$sql = "DELETE FROM comentarios ORDER BY data_msg DESC LIMIT 1";
$sql = $pdo->query($sql);


header("Location:folha.php");

?>