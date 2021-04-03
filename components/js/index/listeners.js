function adicionaListenerCampos(campos) {
    for (let i = 0; i < campos.length; i++) {
        campos[i].addEventListener("focus", function () {
            campos[i].classList.remove("campo-nao-preenchido")
        });

    }
}
function adicionaListenerCamposNumericos(campos, expressao) {
    for (let i = 0; i < campos.length; i++) {
        campos[i].addEventListener("input", function () {
            var texto = campos[i].value;
            texto = texto.replace(expressao,"");
            campos[i].value = texto;
        });

    }
}


