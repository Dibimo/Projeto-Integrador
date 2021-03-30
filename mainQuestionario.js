function main(){
    var form = document.querySelector("#formulario");
    console.log(form.resposta_hemorragia.value);
    console.log(form.resposta_tuberculose.value);

    var radios = document.querySelectorAll('input[type="radio"]');
    radios.forEach(function (radio) {
        radio.addEventListener("click",function (){
            console.log(radio.value);
        });
    });
}