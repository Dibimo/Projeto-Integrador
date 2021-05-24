var botaoEditar = document.querySelector('#editarEndereco');
var botaoSalvar = document.querySelector('#salvarNovosDados');
let excecoes = {
  cor: ["branco", "pardo", "negro"],
  escolaridade: [
    "infantil",
    "fundamental",
    "medio",
    "superior",
    "posGraduacao",
    "mestrado",
    "doutorado",
  ],
  estado_civil: ["solteiro", "casado", "separado", "divorciado", "viuvo"],
  estado_mora: [
    "ac",
    "al",
    "ap",
    "am",
    "ba",
    "ce",
    "df",
    "es",
    "go",
    "ma",
    "mt",
    "ms",
    "mg",
    "pa",
    "pb",
    "pr",
    "pe",
    "pi",
    "rj",
    "rn",
    "rs",
    "ro",
    "rr",
    "sc",
    "sp",
    "se",
    "to",
  ],
  estado_nasc: [
    "ac",
    "al",
    "ap",
    "am",
    "ba",
    "ce",
    "df",
    "es",
    "go",
    "ma",
    "mt",
    "ms",
    "mg",
    "pa",
    "pb",
    "pr",
    "pe",
    "pi",
    "rj",
    "rn",
    "rs",
    "ro",
    "rr",
    "sc",
    "sp",
    "se",
    "to",
  ],
};



botaoEditar.addEventListener('click',function () {
   botaoSalvar.classList.remove('invisivel');
   var campos = document.querySelectorAll('.campoEditavel');

   campos.forEach(campo => {
       let regex = /(:\s)(.*)/mg;
       let dadoAntigo = campo.textContent;
       dadoAntigo = (`${regex.exec(dadoAntigo)[2]}`);
       campo.textContent = campo.textContent.replace(dadoAntigo,"");
       let nomesExcecoes = Object.keys(excecoes);
       if(nomesExcecoes.includes(campo.getAttribute('name'))){
           var novoInput = constroiSelect(campo.getAttribute('name'),dadoAntigo);
       }else{
           var novoInput = document.createElement('input');
       }
       campo.appendChild(novoInput);
       novoInput.value = dadoAntigo;
       novoInput.classList.add('novosDados');
   });
});

botaoSalvar.addEventListener('click',function () {
    var inputs = document.querySelectorAll('.novosDados');
    var labels  = document.querySelectorAll('.campoEditavel');

    let novosDados = new FormData();
    novosDados.append('cpf_paciente',localStorage["cpf_paciente"]);
    for (let i = 0; i < inputs.length; i++) {
        let valor = inputs[i].value;
        inputs[i].remove();
        labels[i].textContent += valor;
        novosDados.append(labels[i].getAttribute('name'),valor);
    }
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        botaoSalvar.textContent = 'Salvando...';
        if (xml.readyState == 4 && xml.status == 200) {
            botaoSalvar.textContent = "Salvar";
            botaoSalvar.classList.add('invisivel');
      }
    };
    xml.open("POST", "../php/Funcoes/atualiza_dados.php", true);
    xml.send(novosDados);
    
});


function constroiSelect(tipo, dadoAtual){
    let select = document.createElement("select");
    let dadoAtualOption = document.createElement("option");
    
    //adicionando a opção atual na primeira posição da lista
    dadoAtualOption.textContent = dadoAtual;
    dadoAtualOption.value = dadoAtual;

    select.appendChild(dadoAtualOption);

    const posicaoDadoAtual = excecoes[tipo].indexOf(dadoAtual);
    if(posicaoDadoAtual > -1){
        excecoes[tipo].splice(posicaoDadoAtual, 1); //removendo a opção atual da lista
        excecoes[tipo].forEach((opcao)=>{
            let novaOpcao = document.createElement("option");
            novaOpcao.textContent = opcao;
            novaOpcao.value= opcao;
            select.appendChild(novaOpcao);
        });
    }
    
    return select;
}
