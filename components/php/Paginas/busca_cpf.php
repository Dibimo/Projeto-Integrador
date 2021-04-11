<?php
require_once dirname(__DIR__, 1) . '\\Funcao\\manipular_banco.php';

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

$existe = verificaPacienteExistente($cpf);
if($existe){
    echo 'Usuário encontrado!';
    die();
}
echo 'Usuário não econtrado!'

?>
