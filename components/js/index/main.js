function main() {
    var botao = document.querySelector("#botao-cadastrar");
    botao.addEventListener("click", function (event) {
        event.preventDefault();
        var form = document.querySelector("#formulario");
        obtemPaciente(form);
    });

    var campoCpf = document.querySelector("#cpf");
    campoCpf.addEventListener("input",function(){
        var tamanho = campoCpf.value.replace(/[.]/g,"").length;
        console.log(tamanho);
        if(tamanho > 0){
            if((tamanho % 3) == 0){
                if(tamanho == 9){
                    campoCpf.value += '-'; 
                }else{
                    campoCpf.value += '.'; 
                }
            }
        }
        if(tamanho == 11){
            campoCpf.value = campoCpf.value.substring(0,campoCpf.value - 1);
        }
    });

    var campos = document.querySelectorAll("input, select"); //obtem todos os campos do fórmulario
    adicionaListenerCampos(campos); //adiona um listener em todos eles

    var camposNumericos = document.querySelectorAll(".campoNumerico"); //obtem apenas os campos númericos
    adicionaListenerCamposNumericos(camposNumericos); //adiciona um lister especifico para eles

}



