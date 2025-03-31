<?php
include('connect.php');
if(isset($_POST['usuario']) && isset($_POST['senha'])) {

    // Verifica qual botão foi clicado
    if(isset($_POST['cadastrar'])) {
        // Redireciona para a tela de cadastro
        header("Location: cadastro.php");
        exit();
    }

    // Exibe mensagens de erro para login
    if(strlen($_POST['usuario']) == 0) {
        echo "Usuário não informado";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $sql_code = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header("Location: painel.php");
            exit();
        } else {
            echo "Falha ao logar! Usuário ou senha incorretos";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, white, black);
        }
        .tela-login{
            background-color: rgba(0, 0, 0, 0.8);
            position:absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 60px;
            border-radius: 30px;
            color: whitesmoke;
        }

        input{
            padding: 16px;
            border: none;
            outline: none;
            font-size: 18px;
            border-radius: 12px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            outline: none;
            padding: 16px;
            width: 100%;
            border-radius: 12px;
            color: white;
            font-size: 20px;
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
      
        .esqsenha{
            padding-left:25px;                   
        }

        .lembrardemim{
            padding-right:35px;
        }
        .box{
            font-size: 11px; 
        }
    </style>
</head>
<body>
    <div class="tela-login">
    <h1>Login</h1>
    <form action="" method="POST">
        <br>
            <input type="text" name="usuario" placeholder="Usuário">
            <br><br>      
            <input type="password" name="senha" placeholder="Senha">
            <br><br>   
            <div class="box">
                
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
                 
                
                <a href="esqueci_senha.php" style="color: white" class="esqsenha">Esqueci minha senha</a>
                
            </div>
            
            <br>
            <button type="submit" name="entrar">Entrar</button>
            

            <br><br>
            <button type="submit" name="cadastrar">Cadastrar</button>
           
           
    </div>
</body>
</html>




