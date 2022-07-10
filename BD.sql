create database if not exists portfolio;
use portfolio;

create table if not exists contato (
idcontato int not null auto_increment,
nome varchar(30) not null,
email varchar(50),
telefone varchar(64) not null,
mensagem varchar (100) not null,
PRIMARY KEY(idcontato));

select * from contato;
