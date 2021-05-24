
var botaoExcluir = document.querySelector("#excluirPaciente");
botaoExcluir.addEventListener('click',function () {
   var dados = new FormData();
   dados.append("cpf_paciente", localStorage.getItem("cpf_paciente"));
   var xml = new XMLHttpRequest();
   xml.open("POST", "../php/Funcoes/excluir_paciente.php", true);

   xml.send(dados);
   xml.onreadystatechange = function () {
     if (xml.readyState == 4 && xml.status == 200) {
        window.location.href = "/index.html";
     }
   };

});

