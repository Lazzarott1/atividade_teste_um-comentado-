<!-- titulo da tabela -->
<h4>Usuários Cadastrados</h4>

<!-- configuração da tabela -->
<table border="1" cellpadding="3">

<!-- declara as colunas da tabela -->
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    
    //guarda o select que puxa a tabela usuarios 
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    // executa a consulta no db e salva o resultado na variável
    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    // percorre cada linha da consulta e transforma em uma array
    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

        // traz uma linha na tabela para cada usuário encontrado
        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                </tr>
        ";

    }
    
    ?>

    


</table>