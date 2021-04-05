function main() {
    var botao = document.querySelector("#adicionar");
    var tabela = document.querySelector("#prontuarioTabela");
    botao.addEventListener("click",function () {
        var linha = document.createElement("tr");
        var elemento = document.createElement("td");
        elemento.textContent = "Não sei";
        var elemento2 = document.createElement("td");
        elemento2.textContent = "Não sei";
        var elemento3 = document.createElement("td");
        elemento3.textContent = "Não sei";
        linha.appendChild(
            elemento
        );
        linha.appendChild(
            elemento2
        );
        linha.appendChild(
            elemento3
        );
        tabela.appendChild(linha);
    });
}