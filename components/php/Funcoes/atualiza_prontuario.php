<?php
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';

$cpf = filter_input(INPUT_POST, 'cpf_paciente', FILTER_SANITIZE_STRING);
$dataProcedimento = filter_input(INPUT_POST, 'dataProcedimento', FILTER_SANITIZE_STRING);
$procedimentoTexto = filter_input(INPUT_POST, 'procedimentoTexto', FILTER_SANITIZE_STRING);

//TRATAMENTO DA DATA

$ano = explode('/',$dataProcedimento)[2];
$mes = explode('/',$dataProcedimento)[1];
$dia = explode('/',$dataProcedimento)[0];
$dataProcedimento = $ano.'-'.$mes.'-'.$dia;

atualizaProntuario($cpf,$dataProcedimento,$procedimentoTexto);

?>