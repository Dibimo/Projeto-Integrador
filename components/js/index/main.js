function main() {
    var botao = document.querySelector("#botao-cadastrar");
    botao.addEventListener("click", function (event) {
        var form = document.querySelector("#formulario");
        var camposObrigatorios = document.querySelectorAll(".obrigatorio");
        //verifica se há campo obrigatorios não preenchidos
        var haCamposVazios = verificaCamposVazios(camposObrigatorios); 
        if(haCamposVazios.length > 0){
            event.preventDefault();
            var erros = document.querySelector('#erros');
            erros.textContent = 'Os seguintes campos não estão preenchidos: ' + haCamposVazios;
            return;
        }
        var paciente = obtemPaciente(form);
        var haInvalidades = verificaPacienteValido(paciente);
        if(haInvalidades.length > 0){
            event.preventDefault();
            var erros = document.querySelector('#erros');
            erros.textContent = "";
            erros.textContent = 'Os seguintes campos apresentam inconsistências: ' + haInvalidades;    
            return;
        }
        //se todos os dados forem validos
        var buffer = document.querySelector("#buffer");
        buffer.value = JSON.stringify(paciente);

    });
    var campos = document.querySelectorAll("input, select"); //obtem todos os campos do fórmulario
    adicionaListenerCampos(campos); //adiona um listener em todos eles
    
    var camposNumericos = document.querySelectorAll(".campoNumerico"); //obtem apenas os campos númericos
    defineEscopoCampos(camposNumericos,/[^0-9,.-]/); //adiciona um lister especifico para eles
    
    var camposLetriticos = document.querySelectorAll(".campoAlfabetico");
    defineEscopoCampos(camposLetriticos,/[^a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ ]/);


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
        }else{
            campoCpf.classList.add('campo-nao-preenchido');
        }
    });

    var telefone = document.querySelector("#contato");
    telefone.addEventListener("blur",function (){
        var texto = telefone.value.replace(/[-]/g, ""); //recebendo o texto sem os caracteres de separação
        if (texto.length >= 10) {
            var ddd = texto.slice(0, 2);
            var parte2 = texto.slice(-4);
            var parte1 = texto.substring(texto.indexOf(ddd)+2,texto.indexOf(parte2));
            var textoFormatado = `(${ddd}) ${parte1}-${parte2}`;
            telefone.value = textoFormatado;
        }else{
            telefone.classList.add('campo-nao-preenchido');
        }
    });

    var cep = document.querySelector("#cep");
    cep.addEventListener("blur", function (){
        var texto = cep.value.replace(/[-]/g, ""); //recebendo o texto sem os caracteres de separação
        if (texto.length >= 7) {
            var parte1 = texto.slice(0,5);
            var parte2 = texto.slice(-3);
            var textoFormatado = `${parte1}-${parte2}`;
            cep.value = textoFormatado;
        }else{
            cep.classList.add('campo-nao-preenchido');
        }
    });
}




