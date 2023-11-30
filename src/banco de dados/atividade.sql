create database atividade;
use atividade ;

create table users(
cd_user int auto_increment primary key,
username varchar(50) not null ,
email varchar(100) not null  unique,
password varchar(1000) not null
);