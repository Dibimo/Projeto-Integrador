create database BANCO_PACIENTES;

use banco_pacientes;

create table pacientes(
	#dados pessoais
	nome_paciente varchar(50) not null,
    data_nascimento date not null,
    sexo char not null,
    escolaridade varchar(12) not null,
    profissao varchar(25) not null,
    rg_paciente varchar(25) not null,
    cpf_paciente varchar(11) not null,
    estado_civil varchar(10) not null,
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
    primary key (cpf_paciente,rg_paciente)
);


create table enderecos(
	nome_paciente varchar (50) not null,
    cpf_paciente varchar(11) not null,
    rua varchar(50) not null,
    numero varchar(5) not null,
    complemento varchar(20) not null,
    bairro varchar(50) not null,
    cep varchar(8) not null,
    cidade varchar(50) not null,
    estado_mora varchar(2) not null,
    foreign key (cpf_paciente) references pacientes(cpf_paciente),
    primary key (cpf_paciente)
);

create table anamnese_geral(
	cpf_paciente varchar(11) not null,
	nome_paciente varchar(50) not null,
    queix_princ varchar(100) not null,
    historico varchar (500) not null,
    hemorragia varchar (10) not null,
    reumatismo varchar (10) not null,
    alergia varchar(10) not null,
    cardio varchar(10) not null,
    gastriste varchar(10) not null,
    diabetico varchar(10) not null,
    desmaio varchar(10) not null,
    tratamento varchar(10) not null,
    medicamento varchar(10) not null,
    opercao varchar(10) not null,
    manias varchar(10) not null,
    depressao varchar(10) not null,
    tuberculose varchar(10) not null,
    sarampo varchar(10) not null,
    sifilis varchar(10) not null,
    caxumba varchar(10) not null,
    hepatite varchar(10) not null,
	varicela varchar(10) not null,
    aids varchar(10) not null,
    outra varchar(50) not null,
    fumante varchar(10) not null,
    fuman_freque varchar(100) not null,
    
    labios varchar(10) not null,
    mucosaj varchar(10) not null,
    lingua varchar(10) not null,
    soalho varchar(10) not null,
    palatod varchar(10) not null,
    garganta varchar(10) not null,
    palatom varchar(10) not null,
    mucosaa varchar(10) not null,
    gengiva varchar(10) not null,
    glandulas varchar(10) not null,
    linfonodo varchar(10) not null,
    atm varchar(10) not null,
    muscmas varchar(10) not null,
    oclusao varchar(10) not null,
    
    alteracoes varchar(100) not null,
    diagnosp varchar(100) not null,
    examec varchar(100) not null,
    diagnosd varchar(100) not null,
    planotrat varchar(100) not null,
    foreign key (cpf_paciente) references pacientes(cpf_paciente),
    primary key (cpf_paciente)
);

create table anamnese_infantil(
	nome_paciente varchar(50) not null,
	cpf_paciente varchar(11) not null,
	historiag varchar(100),
	tipoparto varchar(9),
    problemap varchar(10),
    amamentacao varchar(9),
    anestesia varchar(10),
    doenca_grave varchar(10),
    vacinada varchar(10),
    sentou varchar(10),
    engatinhou varchar(10),
    andou varchar(10),
    falou varchar(10),
    dificuldade varchar(10),
    alegre varchar(10),
    triste varchar(10),
    timido varchar(10),
    tranquilo varchar(10),
    inquieto varchar(10),
    assustado varchar(10),
    sono varchar(15),
    posturanor varchar(10),
    posturaalt varchar(10),
    fonacaonor varchar(10),
    disturb_fala varchar(10),
    paralisia varchar(10),
    enurese varchar(10),
    ctrl_esfinct varchar(10),
    alimentacao varchar(7),
    social varchar(9), 
    tiques varchar(10),
    fobias varchar(10),
    ansiedade varchar(10),
    medo varchar(10),
    birra varchar(10),
    ciumes varchar(10),
    observacoes varchar(100),
    foreign key (cpf_paciente) references pacientes(cpf_paciente),
    primary key (cpf_paciente)
);

create table prontuarios(
	cpf_paciente varchar(11),
    data_procedimento date,
    procedimento varchar(50),
    foreign key (cpf_paciente) references pacientes(cpf_paciente)
);

select * from pacientes;
select * from enderecos;
select * from anamnese_geral;
select * from anamnese_infantil;
select * from prontuarios;
