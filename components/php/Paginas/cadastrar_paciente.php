<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/components/css/index/style.css">
    <link rel="stylesheet" href="/components/css/public/style.css">
    <title>Document</title>
</head>

<body>
    <div>

        <img src="/Assets/img_logo.png" height="200" width="300" style="padding-left: 30px;">

        <!-- Título do Form-->        
        <h2><strong>FICHA DE IDENTIFICAÇÃO DO PACIENTE</strong></h2>

        <div style="padding-right: 3%; padding-left: 3%; background-color: rgb(255, 253, 253);">

            <!-- Início do Form-->
            <form id="formulario" action="components/php/Funcoes/constroi_paciente.php" method="post" class="borda">

                
                <!-- 
                    Por padrão, todo tag <div>, dentro deste Form, representa um linha do Form
                    Fora exceções, toda tag <div> possui pelo menos uma tag <label> e outra <input>
                -->
                                
                <div>
                    <label for="nome_completo">Nome:</label>
                    <input type="text" name="nome_completo" id="nome_completo" class="campoAlfabetico obrigatorio" style="height: 5%; width: 91%; font-size: 20px;">
                </div>

                <div>
                    <label for="data_nascimento">DN:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="campo obrigatorio" style="height : 5%; width: 19%; font-size: 20px;">

                    <label for="sexo">Sexo:</label>
                    <select name="sexo" id="sexo" class="campo obrigatorio" style="height : 5%; width: 15%; font-size: 20px;">
                        <option value="">selecione</option>
                        <option value="m">Masculino</option>
                        <option value="f">Feminino</option>
                    </select>

                    <label for="peso">Peso (Kg):</label>
                    <input type="text" name="peso" id="peso" class="campoNumerico obrigatorio" style="height : 5%; width: 7%; font-size: 20px;">


                    <label for="altura">Altura</label>
                    <input type="text" name="altura" id="altura" class="campoNumerico obrigatorio" style="height : 5%; width: 7%; font-size: 20px;">

                    <label for="cor">Cor:</label>
                    <select name="cor" id="cor" class="campo obrigatorio" style="height : 5%; width: 13%; font-size: 20px;">
                        <option value="">selecione</option>
                        <option value="branco">Branco</option>
                        <option value="pardo">Pardo</option>
                        <option value="negro">Negro</option>
                    </select>
                </div>

                <div>
                    <label for="escolaridade">Escolaridade</label>
                    <select name="escolaridade" id="escolaridade" class="campo obrigatorio" style="height : 5%; width: 25%; font-size: 20px;">
                        <option value="">selecione</option>
                        <option value="infantil">Educação Infantil</option>
                        <option value="fundamental">Ensino Fundamental</option>
                        <option value="medio">Ensino Medio</option>
                        <option value="superior">Enseino Superior</option>
                        <option value="posGraduacao">Pós graduação</option>
                        <option value="mestrado">Mestrado</option>
                        <option value="doutorado">Doutorado</option>
                    </select>

                    <label for="profissao">Profissão</label>
                    <input type="text" name="profissao" id="profissao" class="campoAlfabetico obrigatorio" style="height : 5%; width: 49%; font-size: 20px;">
                </div>

                <div>
                    <label for="rg">RG</label>
                    <input type="text" name="rg" id="rg" class="campo obrigatorio" style="height : 5%; width: 25%; font-size: 20px;">

                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="campoNumerico obrigatorio" style="height : 5%; width: 25%; font-size: 20px;">

                    <label for="estado_civil">Estado Civil:</label>
                    <select name="estado_civil" id="estado_civil" class="campo obrigatorio" style="height : 5%; width: 24%; font-size: 20px;">
                        <option value="">selecione</option>
                        <option value="solteiro">Solteiro</option>
                        <option value="casado">Casado</option>
                        <option value="separado">Separado</option>
                        <option value="divorciado">Divorcidado</option>
                        <option value="viuvo">Viúvo</option>
                    </select>
                </div>

                <div>
                    <label for="naturalidade">Naturalidade:</label>
                    <input type="text" name="naturalidade" id="naturalidade" class="campoAlfabetico obrigatorio" style="height : 5%; width: 51.5%; font-size: 20px;">

                    <label for="estados">Estado:</label>
                    <select name="estados_nascenca" class="campo obrigatorio" style="height : 5%; width: 24%; font-size: 20px;">
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
                </div>

                <div>
                    <label for="filiacao">Filiação</label>

                    <br>

                    <label for="pai">Pai</label>
                    <input type="text" name="pai" id="pai" class="campoAlfabetico obrigatorio" style="height : 5%; width: 56%; font-size: 20px;">
                    <label for="paiNaturalidade">Naturalidade</label>
                    <input type="text" name="pai_naturalidade" id="paiNaturalidade" class="campoAlfabetico obrigatorio" style="height : 5%; width: 23%; font-size: 20px;">

                    <label for="mae">Mãe</label>
                    <input type="text" name="mae" id="mae" class="campoAlfabetico obrigatorio" style="height : 5%; width: 55%; font-size: 20px;">
                    <label for="maeNaturalidade">Naturalidade</label>
                    <input type="text" name="mae_naturalidade" id="maeNaturalidade" class="campoAlfabetico obrigatorio" style="height : 5%; width: 24%; font-size: 20px">                    
                </div>

                <div>
                    <label for="contato">Contato (tel/cel)</label>
                    <input type="text" name="contato" id="contato" class="campoNumerico obrigatorio" style="height : 5%; width: 82.5%; font-size: 20px;">
                </div>

                <div>
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco" class="campoAlfabetico obrigatorio" style="height : 5%; width: 70%; font-size: 20px;">
                
                    <label for="numero">Número</label>
                    <input type="text" name="numero" id="numero" class="campoNumerico obrigatorio" style="height : 5%; width: 8.5%; font-size: 20px;">
                </div>

                <div>
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento" class="campo" style="height : 5%; width: 40%; font-size: 20px;">
                
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" class="campoAlfabetico obrigatorio" style="height : 5%; width: 36.1%; font-size: 20px;">
                </div>

               

                <div>
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" class="campoNumerico obrigatorio" style="height : 5%; width: 93.8%; font-size: 20px;">
                </div>
                
                <div>
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="campoAlfabetico obrigatorio" style="height : 5%; width: 58.3%; font-size: 20px;">

                    <label for="estados">Estado:</label>
                    <select name="estados_moradia" class="campo obrigatorio" style="height : 5%; width: 24%; font-size: 20px;">
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
                </div>
               

                <div>
                    <input type="hidden" id="buffer" name="buffer">
                </div>

                <br>

                <div >
                    <button id="botao-cadastrar" class="botao">Cadastrar</button>
                </div>
                <div id="erros"></div>
            
            <!-- Final do Form-->
            </form>

        </div>

        <script src="/components/js/cadastrar_paciente/main.js"></script>
        <script src="/components/js/cadastrar_paciente/listeners.js"></script>
        <script src="/components/js/cadastrar_paciente/validacoes.js"></script>
        <script src="/components/js/cadastrar_paciente/paciente.js"></script>
        <script src="/components/js/public/validacoes.js"></script>
        <script>
            main();
        </script>
    </div>

</body>

</html>
