var botaoDados = document.querySelector('#botaoDados');
var botaoAnamnese = document.querySelector('#botaoAnamnese');
var botaoProntuario = document.querySelector('#botaoProntuario');

var dadosPessoaisFisicosEndereco = document.querySelector('#dadosPessoaisFisicosEndereco');
var anamneseTotal = document.querySelector('#anamneseTotal');
var prontuario = document.querySelector('#prontuario');

botaoDados.addEventListener('click',function () {

    document.title = 'Dados pessoais';

    this.classList.remove('botaoDesligado')
    this.classList.add('botao');

    botaoAnamnese.classList.add('botaoDesligado');
    botaoProntuario.classList.add('botaoDesligado');
    
    dadosPessoaisFisicosEndereco.classList.remove('invisivel');
    anamneseTotal.classList.add('invisivel');
    prontuario.classList.add('invisivel');

});
botaoAnamnese.addEventListener('click',function () {

    document.title = 'Anamnese';

    this.classList.remove('botaoDesligado')
    this.classList.add('botao');

    botaoDados.classList.add('botaoDesligado');
    botaoProntuario.classList.add('botaoDesligado');

    anamneseTotal.classList.remove('invisivel');
    dadosPessoaisFisicosEndereco.classList.add('invisivel');
    prontuario.classList.add('invisivel');
});
botaoProntuario.addEventListener('click',function () {

    document.title = 'Prontuario';

    this.classList.remove('botaoDesligado')
    this.classList.add('botao');

    botaoDados.classList.add('botaoDesligado');
    botaoAnamnese.classList.add('botaoDesligado');

    prontuario.classList.remove('invisivel');
    dadosPessoaisFisicosEndereco.classList.add('invisivel');
    anamneseTotal.classList.add('invisivel');
});
