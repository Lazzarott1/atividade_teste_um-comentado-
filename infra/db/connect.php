<?php
//declaramos as variáveis que usaremos como parâmetros para se conectar com o db
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples_m1";

//estabelecemos conexão com o db e salvamos essa conexão em um avariável 
    $conn = new mysqli($host,$user,$pass,$db);

//se a a conexão retornar ERRRO, coloca na mensagem de erro, o texto Erro na conexão!, senão printa no console que Banco conectado com sucesso!
    if($conn->connect_error){
        die("Erro na conexão!");
    }else{
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?>