function main() {
    var pesquisa = document.querySelector("#pesquisa");
    pesquisa.addEventListener("input",function () {
        var cpfInput = pesquisa.value;
        
        if (cpfInput!= '') {
            var xml = new XMLHttpRequest();
            var dados = new FormData();
            dados.append('cpf',cpfInput);
            xml.onreadystatechange = function () {
                
                if(xml.readyState == 4 && xml.status==200){
                    console.log(xml.responseText);
                }
            };

            xml.open('POST','../../php/Paginas/busca_cpf.php',true);
            xml.send(dados);
        }
    });
}