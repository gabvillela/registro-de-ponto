<?php 
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) { 

    if(strlen($_POST['email']) ==0) { 
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Prencha sua senha";
    } else { 

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'"; 
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuarios = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) { 
                session_start();
            }

            $_SESSION['1'] == $usuario['usuario1'];
            $_SESSION['2'] == $usuario['usuario2'];

            header("Location: painel.php");

        } else { 
            echo "Falha ao logar! E-mail ou senhas incorretos";
        } 
    }
}
md5($senha);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>Email</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="text" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>