function main() {
    pesquisa.addEventListener("input",function () {
        var pesquisa = document.querySelector("#pesquisa");
        var resposta = document.querySelector("#resposta");
        var cpfInput = pesquisa.value;

        if (cpfInput.length == 11) {
            var xml = new XMLHttpRequest();
            var dados = new FormData();
            dados.append('cpf',cpfInput);
            xml.onreadystatechange = function () {
                
                if(xml.readyState == 4 && xml.status==200){
                    resposta.textContent = (xml.responseText);
                }
            };

            xml.open('POST','../../php/Funcoes/busca_cpf.php',true);
            xml.send(dados);
        }else{
            resposta.textContent = '';
        }
    });
}