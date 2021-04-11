<?php
    require_once dirname(__DIR__,1).'\\Classes\\Paciente.php';
    require_once dirname(__DIR__,1).'\\Funcao\\manipular_banco.php';
    session_start();
    $pacienteDados = (json_decode( $_POST['buffer'],true));
    //var_dump($paciente['dadosPessoais']['nome']);
    $paciente = new Paciente($pacienteDados);
    

    $_SESSION['paciente'] = $paciente; //salvando paciente na sessão
    header("Location: anamnese.php");

    die();
?>