CREATE DATABASE KanbanKaua;

USE KanbanKaua;

CREATE TABLE usuario(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome varchar(45) NOT NULL,
    email varchar(220) NOT NULL UNIQUE
    senha varchar(45) NOT NULL
);

CREATE TABLE tarefa(
	id INT AUTO_INCREMENT PRIMARY KEY,
    descricao varchar(220) NOT NULL,
    setor varchar(220) NOT NULL,
    prioridade ENUM ('baixa' ,'media' ,'alta'),
    cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
    stats ENUM ('afazer' ,'fazendo' ,'pronto'),
    
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);