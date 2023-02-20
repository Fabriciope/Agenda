<?php
include_once "connection.php";

$query= 'DELETE FROM contatos WHERE id = :id';
$query= $conn->prepare($query);
$query->bindValue(':id', $_GET['id']);
$query->execute();
header('location: ../index.php');