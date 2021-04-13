<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/components/css/public/style.css">
    <title>Consultar paciente</title>
</head>
<body>
    
    <div class="borda">
        
        <img src="/Assets/img_logo.png" height="200" width="300" style="padding-left: 30px;">
    
        <h1>Informe o CPF do paciente</h1>
        
        <label>Pesquisar</label>
        <br>
        <input type="text" name="pesquisa" id="pesquisa" placeholder="00000000000" maxlength="11" style="height: 5%; width: 100%; font-size: 20px;">
        <label id="resposta"></label>
        <label id="resposta"></label>

        <hr>
        <h1>Cadastrar paciente</h1>
        <button id="irParaCadastro">Cadastrar</button>
        
        <script src="/components/js/consultar_paciente/main.js"></script>
        <script>main();</script>
    </div>
</body>
</html>