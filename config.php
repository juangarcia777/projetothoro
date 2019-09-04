<?php 
try {
    $pdo = new PDO("mysql:dbname=empresa;host=localhost","root",""); 
} catch (PDOEXception $e) {
    echo "Falhou.2.".$e->getMessage();
    exit;
}
?>