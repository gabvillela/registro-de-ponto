<?php

date_default_timezone_set('America/Sao_Paulo');

$horario_atual = date ("H:i:s");

var_dump($horario_atual);

$data_entrada = date('Y/m/d');

include_once "conexao.php";

$id_usuario = 1;

$query_ponto = "SELECT id, saida_intervalo, retorno_intervalo, saida
                FROM ponto 
                WHERE usuario_id =:usuario_id
                ORDER BY id DESC
                LIMIT 1";

$result_ponto = $conn->prepare($query_ponto);

$result_ponto->bindParam(':usuario_id', $id_usuario);

$result_ponto->execute();

if(($result_ponto) and ($result_ponto->rowCount() != 0)) { 
    $row_ponto = $result_ponto->fetch(PDO::FETCH_ASSOC);
    var_dump($row_ponto);
}else{ 
    echo "Nenhum ponto encontrado! <br>";
}