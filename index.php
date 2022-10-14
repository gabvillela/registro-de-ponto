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
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="fav.ico" type="image/x-icon">
</head>
<body>
    <main>
    <div class="left-login">
            <h1>Login</h1>
            <img src="taken-animate.svg" alt="imagem/svg" class="left-login-image">
        </div>
        <div class="right-login">
            <form action="" method="POST" class="right-login">
                <div class="card-login">
                    <div class="text-field">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="E-mail">
                    </div>
                    <div class="text-field">
                        <label>Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                        <button type="submit" class="btn-login">Entrar</button>
                    </div>
            </form>
        </div>
    </main>
</body>
</html>