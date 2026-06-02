<?php

// inicia sessão
session_start();

// ve se existe um usuario na sessão, se não existe, o usuario não esta logado
if(!isset($_SESSION["usuario"])){

    // direciona o usuario para a pagina de login
    header("Location: ../index.php");

    //impede o acesso as outras páginas
    exit();
}

// chama o arquivo que conecta o banco de dados
include("../infra/db/connect.php");

// ve se o forms foi enviado com o método POST
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // guarda os valores digitados nos respectivos campos
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    // monta a query para incluir o registro no banco de dados, com os dados digitados pelo usuario
    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  

    //executa o comando SQL e exibe mensagem de se deu certo ou não
    if($conn->query($sql) === TRUE){
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>";
    }

};

?>

<!-- FORMULÁRIO HTML -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?></h3>
    <a href="logout.php"> Sair</a>

    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
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
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
    <?php
    
    // puxa a tabela dos usuarios
    include("components/table.php")

    ?>



</body>
</html>