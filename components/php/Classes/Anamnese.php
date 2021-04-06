<?php

    class Anamnese
    {
        private string $queixaPrincipal;
        private string $hitoricoDoenca;
        private bool   $hemorragia;
        private bool   $reumatismo;
        private bool   $alergia;
        private bool   $cardiovascular;
        private bool   $gastrite;
        private bool   $diabetico;
        private bool   $desmaio;
        private bool   $tratamento;
        private bool   $medicamento;
        private bool   $operacao;
        private bool   $manias;
        private bool   $depressao;
        private bool   $tuberculose;
        private bool   $sarampo;
        private bool   $sifilis;
        private bool   $caxumba;
        private bool   $hepatite;
        private bool   $varicela;
        private bool   $aids;
        private string $outra;
        private bool   $fumante;
        private string $frequencia;
        
        private string $historiaGestacao;
        private string $tipoParto;
        private bool   $problemaParto;
        private string $amamentacao;
        private bool   $anestesia;
        private bool   $doencaGrave;
        private bool   $vacinada;
        private bool   $sentou;
        private bool   $engatinhou;
        private bool   $andou;
        private bool   $falou;
        private bool   $dificuldade;
        private bool   $alegre;
        private bool   $triste;
        private bool   $timido;
        private bool   $tranquilo;
        private bool   $inquieto;
        private bool   $assustado;
        private string $sono;
        private bool   $posturaNormal;
        private bool   $posturaAlterada;
        private bool   $fonacaoNormal;
        private bool   $disturbiosFala;
        private bool   $paralisia;
        private bool   $enurese;
        private bool   $esfincteres;
        private string $alimentacao;
        private string $sociabilidade;
        private bool   $tiques;
        private bool   $fobias;
        private bool   $ansiedade;
        private bool   $medo;
        private bool   $birra;
        private bool   $ciumes;
        private string $observacoes;

        private string $labios;
        private string $mucosaJugal;
        private string $lingua;
        private string $soalho;
        private string $palatoDuro;
        private string $garganta;
        private string $palatoMole;
        private string $mucosaAlveolar;
        private string $gengivas;
        private string $glandulasSalivares;
        private string $linfonodos;
        private string $atm;
        private string $muscMastigadores;
        private string $oclusao;
        private string $alteracoesEncontradas;
        private string $diagnosticoPresuntivo;
        private string $examesComplementares;
        private string $diagnosticoDefinitivo;
        private string $planoTratamento;

        public function __construct($dados)
        {
            $this->queixaPrincipal = $dados['queixa_principal'];
            $this->historiaGestacao = $dados['hitorico_doenca'];
            $this->hemorragia = $dados['resposta_hemorragia'];
            $this->alergia = $dados['resposta_alergia'];
            $this->reumatismo = $dados['resposta_reumatismo'];
            $this->cardiovascular = $dados['resposta_cardiovascular'];
            $this->gastrite = $dados['resposta_gastrite'];
            $this->diabetico = $dados['resposta_diabetico'];
            $this->desmaio = $dados['resposta_desmaio'];
            $this->tratamento = $dados['resposta_tratamento'];
            $this->medicamento = $dados['resposta_medicamento'];
            $this->operacao = $dados['resposta_operacao'];
            $this->manias = $dados['resposta_manias'];
            $this->depressao = $dados['resposta_depressao'];
            $this->tuberculose = $dados['resposta_tuberculose'];
            $this->sarampo = $dados['resposta_sarampo'];
            $this->sifilis = $dados['resposta_sifilis'];
            $this->caxumba = $dados['resposta_caxumba'];
            $this->hepatite = $dados['resposta_hepatite'];
            $this->varicela = $dados['resposta_varicela'];
            $this->aids = $dados['resposta_aids'];
            $this->outra = $dados['outra'];
            $this->fumante = $dados['resposta_fumante'];
            $this->frequencia = $dados['frequencia'];
            $this->gestacao = $dados['historia_gestacao'];
            $this->tipoParto = $dados['resposta_tipo_parto'];
            $this->problemaParto = $dados['resposta_problema_parto'];
            $this->amamentacao = $dados['resposta_amamentacao'];
            $this->anestesia = $dados['resposta_anestesia'];
            $this->doencaGrave = $dados['resposta_doenca_grave'];
            $this->vacinada = $dados['resposta_vacinada'];
            $this->sentou = $dados['sentou'];
            $this->engatinhou = $dados['engatinhou'];
            $this->andou = $dados['andou'];
            $this->falou = $dados['falou'];
            $this->dificuldade = $dados['resposta_dificuldade'];
            $this->alegre = $dados['alegre'];
            $this->triste = $dados['triste'];
            $this->timido = $dados['timido'];
            $this->tranquilo = $dados['tranquilo'];
            $this->inquieto = $dados['inquieto'];
            $this->assustado = $dados['assustado'];
            $this->sono  = $dados['sono'];
            $this->normal = $dados['postura_normal'];
            $this->alterada = $dados['postura_alterada'];
            $this->normal = $dados['fonacao_normal'];
            $this->fala = $dados['disturbios_fala'];
            $this->paralisia = $dados['paralisia'];
            $this->enurese = $dados['enurese'];
            $this->esfincteres = $dados['esfincteres'];
            $this->alimentacao = $dados['alimentacao'];
            $this->sociabilidade = $dados['sociabilidade'];
            $this->tiques = $dados['tiques'];
            $this->fobias = $dados['fobias'];
            $this->ansiedade = $dados['ansiedade'];
            $this->medo = $dados['medo'];
            $this->birra = $dados['birra'];
            $this->ciumes = $dados['ciumes'];
            $this->observacoes = $dados['observacoes'];
            $this->labios = $dados['resposta_labios'];
            $this->mucosaJugal = $dados['resposta_mucosaJugal'];
            $this->lingua = $dados['resposta_lingua'];
            $this->soalho = $dados['resposta_soalho'];
            $this->palatoDuro = $dados['resposta_palatoDuro'];
            $this->garganta = $dados['resposta_garganta'];
            $this->palatoMole = $dados['resposta_palatoMole'];
            $this->mucosaAlveolar = $dados['resposta_mucosaAlveolar'];
            $this->gengivas = $dados['resposta_gengivas'];
            $this->glandulasSalivares = $dados['resposta_glandulasSalivares'];
            $this->linfonodos = $dados['resposta_linfonodos'];
            $this->atm = $dados['resposta_atm'];
            $this->muscMastigadores = $dados['resposta_muscMastigadores'];
            $this->oclusao = $dados['resposta_oclusao'];
            $this->alteracoesEncontradas = $dados['alteracoesEncontradas'];
            $this->diagnosticoPresuntivo = $dados['diagnosticoPresuntivo'];
            $this->examesComplementares = $dados['examesComplementares'];
            $this->diagnosticoDefinitivo = $dados['diagnosticoDefinitivo'];
            $this->planoTratamento = $dados['planoTratamento'];
        }
        
        public function getPlanoTratamento()
        {
            return $this->planoTratamento;
        }
 
        public function getDiagnosticoDefinitivo()
        {
            return $this->diagnosticoDefinitivo;
        }
 
        public function getExamesComplementares()
        {
            return $this->examesComplementares;
        }
 
        public function getDiagnosticoPresuntivo()
        {
            return $this->diagnosticoPresuntivo;
        }
 
        public function getAlteracoesEncontradas()
        {
            return $this->alteracoesEncontradas;
        }
 
        public function getOclusao()
        {
            return $this->oclusao;
        }
 
        public function getMuscMastigadores()
        {
            return $this->muscMastigadores;
        }
 
        public function getAtm()
        {
            return $this->atm;
        }
 
        public function getLinfonodos()
        {
            return $this->linfonodos;
        }
 
        public function getGlandulasSalivares()
        {
            return $this->glandulasSalivares;
        }
 
        public function getGengivas()
        {
            return $this->gengivas;
        }
 
        public function getMucosaAlveolar()
        {
            return $this->mucosaAlveolar;
        }
 
        public function getPalatoMole()
        {
            return $this->palatoMole;
        }
 
        public function getGarganta()
        {
            return $this->garganta;
        }
 
        public function getPalatoDuro()
        {
            return $this->palatoDuro;
        }
 
        public function getSoalho()
        {
            return $this->soalho;
        }
 
        public function getLingua()
        {
            return $this->lingua;
        }
 
        public function getMucosaJugal()
        {
            return $this->mucosaJugal;
        }
 
        public function getLabios()
        {
            return $this->labios;
        }
 
        public function getObservacoes()
        {
            return $this->observacoes;
        }
 
        public function getCiumes()
        {
            return $this->ciumes;
        }
 
        public function getBirra()
        {
            return $this->birra;
        }
 
        public function getMedo()
        {
            return $this->medo;
        }
 
        public function getAnsiedade()
        {
            return $this->ansiedade;
        }
 
        public function getFobias()
        {
            return $this->fobias;
        }
 
        public function getTiques()
        {
            return $this->tiques;
        }
 
        public function getSociabilidade()
        {
            return $this->sociabilidade;
        }
 
        public function getAlimentacao()
        {
            return $this->alimentacao;
        }
 
        public function getEsfincteres()
        {
            return $this->esfincteres;
        }
 
        public function getEnurese()
        {
            return $this->enurese;
        }
 
        public function getParalisia()
        {
            return $this->paralisia;
        }
 
        public function getDisturbiosFala()
        {
            return $this->disturbiosFala;
        }
 
        public function getFonacaoNormal()
        {
            return $this->fonacaoNormal;
        }
 
        public function getPosturaAlterada()
        {
            return $this->posturaAlterada;
        }
 
        public function getPosturaNormal()
        {
            return $this->posturaNormal;
        }
 
        public function getSono()
        {
            return $this->sono;
        }
 
        public function getAssustado()
        {
            return $this->assustado;
        }
 
        public function getInquieto()
        {
            return $this->inquieto;
        }
 
        public function getTranquilo()
        {
            return $this->tranquilo;
        }
 
        public function getTimido()
        {
            return $this->timido;
        }
 
        public function getTriste()
        {
            return $this->triste;
        }
 
        public function getAlegre()
        {
            return $this->alegre;
        }
 
        public function getDificuldade()
        {
            return $this->dificuldade;
        }
 
        public function getFalou()
        {
            return $this->falou;
        }
 
        public function getAndou()
        {
            return $this->andou;
        }
 
        public function getEngatinhou()
        {
            return $this->engatinhou;
        }
 
        public function getSentou()
        {
            return $this->sentou;
        }
 
        public function getVacinada()
        {
            return $this->vacinada;
        }
 
        public function getDoencaGrave()
        {
            return $this->doencaGrave;
        }
 
        public function getAnestesia()
        {
            return $this->anestesia;
        }
 
        public function getAmamentacao()
        {
            return $this->amamentacao;
        }
 
        public function getProblemaParto()
        {
            return $this->problemaParto;
        }
 
        public function getTipoParto()
        {
            return $this->tipoParto;
        }
 
        public function getHistoriaGestacao()
        {
            return $this->historiaGestacao;
        }
 
        public function getFrequencia()
        {
            return $this->frequencia;
        }
 
        public function getFumante()
        {
            return $this->fumante;
        }
 
        public function getOutra()
        {
            return $this->outra;
        }
 
        public function getAids()
        {
            return $this->aids;
        }
 
        public function getVaricela()
        {
            return $this->varicela;
        }
 
        public function getHepatite()
        {
            return $this->hepatite;
        }
 
        public function getCaxumba()
        {
            return $this->caxumba;
        }
 
        public function getSifilis()
        {
            return $this->sifilis;
        }
 
        public function getSarampo()
        {
            return $this->sarampo;
        }
 
        public function getTuberculose()
        {
            return $this->tuberculose;
        }
 
        public function getDepressao()
        {
            return $this->depressao;
        }
 
        public function getManias()
        {
            return $this->manias;
        }
 
        public function getOperacao()
        {
            return $this->operacao;
        }
 
        public function getMedicamento()
        {
            return $this->medicamento;
        }
 
        public function getTratamento()
        {
            return $this->tratamento;
        }
 
        public function getDesmaio()
        {
            return $this->desmaio;
        }
 
        public function getDiabetico()
        {
            return $this->diabetico;
        }
 
        public function getGastrite()
        {
            return $this->gastrite;
        }
 
        public function getCardiovascular()
        {
            return $this->cardiovascular;
        }
 
        public function getAlergia()
        {
            return $this->alergia;
        }
 
        public function getReumatismo()
        {
            return $this->reumatismo;
        }
 
        public function getHemorragia()
        {
            return $this->hemorragia;
        }
 
        public function getHitoricoDoenca()
        {
            return $this->hitoricoDoenca;
        }
 
        public function getQueixaPrincipal()
        {
            return $this->queixaPrincipal;
        }
    }

?>