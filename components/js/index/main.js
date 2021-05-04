function main() {
    var botaoEntrar = document.querySelector("#botaoEntrar");
    botaoEntrar.addEventListener('click',function () {
        window.location.href = '/components/php/Paginas/consultar_paciente.html';
    });
}
