<?php
try{
    $host= 'localhost';
    $dbName= 'agenda';
    $user= 'root';
    $pass= '';
    
    $conn= new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
    
}catch(PDOException $e){
    echo 'conecção com o banco não realizado. Erro: ' . $e->getMessage();
}