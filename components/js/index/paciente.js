function obtemPaciente(form) {
    var paciente = {
        dadosPessoais: {
            nome: form.nome_completo.value,
            data_nascimento: form.data_nascimento.value,
            sexo: form.tipo_sexo.value,
            escolaridade: form.escolaridade.value,
            profissao: form.profissao.value,
            rg: form.rg.value,
            cpf: form.cpf.value,
            estado_civil: form.estado_civil.value,
            naturalidade: form.naturalidade.value,
            estado_nascenca: form.estados_nascenca.value,
            contato: form.contato.value,
            pai: form.pai.value,
            mae: form.mae.value
        },
        dadosFisicos: {
            peso: form.peso.value,
            altura: form.altura.value,
            cor: form.cor.value
        },
        enderecoCompleto: {
            endereco: form.endereco.value,
            numero: form.numero.value,
            complemento: form.complemento.value,
            bairro: form.bairro.value,
            cep: form.cep.value,
            cidade: form.cidade.value,
            estado_moradia: form.estados_moradia.value
        },
    }
    console.log(paciente);
    return paciente;
}