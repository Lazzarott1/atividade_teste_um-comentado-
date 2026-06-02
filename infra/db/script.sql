-- cria o banco de dados
CREATE DATABASE sistema_simples_m1;

-- especifica que o que faremos será referente a esse banco de dados
USE sistema_simples_m1;

-- cria a tabela usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY, -- cria a coluna id
    usuario VARCHAR(87) NOT NULL,-- cria a coluna usuario
    senha VARCHAR(255) NOT NULL-- cria a coluna senha
);

-- insere na tabela usuario, nas colunas usuario e senha, os valores admin e 123 respectivamente
INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');