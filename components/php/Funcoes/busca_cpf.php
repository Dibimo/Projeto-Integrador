<?php
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
session_start();
$existe = verificaPacienteExistente($cpf);
if($existe){
    $_SESSION['cpf'] = $cpf;
    echo 'Usuário encontrado!';
    die();
}
echo 'Usuário não econtrado! Por favor cadastre o paciente primeiro.'

?>
