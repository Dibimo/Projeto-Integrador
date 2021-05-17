<?php
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';

// session_start();

$cpf_paciente = filter_input(INPUT_POST, 'cpf_paciente', FILTER_SANITIZE_STRING);

$rua = filter_input(INPUT_POST,'rua',FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST,'complemento',FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);
$estado_mora = filter_input(INPUT_POST,'estado_mora',FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_STRING);

atualizaEndereco($cpf_paciente,$rua,$numero,$complemento,$bairro,$cidade,$estado_mora,$cep);

$nome_paciente = filter_input(INPUT_POST,"nome_paciente",FILTER_SANITIZE_STRING);

//TRATAMENTO DE DATA
$data_nascimento = filter_input(INPUT_POST,"data_nascimento",FILTER_SANITIZE_STRING);
$ano = explode('/', $data_nascimento)[2];
$mes = explode('/', $data_nascimento)[1];
$dia = explode('/', $data_nascimento)[0];
$data_nascimento = $ano . '-' . $mes . '-' . $dia;

$sexo = filter_input(INPUT_POST,"sexo",FILTER_SANITIZE_STRING);
$escolaridade = filter_input(INPUT_POST,"escolaridade",FILTER_SANITIZE_STRING);
$profissao = filter_input(INPUT_POST,"profissao",FILTER_SANITIZE_STRING);
$rg_paciente = filter_input(INPUT_POST,"rg_paciente",FILTER_SANITIZE_STRING);
$estado_civil = filter_input(INPUT_POST,"estado_civil",FILTER_SANITIZE_STRING);
$natu = filter_input(INPUT_POST,"natu",FILTER_SANITIZE_STRING);
$estado_nasc = filter_input(INPUT_POST,"estado_nasc",FILTER_SANITIZE_STRING);
$tel_contato = filter_input(INPUT_POST,"tel_contato",FILTER_SANITIZE_STRING);
$nome_pai = filter_input(INPUT_POST,"nome_pai",FILTER_SANITIZE_STRING);
$nome_mae = filter_input(INPUT_POST,"nome_mae",FILTER_SANITIZE_STRING);
$natu_pai = filter_input(INPUT_POST,"natu_pai",FILTER_SANITIZE_STRING);
$natu_mae = filter_input(INPUT_POST,"natu_mae",FILTER_SANITIZE_STRING);
$peso = filter_input(INPUT_POST,"peso",FILTER_SANITIZE_STRING);
$altura = filter_input(INPUT_POST,"altura",FILTER_SANITIZE_STRING);
$cor = filter_input(INPUT_POST,"cor",FILTER_SANITIZE_STRING);

atualizaDadosPessoais($nome_paciente, $cpf_paciente,
    $data_nascimento,
    $sexo,
    $escolaridade,
    $profissao,
    $rg_paciente,
    $estado_civil,
    $natu,
    $estado_nasc,
    $tel_contato,
    $nome_pai,
    $nome_mae,
    $natu_pai,
    $natu_mae,
    $peso,
    $altura,
    $cor
);


?>
