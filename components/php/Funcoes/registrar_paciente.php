<?php
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';
require_once dirname(__DIR__, 1) . '\\Classes\\Paciente.php';


$str_json = file_get_contents('php://input');

$dados = json_decode($str_json, true);

$paciente = new Paciente($dados);

inserePaciente($paciente);

