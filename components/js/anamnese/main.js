function main(){

    var form = document.querySelector("#formulario");
    var botao = document.querySelector("#enviar");

    var nomePaciente = localStorage['nome_paciente'];
    var cpfPaciente = localStorage['cpf_paciente'];

    var labelNome = document.querySelector('#nome_paciente');
    var labelCpf = document.querySelector('#cpf_paciente');

    labelNome.textContent += nomePaciente;
    labelCpf.textContent += cpfPaciente;

    botao.addEventListener("click",function (event) {
        event.preventDefault();
        if(verificaCamposVaziosAnamnese()){ //se ha campos vazios
            document.querySelector("#erros").textContent = 'Há campos não preenchidos';
            return;
        }
        var anamnese = obtemAnamnese(form);
        anamnese.nome_paciente = nomePaciente;
        anamnese.cpf_paciente = cpfPaciente;

        var xml = new XMLHttpRequest();

        xml.open('POST','../../php/Funcoes/registrar_anamnese.php',true);
        
        xml.send(JSON.stringify(anamnese));
        xml.onreadystatechange = function () {
            if(xml.readyState == 4 && xml.status==200){
                window.location.href = '../../php/Paginas/prontuario.php'
            }
        };
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
        });
    });

    var checkboxs = document.querySelectorAll('input[type="checkbox"]');
    adicionaListeresCheckBoxs(checkboxs);
}
