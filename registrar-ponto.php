<?php

date_default_timezone_set('America/Sao_Paulo');
$horario_atual = date("H:i:s");
var_dump($horario_atual);

$data_entrada = date('Y:m:d');

include_once "conexao.php";

$id_usuario = 1;

$query_ponto = "SELECT id, saida_intervalo, retorno_intervalo, saida
    FROM pontos
    WHERE usuario_id =:usuario_id
    ORDER BY id DESC
    LIMIT 1";

$result_ponto = $conn->prepare($query_ponto);
//Substituir o link da QUERY pelo valor
$result_ponto->bindParam(':usuario_id', $id_usuario);
// Executar a QUERY
$result_ponto->execute();
// Verificar se encontrou algum registro no db
if(($result_ponto) and ($result_ponto->rowCOunt() != 0)) {
    // Leitura do registro
    $row_ponto = $result_ponto->fetch(PDO::FETCH_ASSOC);
    var_dump($row_ponto);
    // Nome da chave no array
    extract($row_ponto);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    
</body>
</html>