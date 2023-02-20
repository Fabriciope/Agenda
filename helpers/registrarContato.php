<?php
include_once "connection.php";

session_start();
echo '<pre>';
print_r($_POST);
echo '</pre>';

$validacaoContato= empty($_POST['nome']) || empty($_POST['telefone']) ? true : false;
if($validacaoContato){
    $_SESSION['msg']= 'erro';
    header('location: ../addContato.php');
    die();
}



$query = 'INSERT INTO contatos(nome, telefone, observacao) VALUES(:nome, :telefone, :observacao)';
$stmp= $conn->prepare($query);
$stmp->bindValue(':nome', $_POST['nome']);
$stmp->bindValue(':telefone', $_POST['telefone']);
$stmp->bindValue(':observacao', $_POST['observacao']);
$stmp->execute();
$_SESSION['msg']= 'sucesso';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
header('location: ../addContato.php');
