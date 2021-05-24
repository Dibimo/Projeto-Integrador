function main() {
    var botao = document.querySelector("#botao-cadastrar");
    var form = document.querySelector("#formulario");
    botao.addEventListener("click", function (event) {
        event.preventDefault();
        var camposObrigatorios = document.querySelectorAll(".obrigatorio");
        //verifica se há campo obrigatorios não preenchidos
        var haCamposVazios = verificaCamposVazios(camposObrigatorios); 
        if(haCamposVazios.length > 0){
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

        var xml = new XMLHttpRequest();

        localStorage.setItem('cpf_paciente',paciente['dadosPessoais']['cpf']);
        localStorage.setItem('nome_paciente',paciente['dadosPessoais']['nome']);

        xml.open('POST','../php/Funcoes/registrar_paciente.php',true);
        
        xml.send(JSON.stringify(paciente));
        xml.onreadystatechange = function () {
            if(xml.readyState == 4 && xml.status==200){
                console.log(xml.responseText);
                // window.location.href = '/components/Paginas/anamense.html'
            }
        };
    });

    form.addEventListener("input",function (event) {
        event.target.classList.remove("campo-nao-preenchido");
        event.target.classList.add("campo-preenchido");
    });
    
    
    var camposNumericos = document.querySelectorAll(".campoNumerico"); //obtem apenas os campos númericos
    defineEscopoCampos(camposNumericos,/[^0-9,.-]/); //adiciona um lister especifico para eles
    
    var camposAlfabeticos = document.querySelectorAll(".campoAlfabetico");
    defineEscopoCampos(camposAlfabeticos,/[^a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ ]/);


    var campoCpf = document.querySelector("#cpf");
    campoCpf.addEventListener("blur", function () {
        var texto = campoCpf.value.replace(/[.,-]/g,""); //recebendo o texto sem os caracteres de separação
        if(texto.length >= 11){
            campoCpf.value = aplicaFormatacao(texto,/(\d{3})(\d{3})(\d{3})(\d{2})/,"$1.$2.$3-$4");
        }else{
            campoCpf.classList.add('campo-nao-preenchido');
        }
    });

    var telefone = document.querySelector("#contato");
    telefone.addEventListener("blur",function (){
        var texto = telefone.value.replace(/[-]/g, ""); //recebendo o texto sem os caracteres de separação
        if (texto.length >= 10) {
            telefone.value = aplicaFormatacao(texto,/(\d{2})(\d{5})(\d{4})/,"($1) $2-$3");
        }else{
            telefone.classList.add('campo-nao-preenchido');
        }
    });

    var cep = document.querySelector("#cep");
    cep.addEventListener("blur", function (){
        var texto = cep.value.replace(/[-]/g, ""); //recebendo o texto sem os caracteres de separação
        if (texto.length >= 7) {
            cep.value = aplicaFormatacao(texto,/(\d{5})(\d{3})/,"$1-$2");
        }else{
            cep.classList.add('campo-nao-preenchido');
        }
    });
}




