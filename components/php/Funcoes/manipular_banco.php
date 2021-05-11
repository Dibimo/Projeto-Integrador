<?php
function inserePaciente(Paciente $paciente)
{        
    $conexao = novaConexao();
    $comandosSQL = Array();
    $comandosSQL[] = "INSERT INTO pacientes 
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
    $comandosSQL[] = "INSERT INTO enderecos
        VALUES(
            '{$paciente->getNome()}',
            '{$paciente->getCpf()}',
            '{$paciente->getEndereco()->getEndereco()}',
            '{$paciente->getEndereco()->getNumero()}',
            '{$paciente->getEndereco()->getComplemento()}',
            '{$paciente->getEndereco()->getBairro()}',
            '{$paciente->getEndereco()->getCep()}',
            '{$paciente->getEndereco()->getCidade()}',
            '{$paciente->getEndereco()->getEstado_moradia()}'
        );
    ";
    for ($i=0; $i < count($comandosSQL); $i++) { 
        $conexao->query($comandosSQL[$i]);
        echo $conexao->error;
    }

}

function insereAnamnese($paciente)
{
    $conexao = novaConexao();
    $comandosSQL = Array();
    
    if ($paciente->getAnamnese()->getTipoParto()!='') {
        $comandosSQL[] = "INSERT INTO anamnese_infantil
        VALUES(
            '{$paciente->getNome()}',
            '{$paciente->getCpf()}',
            '{$paciente->getAnamnese()->getHistoriaGestacao()}',
            '{$paciente->getAnamnese()->getTipoParto()}',
            '{$paciente->getAnamnese()->getProblemaParto()}',
            '{$paciente->getAnamnese()->getAmamentacao()}',
            '{$paciente->getAnamnese()->getAnestesia()}',
            '{$paciente->getAnamnese()->getDoencaGrave()}',
            '{$paciente->getAnamnese()->getVacinada()}',
            '{$paciente->getAnamnese()->getSentou()}',
            '{$paciente->getAnamnese()->getEngatinhou()}',
            '{$paciente->getAnamnese()->getAndou()}',
            '{$paciente->getAnamnese()->getFalou()}',
            '{$paciente->getAnamnese()->getDificuldade()}',
            '{$paciente->getAnamnese()->getAlegre()}',
            '{$paciente->getAnamnese()->getTriste()}',
            '{$paciente->getAnamnese()->getTimido()}',
            '{$paciente->getAnamnese()->getTranquilo()}',
            '{$paciente->getAnamnese()->getInquieto()}',
            '{$paciente->getAnamnese()->getAssustado()}',
            '{$paciente->getAnamnese()->getSono()}',
            '{$paciente->getAnamnese()->getPosturaNormal()}',
            '{$paciente->getAnamnese()->getPosturaAlterada()}',
            '{$paciente->getAnamnese()->getFonacaoNormal()}',
            '{$paciente->getAnamnese()->getDisturbiosFala()}',
            '{$paciente->getAnamnese()->getParalisia()}',
            '{$paciente->getAnamnese()->getEnurese()}',
            '{$paciente->getAnamnese()->getEsfincteres()}',
            '{$paciente->getAnamnese()->getAlimentacao()}',
            '{$paciente->getAnamnese()->getSociabilidade()}',
            '{$paciente->getAnamnese()->getTiques()}',
            '{$paciente->getAnamnese()->getFobias()}',
            '{$paciente->getAnamnese()->getAnsiedade()}',
            '{$paciente->getAnamnese()->getMedo()}',
            '{$paciente->getAnamnese()->getBirra()}',
            '{$paciente->getAnamnese()->getCiumes()}',
            '{$paciente->getAnamnese()->getObservacoes()}'
            );
        ";
    }
    $comandosSQL[] = "INSERT INTO anamnese_geral
        VALUES (
            '{$paciente->getCpf()}',
            '{$paciente->getNome()}',
            '{$paciente->getAnamnese()->getQueixaPrincipal()}',
            '{$paciente->getAnamnese()->getHistoricoDoenca()}',
            '{$paciente->getAnamnese()->getHemorragia()}',
            '{$paciente->getAnamnese()->getReumatismo()}',
            '{$paciente->getAnamnese()->getAlergia()}',
            '{$paciente->getAnamnese()->getCardiovascular()}',
            '{$paciente->getAnamnese()->getGastrite()}',
            '{$paciente->getAnamnese()->getDiabetico()}',
            '{$paciente->getAnamnese()->getDesmaio()}',
            '{$paciente->getAnamnese()->getTratamento()}',
            '{$paciente->getAnamnese()->getMedicamento()}',
            '{$paciente->getAnamnese()->getOperacao()}',
            '{$paciente->getAnamnese()->getManias()}',
            '{$paciente->getAnamnese()->getDepressao()}',
            '{$paciente->getAnamnese()->getTuberculose()}',
            '{$paciente->getAnamnese()->getSarampo()}',
            '{$paciente->getAnamnese()->getSifilis()}',
            '{$paciente->getAnamnese()->getCaxumba()}',
            '{$paciente->getAnamnese()->getHepatite()}',
            '{$paciente->getAnamnese()->getVaricela()}',
            '{$paciente->getAnamnese()->getAids()}',
            '{$paciente->getAnamnese()->getOutra()}',
            '{$paciente->getAnamnese()->getFumante()}',
            '{$paciente->getAnamnese()->getFrequencia()}',
            '{$paciente->getAnamnese()->getLabios()}',
            '{$paciente->getAnamnese()->getMucosaJugal()}',
            '{$paciente->getAnamnese()->getLingua()}',
            '{$paciente->getAnamnese()->getSoalho()}',
            '{$paciente->getAnamnese()->getPalatoDuro()}',
            '{$paciente->getAnamnese()->getGarganta()}',
            '{$paciente->getAnamnese()->getPalatoMole()}',
            '{$paciente->getAnamnese()->getMucosaAlveolar()}',
            '{$paciente->getAnamnese()->getGengivas()}',
            '{$paciente->getAnamnese()->getGlandulasSalivares()}',
            '{$paciente->getAnamnese()->getLinfonodos()}',
            '{$paciente->getAnamnese()->getAtm()}',
            '{$paciente->getAnamnese()->getMuscMastigadores()}',
            '{$paciente->getAnamnese()->getOclusao()}',
            '{$paciente->getAnamnese()->getAlteracoesEncontradas()}',
            '{$paciente->getAnamnese()->getDiagnosticoPresuntivo()}',
            '{$paciente->getAnamnese()->getExamesComplementares()}',
            '{$paciente->getAnamnese()->getDiagnosticoDefinitivo()}',
            '{$paciente->getAnamnese()->getPlanoTratamento()}'

        );
    
    
    ";
    for ($i = 0; $i < count($comandosSQL); $i++) {
        $conexao->query($comandosSQL[$i]);
        echo $conexao->error;
    }
}

function verificaPacienteExistente(string $cpf)
{
    $conexao = novaConexao();
    $comandoSQL = "SELECT * FROM  pacientes where cpf_paciente='{$cpf}';";
    $resultado = mysqli_query($conexao, $comandoSQL);
    $linha = mysqli_fetch_assoc($resultado);
    
    if($linha != NULL){
        return $linha['nome_paciente']; //já existe
    }
    return false; //não existe
}

function obtemDadosTabela(string $cpf, string $tabela){
    $conexao = novaConexao();
    $comandoSQL = "SELECT * FROM {$tabela} where cpf_paciente='{$cpf}';";
    $resultado = mysqli_query($conexao, $comandoSQL); //executa dados da tabela
    $linha = mysqli_fetch_assoc($resultado); //recebe a linha do bando de dados
    $jsonResultado = json_encode($linha); //transforma em JSON
    return $jsonResultado; //retorna o JSON obtido
    
}

function obtemProntuario(int $cpfPaciente)
{
    $conexao = novaConexao();
    $comandoSQL = "SELECT * FROM  prontuarios where cpf_paciente='{$cpfPaciente}'";
    $resultado = mysqli_query($conexao, $comandoSQL);
    $jsonResultado = Array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $jsonResultado[] = json_encode($linha);
    }
    $jsonResultado = json_encode($jsonResultado);
    return $jsonResultado;
}

function atualizaProntuario(string $cpf, string $dataProcedimento, string $procedimentoTexto)
{
    $conexao = novaConexao();
    $comandosSQL= "INSERT INTO prontuarios
        VALUES(
            '{$cpf}',
            '{$dataProcedimento}',
            '{$procedimentoTexto}'
        );
    ";

    $conexao->query($comandosSQL);
}

function atualizaEndereco(string $cpf, string $rua, string $numero, string $complemento, string $bairro, string $cidade, string $estado_mora, string $cep)
{
    $conexao = novaConexao();
    $comandosSQL = "UPDATE enderecos
        SET
            rua = '{$rua}',
            numero = '{$numero}',
            complemento = '{$complemento}',
            bairro = '{$bairro}',
            cep = '{$cep}',
            cidade = '{$cidade}',
            estado_mora = '{$estado_mora}'
        
        WHERE cpf_paciente = '{$cpf}';

    ";

    $conexao->query($comandosSQL);
    return $conexao->error;

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