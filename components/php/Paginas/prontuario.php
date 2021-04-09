<?php

    require_once dirname(__DIR__,1). '\\Funcao\\manipular_banco.php';
    if(verificaPacienteExistente('36700137845')){
        // echo 'existe';
        // echo '<script> var dadosPessoais = ""+'.obtemDadosTabela('36700137845','pacientes')."</script>";
        $dadosPessoais = obtemDadosTabela('36700137845','pacientes');
        var_dump(json_encode(obtemDadosTabela('36700137845','enderecos')));
        // var_dump(obtemDadosTabela('36700137845','anamnese_geral'));
        // var_dump(obtemDadosTabela('36700137845','anamnese_infantil'));
    }else{
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
        // var prontuario ="" + <?php //echo $prontuario; ?>;
        var manipulavel = <?=(obtemDadosTabela('36700137845', 'enderecos'));?>;
        // var dadosTratados = prontuario.replace(/[":]/g,"");
        // dadosTratados = dadosTratados.replace(/[,]/g," ");
        // dadosTratados = dadosTratados.replace(/10054547016 /g,"");
        // dadosTratados = dadosTratados.replace(/data_procedimento/g,"");
        // dadosTratados = dadosTratados.replace(/cpf_paciente/g,"");
        // dadosTratados = dadosTratados.replace(/procedimento/g,"");
        // dadosTratados = dadosTratados.replace(/} {/g,"--");
        // dadosTratados = dadosTratados.replace(/[{}]/g,"");
        // dadosTratados = dadosTratados.split('--');
        // var manipulavel = JSON.parse(prontuario);
        console.log(manipulavel);
    </script>
</body> 
</html>
