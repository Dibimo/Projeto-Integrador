function verificaCamposVazios(form) {
    var camposVazios = [];
    for (let i = 0; i < form.length-2; i++) { //menos 1 para pular o botão --> achar solução mais inteligente
        if (form[i].value == "") { //há pelo menos um campo vazio
            form[i].classList.add("campo-nao-preenchido");
            camposVazios.push(form[i].name);
        }

    }
    return camposVazios;
}

function validacaoCPF(cpf) {
    var soma = 0;
    for (let i = 10; i > 1; i--) {
        soma += parseInt(cpf[10 - i]) * i;
    }
    if (((soma * 10) % 11) == cpf[9]) { //se o primeiro digito verificador bater
        soma = 0;
        for (let i = 11; i > 1; i--) {
            soma += parseInt(cpf[11 - i]) * i;
        }
        if (((soma * 10) % 11) == cpf[10]) {//se o segundo digito verificador bater
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }

}

function validacaoCEP(cep) {
    if((cep.length<8) (cep.length>8)){
        return false; //cep invalido
    }
    return true; //cep valido
}

function verificaPacienteValido(paciente) {
    var invalidades = [];

    var cpfValido = validacaoCPF(paciente.cpf);
    if(!cpfValido){
        invalidades.push("CPF");
    }

    var cepValido = validacaoCEP(paciente.cep);
    if(!cepValido){
        invalidades.push("CEP");
    }

    if(paciente.altura>3){
        invalidades.push("altura");
    }
    if((paciente.peso <= 0) || (paciente.peso > 300)){
        invalidades.push("peso");
    }
    

    return invalidades;

}

function removeNaoNumericos(texto) {
    //função para remover as formatações dos números
    return texto = texto.replace(/[^0-9]/g,"");
}

function substituiVirgulaPorPonto(texto) {
    return texto = texto.replace(/[\,]/g,".");
}
