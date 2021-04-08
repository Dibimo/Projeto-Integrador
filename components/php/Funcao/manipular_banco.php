<?php
function inserePaciente(Paciente $paciente)
{        
    $conexao = novaConexao();
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
    $conexao->query($comandoSQL);
    /*ENVIO DOS DADOS*/ 
    /*Calucalndo a idade do paciente, para saber se haverá insersão no banco de anamnese infantil*/
    $anoAtual = date('Y');
    $anoDeNascimento = substr($paciente->getData_nascimento(),0,4);
    if (($anoAtual - $anoDeNascimento)<=14){
        //insere anamnese infantil
    }
    //Anamnese geral
}

function verificaPacienteExistente(string $cpf)
{
    $conexao = novaConexao();
    $comandoSQL = "SELECT * FROM  pacientes where cpf='{$cpf}'";
    $resultado = mysqli_query($conexao, $comandoSQL);
    $linha = mysqli_fetch_assoc($resultado);
    
    if($linha != NULL){
        return true; //já existe
    }
    return false; //não existe
}

function obtemProntuario(int $cpfPaciente)
{
    $conexao = novaConexao();
    $comandoSQL = "SELECT * FROM  prontuarios where cpf_paciente='{$cpfPaciente}'";
    $resultado = mysqli_query($conexao, $comandoSQL);
    $jsonResultado = json_encode(mysqli_fetch_assoc($resultado));
    return $jsonResultado;
}

function novaConexao()
{
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "@dibimo7";
    $banco    = "banco_pacientes";
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
    return $conexao;
}


?>