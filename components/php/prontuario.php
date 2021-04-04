<?php


    require_once 'Classes/Paciente.php';

    session_start();
    $paciente = $_SESSION['paciente'];
    $paciente->getNome();

    

?>