<?php
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';


$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$tabela = filter_input(INPUT_POST, 'tabela', FILTER_SANITIZE_STRING);


if($tabela != 'prontuarios'){
    echo obtemDadosTabela($cpf,$tabela);
    return;
}
echo obtemProntuario($cpf);

