create database BANCO_PACIENTES;

use banco_pacientes;

create table pacientes(
	nome varchar(50),
    data_nascimento date,
    sexo char,
    cpf varchar(11)
);

show tables;

select * from pacientes;
