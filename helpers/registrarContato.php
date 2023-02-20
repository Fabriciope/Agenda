<?php

include_once "connection.php";

session_start();

$validacaoContato= empty($_POST['nome']) || empty($_POST['telefone']) || mb_strlen($_POST['nome'], "UTF-8") < 3 ? true : false;
if($validacaoContato){
    $_SESSION['msg']= 'erro';
    $_SESSION['nomeErro']= $_POST['nome'];
    $_SESSION['telefoneErro']= $_POST['telefone'];
    $_SESSION['observacaoErro']= $_POST['observacao'];
    header('location: ../addContato.php');
    die();
}

$query = 'INSERT INTO contatos(nome, telefone, observacao) VALUES(:nome, :telefone, :observacao)';

$query= $conn->prepare($query);
$query->bindValue(':nome',trim(ucfirst($_POST['nome'])));
$query->bindValue(':telefone',  intval($_POST['telefone']));
$query->bindValue(':observacao', trim($_POST['observacao']));
$query->execute();

$_SESSION['msg']= 'sucesso';

unset($_SESSION['nomeErro']);
unset($_SESSION['telefoneErro']);
unset($_SESSION['observacaoErro']);

header('location: ../addContato.php');
