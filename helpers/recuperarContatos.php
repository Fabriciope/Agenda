<?php
include_once "helpers/connection.php";

$query= 'SELECT * FROM contatos';
$stmp= $conn->prepare($query);
$stmp->execute();
$contatos= $stmp->fetchAll(PDO::FETCH_ASSOC);
