<?php
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';

$cpf = filter_input(INPUT_POST, 'cpf_paciente', FILTER_SANITIZE_STRING);
$dataProcedimento = filter_input(INPUT_POST, 'dataProcedimento', FILTER_SANITIZE_STRING);
$procedimentoTexto = filter_input(INPUT_POST, 'procedimentoTexto', FILTER_SANITIZE_STRING);



atualizaProntuario($cpf,$dataProcedimento,$procedimentoTexto);

?>