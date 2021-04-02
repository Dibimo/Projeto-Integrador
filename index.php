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
        <form id="formulario" action="components/php/send_database.php">
            
            <p>
                <label for="nome_completo">Nome:</label>
                <input type="text"  name="nome_completo" id="nome_completo" class="campo">
            </p>
            
            <p>
                <label for="data_nascimento">DN:</label>
                <input type="date"  name="data_nascimento" id="data_nascimento" class="campo">
                
                <label for="tipo_sexo">Sexo:</label>
                <select name="tipo_sexo" id="tipo_sexo" class="campo">
                    <option value="">selecione</option>
                    <option value="0">Masculino</option>
                    <option value="1">Feminino</option>
                </select>                
            
                <label for="peso">Peso (Kg):</label>                
                <input type="text" name="peso" id="peso" class="campoNumerico"> 
                

                <label for="altura">Altura</label>
                <input type="text" name="altura" id="altura" class="campoNumerico">

                <label for="cor">Cor:</label>
                <select name="cor" id="cor" class="campo">                    
                    <option value="">selecione</option>
                    <option value="1">Branco</option>
                    <option value="2">Pardo</option>
                    <option value="3">Negro</option>                    
                </select>
            </p>
                               
            <p>
                <label for="escolaridade">escolaridade</label>
                <input type="text" name="escolaridade" id="escolaridade" class="campo">

                <label for="profissao">Profissão</label>
                <input type="text" name="profissao" id="profissao" class="campo">
            </p>

            <p>
                <label for="rg">RG</label>
                <input type="text" name="rg" id="rg" class="campo">

                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="campoNumerico" maxlength="14">

                <label for="estado_civil">Estado Civil:</label>
                <input type="text" name="estado_civil" id="estado_civil" class="campo">
            </p>

            <p>
                <label for="naturalidade">Naturalidade:</label>
                <input type="text" name="naturalidade" id="naturalidade" class="campo">

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
                <input type="text" name="pai" id="pai" class="campo">
                
                <label for="mae">Mãe</label>
                <input type="text" name="mae" id="mae" class="campo">                
            </p>

            <p>
                <label for="contato">Contato (tel/cel)</label>
                <input type="text" name="contato" id="contato" class="campoNumerico">
            </p>

            <p>
                <label for="endereco">Endereco</label>
                <input type="text" name="endereco" id="endereco" class="campo">
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
                <input type="texto" name="bairro" id="bairro" class="campo">
            </p>
            <p>
                <label for="cep">CEP</label>
                <input type="texto" name="cep" id="cep" class="campoNumerico">
            </p>
                <label for="cidade">Cidade</label>
                <input type="texto" name="cidade" id="cidade" class="campo">
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
            <button id="botao-cadastrar">Cadastrar</button>
        </form>
        <form>
            <p>
                <input type="date" name="data_atual">                
            </p>       
            <p>
                <label for="eu_responsavel">Eu/Responsável</label>
                <input type="text" name="eu_responsavel">
        
                <label for="RG_n">Portador do <strong>RG</strong> nº</label>
                <input type="text" name="RG_n">
                <label for="CPF_n">, inscrito no CPF sob nº</label>
                <input type="text" name="CPF_n">
                <p>
                    tomo ciência que tenho a responsabilidade compartilhada com  o IASCJ-Universidade do Sagrado Coração sobre o
                    mesmo. Estou ciente que deverei seguir rigorosamente algumas regras para o bom andamento, finalização e
                    preservação do tratamento como:
                </p>
            </p>
        
            <p>
            <ol>
                <li>Comparecer a todas as consultas agendadas em todas as especialidades envolvidas no tratamento. </li>
                <li>Avisar com 48 horas de antecedência o responsável pelo agendamento do atendimento caso não possa comparecer.
                    Caso uma situação de emergência ocorra durante as 48 horas que antecedem o tratamento, deverei justificar
                    através de atestado ou documento que revelam o real motivo de minha falta.</li>
                <li>Zelar pela manutenção de próteses odontológicas fixas ou moveis, placas de mordidas, aparelhos ortodônticos
                    que venha a fazer uso, não quebrando ou danificando quaisquer acessórios.</li>
                <li>Seguir todas as orientações de cuidados pós-atendimentos cirúrgicos, restauradores e protéticos fornecidos
                    pela equipe responsável pelo tratamento.</li>
                <li>Seguir as orientações dadas sobre a manutenção diária de higiene dos tecidos buco-dentais.</li>
                <li>Comparecer as consultas de controle após o termino do tratamento.</li>
                <li>Quando tratamento for de prótese sobre implante, prótese fixa, prótese removível, prótese total, compreendem
                    ser uma obrigação de meio, restabelecendo a função que foi perdida com a perda dos dentes.</li>
                <li>8- Tenho ciência do limite tolerável de apenas duas faltas, uma vez que coloco em comprometimento a aula do
                    aluno e do professor</li>
            </ol>
            </p>
        
            <p>
                Declaro sob as penas da lei, que:
            </p>
        
            <div>
                <p>
                    - Ter sido submetido a um questionário de avaliação biomédica, no qual foram pesquisados e excluídos
                    possíveis fatores sistêmicos que possam comprometer ou contra indicar o tratamento proposto, bem como
                    oferecer riscos à minha saúde geral;
                </p>
                <p>
                    - Ter sido informado de que não existem garantias absolutas e que o sucesso do presente tratamento dependera
                    de uma manutenção regular;
                </p>
                <p>
                    - Tenho pleno conhecimento de que terei meu tratamento automaticamente cancelado, seja em qual for, caso não
                    cumpra corretamente as regras aqui estabelecidas, assumindo todos os riscos e responsabilidade por minha
                    negligência e imprudência;
                </p>
                <p>
                    - Consinto com plano de tratamento apresentado, decorrente de particularidades inerentes ao meu caso;
                </p>
                <p>
                    - Autorizo que todas as radiografias, fotografias, modelos, desenho, históricos de antecedentes familiares,
                    resultados de exames clínicos e laboratoriais e quaisquer outras informações concernentes ao planejamento e
                    tratamento que compõe meu prontuário, sejam retidos e utilizados para fins de ensino e divulgação em todo e
                    qualquer meio de comunicação/ Publicações cientificas nacionais e internacionais, respeitado o Código de
                    Ética institucional e da profissão;
                </p>
                <p>
                    - Recebi informações sobre os possíveis riscos e complicações decorrentes da cirurgia, medicamentos e
                    anestesia. Tais complicações incluem dor, edema (inchaços), infecções, hematomas das estruturas bucais
                    (manchas arroxeadas) e também possíveis danos a estrutura óssea, patologias sinusais (sinusites), atraso na
                    cicatrização, reações alérgicas às drogas e aos medicamentos utilizados, até a possível perda do tratamento
                    proposto, sendo que na eventualidade disto acontecer, deverei assumir os eventuais custos para um novo
                    tratamento;
                </p>
                <p>
                    - Se necessário tratamento endodôntico observado pelo cirurgião-dentista, após finaliza-lo nesta clínica,
                    devo dar continuidade no tratamento restaurador com qualquer outro profissional/ outra clínica de
                    odontologia o mais rápido possível, não dependendo mais da USC, uma vez que tal tratamento é necessário e
                    sua não realização acarretara prejuízos ao dente tratado e a minha saúde;
                </p>
                <p>
                    - Em caso de tratamento de URGÊNCIA, tenho conhecimento que os procedimentos serão os necessários apenas
                    para o atendimento da urgência e que deverei providenciar sua continuidade/finalização do tratamento e/ou
                    outros procedimentos, o mais rápido possível, com qualquer outro profissional/outra clínica de odontologia;
                </p>
                <p>
                    - Ter sido orientado e me responsabilizo por procurar o mais breve possível qualquer outro profissional da
                    área para dar continuidade e/ou finalizar qualquer tratamento iniciado nas clínicas de odontologia da
                    Universidade do Sagrado Coração, não dependendo apenas das disponibilidades de vagas disponíveis na
                    universidade;
                </p>
                <p>
                    - Tenho ciência da grade/horário das disciplinas e seus respectivos atendimentos do curso de odontologia da
                    USC e que devo me adequar aos horários disponíveis do mesmo, bem como aguardar a disponibilidade de vagas
                    para atendimento na universidade, uma vez que essas são limitadas e devo respeitar seus critérios
                    pré-estabelecidos, tais como a lista de espera e que são selecionados casos de interesse de
                    aprendizado/pesquisa estipulado pelo professor e/ou aluno e a pedido dos mesmos;
                </p>
                <p>
                    - Compreendo se tratar de uma instituição de ensino e tenho conhecimento das limitações de datas e horários
                    do período letivo e que o atendimento dentro da universidade é feito apenas nesse período, podendo variar em
                    semanas de provas, avaliações e eventos, sendo encerrados nas férias letivas, finais de semana, feriados,
                    entre outros, me tornando responsável por procurar tratamento externo a Universidade, independente do caso.
                </p>
                <p>
                    - Fui informado que todas as informações contidas em meu prontuário deverão permanecer no arquivo pelo prazo
                    legal da Instituição de Ensino, podendo ser copiada para os fins acima autorizados e/ou meu interesse ou de
                    minha família em particular;
                </p>
                <p>
                    Por este instrumento de autorização por mim assinado e acima qualificado, dou pleno consentimento ao IASCJ-
                    Universidade do Sagrado Coração para, por intermédio de seus discentes, doentes (alunos e professores) e
                    funcionários do Curso de Odontologia, graduação e pós-graduação, fazer diagnóstico, após a realização ou
                    solicitação de exames clínicos e/ou de laboratórios, planejamento e execução do meu tratamento, de acordo
                    com os conhecimentos enquadrados no campo da especialidade, dentro das disciplinas acadêmicas e materiais
                    existentes.
                </p>
        
                <p><b><strong>Declaro ainda que efetuei a leitura de toda esta autorização, aceito e concordo com o acima
                            exposto.</strong></b></p>
        
                <p>
                    <label for="dia">Bauru</label>
                    <input type="text" name="dia">
        
                    <label for="mes"> de</label>
                    <input type="text" name="mes">
        
                    <label for="ano"> de 20</label>
                    <input type="text" name="ano">
        
                    <label for="CPF">Bauru</label>
                    <input type="text" name="CPF">
                </p>
        
                <p>
                    <label for="RG">RG:</label>
                    <input type="text" name="RG">                    
                </p>
            </div>
        
            </p>
        </form>

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