function salvarProcedimento(dataProcedimento,procedimentoTexto,cpfPaciente) {
    var xml = new XMLHttpRequest();
    var dados = new FormData();

    dados.append('cpf_paciente',cpfPaciente);
    dados.append('dataProcedimento',dataProcedimento);
    dados.append('procedimentoTexto',procedimentoTexto);

    xml.open('POST','../../php/Funcoes/atualiza_prontuario.php',true);
    xml.send(dados);

}