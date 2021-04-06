create database BANCO_PACIENTES;

use banco_pacientes;

create table pacientes(
	#dados pessoais
	nome varchar(50) not null,
    data_nascimento date not null,
    sexo char not null,
    escolaridade varchar(12) not null,
    profissao varchar(25) not null,
    rg varchar(25) not null,
    cpf varchar(11) not null,
    estadoCivil varchar(10) not null,
    natu varchar(50) not null,
    estado_nasc varchar(2) not null,
    tel_contato varchar(11) not null,
    nome_pai varchar(50) not null,
    nome_mae varchar(50) not null,
    natu_pai varchar(50) not null,
    natu_mae varchar(50) not null,
    
    #dados fisicos
    peso float not null,
    altura float not null,
    cor varchar(6) not null,
    primary key (cpf,rg)
);

create table enderecos(
	cpf_paciente varchar(11) not null,
    rua varchar(50) not null,
    numero varchar(5) not null,
    complemento varchar(20) not null,
    bairro varchar(50) not null,
    cep varchar(8) not null,
    cidade varchar(50) not null,
    estado_mora varchar(2) not null,
    constraint paciEndereco foreign key (cpf_paciente) references pacientes(cpf),
    primary key (cpf_paciente)
);

show tables;

drop table enderecos;

select * from pacientes;
select * from enderecos;

select * from pacientes where (cpf=36700137645);


