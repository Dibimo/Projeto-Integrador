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

create table anamnese_geral(
	cpf_paciente varchar(11) not null,
    queix_princ varchar(100) not null,
    historico varchar (500) not null,
    hemorragia varchar (3) not null,
    reumatismo varchar (3) not null,
    alergia varchar(3) not null,
    cardio varchar(3) not null,
    gastriste varchar(3) not null,
    diabetico varchar(3) not null,
    desmaio varchar(3) not null,
    tratamento varchar(3) not null,
    medicamento varchar(3) not null,
    opercao varchar(3) not null,
    manias varchar(3) not null,
    depressao varchar(3) not null,
    tuberculose varchar(3) not null,
    sarampo varchar(3) not null,
    sifilis varchar(3) not null,
    caxumba varchar(3) not null,
    hepatite varchar(3) not null,
	varicela varchar(3) not null,
    aids varchar(3) not null,
    outra varchar(50) not null,
    fumante varchar(3) not null,
    fuman_freque varchar(100) not null,
    
    labios varchar(3) not null,
    mucosaj varchar(3) not null,
    lingua varchar(3) not null,
    soalho varchar(3) not null,
    palatod varchar(3) not null,
    garganta varchar(3) not null,
    palatom varchar(3) not null,
    mucosaa varchar(3) not null,
    gengiva varchar(3) not null,
    glandulas varchar(3) not null,
    linfonodo varchar(3) not null,
    atm varchar(3) not null,
    muscmas varchar(3) not null,
    oclusao varchar(3) not null,
    
    alteracoes varchar(100) not null,
    diagnosp varchar(100) not null,
    examec varchar(100) not null,
    diagnosd varchar(100) not null,
    planotrat varchar(100) not null,
    constraint anamEndereco foreign key (cpf_paciente) references pacientes(cpf),
    primary key (cpf_paciente)
);



create table anamnese_infantil(

	
	historiag varchar(100),
	tipoparto varchar(9),
    problemap varchar(3),
    amamentacao varchar(9),
    anestesia varchar(3),
    doenca_grave varchar(3),
    vacinada varchar(3),
    sentou varchar(3),
    engatinhou varchar(3),
    andou varchar(3),
    falou varchar(3),
    dificuldade varchar(3),
    alegre varchar(3),
    triste varchar(3),
    timido varchar(3),
    tranquilo varchar(3),
    inquieto varchar(3),
    assustado varchar(3),
    anestesia varchar(3),
    sono varchar(15),
    posturanor varchar(3),
    posturaalt varchar(3),
    fonacaonor varchar(3),
    disturb_fala varchar(3),
    paralisia varchar(3),
    enurese varchar(3),
    ctrl_esfinct varchar(3),
    alimentacao varchar(7),
    social varchar(9), 
    tiques varchar(3),
    fobias varchar(3),
    ansiedade varchar(3),
    medo varchar(3),
    birra varchar(3),
    ciumes varchar(3),
    observacoes varchar(100)
    
);





show tables;

drop table enderecos;

select * from pacientes;
select * from enderecos;

select * from pacientes where (cpf=36700137645);


