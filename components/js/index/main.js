function main() {
    var botao = document.querySelector("#botao-cadastrar");
    botao.addEventListener("click", function (event) {
        event.preventDefault();
        var form = document.querySelector("#formulario");
        obtemPaciente(form);
    });
    var campos = document.querySelectorAll("input, select"); //obtem todos os campos do fórmulario
    adicionaListenerCampos(campos); //adiona um listener em todos eles

    var campoCpf = document.querySelector("#cpf");
    campoCpf.addEventListener("blur", function () {
        var texto = campoCpf.value;
        if(texto.length >= 11){
            var parte1 = texto.slice(0, 3);
            var parte2 = texto.slice(3, 6);
            var parte3 = texto.slice(6, 9);
            var digitosVerificadores = texto.slice(9,11);
            var textoFormatado = `${parte1}.${parte2}.${parte3}-${digitosVerificadores}`;
            campoCpf.value = textoFormatado;
        }
    });
    campoCpf.addEventListener("input", function(){
        if(campoCpf.value.replace(/[.-]/g,"").length == 11){
            console.log('deu 11 aqui');
        }
    });

    var camposNumericos = document.querySelectorAll(".campoNumerico"); //obtem apenas os campos númericos
    adicionaListenerCamposNumericos(camposNumericos); //adiciona um lister especifico para eles

}



