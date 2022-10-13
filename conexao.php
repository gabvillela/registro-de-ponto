<?php

$usuario = 'root';
$senha = '';
$database = 'registro-ponto';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) { 
    die("Falha ao conectar ao bando de dados: " .$mysqli->error);
}
?>