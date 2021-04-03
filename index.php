<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/components/css/index/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form id="formulario" action="components/php/send_database.php" method="post">
            
            <p>
                <label for="nome_completo">Nome:</label>
                <input type="text"  name="nome_completo" id="nome_completo" class="campoAlfabetico">
            </p>
            
            <p>
                <label for="data_nascimento">DN:</label>
                <input type="date"  name="data_nascimento" id="data_nascimento" class="campo">
                
                <label for="tipo_sexo">Sexo:</label>
                <select name="tipo_sexo" id="tipo_sexo" class="campo">
                    <option value="">selecione</option>
                    <option value="m">Masculino</option>
                    <option value="f">Feminino</option>
                </select>                
            
                <label for="peso">Peso (Kg):</label>                
                <input type="text" name="peso" id="peso" class="campoNumerico"> 
                

                <label for="altura">Altura</label>
                <input type="text" name="altura" id="altura" class="campoNumerico">

                <label for="cor">Cor:</label>
                <select name="cor" id="cor" class="campo">                    
                    <option value="">selecione</option>
                    <option value="branco">Branco</option>
                    <option value="pardo">Pardo</option>
                    <option value="negro">Negro</option>                    
                </select>
            </p>
                               
            <p>
                <label for="escolaridade">Escolaridade</label>
                <input type="text" name="escolaridade" id="escolaridade" class="campoAlfabetico">

                <label for="profissao">Profissão</label>
                <input type="text" name="profissao" id="profissao" class="campoAlfabetico">
            </p>

            <p>
                <label for="rg">RG</label>
                <input type="text" name="rg" id="rg" class="campo">

                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="campoNumerico" maxlength="14">

                <label for="estado_civil">Estado Civil:</label>
                <select name="estado_civil" id="estado_civil" class="campo">
                    <option value="">selecione</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="separado">Separado</option>
                    <option value="divorciado">Divorcidado</option>
                    <option value="viuvo">Viúvo</option>
                </select>
            </p>

            <p>
                <label for="naturalidade">Naturalidade:</label>
                <input type="text" name="naturalidade" id="naturalidade" class="campoAlfabetico">

                <label for="estados">Estado:</label>
                <select name="estados_nascenca" class="campo">
                    <option value="">selecione--</option>
                    <option value="ac">Acre</option>
                    <option value="al">Alagoas</option>
                    <option value="ap">Amapá</option>
                    <option value="am">Amazonas</option>
                    <option value="ba">Bahia</option>
                    <option value="ce">Ceará</option>
                    <option value="df">Distrito Federal</option>
                    <option value="es">Espírito Santo</option>
                    <option value="go">Goiás</option>
                    <option value="ma">Maranhão</option>
                    <option value="mt">Mato Grosso</option>
                    <option value="ms">Mato Grosso do Sul</option>
                    <option value="mg">Minas Gerais</option>
                    <option value="pa">Pará</option>
                    <option value="pb">Paraíba</option>
                    <option value="pr">Paraná</option>
                    <option value="pe">Pernambuco</option>
                    <option value="pi">Piauí</option>
                    <option value="rj">Rio de Janeiro</option>
                    <option value="rn">Rio Grande do Norte</option>
                    <option value="rs">Rio Grande do Sul</option>
                    <option value="ro">Rondônia</option>
                    <option value="rr">Roraima</option>
                    <option value="sc">Santa Catarina</option>
                    <option value="sp">São Paulo</option>
                    <option value="se">Sergipe</option>
                    <option value="to">Tocantins</option>
                </select>
                
            </p>

            <p>
                <label for="filiacao">Filiação</label> <br>
                
                <label for="pai">Pai</label>
                <input type="text" name="pai" id="pai" class="campoAlfabetico">
                
                <label for="mae">Mãe</label>
                <input type="text" name="mae" id="mae" class="campoAlfabetico">                
            </p>

            <p>
                <label for="contato">Contato (tel/cel)</label>
                <input type="text" name="contato" id="contato" class="campoNumerico">
            </p>

            <p>
                <label for="endereco">Endereco</label>
                <input type="text" name="endereco" id="endereco" class="campoAlfabetico">
            </p>

            <p>
                <label for="numero">Número</label>
                <input type="texto" name="numero" id="numero" class="campoNumerico">
            </p>

            <p>
                <label for="complemento">Complemento</label>
                <input type="texto" name="complemento" id="complemento" class="campo">
            </p>
            
            <p>
                <label for="bairro">Bairro</label>
                <input type="texto" name="bairro" id="bairro" class="campoAlfabetico">
            </p>
            <p>
                <label for="cep">CEP</label>
                <input type="texto" name="cep" id="cep" class="campoNumerico">
            </p>
                <label for="cidade">Cidade</label>
                <input type="texto" name="cidade" id="cidade" class="campoAlfabetico">
            <p>
                <label for="estados">Estado:</label>
                <select name="estados_moradia" class="campo">
                    <option value="">selecione--</option>
                    <option value="ac">Acre</option>
                    <option value="al">Alagoas</option>
                    <option value="ap">Amapá</option>
                    <option value="am">Amazonas</option>
                    <option value="ba">Bahia</option>
                    <option value="ce">Ceará</option>
                    <option value="df">Distrito Federal</option>
                    <option value="es">Espírito Santo</option>
                    <option value="go">Goiás</option>
                    <option value="ma">Maranhão</option>
                    <option value="mt">Mato Grosso</option>
                    <option value="ms">Mato Grosso do Sul</option>
                    <option value="mg">Minas Gerais</option>
                    <option value="pa">Pará</option>
                    <option value="pb">Paraíba</option>
                    <option value="pr">Paraná</option>
                    <option value="pe">Pernambuco</option>
                    <option value="pi">Piauí</option>
                    <option value="rj">Rio de Janeiro</option>
                    <option value="rn">Rio Grande do Norte</option>
                    <option value="rs">Rio Grande do Sul</option>
                    <option value="ro">Rondônia</option>
                    <option value="rr">Roraima</option>
                    <option value="sc">Santa Catarina</option>
                    <option value="sp">São Paulo</option>
                    <option value="se">Sergipe</option>
                    <option value="to">Tocantins</option>
                </select>
            </p>
            <p>
                <input type="hidden" id="buffer" name="buffer">
            </p>
            <button id="botao-cadastrar">Cadastrar</button>
        </form>
        <p id="erros"></p>
        
        <script src="/components/js/index/main.js"></script>
        <script src="/components/js/index/listeners.js"></script>
        <script src="/components/js/index/validacoes.js"></script>
        <script src="/components/js/index/paciente.js"></script>
        <script>
            main();
        </script>
    </div>
    
</body>
</html>