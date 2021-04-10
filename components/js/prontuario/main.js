function main() {
    var botao = document.querySelector("#adicionar");
    var tabela = document.querySelector("#prontuarioTabela");
    botao.addEventListener("click",function () {
        var linha = document.createElement("tr");
        var elemento = document.createElement("td");
        elemento.textContent = "Não sei";
        var elemento2 = document.createElement("td");
        elemento2.textContent = "Não sei";
        var elemento3 = document.createElement("td");
        elemento3.textContent = "Não sei";
        linha.appendChild(
            elemento
        );
        linha.appendChild(
            elemento2
        );
        linha.appendChild(
            elemento3
        );
        tabela.appendChild(linha);
    });
}

function montaProntuario() {
    // var prontuario ="" + <?php //echo $prontuario; ?>;
    // var dadosTratados = prontuario.replace(/[":]/g,"");
    // dadosTratados = dadosTratados.replace(/[,]/g," ");
    // dadosTratados = dadosTratados.replace(/10054547016 /g,"");
    // dadosTratados = dadosTratados.replace(/data_procedimento/g,"");
    // dadosTratados = dadosTratados.replace(/cpf_paciente/g,"");
    // dadosTratados = dadosTratados.replace(/procedimento/g,"");
    // dadosTratados = dadosTratados.replace(/} {/g,"--");
    // dadosTratados = dadosTratados.replace(/[{}]/g,"");
    // dadosTratados = dadosTratados.split('--');
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
