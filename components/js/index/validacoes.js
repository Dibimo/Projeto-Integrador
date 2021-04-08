
function validacaoCPF(cpf) {
    cpf = cpf.toString();
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
    cep = cep.toString();
    if((cep.length<8) || (cep.length>8)){
        return false; //cep invalido
    }
    return true; //cep valido
}

function verificaPacienteValido(paciente) {
    var invalidades = [];
    var cpfValido = validacaoCPF(paciente.dadosPessoais.cpf);
    if(!cpfValido){
        invalidades.push("CPF");
    }

    var cepValido = validacaoCEP(paciente.enderecoCompleto.cep);
    if(!cepValido){
        invalidades.push("CEP");
    }

    if(paciente.dadosFisicos.altura>3){
        invalidades.push("altura");
    }
    if((paciente.peso <= 0) || (paciente.dadosFisicos.peso > 300)){
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
