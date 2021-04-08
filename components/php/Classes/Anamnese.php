<?php

    class Anamnese
    {
        private string $queixaPrincipal;
        private string $historicoDoenca;
        private string   $hemorragia;
        private string   $reumatismo;
        private string   $alergia;
        private string   $cardiovascular;
        private string   $gastrite;
        private string   $diabetico;
        private string   $desmaio;
        private string   $tratamento;
        private string   $medicamento;
        private string   $operacao;
        private string   $manias;
        private string   $depressao;
        private string   $tuberculose;
        private string   $sarampo;
        private string   $sifilis;
        private string   $caxumba;
        private string   $hepatite;
        private string   $varicela;
        private string   $aids;
        private string $outra;
        private string   $fumante;
        private string $frequencia;
        
        private string $historiaGestacao;
        private string $tipoParto;
        private string   $problemaParto;
        private string $amamentacao;
        private string   $anestesia;
        private string   $doencaGrave;
        private string   $vacinada;
        private string   $sentou;
        private string   $engatinhou;
        private string   $andou;
        private string   $falou;
        private string   $dificuldade;
        private string   $alegre;
        private string   $triste;
        private string   $timido;
        private string   $tranquilo;
        private string   $inquieto;
        private string   $assustado;
        private string $sono;
        private string   $posturaNormal;
        private string   $posturaAlterada;
        private string   $fonacaoNormal;
        private string   $disturbiosFala;
        private string   $paralisia;
        private string   $enurese;
        private string   $esfincteres;
        private string $alimentacao;
        private string $sociabilidade;
        private string   $tiques;
        private string   $fobias;
        private string   $ansiedade;
        private string   $medo;
        private string   $birra;
        private string   $ciumes;
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
            $this->historicoDoenca = $dados['hitorico_doenca'];
            $this->hemorragia = $this->traduzResultado($dados['resposta_hemorragia']);
            $this->reumatismo = $this->traduzResultado($dados['resposta_reumatismo']);
            $this->alergia = $this->traduzResultado($dados['resposta_alergia']);
            $this->cardiovascular = $this->traduzResultado($dados['resposta_cardiovascular']);
            $this->gastrite = $this->traduzResultado($dados['resposta_gastrite']);
            $this->diabetico = $this->traduzResultado($dados['resposta_diabetico']);
            $this->desmaio = $this->traduzResultado($dados['resposta_desmaio']);
            $this->tratamento = $this->traduzResultado($dados['resposta_tratamento']);
            $this->medicamento = $this->traduzResultado($dados['resposta_medicamento']);
            $this->operacao = $this->traduzResultado($dados['resposta_operacao']);
            $this->manias = $this->traduzResultado($dados['resposta_manias']);
            $this->depressao = $this->traduzResultado($dados['resposta_depressao']);
            $this->tuberculose = $this->traduzResultado($dados['resposta_tuberculose']);
            $this->sarampo = $this->traduzResultado($dados['resposta_sarampo']);
            $this->sifilis = $this->traduzResultado($dados['resposta_sifilis']);
            $this->caxumba = $this->traduzResultado($dados['resposta_caxumba']);
            $this->hepatite = $this->traduzResultado($dados['resposta_hepatite']);
            $this->varicela = $this->traduzResultado($dados['resposta_varicela']);
            $this->aids = $this->traduzResultado($dados['resposta_aids']);
            $this->outra = $dados['outra'];
            $this->fumante = $this->traduzResultado($dados['resposta_fumante']);
            $this->frequencia = $dados['frequencia'];
            $this->historiaGestacao =$dados['historia_gestacao'];
            $this->tipoParto = $dados['resposta_tipo_parto'];
            $this->problemaParto = $this->traduzResultado($dados['resposta_problema_parto']);
            $this->amamentacao = $dados['resposta_amamentacao'];
            $this->anestesia = $this->traduzResultado($dados['resposta_anestesia']);
            $this->doencaGrave = $this->traduzResultado($dados['resposta_doenca_grave']);
            $this->vacinada = $this->traduzResultado($dados['resposta_vacinada']);
            $this->sentou = $this->traduzResultado($dados['sentou']);
            $this->engatinhou = $this->traduzResultado($dados['engatinhou']);
            $this->andou = $this->traduzResultado($dados['andou']);
            $this->falou = $this->traduzResultado($dados['falou']);
            $this->dificuldade = $this->traduzResultado($dados['resposta_dificuldade']);
            $this->alegre = $this->traduzResultado($dados['alegre']);
            $this->triste = $this->traduzResultado($dados['triste']);
            $this->timido = $this->traduzResultado($dados['timido']);
            $this->tranquilo = $this->traduzResultado($dados['tranquilo']);
            $this->inquieto = $this->traduzResultado($dados['inquieto']);
            $this->assustado = $this->traduzResultado($dados['assustado']);
            $this->sono  = $dados['sono'];
            $this->posturaNormal = $this->traduzResultado($dados['postura_normal']);
            $this->posturaAlterada = $this->traduzResultado($dados['postura_alterada']);
            $this->fonacaoNormal = $this->traduzResultado($dados['fonacao_normal']);
            $this->disturbiosFala = $this->traduzResultado($dados['disturbios_fala']);
            $this->paralisia = $this->traduzResultado($dados['paralisia']);
            $this->enurese = $this->traduzResultado($dados['enurese']);
            $this->esfincteres = $this->traduzResultado($dados['esfincteres']);
            $this->alimentacao = $this->traduzResultado($dados['alimentacao']);
            $this->sociabilidade = $this->traduzResultado($dados['sociabilidade']);
            $this->tiques = $this->traduzResultado($dados['tiques']);
            $this->fobias = $this->traduzResultado($dados['fobias']);
            $this->ansiedade = $this->traduzResultado($dados['ansiedade']);
            $this->medo = $this->traduzResultado($dados['medo']);
            $this->birra = $this->traduzResultado($dados['birra']);
            $this->ciumes = $this->traduzResultado($dados['ciumes']);
            $this->observacoes = $this->traduzResultado($dados['observacoes']);
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
 
        public function getHistoricoDoenca()
        {
            return $this->historicoDoenca;
        }
 
        public function getQueixaPrincipal()
        {
            return $this->queixaPrincipal;
        }


        private function traduzResultado(string $texto): string
        {
            if($texto =='true'){
                return 'sim';
            }else if($texto == 'false'){
                return 'não';
            }else{
                return $texto;
            }
        }
    }

?>