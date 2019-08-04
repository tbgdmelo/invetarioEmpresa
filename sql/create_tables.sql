-- SCRIPT DE CRIAÇÃO DAS TABELAS
-- ter 19 JULHO 2019
-- Ultima atualização: 01/08/2019
-- Thiago Braga de Melo - tbgdemelo@gmail.com
-- Version: 3.0

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

-- -----------------------------------------------------
-- TABELA COM AS INFO DOS LOCAIS DA FILIAL
-- -----------------------------------------------------
CREATE TABLE grupo(
	cod_filial INT AUTO_INCREMENT NOT NULL,
	nome VARCHAR (40) NOT NULL,
	cidade VARCHAR(40),
	PRIMARY KEY (cod_filial)
);

-- -----------------------------------------------------
-- TABELA COM AS INFO DOS EQUIPAMENTOS
-- -----------------------------------------------------
CREATE TABLE ativos(
                       n_etiqueta VARCHAR(14) NOT NULL UNIQUE,
                       nome_eqp VARCHAR(50),
                       classe VARCHAR(50),
                       serial_eqp VARCHAR (25) NOT NULL UNIQUE,
                       fabricante VARCHAR (30),
                       modelo VARCHAR (20),
                       nota_fiscal VARCHAR(10),
                       data_aquisicao DATE,
                       custo VARCHAR(14),
                       vida INT,
                       comentario VARCHAR (400),
                       id_filial INT,
                       id_funcionario INT,
                       id_comodato INT,
                       id_setor INT,
                       id_fornecedor INT,

                       FOREIGN KEY (id_filial) REFERENCES grupo (cod_filial),
                       FOREIGN KEY (id_funcionario) REFERENCES  funcionarios (cod_func),
                       FOREIGN KEY (id_comodato) REFERENCES  comodatos(cod_comod),
                       FOREIGN KEY (id_setor) REFERENCES  setores(cod_set),
                       FOREIGN KEY (id_fornecedor) REFERENCES  fornecedores(cod_forn),

                       PRIMARY KEY (n_etiqueta)
);
