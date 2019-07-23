-- SCRIPT DE CRIAÇÃO DAS TABELAS
-- ter 19 JULHO 2019
-- Ultima atualização: 19/07/2019
-- Thiago Braga de Melo - tbgdemelo@gmail.com

-- -----------------------------------------------------
-- TABELA COM OS LOGINS NO SISTEMA
-- -----------------------------------------------------
CREATE TABLE logins ( 
	login VARCHAR(50) NOT NULL UNIQUE, 
	senha VARCHAR(50) NOT NULL ,
	PRIMARY KEY (login)
);

-- -----------------------------------------------------
-- TABELA COM AS INFO DOS EQUIPAMENTOS
-- -----------------------------------------------------
CREATE TABLE ativos(
	n_etiqueta VARCHAR(14) NOT NULL UNIQUE,
	nome_eqp VARCHAR(50),
    classe VARCHAR(50),
	serial_eqp VARCHAR (25) NOT NULL UNIQUE,
	fabricante VARCHAR (30) NOT NULL,
	modelo VARCHAR (20),
	cor VARCHAR (15),
    nota_fiscal VARCHAR(10),
    data_aquisicao DATE,
    custo DOUBLE,
    vida INT,
    comentario VARCHAR (400),
	PRIMARY KEY (n_etiqueta)
);

-- -----------------------------------------------------
-- TABELA COM AS INFO DOS FUNCIONARIOS
-- -----------------------------------------------------
CREATE TABLE funcionarios(
	cod_func INT AUTO_INCREMENT NOT NULL,
	nome VARCHAR (30) NOT NULL,
	sobrenome VARCHAR (30),
	setor VARCHAR (30),
	funcao VARCHAR (50),
	PRIMARY KEY (cod_func)
);

-- -----------------------------------------------------
-- TABELA COM AS INFO DOS COMODATOS
-- -----------------------------------------------------
CREATE TABLE comodatos(
	cod_comod INT AUTO_INCREMENT NOT NULL,
	nome VARCHAR (40) NOT NULL,
	cnpj VARCHAR (20),
	PRIMARY KEY (cod_comod)
);

-- -----------------------------------------------------
-- TABELA COM AS INFO DOS FORNECEDORES
-- -----------------------------------------------------
CREATE TABLE fornecedores(
	cod_forn INT AUTO_INCREMENT NOT NULL,
	nome VARCHAR (40) NOT NULL,
	cnpj VARCHAR (20),
	PRIMARY KEY (cod_forn)
);

-- -----------------------------------------------------
-- TABELA COM AS INFO DOS SETORES
-- -----------------------------------------------------
CREATE TABLE setores(
	cod_set INT AUTO_INCREMENT NOT NULL,
	nome VARCHAR (40) NOT NULL,
	PRIMARY KEY (cod_set)
);