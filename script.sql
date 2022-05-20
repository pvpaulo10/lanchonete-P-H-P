CREATE DATABASE projeto;
USE projeto;

CREATE TABLE user(
    cd INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    foto VARCHAR(120) NULL
    );


CREATE TABLE categoria(
    cd INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200)
);
CREATE TABLE produtos(
    cd INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200),
    foto VARCHAR(200),
    valor DECIMAL(10,2),
    descricao VARCHAR(120),
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES categoria(cd) 
);
