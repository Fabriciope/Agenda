<?php
include_once "connection.php";

session_start();

$query = 'UPDATE contatos SET nome = :nome, telefone = :telefone, observacao = :observacao WHERE id = :id';

$query= $conn->prepare($query);
$query->bindValue(':id', $_SESSION['id']);
$query->bindValue(':nome',trim(ucfirst($_POST['nome'])));
$query->bindValue(':telefone',  intval($_POST['telefone']));
$query->bindValue(':observacao', trim($_POST['observacao']));
$query->execute();

$_SESSION['msg']= 'sucesso';

header(('location: ../index.php'));

