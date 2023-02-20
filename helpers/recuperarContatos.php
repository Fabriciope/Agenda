<?php
include_once "helpers/connection.php";

$query= 'SELECT * FROM contatos ORDER BY id DESC';
$query= $conn->query($query);
$query->execute();
$contatos= $query->fetchAll(PDO::FETCH_ASSOC);


$idGet= isset($_GET['id'])? $_GET['id'] : '';
$query= 'SELECT * FROM contatos WHERE id = :id';
$query= $conn->prepare($query);
$query->bindValue(':id', $idGet);
$query->execute();
$contatoAtualizar= $query->fetch(PDO::FETCH_ASSOC);
