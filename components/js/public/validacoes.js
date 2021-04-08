function verificaCamposVazios(campos) {
    var camposVazios = [];
    for (let i = 0; i < campos.length; i++) {
        if (campos[i].value == "") {
            campos[i].classList.add("campo-nao-preenchido");
            var nomeCampo = campos[i].name;
            nomeCampo = nomeCampo.replace("_", " ");
            camposVazios.push(" " + nomeCampo.replace(nomeCampo[0], nomeCampo[0].toUpperCase()));
        }

    }
    return camposVazios;
}