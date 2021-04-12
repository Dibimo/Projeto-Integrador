<?php
require_once dirname(__DIR__, 1) . '\\Funcoes\\manipular_banco.php';
require_once dirname(__DIR__, 1) . '\\Classes\\Paciente.php';
session_start();
$cpf = $_SESSION['cpf'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/components/css/prontuario/style.css">
    <title>Document</title>
</head>

<body>
    <h1>Dados do paciente</h1>
    <h3>Dados Pessoais</h3>
    <div id="dadosPessoais" class="secao quatroColunas">
        <div>
            <div><label class="campoPessoal" name="nome_paciente">Nome: </label> </div>
            <div><label class="campoPessoal" name="data_nascimento">Data de Nascimento: </label> </div>
            <div><label class="campoPessoal" name="sexo">Sexo: </label></div>
        </div>
        <div>
            <div><label class="campoPessoal" name="escolaridade">Escolaridade: </label></div>
            <div><label class="campoPessoal" name="profissao">Profissão: </label></div>
            <div><label class="campoPessoal" name="rg_paciente">RG: </label></div>
            <div><label class="campoPessoal" name="cpf_paciente">CPF: </label></div>
            <div><label class="campoPessoal" name="estado_civil">Estado Civil: </label></div>
            <div><label class="campoPessoal" name="natu">Naturalidade: </label></div>
            <div><label class="campoPessoal" name="estado_nasc">Estado de Nascença: </label></div>
            <div><label class="campoPessoal" name="tel_contato">Telefone de contato: </label></div>
        </div>
        <div class='secao'>
            <h3>Pais</h3>
            <div><label class="campoPessoal" name="nome_pai">Nome do pai: </label></div>
            <div><label class="campoPessoal" name="nome_mae">Nome da mãe: </label></div>
            <div><label class="campoPessoal" name="natu_pai">Naturalidade do Pai: </label></div>
            <div><label class="campoPessoal" name="natu_mae">Naturalidade da Mãe: </label></div>
        </div>
        <div class='secao'>
            <h3>Dados Fisicos</h3>
            <div><label class="campoPessoal" name="peso">Peso: </label></div>
            <div><label class="campoPessoal" name="altura">Altura: </label></div>
            <div><label class="campoPessoal" name="cor">Cor: </label></div>
        </div>
    </div>

    
    <div id="dadosEndereco" class="secao">
        <div>
            <h3>Endereço</h3>
        </div>
        <div>
            <div><label class="campoEndereco">Rua: </label></div>
            <div><label class="campoEndereco">Numero: </label></div>
            <div><label class="campoEndereco">Complemento: </label></div>
            <div><label class="campoEndereco">Bairro: </label></div>
            <div><label class="campoEndereco">Cep: </label></div>
            <div><label class="campoEndereco">Cidade: </label></div>
            <div><label class="campoEndereco">Estado de Residência: </label></div>
        </div>
    </div>
    

    <div class="secao">
        <div>
            <h3>Anamnese Geral</h3>
            <h4>Queixa Principal</h4>
            <div><label class="campoAnamneseG">Queixa Principal: </label></div>
            <div><label class="campoAnamneseG">Histórico da Doença: </label></div>
        </div>
    </div>

    <div class="secao">
        <div class='secao'>
            <h3>Histórico médico</h3>
            <div><label class="campoAnamneseG">Hemorragia: </label></div>
            <div><label class="campoAnamneseG">Reumatismo: </label></div>
            <div><label class="campoAnamneseG">Alergia: </label></div>
            <div><label class="campoAnamneseG">Distúrbio cardiovascular: </label></div>
            <div><label class="campoAnamneseG">Gastriste: </label></div>
            <div><label class="campoAnamneseG">Diabetico: </label></div>
            <div><label class="campoAnamneseG">Já teve desmaio: </label></div>
            <div><label class="campoAnamneseG">Esta sob Tratamento: </label></div>
            <div><label class="campoAnamneseG">Esta tomando Medicamento: </label></div>
            <div><label class="campoAnamneseG">Sofreu Opercão: </label></div>
        </div>
        <div class="secao">
            <h3>Sofreu/Sofre</h3>
            <div><label class="campoAnamneseG">Manias: </label></div>
            <div><label class="campoAnamneseG">Depressão: </label></div>
            <div><label class="campoAnamneseG">Tuberculose: </label></div>
            <div><label class="campoAnamneseG">Sarampo: </label></div>
            <div><label class="campoAnamneseG">Sifilis: </label></div>
            <div><label class="campoAnamneseG">Caxumba: </label></div>
            <div><label class="campoAnamneseG">Hepatite: </label></div>
            <div><label class="campoAnamneseG">Varicela: </label></div>
            <div><label class="campoAnamneseG">AIDS: </label></div>
        </div>
        <div class="secao">
            <h3>Outras</h3>
            <div><label class="campoAnamneseG">Outra: </label></div>
        </div>
        <div class='secao'>
            <h3>Fumante</h3>
            <div><label class="campoAnamneseG">Fumante: </label></div>
            <div><label class="campoAnamneseG">Frequencia de fumo: </label></div>
        </div>
    </div>






    <div class="secao">
        <div class='secao'>
            <h3 class="AnamneseI">Conduta da Criança</h3>
            <div><label class="campoAnamneseI">Historia da Gestação: </label></div>
            <div><label class="campoAnamneseI">Tipo de parto: </label></div>
            <div><label class="campoAnamneseI">Houveram problemas no parto: </label></div>
            <div><label class="campoAnamneseI">Amamentação: </label></div>
            <div><label class="campoAnamneseI">Já foi dito para não tomar anestesia: </label></div>
            <div><label class="campoAnamneseI">Já teve doença grave: </label></div>
            <div><label class="campoAnamneseI">Já foi vacinada: </label></div>
        </div>
        <div class='secao'>
            <h4 class="AnamneseI">Durente os dois primeiros anos</h4>
            <div><label class="campoAnamneseI">Sentou: </label></div>
            <div><label class="campoAnamneseI">Engatinhou: </label></div>
            <div><label class="campoAnamneseI">Andou: </label></div>
            <div><label class="campoAnamneseI">Falou: </label></div>
            <div><label class="campoAnamneseI">Dificuldades de aprendizado: </label></div>
        </div>
        <div class='secao'>
            <h4 class="AnamneseI">Estado normal</h4>
            <div><label class="campoAnamneseI">Alegre: </label></div>
            <div><label class="campoAnamneseI">Triste: </label></div>
            <div><label class="campoAnamneseI">Timido: </label></div>
            <div><label class="campoAnamneseI">Tranquilo: </label></div>
            <div><label class="campoAnamneseI">Inquieto: </label></div>
            <div><label class="campoAnamneseI">Assustado: </label></div>
        </div>
        <div class='secao'>
            <h4>Sono</h4>
            <div><label class="campoAnamneseI"></label></div>
        </div>
        <div class='secao'>
            <h4>Físico</h4>
            <div><label class="campoAnamneseI">Postura Normal: </label></div>
            <div><label class="campoAnamneseI">Postura Alterada: </label></div>
            <div><label class="campoAnamneseI">Fonação normal: </label></div>
            <div><label class="campoAnamneseI">Disturbios de fala: </label></div>
            <div><label class="campoAnamneseI">Paralisia: </label></div>
            <div><label class="campoAnamneseI">Enurese: </label></div>
            <div><label class="campoAnamneseI">Controle os esfincteres: </label></div>
        </div>
        <div class='secao'>
            <h4>Alimentação e sociabilidade</h4>
            <div><label class="campoAnamneseI">Alimentacão: </label></div>
            <div><label class="campoAnamneseI">Social: </label></div>
        </div>
        <div class='secao'>
            <h4>Possui</h4>
            <div><label class="campoAnamneseI">Tiques: </label></div>
            <div><label class="campoAnamneseI">Fobias: </label></div>
            <div><label class="campoAnamneseI">Ansiedade: </label></div>
            <div><label class="campoAnamneseI">Medo: </label></div>
            <div><label class="campoAnamneseI">Birra: </label></div>
            <div><label class="campoAnamneseI">Cíumes: </label></div>
            <div><label class="campoAnamneseI">Observacões: </label></div>
        </div>
    </div>

    
    <div class="secao duasColunas">
        <div class='secao'>
            <h3>Avaliação fisica</h3>
            <div><label class="campoAnamneseG">Labios: </label></div>
            <div><label class="campoAnamneseG">Mucosa Jugal: </label></div>
            <div><label class="campoAnamneseG">Língua: </label></div>
            <div><label class="campoAnamneseG">Soalho da boca: </label></div>
            <div><label class="campoAnamneseG">Palato Duro: </label></div>
            <div><label class="campoAnamneseG">Garganta: </label></div>
            <div><label class="campoAnamneseG">Palato Mole: </label></div>
            <div><label class="campoAnamneseG">Mucosa Alveolar: </label></div>
            <div><label class="campoAnamneseG">Gengiva: </label></div>
            <div><label class="campoAnamneseG">Glândulas Salivares: </label></div>
            <div><label class="campoAnamneseG">Linfonodo: </label></div>
            <div><label class="campoAnamneseG">ATM: </label></div>
            <div><label class="campoAnamneseG">Musculos Mastigadores: </label></div>
            <div><label class="campoAnamneseG">Oclusão: </label></div>
            <div><label class="campoAnamneseG">Alterações: </label></div>
        </div>
    </div>
    <div class='secao duasColunas'>
        <h3>Exames e diagnosticos</h3>
        <div>
            <div><label class="campoAnamneseG">Diagnostico Presuntivo: </label></div>
            <div><label class="campoAnamneseG">Exames complementares: </label></div>
            <div><label class="campoAnamneseG">Diagnostico Definitivo: </label></div>
            <div><label class="campoAnamneseG">Plano de Tratamento: </label></div>
        </div>
    </div>

    
    <h1>Prontuario</h1>
    <form>
        <label for="dataProcedimento">Data do procedimento</label>
        <input type="date" name="dataProcedimento" id="dataProcedimento">
        <label for="procedimento">Procedimento realizado</label>
        <input type="text" name="procedimento" id="procedimentoTexto">
        <input type="hidden" if="buffer">
        <button id="botaoAdicionar">+</button>
    </form>
    <table id="prontuarioTabela">
        <thead>
            <tr>
                <th>Data do procedimento</th>
                <th>Procedimentos realizados</th>
                <th>Assinatura</th>
            </tr>

        </thead>

        <tbody>

        </tbody>
    </table>
    <button id="salvarProcedimentos">Salvar</button>
    <script src="/components/js/prontuario/main.js"></script>
    <script>
        var cpf = <?= $cpf ?>;
        main(cpf);
        var prontuarioBruto = <?= obtemProntuario($cpf); ?>;
        var dadosPessoais = <?= (obtemDadosTabela($cpf, 'pacientes')); ?>;
        var endereco = <?= (obtemDadosTabela($cpf, 'enderecos')); ?>;
        var anamneseGeral = <?= (obtemDadosTabela($cpf, 'anamnese_geral')); ?>;
        var anamneseInfantil = <?= (obtemDadosTabela($cpf, 'anamnese_infantil')); ?>;
        montaProntuario(prontuarioBruto);

        insereDados(dadosPessoais, ".campoPessoal");
        insereDados(endereco, ".campoEndereco", ['nome_paciente', 'cpf_paciente']);
        insereDados(anamneseGeral, ".campoAnamneseG", ['nome_paciente', 'cpf_paciente']);
        if (anamneseInfantil === null) { //se anamneseInfantil for nulo quer dizer que não há linhas na tabela
            removeAnamneseInfatil(); //logo, os campos destinados a isso podem ser removidos
        } else {
            insereDados(anamneseInfantil, ".campoAnamneseI", ['nome_paciente', 'cpf_paciente']);
        }
    </script>
</body>

</html>