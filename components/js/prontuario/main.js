var removerComDuploClick = function () { //evento para a remoção da linha caso hajam erros de digitação
    tabela.removeChild(linha);
}

function main(cpf) {
    var botao = document.querySelector("#botaoAdicionar");
    botao.addEventListener("click",function (event) {
        event.preventDefault();
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
            salvarProcedimento(datas[i].textContent,procedimentos[i].textContent,cpf);
            linhas[i].removeEventListener("dblclick",removerComDuploClick);
            linhas[i].classList.remove('novoProcedimento');
        }
    })
}

function montaProntuario(prontuarioBruto){ 
    var quandidadeProcedimentos = prontuarioBruto.length;
    for (let i = 0; i < quandidadeProcedimentos; i++) {
        procedimento = JSON.parse(prontuarioBruto[i]);
        montaLinhaTabela(procedimento);
        
    }
}

function montaLinhaTabela(procendimento,classe) {
    var tabela = document.querySelector("#prontuarioTabela");
    delete procendimento['cpf_paciente'];
    var linha = document.createElement("tr");
    var dataProcedimento = document.createElement("td");
    var procedimentoTexto = document.createElement("td");
    dataProcedimento.textContent = procendimento['data_procedimento'];
    procedimentoTexto.textContent = procendimento['procedimento'];
    
    linha.appendChild(dataProcedimento);
    linha.appendChild(procedimentoTexto);
    if(classe !== undefined){ //caso linha a ser construida seja uma insercão, adiciona-se um destaque
        linha.classList.add(classe);
        linha.addEventListener("dblclick",removerComDuploClick);
        dataProcedimento.classList.add('novaData');
        procedimentoTexto.classList.add('novoProcedimentoTexto');
    }
    tabela.appendChild(linha);

}

function insereDados(dados,nomeSecao,excoes) {
    var secao = document.querySelectorAll(nomeSecao);
    if(excoes !== undefined){
        for (let i = 0; i < excoes.length; i++) {
            delete dados[excoes[i]];
        }
    }
    var chaves = Object.keys(dados);
    for (let i = 0; i < secao.length; i++) {
        secao[i].textContent = secao[i].textContent + dados[chaves[i]];
        
    }
    
}

function salvarProcedimento(dataProcedimento,procedimentoTexto,cpfPaciente) {
    var xml = new XMLHttpRequest();
    var dados = new FormData();
    dados.append('cpf_paciente',cpfPaciente);
    dados.append('dataProcedimento',dataProcedimento);
    dados.append('procedimentoTexto',procedimentoTexto);

    xml.open('POST','../../php/Funcoes/atualiza_prontuario.php',true);
    xml.send(dados);

}

