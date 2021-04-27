<?php
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';

// session_start();

$cpf = filter_input(INPUT_POST, 'cpf_paciente', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST,'rua',FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST,'complemento',FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);
$estado_mora = filter_input(INPUT_POST,'estado_mora',FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_STRING);



echo atualizaEndereco($cpf,$rua,$numero,$complemento,$bairro,$cidade,$estado_mora,$cep);

?>
