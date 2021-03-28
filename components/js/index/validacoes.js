function verificaCamposVazios(form) {
    var ehValido = true;
    for (let i = 0; i < form.length; i++) {
        if (form[i].value == "") { //há pelo menos um campo vazio
            form[i].classList.add("campo-nao-preenchido");
            ehValido = false; //retorna false
        }

    }
    return ehValido;
}

function validacaoCPF(cpf) {
    var soma = 0;
    for (let i = 10; i > 1; i--) {
        soma += parseInt(cpf[10 - i]) * i;
    }
    if (((soma * 10) % 11) == cpf[9]) {
        soma = 0;
        for (let i = 11; i > 1; i--) {
            soma += parseInt(cpf[11 - i]) * i;
        }
        if (((soma * 10) % 11) == cpf[10]) {
            console.log('valido')
        } else {
            console.log('não vailido');
        }
    } else {
        console.log('num virou');
    }

}