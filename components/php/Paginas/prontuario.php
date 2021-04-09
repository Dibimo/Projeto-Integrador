<?php

    require_once dirname(__DIR__, 1) . '\\Classes\\Paciente.php';
    require_once dirname(__DIR__, 1) . '\\Classes\\Anamnese.php';
    require_once dirname(__DIR__,1). '\\Funcao\\manipular_banco.php';

    // session_start();
    // $paciente = $_SESSION['paciente']; //recebe paciente anterior
    // $anamneseDados = (json_decode($_POST['buffer'], true));
    // //inserePaciente($paciente);
    // $paciente->setAnamnese($anamneseDados); //salvando respostas no objeto
    $prontuario = obtemProntuario('10054547016');

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
        var prontuario ="" + <?php echo $prontuario; ?>;
        
        // var dadosTratados = prontuario.replace('"10054547016"',"");
        // var dadosTratados = prontuario.replace('"cpf_paciente"',"");
        // var dadosTratados = prontuario.replace('',"");
        // var dadosTratados = prontuario.replace('"data_procedimento"',"");
        var dadosTratados = prontuario.replace(/[":]/g,"");
        dadosTratados = dadosTratados.replace(/[,]/g," ");
        dadosTratados = dadosTratados.replace(/10054547016 /g,"");
        dadosTratados = dadosTratados.replace(/data_procedimento/g,"");
        dadosTratados = dadosTratados.replace(/cpf_paciente/g,"");
        dadosTratados = dadosTratados.replace(/procedimento/g,"");
        dadosTratados = dadosTratados.replace(/} {/g,"--");
        dadosTratados = dadosTratados.replace(/[{}]/g,"");
        dadosTratados = dadosTratados.split('--');

        console.log(dadosTratados);
    </script>
</body> 
</html>
