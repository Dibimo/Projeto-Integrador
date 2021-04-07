<?php
function inserePaciente(Paciente $paciente){
        
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

function verificaPacienteExistente(string $cpf){
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "@dibimo7";
    $banco    = "banco_pacientes";

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
    $comandoSQL = "SELECT * FROM  pacientes where cpf='{$cpf}'";
    $resultado = mysqli_query($conexao, $comandoSQL);
    $linha = mysqli_fetch_assoc($resultado);
    
    if($linha != NULL){
        return true; //já existe
    }
    return false; //não existe
}


?>