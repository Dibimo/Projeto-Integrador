var botaoEditar = document.querySelector('#editarEndereco');
var botaoSalvar = document.querySelector('#salvarNovosDados');

botaoEditar.addEventListener('click',function () {
   botaoSalvar.classList.remove('invisivel');
   var campos = document.querySelectorAll('div[id="dadosEndereco"] div div');
   campos.forEach(campo => {
       let regex = /(:\s)(.*)/mg;
       let dadoAntigo = campo.lastChild.textContent;
       dadoAntigo = (`${regex.exec(dadoAntigo)[2]}`);
       campo.lastChild.textContent = campo.lastChild.textContent.replace(dadoAntigo,"");
       var novoInput = document.createElement('input');
       campo.appendChild(novoInput);
       novoInput.value = dadoAntigo;
       novoInput.classList.add('novosDados');
       
       
   });
});

botaoSalvar.addEventListener('click',function () {
    this.classList.add('invisivel');
    var inputs = document.querySelectorAll('.novosDados');
    var labels = campos = document.querySelectorAll('div[id="dadosEndereco"] div div label');
    const novosDados = new FormData();
    novosDados.append('cpf_paciente',cpf);
    for (let i = 0; i < inputs.length; i++) {
        labels[i].textContent += inputs[i].value;
        novosDados.append(labels[i].getAttribute('name'),inputs[i].value);
        inputs[i].remove();
    }

    var xml = new XMLHttpRequest();
    xml.open('POST','../../php/Funcoes/atualiza_dados_endereco.php',true);
    xml.send(novosDados);
    
});
