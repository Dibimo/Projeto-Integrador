var removerComDuploClick = function () { //evento para a remoção da linha caso hajam erros de digitação
    this.remove();
}


function main() {

    var cpfPaciente = localStorage["cpf_paciente"];
    var nomePaciente = localStorage["nome_paciente"];

    
    buscarDados(cpfPaciente, 'pacientes',);
    buscarDados(cpfPaciente,'enderecos',['nome_paciente', 'cpf_paciente']);
    buscarDados(cpfPaciente,'anamnese_geral',['nome_paciente', 'cpf_paciente']);
    buscarDados(cpfPaciente,'anamnese_infantil',['nome_paciente', 'cpf_paciente']);
    buscarDados(cpfPaciente,'prontuarios');

    var botao = document.querySelector("#botaoAdicionar");
    botao.addEventListener("click",function (event) {
        event.preventDefault(); //evitando que a página seja recarregada
        var data_procedimentoTexto = document.querySelector('#dataProcedimento');
        var procedimentoTexto = document.querySelector('#procedimentoTexto');

        var novoProcedimento = {
            data_procedimento: data_procedimentoTexto.value,
            procedimento: procedimentoTexto.value
        }

        montaLinhaTabela(novoProcedimento,"novoProcedimento");
    });

    var botaoSalvar = document.querySelector("#salvarProcedimentos");
    botaoSalvar.addEventListener("click",function () {

        var procedimentos = document.querySelectorAll('.novoProcedimentoTexto');
        var datas = document.querySelectorAll('.novaData');
        var linhas = document.querySelectorAll('.novoProcedimento');

        for (let i = 0; i < procedimentos.length; i++) {
            salvarProcedimento(datas[i].textContent,procedimentos[i].textContent,cpfPaciente); //enviando para o banco
            linhas[i].removeEventListener("dblclick",removerComDuploClick); //removendo evento de deleção
            linhas[i].classList.remove('novoProcedimento'); //removendo o estilo de novo procedimento
        }
    });

    var voltar = document.querySelector('#voltar');
    voltar.addEventListener("click",function (event) {
        event.preventDefault();
        window.location.href = "/index.html";
    });

    var novaAnamense = document.querySelector("#novaAnamnese");
    novaAnamense.addEventListener("click",function () {
        window.location.href = "../../php/Paginas/anamnese.html";
    })

}

function montaProntuario(prontuarioBruto){ //Monta a tabela de prontuario com as operações já realizadas
    var quandidadeProcedimentos = prontuarioBruto.length;

    for (let i = 0; i < quandidadeProcedimentos; i++) {
        procedimento = JSON.parse(prontuarioBruto[i]); //converte para JSON
        montaLinhaTabela(procedimento);
        
    }
}

function montaLinhaTabela(procendimento,classe) {
    var tabela = document.querySelector("#prontuarioTabela");

    delete procendimento['cpf_paciente']; //deleta o campo de CPF do paciente, pois este já foi inserido

    var linha = document.createElement("tr"); //cria uma nova TR, ou seja, uma linha na tabela

    var dataProcedimento = document.createElement("td");  //cria a coluna de procedimento
    var procedimentoTexto = document.createElement("td"); //cria a coluna de data
    
    var regex = /(\d{4})-(\d{2})-(\d{2})/;
    var grupos = procendimento["data_procedimento"].match(regex);
    var procedimentoFormatado = `${grupos[3]}/${grupos[2]}/${grupos[1]}`;

    dataProcedimento.textContent = procedimentoFormatado;//atribuição dos valores
    procedimentoTexto.textContent = procendimento['procedimento'];    //atribuição dos valores
    
    linha.appendChild(dataProcedimento);  //lincando as novas colunas com a nova linha
    linha.appendChild(procedimentoTexto); //lincando as novas colunas com a nova linha
    if(classe !== undefined){ //caso seja um procedimento recem inserido:
        linha.classList.add(classe); //adiciona-se uma classe de estilo para realça-lo
        
        linha.addEventListener("dblclick",removerComDuploClick); //um evento de remoção, caso hajam erros de digitação
        
        dataProcedimento.classList.add('novaData');               //classes adicionadas para facilitar busca de valores
        procedimentoTexto.classList.add('novoProcedimentoTexto'); //classes adicionadas para facilitar busca de valores
    }
    tabela.appendChild(linha); //lincando a novo linha na tabela

}

function insereDados(dados,excoes) {
    if(excoes !== undefined){ //caso hajam campos que estão na tabela do banco, mas não precisam estar
        //na página do cliente:
        for (let i = 0; i < excoes.length; i++) {
            delete dados[excoes[i]]; //remove-se os campos
        }
    }
    var regex = /(\d{4})-(\d{2})-(\d{2})/;
    var chaves = Object.keys(dados); //obtem-se todos os nomes de propriedades
    for (let i = 0; i < chaves.length; i++) { 
        if(dados[chaves[i]].match(regex)){
            let grupos = dados[chaves[i]].match(regex);
            dados[chaves[i]] = `${grupos[3]}/${grupos[2]}/${grupos[1]}`;
        }
        document.getElementsByName(chaves[i])[0].textContent += dados[chaves[i]];
    }
    
}


function removeAnamneseInfatil() {
    var campos = document.querySelectorAll(".AnamneseI, .campoAnamneseI");
    campos.forEach(element => {
        element.style.display = "none"; //caso a pessoa tenha mais de 10 anos, esses campos não são necessários
    });
}

