<?php


    require_once 'Classes/Paciente.php';
    require_once 'Classes/Anamnese.php';

    session_start();
    $paciente = $_SESSION['paciente'];
    // echo ($paciente->getCpf()."\n");
    // //var_dump( $_SESSION['paciente']);
    // var_dump($_POST['buffer']);

    

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
            <tr>
                <td>Não sei</td>
                <td>Não sei</td>
                <td>Não sei</td>
            </tr>
        </tbody>
    </table>

    <script src="/components/js/prontuario/main.js"></script>
    <script> main() </script>
</body>
</html>
