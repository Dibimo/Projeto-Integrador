function main() {
    var pesquisa = document.querySelector("#pesquisa");
    var resposta = document.querySelector("#resposta");
    pesquisa.addEventListener("input",function () {
        var cpfInput = pesquisa.value;
        if (cpfInput.length == 11) {
            resposta.textContent = 'Buscando...';
            var xml = new XMLHttpRequest();
            var dados = new FormData();
            dados.append('cpf',cpfInput);
            xml.onreadystatechange = function () {
                if(xml.readyState == 4 && xml.status==200){
                    if(xml.responseText != 'Paciente não econtrado! Por favor cadastre o paciente primeiro.'){
                        localStorage.setItem('cpf_paciente',cpfInput);
                        localStorage.setItem('nome_paciente',xml.responseText);
                        window.location.href = '/components/Paginas/prontuario.html'
                    }else{
                        resposta.textContent = xml.responseText;
                    }

                }
            };

            xml.open('POST','../php/Funcoes/busca_cpf.php',true);
            xml.send(dados);
        }else{
            resposta.textContent = '';
        }
        
    });

    pesquisa.addEventListener("input",function (event) {
        pesquisa.value = pesquisa.value.replace(/[^0-9]/, "");
    });

    var botaoCastro = document.querySelector("#irParaCadastro");
    botaoCastro.addEventListener("click", function () {
        window.location.href = '/components/Paginas/cadastrar_paciente.html'
    });
}
