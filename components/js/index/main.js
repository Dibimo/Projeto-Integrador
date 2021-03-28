function main() {
    var botao = document.querySelector("#botao-cadastrar");
    botao.addEventListener("click", function (event) {
        event.preventDefault();
        var form = document.querySelector("#formulario");
        obtemPaciente(form);
    });
    var campos = document.querySelectorAll("input, select"); //obtem todos os campos do fórmulario
    adicionaListenerCampos(campos); //adiona um listener em todos eles

    var camposNumericos = document.querySelectorAll(".campoNumerico"); //obtem apenas os campos númericos
    adicionaListenerCamposNumericos(camposNumericos); //adiciona um lister especifico para eles

}



