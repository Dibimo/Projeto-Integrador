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