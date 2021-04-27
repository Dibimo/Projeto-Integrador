var botaoEditar = document.querySelector('#editarEndereco');
var botaoSalvar = document.querySelector('#salvarNovosDados');

botaoEditar.addEventListener('click',function () {
   botaoSalvar.classList.remove('invisivel');
   campos = document.querySelectorAll('div[id="dadosEndereco"] div div');
   campos.forEach(campo => {
       let regex = /(:\s)(.*)/mg;
       let dadoAntigo = campo.lastChild.textContent;
       dadoAntigo = (`${regex.exec(dadoAntigo)[2]}`);
       campo.lastChild.textContent = campo.lastChild.textContent.replace(dadoAntigo,"");
       campo.appendChild(document.createElement('input'))
       campo.lastChild.value = dadoAntigo;
       
       
       
   });
});

botaoSalvar.addEventListener('click',function () {
    this.classList.add('invisivel');
});

