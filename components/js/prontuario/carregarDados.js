function buscarDados(cpf, tabela, excoes) {
  var xml = new XMLHttpRequest();
  var dadosBusca = new FormData();
  dadosBusca.append("cpf", cpf);
  dadosBusca.append("tabela", tabela);
  xml.onreadystatechange = function () {
    if (xml.readyState == 4 && xml.status == 200) {
        var dadosBanco = JSON.parse(xml.responseText);
        if(dadosBanco != undefined){
            if(tabela != 'prontuarios'){
                insereDados(dadosBanco,excoes);
                return;
            }
            montaProntuario(dadosBanco);
            return;
        }
        removeAnamneseInfatil();
    }
  };

  xml.open("POST", "../php/Funcoes/obtem_dados_banco.php", true);
  xml.send(dadosBusca);
}
