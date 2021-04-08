function main(){
    var form = document.querySelector("#formulario");
    var botao = document.querySelector("#enviar");
    var buffer = document.querySelector("#buffer");
    botao.addEventListener("click",function (event) {
        var anamnese = obtemAnamnese(form);
        buffer.value = JSON.stringify(anamnese);
    })


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
    });

    var checkboxs = document.querySelectorAll('input[type="checkbox"]');
    adicionaListeresCheckBoxs(checkboxs);

}