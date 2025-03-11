CREATE DATABASE IF NOT EXISTS sistema_usuarios_prod;
USE sistema_usuarios_prod;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO usuarios (nome, email, senha) VALUES
('João Silva', 'joao.suporte@empresa.com', '$2y$10$WLRM8hN.8UOq.Eul6IqjE.8z4tLd7fKjZ9VcB1qH3wX1aGvQ7rQ1O'),
('Ana Oliveira', 'ana.rh@companhia.com', '$2y$10$5VQHjZJ7rS9K8T3m2p1NQO1W4eX6vY8uA0bC2dF3gH4iL5kNlP9S'),
('Carlos Costa', 'carlos.ti@grupo.com', '$2y$10$8RSTuVWXyZAB1CD2E3FGH.4J5K6L7M8N9O0P1Q2R3S4T5U6V7W8X');