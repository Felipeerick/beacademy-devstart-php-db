CREATE DATABASE db_escola;

USE db_escola;

CREATE TABLE tb_professor(
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) NOT NULL UNIQUE,
  email VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE tb_alunos(
   nome VARCHAR(100) not null,
   cpf char(11) not null UNIQUE,
   email VARCHAR(255) not null UNIQUE,
   matricula VARCHAR(10) not null
);

CREATE TABLE tb_disciplina(
   nome VARCHAR(100) not null,
   id int(10) not null primary key AUTO_INCREMENT,
   descricao VARCHAR(30) not null,
   cargaHoraria VARCHAR(10) not null
);

CREATE TABLE tb_curso(
   nome VARCHAR(100) not null ,
   id int(11) not null  UUID,
   descricao VARCHAR(30) not null,
   cargaHoraria VARCHAR(10) not null
);

insert into tb_professor(nome, email, cpf) 
values ("Felipe", "ric44@gmail.com", "333.333.33");

insert into tb_professor(nome, email, cpf) 
values ("Bruna", "brun4@gmail.com", "437.222.11");

insert into tb_alunos(matricula,nome, email, cpf )
values("1", "Luiza", "Luiza@gmail.com", "332.111.11")

insert into tb_alunos(matricula,nome, email, cpf )
values("2", "Luis", "Luis@gmail.com", "212.161.91")


SELECT * FROM tb_professor;
