function adicionaListenerCampos(campos) {
    for (let i = 0; i < campos.length; i++) {
        campos[i].addEventListener("focus", function () {
            campos[i].classList.remove("campo-nao-preenchido")
        });

    }
}
function adicionaListenerCamposNumericos(campos) {
    for (let i = 0; i < campos.length; i++) {
        campos[i].addEventListener("input", function () {
            var texto = campos[i].value;
            if ((isNaN(texto)) || (texto.length > 100)) {
                texto = (texto).substring(0, (texto).length - 1);
                campos[i].value = texto;
            }
        });

    }
}
