function main() {
    var botao = document.querySelector("#botaoAdicionar");
    botao.addEventListener("click",function (event) {
        event.preventDefault();
    });
}

function montaProntuario(prontuarioBruto){ 
    var quandidadeProcedimentos = prontuarioBruto.length;
    for (let i = 0; i < quandidadeProcedimentos; i++) {
        procedimento = JSON.parse(prontuarioBruto[i]);
        montaLinhaTabela(procedimento);
        
    }
}

function montaLinhaTabela(prontuario) {
    var tabela = document.querySelector("#prontuarioTabela");
    delete prontuario['cpf_paciente'];
    var linha = document.createElement("tr");
    var dataProcedimento = document.createElement("td");
    var procedimentoTexto = document.createElement("td");
    dataProcedimento.textContent = prontuario['data_procedimento'];
    procedimentoTexto.textContent = prontuario['procedimento'];
    
    linha.appendChild(dataProcedimento);
    linha.appendChild(procedimentoTexto);
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
