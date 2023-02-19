<?php
include_once "../helpers/connection.php";

if(empty($_POST['nome']) || empty($_POST['telefone']) || mb_strlen($_POST['nome'], "UTF-8") < 3 || strlen($_POST['telefone']) != 14){
    die('erroCadastro');
}
$query= "INSERT INTO pessoa(nome, telefone, observacao) VALUES(:nome, :telefone, :observacao)";
$stmp= $conn->prepare($query);
$stmp->bindValue(":nome", $_POST['nome']);
$stmp->bindValue(":telefone", $_POST['telefone']);
$stmp->bindValue(":observacao", $_POST['observacao']);
if($stmp->execute()){
    echo 'registradoComSucesso';
}else{
    echo 'não registrado';
    echo '<pre>';
    print_r($stmp->errorInfo());
    echo '</pre>';
}