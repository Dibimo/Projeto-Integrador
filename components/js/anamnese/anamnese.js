
function obtemAnamnese(form) {
    var anamnese = {
        hemorragia: form.resposta_hemorragia.value,
        alergia: form.reposta_alergia.value,
        reumatismo: form.reposta_reumatismo.value,
        cardiovascular: form.reposta_cardiovascular.value,
        gastrite: form.reposta_gastriste.value,
        diabetes: form.reposta_diabetes.value,
        tratamentoMedico: form.reposta_tratamento.value,
        medicamento: form.reposta_medicamento.value,
        operado: form.reposta_operado.value,
        manias: form.reposta_manias.value,
        depressao: form.reposta_depressao.value,
        tuberculose:  form.reposta_tuberculose.value,
        sarampo: form.reposta_sarampo.value,
        sifilis: form.reposta_sifilis.value,
        caxumba: form.reposta_caxumba.value,
        hepatite: form.reposta_hepatite.value,
        varicela: form.reposta_varicela.value,
        aids: form.reposta_aids.value,
        outra: form.outra.value
        
    }
    console.log(anamnese);
}
