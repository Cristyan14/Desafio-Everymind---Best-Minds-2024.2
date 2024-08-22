<?php


$dbHost = 'localhost:3306';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'nunes_sports';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno){
    echo "Erro";
}
else{
    //echo "Deu certo";
}




?>