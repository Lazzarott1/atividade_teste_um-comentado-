<?php

// inicia sessão
    session_start();

    // chama o arquivo que executa a conexão com o banco de dados
    include("infra/db/connect.php");

    //ve se o forms foi enviado com o método POST
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        // guarda os valores digitados nos respectivos campos
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        // monta a query para buscar o registro no banco de dados, com os dados digitados pelo usuario
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        //executa a consulta no db
        $resultado = $conn->query($sql);

        //verifica se a consulta trouxe algum registro
        if ($resultado->num_rows > 0){

            //guarda o nome do usuario na sessão(como se ele estivesse autenticado)
            $_SESSION["usuario"] = $usuario;

            //direciona o usuario para a home
            header("Location: public/home.php");
            exit();
        }else{

            // se não trouxer nenhum registro, guarda a mensagem de erro para que seja exibida
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>

<!-- FORMULARIO HTML -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Sitema de Login Simples</h1>

    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
        
            if(isset($erro)){
                echo $erro;
            };
        
        ?>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>