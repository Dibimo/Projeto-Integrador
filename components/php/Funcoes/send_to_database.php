<?php
require_once dirname(__DIR__, 1) . '\\Classes\\Paciente.php';
require_once dirname(__DIR__, 1) . '\\Classes\\Anamnese.php';
require_once dirname(__DIR__, 1) . '\\Classes\\Endereco.php';
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';

session_start();
$paciente = $_SESSION['paciente']; //recebe paciente da página anterior anterior
$anamneseDados = (json_decode($_POST['buffer'], true));
$paciente->setAnamnese($anamneseDados); //salvando respostas no objeto


inserePaciente($paciente);
header("Location: ..\\Paginas\\prontuario.php"); //TROCAR
die();



?>