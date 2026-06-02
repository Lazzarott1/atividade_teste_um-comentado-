# Sistema de Login e Cadastro de Usuários
## Nome do Projeto

Atividade CRUD 01

## Objetivo da Aplicação

O objetivo deste projeto é aprender como é feita a autenticação de usuários utilizando PHP, sessões e banco de dados. A aplicação permite que usuários sejam cadastrados, realizem login, acessem áreas protegidas do sistema e efetuem logout de forma segura.

## Tecnologias Utilizadas
PHP
HTML
SQL
Servidor Web (Apache/XAMPP)

## Estrutura Básica dos Arquivos

├── infra
│   ├── db
│   │   ├── connect.php
│   │   └── script.sql
│   │
│   └── redes
│
├── public
│   ├── componentes
│   │   └── tabela.php
│   │
│   ├── home.php
│   └── logout.php
│
└── index.php

## Funcionamento Geral do Sistema
### Login

Na tela inicial, o usuário informa seu nome de usuário e senha. O sistema consulta o banco de dados para verificar se existe um registro correspondente.

Caso os dados estejam corretos:
Uma sessão é criada utilizando $_SESSION.
O usuário é redirecionado para a página principal do sistema.

Caso os dados estejam incorretos:
Uma mensagem de erro é exibida informando que o usuário ou senha são inválidos.

### Cadastro de Usuários

A página de cadastro recebe os dados enviados pelo formulário através do método POST.

O sistema:

Captura os dados informados.
Executa um comando SQL INSERT.
Armazena o novo usuário na tabela usuarios.
Exibe uma mensagem informando o sucesso ou falha da operação.

### Controle de Acesso

As páginas protegidas verificam se existe uma variável de sessão contendo o usuário autenticado.

Se a sessão não existir:
O usuário é redirecionado para a página de login.

Isso impede o acesso direto às páginas internas sem autenticação.

### Listagem de Usuários

A aplicação executa um comando SQL SELECT * FROM usuarios para buscar todos os usuários cadastrados.

Os dados retornados são percorridos utilizando o método fetch_assoc(), que transforma cada registro em uma array .

As informações são exibidas em uma tabela HTML.

### Logout

Ao clicar em sair:

A sessão é iniciada.
Todos os dados da sessão são destruídos utilizando session_destroy().
O usuário é redirecionado para a tela de login.

### Principais Aprendizados Obtidos

Durante a análise do código foi possível compreender diversos conceitos importantes do desenvolvimento com PHP:

Utilização de sessões para controle de autenticação.
Integração entre PHP e banco de dados MySQL.
Execução de comandos SQL (SELECT e INSERT).
Utilização do método query() para consultas.
Utilização do método fetch_assoc() para leitura de registros.
Redirecionamento de páginas utilizando header().
Controle de acesso a páginas protegidas.
Estrutura básica de um sistema de login e cadastro.
