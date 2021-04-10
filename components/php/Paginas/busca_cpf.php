<?php
require_once dirname(__DIR__, 1) . '\\Funcao\\manipular_banco.php';

$cpf = filter_input(INPUT_POST, 'cpfInput', FILTER_SANITIZE_STRING);
// $cpf = $_POST['pesquisaCpf'];

var_dump($cpf);


// $existe = verificaPacienteExistente($cpf);
// if($existe){
//     echo 'Usuário encontrado!';
//     die();
// }
// echo 'Usuário não econtrado!'

?>