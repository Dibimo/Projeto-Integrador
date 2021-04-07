<?php
    require_once dirname(__DIR__,1).'\\Classes\\Paciente.php';
    session_start();
    $pacienteDados = (json_decode( $_POST['buffer'],true));
    //var_dump($paciente['dadosPessoais']['nome']);
    $paciente = new Paciente($pacienteDados);

    inserePaciente($paciente);
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
    
     function inserePaciente(Paciente $paciente)
    {
        
        $servidor = "localhost";
        $usuario  = "root";
        $senha    = "@dibimo7";
        $banco    = "banco_pacientes";
        $conexao = new mysqli($servidor, $usuario, $senha, $banco);
        $comandoSQL = "INSERT INTO pacientes 
            VALUES (
                '{$paciente->getNome()}',
                '{$paciente->getData_nascimento()}',
                '{$paciente->getSexo()}',
                '{$paciente->getEscolaridade()}',
                '{$paciente->getProfissao()}',
                '{$paciente->getRg()}',
                '{$paciente->getCpf()}',
                '{$paciente->getEstado_civil()}',
                '{$paciente->getNaturalidade()}',
                '{$paciente->getEstado_nascenca()}',
                '{$paciente->getContato()}',
                '{$paciente->getNomePai()}',
                '{$paciente->getNomeMae()}',
                '{$paciente->getNaturalidadePai()}',
                '{$paciente->getNaturalidadeMae()}',
                '{$paciente->getPeso()}',
                '{$paciente->getAltura()}',
                '{$paciente->getCor()}'
            );
        ";
        /*ENVIO DOS DADOS*/ 
        $conexao->query($comandoSQL); 
    }

    //$_SESSION['paciente'] = $paciente;
    //header("Location: anamnese.php");

    die();
?>