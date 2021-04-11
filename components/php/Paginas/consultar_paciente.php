<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/components/css/consultar_paciente/animacao_buscando.css">
    <title>Consultar paciente</title>
</head>
<body>
    <h1>Informe o CPF do paciente</h1>
    
    <label>Pesquisar</label>
    <input type="text" name="pesquisa" id="pesquisa" placeholder="00000000000">
    <label id="resposta"></label>
    <!--<div class="lds-facebook"><div></div><div></div><div></div></div>-->
    <hr>
    <h1>Cadastrar paciente</h1>
    <button id="irParaCadastro">Cadastrar</button>
    
    <script src="/components/js/consultar_paciente/main.js"></script>
    <script>main();</script>
</body>
</html>