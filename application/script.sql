-- Criando o banco de dados
CREATE DATABASE CRUD;

-- Criando a tabela de colaboradores
CREATE TABLE `colaborador` (
	`cpf` INT NOT NULL,
	`nome` VARCHAR(150) NOT NULL DEFAULT '',
	`nascimento` DATE NOT NULL DEFAULT '',
	`sexo` CHAR(50) NOT NULL DEFAULT '',
	`telefone` INT NOT NULL DEFAULT 0,
	`telefixo` INT NULL DEFAULT 0,
	`email` VARCHAR(255) NOT NULL,
	`senha` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`cpf`)
)
;
