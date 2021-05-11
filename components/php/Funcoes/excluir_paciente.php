<?php
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';

$cpf = filter_input(INPUT_POST, 'cpf_paciente', FILTER_SANITIZE_STRING);

excluirPaciente($cpf);
