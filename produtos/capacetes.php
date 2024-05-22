<?php

$nome = "capacete";

if($nome == null) {
    header("Location: ../index.php");
}

$dbh = new PDO('mysql:host=localhost;dbname=epi', 'root', '');

$sth = $dbh->prepare('SELECT * FROM `produtos` WHERE `nome` LIKE :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

?>