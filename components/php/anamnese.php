<?php
    require_once 'Classes/Paciente.php';
    session_start();
    $paciente = $_SESSION['paciente'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Questionario</title>
</head>
<body>
    <div class="conteiner">
        <form id="formulario">
            <p>
                <?php
                    echo "<label>Nome: {$paciente->getNome()}</label>"
                ?>
            </p>
            <p>
                <?php
                    echo "<label>Cadastro: {$paciente->getCpf()}</label>"
                ?>
            </p>
            <p>
                <label for="queixa_principal">Queixa Principal:</label>
                <textarea name="queixa_principal" id="queixa_principal" class="campo"></textarea>
            </p>
            <p>
                <label for="hitorico_doenca">Historio da doença atual:</label>
                <textarea name="hitorico_doenca" id="hitorico_doenca" class="campo"></textarea>
            </p>
            <p>
                <ol>
                    <li>
                        <label for="hemorragia">Já teve hemorragia?</label>
                        <input type="radio" value="true" name="resposta_hemorragia">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_hemorragia">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="alergia">Já sofreu alergia?</label>
                        <input type="radio" value="true" name="resposta_alergia">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_alergia">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="reumatismo">Já teve reumatismo infeccioso?</label>
                        <input type="radio" value="true" name="resposta_reumatismo">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_reumatismo">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="cardiovascular">Sofre(u) de distúrbio cardiovascular?</label>
                        <input type="radio" value="true" name="resposta_cardiovascular">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_cardiovascular">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="gastrite">Sofre(u) de gastrite?</label>
                        <input type="radio" value="true" name="resposta_gastrite">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_gastrite">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="diabetico">É diabético ou tem familiares diabéticos?</label>
                        <input type="radio" value="true" name="resposta_diabetico">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_diabetico">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="desmaio">Já desmaiou alguma vez?</label>
                        <input type="radio" value="true" name="resposta_desmaio">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_desmaio">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="tratamento">Está sob tratamento médico?</label>
                        <input type="radio" value="true" name="resposta_tratamento">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_tratamento">
                        <label for="false">Não</label>
                    </li>

                    <li>
                        <label for="medicamento">Está tomando algum medicamento?</label>
                        <input type="radio" value="true" name="resposta_medicamento">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_medicamento">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="operacao">Esteve doente ou foi operado nos últimos 5 anos?</label>
                        <input type="radio" value="true" name="resposta_operacao">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_operacao">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="manias">Tem hábitos, vícios ou manias?</label>
                        <input type="radio" value="true" name="resposta_manias">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_manias">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="depressão">Tem ansiedade/depressão?</label>
                        <input type="radio" value="true" name="resposta_depressao">
                        <label for="true">Sim</label>
                        <input type="radio" value="false" name="resposta_depressao">
                        <label for="false">Não</label>
                    </li>
                    <li>
                        <label for="doencas">Você e/ou algum familiar teve alguma(s) dessas doenças</label>
                        <ul>
                            <li>
                                <label for="tuberculose">Tuberculose</label>
                                <input type="radio" value="true" name="resposta_tuberculose">
                                <label for="true">Sim</label>
                                <input type="radio" value="false" name="resposta_tuberculose">
                                <label for="false">Não</label>
                            </li>
                            <li>
                                <label for="sarampo">Sarampo</label>
                                <input type="radio" value="true" name="resposta_sarampo">
                                <label for="true">Sim</label>
                                <input type="radio" value="false" name="resposta_sarampo">
                                <label for="false">Não</label>
                            </li>
                            <li>
                                <label for="sifilis">Sífilis</label>
                                <input type="radio" value="true" name="resposta_sifilis">
                                <label for="true">Sim</label>
                                <input type="radio" value="false" name="resposta_sifilis">
                                <label for="false">Não</label>
                            </li>
                            <li>
                                <label for="caxumba">Caxumba</label>
                                <input type="radio" value="true" name="resposta_caxumba">
                                <label for="true">Sim</label>
                                <input type="radio" value="false" name="resposta_caxumba">
                                <label for="false">Não</label>
                            </li>
                            <li>
                                <label for="hepatite">Hepatite, A, B, C</label>
                                <input type="radio" value="true" name="resposta_hepatite">
                                <label for="true">Sim</label>
                                <input type="radio" value="false" name="resposta_hepatite">
                                <label for="false">Não</label>
                            </li>
                            <li>
                                <label for="varicela">Varicela</label>
                                <input type="radio" value="true" name="resposta_varicela">
                                <label for="true">Sim</label>
                                <input type="radio" value="false" name="resposta_varicela">
                                <label for="false">Não</label>
                            </li>
                            <li>
                                <label for="aids">AIDS</label>
                                <input type="radio" value="true" name="resposta_aids">
                                <label for="true">Sim</label>
                                <input type="radio" value="false" name="resposta_aids">
                                <label for="false">Não</label>
                            </li>
                            <li>
                                <label for="outra">Outra</label>
                                <input type="text" name="outra" id="outra">
                                <input type="radio" value="true" name="resposta_sarampo">
                                <label for="true">Sim</label>
                                <input type="radio" value="false" name="resposta_sarampo">
                                <label for="false">Não</label>
                            </li>
                        </ul>
                        <li>
                            <label for="fumante">É fumante?</label>
                            <input type="radio" value="true" name="resposta_fumante">
                            <label for="true">Sim</label>
                            <input type="radio" value="false" name="resposta_fumante">
                            <label for="false">Não</label>
                            <div id="frequencia" style="display: none;">
                                <label for="frequencia">Frequência por dia:</label>
                                <input type="text" name="frequencia" id="frequencia">
                            </div>
                        </li>
                    </li>
                </ol>
            </p>
            <hr>
            <h3>Conduta da criança</h3>
            
            <p>
                <label for="doisPrimeiros">Durante os 2 primeiros anos de vida:</label>
                <ul>
                    <li>
                        <input type="checkbox" name="sentou" id="sentou" value="sentou">
                        <label>Sentou-se</label>
                    </li>
                    <li>
                        <input type="checkbox" name="engatinhou" id="engatinhou" value="engatinhou">
                        <label>Engatinhou</label>
                    </li>
                    <li>
                        <input type="checkbox" name="andou" id="andou" value="andou">
                        <label>Andou</label>
                    </li>
                    <li>
                        <input type="checkbox" name="falou" id="falou" value="falou">
                        <label>Falou</label>
                    </li>
                </ul>
            </p>
            
            <p>
                <label for="hemorragia">No lar e na escola, teve/tem alguma dificuldade no aprendizado?</label>
                <input type="radio" value="true" name="resposta_dificuldade">
                <label for="true">Sim</label>
                <input type="radio" value="false" name="resposta_dificuldade">
                <label for="false">Não</label>
            </p>
            
            <p>
                <label for="estadoAnimico">Estado anímico:</label>
                <ul>
                    <li>
                        <input type="checkbox" name="alegre" id="alegre" value="alegre">
                        <label>Alegre</label>
                    </li>
                    <li>
                        <input type="checkbox" name="triste" id="triste" value="triste">
                        <label>Triste</label>
                    </li>
                    <li>
                        <input type="checkbox" name="timido" id="timido" value="timido">
                        <label>Timido</label>
                    </li>
                    <li>
                        <input type="checkbox" name="tranquilo" id="tranquilo" value="tranquilo">
                        <label>Tranquilo</label>
                    </li>
                    <li>
                        <input type="checkbox" name="inquieto" id="inquieto" value="inquieto">
                        <label>Inquieto</label>
                    </li>
                    <li>
                        <input type="checkbox" name="assustado" id="assustado" value="assustado">
                        <label>Assustado</label>
                    </li>
                </ul>
            </p>
            
            <p>
                <label for="sono">Tem sono:</label>
                <select name="sono">
                    <option value="">selecione--</option>
                    <option value="tranquilo">Tranquilo</option>
                    <option value="intranquilo">Intranquilo</option>
                    <option value="terror_noturno">Terror noturno</option>
                    <option value="pesadelos">Pesadelos</option>
                    <option value="sonambulismo">Sonambulismo</option>
                    <option value="insonia">Insônia</option>
                </select>
            </p>
            
            <p>
                <label for="condutaPsicomotora">Conduta Psicomotora:</label>
                <ul>
                    <li>
                        <input type="checkbox" name="postura_normal" id="postura_normal" value="postura_normal">
                        <label>Postura normal </label>
                    </li>
                    <li>
                        <input type="checkbox" name="postura_alterada" id="postura_alterada" value="postura_alterada">
                        <label>Postura Alterada</label>
                    </li>
                    <li>
                        <input type="checkbox" name="fonacao_normal" id="fonacao_normal" value="fonacao_normal">
                        <label>Fonoção Normal</label>
                    </li>
                    <li>
                        <input type="checkbox" name="disturbios_fala" id="disturbios_fala" value="disturbios_fala">
                        <label>Distúrbios da fala</label>
                    </li>
                    <li>
                        <input type="checkbox" name="paralisia" id="paralisia" value="paralisia">
                        <label>Alguma paralisia</label>
                    </li>
                    <li>
                        <input type="checkbox" name="enurese" id="enurese" value="enurese">
                        <label>Enurese Noturna</label>
                    </li>
                    <li>
                        <input type="checkbox" name="esfincteres" id="esfincteres" value="esfincteres">
                        <label>Descontrole dos esfíncteres</label>
                    </li>
                </ul>
            </p>

            <p>
                <label for="alimentacao">Alimentação:</label>
                <select name="alimentacao">
                    <option value="">selecione--</option>
                    <option value="normal">Normal</option>
                    <option value="supra">Supra normal</option>
                    <option value="rejeita">Rejeita</option>
                </select>
            </p>

            <p>
                <label for="sociabilidade">Sociabilidade:</label>
                <select name="sociabilidade">
                    <option value="">selecione--</option>
                    <option value="normal">Normal</option>
                    <option value="agressiva">Agressiva</option>
                    <option value="isolada">Isolada</option>
                </select>
            </p>

            <p>
                <label for="conduta">Apresenta alguma patologia de conduta:</label>
                <ul>
                    <li>
                        <input type="checkbox" name="tiques" id="tiques" value="tiques">
                        <label>Tiques</label>
                    </li>
                    <li>
                        <input type="checkbox" name="fobias" id="fobias" value="fobias">
                        <label>Fobias</label>
                    </li>
                    <li>
                        <input type="checkbox" name="ansiedade" id="ansiedade" value="ansiedade">
                        <label>Ansiedade</label>
                    </li>
                    <li>
                        <input type="checkbox" name="medo" id="medo" value="medo">
                        <label>Medo</label>
                    </li>
                    <li>
                        <input type="checkbox" name="birra" id="birra" value="birra">
                        <label>Birra</label>
                    </li>
                    <li>
                        <input type="checkbox" name="ciumes" id="ciumes" value="ciumes">
                        <label>Ciúmes</label>
                    </li>
                </ul>
            </p>

            <p>
                <label for="observacoes">Observações:</label>
                <textarea name="observacoes" id="observacoes" class="campo"></textarea>
            </p>

            <hr>

            <p>
                <label>Exame Físico:</label>
                <ol>
                    <li>
                        <label for="labios">Lábios</label>
                        <input type="radio" value="normal" name="resposta_labios">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_labios">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="mucosaJugal">Muscosa Jugal</label>
                        <input type="radio" value="normal" name="resposta_mucosaJugal">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_mucosaJugal">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="lingua">Língua</label>
                        <input type="radio" value="normal" name="resposta_lingua">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_lingua">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="soalho">Soalho da boca</label>
                        <input type="radio" value="normal" name="resposta_soalho">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_soalho">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="palatoDuro">Palato Duro</label>
                        <input type="radio" value="normal" name="resposta_palatoDuro">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_palatoDuro">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="garganta">Garganta</label>
                        <input type="radio" value="normal" name="resposta_garganta">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_garganta">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="palatoMole">Palato Mole</label>
                        <input type="radio" value="normal" name="resposta_palatoMole">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_palatoMole">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="mucosaAlveolar">Mucosa Alveolar</label>
                        <input type="radio" value="normal" name="resposta_mucosaAlveolar">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_mucosaAlveolar">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="gengivas">Gengivas</label>
                        <input type="radio" value="normal" name="resposta_gengivas">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_gengivas">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="glandulasSalivares">Glândulas Salivares</label>
                        <input type="radio" value="normal" name="resposta_glandulasSalivares">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_glandulasSalivares">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="linfonodos">Linfonodos</label>
                        <input type="radio" value="normal" name="resposta_linfonodos">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_linfonodos">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="atm">ATM</label>
                        <input type="radio" value="normal" name="resposta_atm">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_atm">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="muscMastigadores">Músculos Mastigadores</label>
                        <input type="radio" value="normal" name="resposta_muscMastigadores">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_muscMastigadores">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                    <li>
                        <label for="oclusao">Oclusão</label>
                        <input type="radio" value="normal" name="resposta_oclusao">
                        <label for="normal">Normal</label>
                        <input type="radio" value="alterado" name="resposta_oclusao">
                        <label for="alterado">Alterado</label>
                    </li>
                    
                </ol>
            </p>

            <p>
                <label for="alteracoesEncontradas">Queixa Principal:</label>
                <textarea name="alteracoesEncontradas" id="alteracoesEncontradas" class="campo"></textarea>
            </p>            
            <p>

            </p>            
            <p>
                <label for="diagnosticoPresuntivo">Diagnóstico presuntivo:</label>
                <textarea name="diagnosticoPresuntivo" id="diagnosticoPresuntivo" class="campo"></textarea>
            </p>            
            <p>
                <label for="examesComplementares">Exames complementares:</label>
                <textarea name="examesComplementares" id="examesComplementares" class="campo"></textarea>
            </p>            
            <p>
                <label for="diagnosticoDefinitivo">Diagnóstico definitivo:</label>
                <textarea name="diagnosticoDefinitivo" id="diagnosticoDefinitivo" class="campo"></textarea>
            </p>            
            <p>
                <label for="tratamento">Tratamento/Proservação:</label>
                <textarea name="tratamento" id="tratamento" class="campo"></textarea>
            </p>            
            <p>
                <label for="planoTratamento">Plano de Tratamento:</label>
                <textarea name="planoTratamento" id="planoTratamento" class="campo"></textarea>
            </p>            
            <button id="enviar">Enviar</button>
        </form>
    </div>
    <script src="/components/js/anamnese/main.js"></script>
    <script>main()</script>
</body>
</html>
