function main(){
    var form = document.querySelector("#formulario");
    console.log(form.resposta_hemorragia.value);
    console.log(form.resposta_tuberculose.value);
    console.log(form.resposta_fumante.value);

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