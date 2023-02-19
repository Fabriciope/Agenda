<?php
include_once "helpers/connection.php";

$query= 'SELECT * FROM pessoa';
$stmp= $conn->query($query);
$stmp->execute();
$registros= $stmp->fetchAll(PDO::FETCH_ASSOC);