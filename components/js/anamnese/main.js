function main(){
    var form = document.querySelector("#formulario");
    var botao = document.querySelector("#enviar");
    botao.addEventListener("click",function (event) {
        obtemAnamnese(form);
    })

    var radios = document.querySelectorAll('input[type="radio"]');
    radios.forEach(function (radio) {
        radio.addEventListener("click",function (){
            console.log(radio.value);
        });
    });

    var radioFumante = document.querySelectorAll('input[name="resposta_fumante"]');
    radioFumante.forEach(function (radio) {
        radio.addEventListener("click",function () {
            var frequencia = document.querySelector("#frequencia");
            if(radio.value == "true"){
                frequencia.style.display = 'inline';
                return;
            }
            frequencia.style.display = 'none';
        })
    })
}