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
    
    var campoCpf = document.querySelector("#cpf");
    campoCpf.addEventListener("blur", function () {
        var texto = campoCpf.value.replace(/[.,-]/g,""); //recebendo o texto sem os caracteres de separação
        if(texto.length >= 11){
            var parte1 = texto.slice(0, 3);
            var parte2 = texto.slice(3, 6);
            var parte3 = texto.slice(6, 9);
            var digitosVerificadores = texto.slice(9,11);
            var textoFormatado = `${parte1}.${parte2}.${parte3}-${digitosVerificadores}`;
            campoCpf.value = textoFormatado;
        }
    });

    var telefone = document.querySelector("#contato");
    telefone.addEventListener("blur",function (){
        var texto = telefone.value.replace(/[.,-]/g, ""); //recebendo o texto sem os caracteres de separação
        if (texto.length >= 10) {
            var ddd = texto.slice(0, 2);
            var parte2 = texto.slice(-4);
            var parte1 = texto.substring(texto.indexOf(ddd)+2,texto.indexOf(parte2));
            var textoFormatado = `(${ddd}) ${parte1}-${parte2}`;
            telefone.value = textoFormatado;
        }
    });

    var cep = document.querySelector("#cep");
    cep.addEventListener("blur", function (){
        var texto = cep.value.replace(/[.,-]/g, ""); //recebendo o texto sem os caracteres de separação
        if (texto.length >= 7) {
            var parte1 = texto.slice(0,5);
            var parte2 = texto.slice(-3);
            var textoFormatado = `${parte1}-${parte2}`;
            cep.value = textoFormatado;
        }
    });
}




