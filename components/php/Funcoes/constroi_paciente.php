<?php
    require_once dirname(__DIR__,1).'\\Classes\\Paciente.php';
    session_start();
    $pacienteDados = (json_decode( $_POST['buffer'],true));
    $paciente = new Paciente($pacienteDados);
    
    $_SESSION['paciente'] = $paciente; //salvando paciente na sessão
    header("Location: ..\\Paginas\\anamnese.html");

?>