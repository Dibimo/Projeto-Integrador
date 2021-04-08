<?php

    require_once dirname(__DIR__, 1) . '\\Classes\\Paciente.php';
    require_once dirname(__DIR__, 1) . '\\Classes\\Anamnese.php';
    require_once dirname(__DIR__,1). '\\Funcao\\manipular_banco.php';

    session_start();
    $paciente = $_SESSION['paciente']; //recebe paciente anterior
    $anamneseDados = (json_decode($_POST['buffer'], true));
    //inserePaciente($paciente);
    $paciente->setAnamnese($anamneseDados); //salvando respostas no objeto

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
        var procedimento = <?=obtemProntuario($paciente->getCpf())?>;
        alert(procedimento.procedimento);
    </script>
</body>
</html>
