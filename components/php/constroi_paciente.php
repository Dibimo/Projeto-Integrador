<?php
    require_once 'Classes/Paciente.php';
    session_start();
    $pacienteDados = (json_decode( $_POST['buffer'],true));
    //var_dump($paciente['dadosPessoais']['nome']);
    $paciente = new Paciente($pacienteDados);

    /*
    /*TESTES COM O BANCO DE DADOS*/
    //-------------------------------
    /*CONEXÃO COM O BANCO*/
    // $servidor = "localhost";
    // $usuario  = "root";
    // $senha    = "@dibimo7";
    // $banco    = "banco_pacientes";

    // $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    // /*COMANDOS*/
    // $comandoSQL = "INSERT INTO pacientes (nome, data_nascimento, sexo, cpf)
    //     VALUES ('{$paciente->getNome()}','{$paciente->getData_nascimento()}','{$paciente->getSexo()}','{$paciente->getCpf()}');
    // ";
    // /*ENVIO DOS DADOS*/ 
    // $conexao->query($comandoSQL); 
    
    $_SESSION['paciente'] = $paciente;
    header("Location: anamnese.php");

    die();
?>