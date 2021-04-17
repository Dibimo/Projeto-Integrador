function defineEscopoCampos(campos, escopo) {
    for (let i = 0; i < campos.length; i++) {
        campos[i].addEventListener("input", function () {
            var texto = campos[i].value;
            texto = texto.replace(escopo,"");
            campos[i].value = texto;
        });

    }
}


