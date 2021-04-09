<?php
require_once dirname(__DIR__, 1) . '\\Classes\\Paciente.php';
require_once dirname(__DIR__, 1) . '\\Classes\\Anamnese.php';
require_once dirname(__DIR__, 1) . '\\Funcao\\manipular_banco.php';

session_start();
$paciente = $_SESSION['paciente']; //recebe paciente da página anterior anterior
$anamneseDados = (json_decode($_POST['buffer'], true));
//inserePaciente($paciente);
$paciente->setAnamnese($anamneseDados); //salvando respostas no objeto




?>