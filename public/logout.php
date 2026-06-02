<?php
// inicia sessão
    session_start();

// desloga o usuario 
    session_destroy();

// redireciona o usuario para a tela de login
    header("Location: ../index.php");
    exit();

?>