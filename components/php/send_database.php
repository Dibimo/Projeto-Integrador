<?php
    require_once 'Paciente.php';
    $pacienteDados = (json_decode( $_POST['buffer'],true));
    //var_dump($paciente['dadosPessoais']['nome']);
    $paciente = new Paciente($pacienteDados);

    header("Location: questionario.php");

    die();
?>