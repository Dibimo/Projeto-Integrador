function main() {
    var botao = document.querySelector("#botao-cadastrar");
    botao.addEventListener("click", function (event){
        event.preventDefault();
        var form = document.querySelector("#formulario");
        alert(validaFormulario(form));
    });

    var campos = document.querySelectorAll(".campo");
    adicionaListenerCampos(campos);
}

function verificaCamposVazios(form) {
    var ehValido = true;
    for (let i = 0; i < form.length; i++) {
        if(form[i].value == ""){
            form[i].classList.add("campo-nao-preenchido");
            ehValido = false;
        }
        
    }
    return ehValido;
}

function adicionaListenerCampos(campos) {
    for (let i = 0; i < campos.length; i++) {
        campos[i].addEventListener("focus",function(){
            campos[i].classList.remove("campo-nao-preenchido")
        });
        
    }
}

function somenteNumeros(campo, max) {
    var texto = campo.value;
    if ((isNaN(texto)) || (texto.length > max)) {
        texto = (texto).substring(0, (texto).length - 1);
        campo.value = texto;
    }

}

