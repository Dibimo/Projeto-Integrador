
function obtemAnamnese(form) {
    var anamnese = {
        hemorragia: form.resposta_hemorragia.value,
        alergia: form.resposta_alergia.value,
        reumatismo: form.resposta_reumatismo.value,
        cardiovascular: form.resposta_cardiovascular.value,
        gastrite: form.resposta_gastrite.value,
        diabetes: form.resposta_diabetico.value,
        tratamentoMedico: form.resposta_tratamento.value,
        medicamento: form.resposta_medicamento.value,
        operado: form.resposta_operacao.value,
        manias: form.resposta_manias.value,
        depressao: form.resposta_depressao.value,
        tuberculose:  form.resposta_tuberculose.value,
        sarampo: form.resposta_sarampo.value,
        sifilis: form.resposta_sifilis.value,
        caxumba: form.resposta_caxumba.value,
        hepatite: form.resposta_hepatite.value,
        varicela: form.resposta_varicela.value,
        aids: form.resposta_aids.value,
        outra: form.outra.value,
        fumante: form.resposta_fumante.value,
        frequenciaFumo: form.frequencia.value,
        sentou: form.sentou.value
    }
    console.log(anamnese);
}
