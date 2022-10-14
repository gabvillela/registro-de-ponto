<?php

if(!isset($_SESSION)) { 
    session_start();
}

date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h2>Bem vindo ao Painel</h2>

    <a href="registrar-ponto.php">Registrar</a>

    <p id="horario"><?php echo date("d/m/Y H:i:s") ?></p>

    <script>

        var apHorario =document.getElementById("horario");

        function atualizarHorario (){
          var data = new Date().toLocaleString("pt-br", {
            timeZone: "America/Sao_Paulo"
           });
           var formatarData = data.replace(", ", " - ");
           apHorario.innerHTML = formatarData;
        }

        setInterval(atualizarHorario, 1000);
    </script>
    
</body>
</html>