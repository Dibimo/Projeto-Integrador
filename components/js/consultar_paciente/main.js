function main() {
    var pesquisa = document.querySelector("#pesquisa");
    pesquisa.addEventListener("input",function () {
        var cpfInput = pesquisa.value;
        
        if (cpfInput!= '') {
            var dados = {
                cpfPesquisado: cpfInput
            }
            console.log(dados);
            var request = new XMLHttpRequest();
            request.open('POST','../../php/Paginas/busca_cpf.php');
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            request.send(cpfInput);
            request.onreadystatechange = function (){
                console.log(request.responseText);
            }
        }
    });
}