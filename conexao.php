<?php

$usuario = 'root';
$senha = '';
$database = 'registro-ponto';
$host = 'localhost';
$conn = new PDO ("mysql:host=$host;database=" . $database, $usuario, $senha);
$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) { 
    die("Falha ao conectar ao bando de dados: " .$mysqli->error);
}
