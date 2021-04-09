<?php

require_once dirname(__DIR__, 1) . '\\Funcao\\manipular_banco.php';
if (verificaPacienteExistente('36700137845')) {
    // echo 'existe';
    // echo '<script> var dadosPessoais = ""+'.obtemDadosTabela('36700137845','pacientes')."</script>";
    // var_dump(json_encode(obtemDadosTabela('36700137845','enderecos')));
    // var_dump(obtemDadosTabela('36700137845','anamnese_geral'));
    // var_dump(obtemDadosTabela('36700137845','anamnese_infantil'));
} else {
    // echo 'não existe';
}
// $prontuario = obtemProntuario('10054547016');

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
    <div id="dadosPessoais">
        <div><label class="campoPessoal" name="nome_paciente">Nome:</label> </div>
        <div><label class="campoPessoal" name="data_nascimento">Data de Nascimento:</label> </div>
        <div><label class="campoPessoal" name="sexo">Sexo: </label></div>
        <div><label class="campoPessoal" name="escolaridade">Escolaridade: </label></div>
        <div><label class="campoPessoal" name="profissao">Profissao: </label></div>
        <div><label class="campoPessoal" name="rg_paciente">RG: </label></div>
        <div><label class="campoPessoal" name="cpf_paciente">CPF: </label></div>
        <div><label class="campoPessoal" name="estado_civil">Estado Civil: </label></div>
        <div><label class="campoPessoal" name="natu">Naturalidade: </label></div>
        <div><label class="campoPessoal" name="estado_nasc">Estado de Nascença: </label></div>
        <div><label class="campoPessoal" name="tel_contato">Telefone de contato: </label></div>
        <div><label class="campoPessoal" name="nome_pai">Nome do pai: </label></div>
        <div><label class="campoPessoal" name="nome_mae">Nome da mãe: </label></div>
        <div><label class="campoPessoal" name="natu_pai">Naturalidade do Pai: </label></div>
        <div><label class="campoPessoal" name="natu_mae">Naturalidade da Mãe: </label></div>
        <div><label class="campoPessoal" name="peso">Peso: </label></div>
        <div><label class="campoPessoal" name="altura">Altura: </label></div>
        <div><label class="campoPessoal" name="cor">Cor: </label></div>
    </div>
    <hr>
    <button id="adicionar">+</button>
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

    <script src="/components/js/prontuario/main.js"></script>
    <script>
        main();
        var manipulavel = <?= (obtemDadosTabela('36700137845', 'pacientes')); ?>;

        console.log(manipulavel);
        // console.log(Object.keys(manipulavel))
        insereDadosPessoais(manipulavel);
    </script>
</body>

</html>