create database db_store;

use db_store;

create table tb_category(
   id int(11) primary key not null AUTO_INCREMENT,
   name varchar(30) not null,
   description varchar(130) not null
);

create table products(
    id int(11) primary key AUTO_INCREMENT not null,
     name varchar(30) not null,
    description varchar(30) not null

);





 
insert into products(id, name, description,  photo) 
values(1, "Roupas sociais", "Roupas masculinas e femininas", "https://source.unsplash.com/random"),
(2, "Roupas de banho, masculinas e femininas", "bikinis, sungas etc",  "https://source.unsplash.com/random");

insert into tb_category(id, name, description) values(1, "informatica" ,"produtos de informatica e acessorios"), 
(2, "escritorio", "Canetas, Cadernos etc"), (3, "eletrônicos", "Sons, Celulares, TV etcs"),
(4, "Roupas", "Todos os tipos de roupas");