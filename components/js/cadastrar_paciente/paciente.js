function obtemPaciente(form) {
    var paciente = {
        dadosPessoais: {
            nome: form.nome_completo.value,
            data_nascimento: form.data_nascimento.value,
            sexo: form.sexo.value,
            escolaridade: form.escolaridade.value,
            profissao: form.profissao.value,
            rg: form.rg.value,
            cpf: removeNaoNumericos(form.cpf.value),
            estado_civil: form.estado_civil.value,
            naturalidade: form.naturalidade.value,
            estado_nascenca: form.estados_nascenca.value,
            contato: removeNaoNumericos(form.contato.value),
            pai: form.pai.value,
            mae: form.mae.value,
            naturalidadePai: form.paiNaturalidade.value,
            naturalidadeMae: form.maeNaturalidade.value
        },
        dadosFisicos: {
            peso: substituiVirgulaPorPonto(form.peso.value),
            altura: substituiVirgulaPorPonto(form.altura.value),
            cor: form.cor.value
        },
        enderecoCompleto: {
            endereco: form.endereco.value,
            numero: form.numero.value,
            complemento: form.complemento.value,
            bairro: form.bairro.value,
            cep: removeNaoNumericos(form.cep.value),
            cidade: form.cidade.value,
            estado_moradia: form.estados_moradia.value
        },
    }
    return paciente;
}