function verificaCamposVazios(form) {
    var camposVazios = [];
    for (let i = 0; i < form.length-1; i++) { //menos 1 para pular o botão --> achar solução mais inteligente
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

function verificaPacienteValido(paciente) {
    var invalidades = [];

    var cpfValido = validacaoCPF(paciente.cpf);
    if(!cpfValido){
        invalidades.push("CPF");
    }



}
