<?php


    require_once 'Classes/Paciente.php';
    require_once 'Classes/Anamnese.php';

    session_start();
    $paciente = $_SESSION['paciente'];
    echo ($paciente->getCpf()."\n");
    //var_dump( $_SESSION['paciente']);
    var_dump($_POST['buffer']);

    

?>