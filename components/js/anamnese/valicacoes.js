
function verificaCamposVaziosAnamnese() {
    var haCamposVazios = false;
    var selectTextarea = document.querySelectorAll('select:not(div.anamneseI select), textarea:not(div.anamneseI textarea)');
    var radioButtons = document.querySelectorAll('input[type=radio]:not(div.anamneseI input)');
    selectTextarea.forEach(campo=>{
        if(campo.value == ''){
            campo.classList.add('campo-nao-preenchido');
            haCamposVazios = true;
    
        }
    });
    
    radioButtons.forEach(campo=>{
        if(document.querySelectorAll('input[name='+campo.name+']:checked').length == 0){
            haCamposVazios = true;
            document.querySelectorAll('input[name='+campo.name+']').item(0).classList.add('campo-nao-preenchido');
            document.querySelectorAll('input[name='+campo.name+']').item(1).classList.add('campo-nao-preenchido');
        }
    });

    return haCamposVazios;
}
