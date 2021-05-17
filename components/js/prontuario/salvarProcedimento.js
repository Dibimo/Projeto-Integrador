function salvarProcedimento(dataProcedimento,procedimentoTexto,cpfPaciente) {
    var xml = new XMLHttpRequest();
    var dados = new FormData();

    let mensagemDeSalvamento = document.querySelector("#mensagemDeSalvamento");
    mensagemDeSalvamento.textContent = "Salvando...";

    dados.append('cpf_paciente',cpfPaciente);
    dados.append('dataProcedimento',dataProcedimento);
    dados.append('procedimentoTexto',procedimentoTexto);

    xml.onreadystatechange = function () {
      if (xml.readyState == 4 && xml.status == 200) {
        let timer = 1;
        mensagemDeSalvamento.textContent = "Os dados foram salvos!";
        let contador = setInterval(() => {
          timer += 1;
          if(timer === 5){
              mensagemDeSalvamento.textContent = " ";
              clearInterval(contador);
          }
        }, 1000);
      }
    };

    xml.open('POST','../../php/Funcoes/atualiza_prontuario.php',true);
    xml.send(dados);

}