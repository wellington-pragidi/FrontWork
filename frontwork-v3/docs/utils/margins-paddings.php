<h2 class="light_title">Ampla variedade de medidas para espaçamento de margin e padding</h2>
<div id="functionaddzation" class="fw_example">
    <h3 class="doc f_light mt0">Funcionamento:</h3>
    <p class="doc">
        Essas classes não possuem separadores <code class="fw_orange bg0 ft17"><b>_</b></code> ou <code class="fw_orange bg0 ft18"><b>-</b></code> nem <code class="fw_pink bg0 ft17 op8">camelCase</code>.
        <br>
        Exemplos:<br>
        <code>mb25</code> = <code>margin-bottom: 1.563rem !important</code><br>
        <code>py10</code> = <code>padding-top: 0.625rem !important padding-bottom: 0.625rem !important</code> 
    </p>
    <p>Os espaçamentos usam medidas <code>vw</code> até o breakpoint <code>min-width: 1024px</code>, a partir desse único breakpoint as medidas mudam para <code>rem</code>.</p>

    <p class="mt15 ft19 f_light"><em>Entenda melhor nas listas e exemplos abaixo:</em></p>
    <dl>
        <dt>A primeira letra da classe é a primeira letra da propriedade</dt>
        <dd><code class="fw_orange bg0 ft17">m</code> = <code class="fw_orange bg0 ft17">margin</code></dd>
        <dd><code class="fw_orange bg0 ft17">p</code> = <code class="fw_orange bg0 ft17">padding</code></dd>
    </dl>
    <dl>
        <dt>A segunda letra da classe <em>são os lados</em> a adicionar ou remover o espaço</dt>
        <dd><code class="fw_orange bg0 ft17">t</code> = <code class="fw_orange bg0 ft17">margin-top</code> ou <code class="fw_orange bg0 ft17">padding-top</code></dd>
        <dd><code class="fw_orange bg0 ft17">b</code> = <code class="fw_orange bg0 ft17">margin-bottom</code> ou <code class="fw_orange bg0 ft17">padding-bottom</code></dd>
        <dd><code class="fw_orange bg0 ft17">r</code> = <code class="fw_orange bg0 ft17">margin-right</code> ou <code class="fw_orange bg0 ft17">padding-right</code></dd>
        <dd><code class="fw_orange bg0 ft17">l</code> = <code class="fw_orange bg0 ft17">margin-left</code> ou <code class="fw_orange bg0 ft17">padding-left</code></dd>
        <dd><code class="fw_orange bg0 ft17">x</code> = direita e esquerda <code class="fw_orange bg0 ft17">margin-right</code> e <code class="fw_orange bg0 ft17">margin-left</code> ou <code class="fw_orange bg0 ft17">padding-right</code> e <code class="fw_orange bg0 ft17">padding-left</code></dd>
        <dd><code class="fw_orange bg0 ft17">y</code> = superior e inferior <code class="fw_orange bg0 ft17">margin-top</code> e <code class="fw_orange bg0 ft17">margin-bottom</code> ou <code class="fw_orange bg0 ft17">padding-top</code> e <code class="fw_orange bg0 ft17">padding-bottom</code></dd>
        <dd>Deixe o campo em branco para usar <code class="fw_orange bg0 ft17">margin</code> ou <code class="fw_orange bg0 ft17">padding</code> nos quatro lados do elemento.</dd>
    </dl>
    <p style="font-size:85%;">E por ultimo os números ao final das classes</p>
    <div class="ml20 mt5 ft16">
        Os números são intercalados de <code class="fw_orange bg0 ft17">0</code> a <code class="fw_orange bg0 ft17">100</code>
        <p class=""><code class="fw_orange bg0 ft17">0</code> para remover <code class="fw_orange bg0 ft17">margin</code> ou <code class="fw_orange bg0 ft17">padding</code>
        <p>Os números seguintes são valores de <code class="fw_orange bg0 ft17">px</code> <small>(pixels)</small> equivalente à <code class="fw_orange bg0 ft17">rem</code>  acima do breakpoint/viewport de 1024px, abaixo disso é o calculo de <code class="fw_orange bg0 ft17">px</code> para <code class="fw_orange bg0 ft17">vw</code> no viewport de 1023px que vai diminuindo gradualmente.</p>
        <?php
            echo 'E esses são todos os valores disponíveis<br>';
            $array = [0, 5, 10, 15, 20, 25, 30, 35, 40, 50, 75, 100];
            $result = '';
            foreach($array as $value) {
                $result .=  '<code class="fw_orange bg0 ft16">'.$value.'</code>, ';
            }
            echo substr($result, 0, -2);
        ?>
        <p class="fw_alert info"><s class="ico_info" aria-label="Informação"></s> As classes com os números 5 e 10 não usam breapoint, seus valores são em <code>rem</code> desde <code><s>min-width: 0</s></code></p>
        <p>
            E tem também as classes com margin auto<br>
            <code class="fw_orange bg0 ft17">mrauto</code> = <code>margin-right: auto !important</code>.<br>
            <code class="fw_orange bg0 ft17">mlauto</code> = <code>margin-left: auto !important</code>.<br>
            <code class="fw_orange bg0 ft17">mauto</code> = <code>margin-right: auto !important; margin-left: auto !important</code> que centraliza elementos.
        </p>
    </div>
</div>
<h4 class="doc my40">Segue a tabela com as classes e valores de referência.<br><small><span class="txt_info f_light">Obs: Todas as propriedades usam o <code class="fw_red">!important</code></span></small></h4>
<table border="1" width="100%" style="font-family: monospace;">
    <caption><s>space</s> = padding ou margin</caption>
    <tr>
        <th>Classes</th>
        <th>Propriedades</th>
        <th>Valores equivalentes</th>
    </tr>
    <tr class="txt_center"><td colspan="3">Espaço <strong>0</strong></td></tr>
    <tr><td>p0 - m0</td><td><s>space</s>: 0 0</td><td>0 0</td></tr>
    <tr><td>pt0 - mt0</td><td><s>space</s>-top: 0</td><td>0</td></tr>
    <tr><td>pr0 - mr0</td><td><s>space</s>-right: 0</td><td>0</td></tr>
    <tr><td>pb0 - mb0</td><td><s>space</s>-bottom: 0</td><td>0</td></tr>
    <tr><td>pl0 - ml0</td><td><s>space</s>-left: 0</td><td>0</td></tr>
    <tr><td>px0 - mx0</td><td><s>space</s>-left: 0; <s>space</s>-right: 0</td><td>0</td></tr>
    <tr><td>py0 - my0</td><td><s>space</s>-top: 0; <s>space</s>-bottom: 0</td><td>0</td></tr>
    <tr class="txt_center"><td colspan="3">Espaço <strong>nos quatro lados</strong></td></tr>
    <tr><td>p5 - m5</td><td><s>space</s>: 5<s>px</s> 5<s>px</s></td><td>5<s>px</s> 5<s>px</s></td></tr>
    <tr><td>p10 - m10</td><td><s>space</s>: <s>10px</s> <s>10px</s></td><td>10<s>px</s> 10<s>px</s></td></tr>
    <tr><td>p15 - m15</td><td><s>space</s>: 15<s>px</s> 15<s>px</s></td><td>15<s>px</s> 15<s>px</s></td></tr>
    <tr><td>p20 - m20</td><td><s>space</s>: 20<s>px</s> 20<s>px</s></td><td>20<s>px</s> 20<s>px</s></td></tr>
    <tr><td>p25 - m25</td><td><s>space</s>: 25<s>px</s> 25<s>px</s></td><td>25<s>px</s> 25<s>px</s></td></tr>
    <tr><td>p30 - m30</td><td><s>space</s>: 30<s>px</s> 30<s>px</s></td><td>30<s>px</s> 30<s>px</s></td></tr>
    <tr><td>p35 - m35</td><td><s>space</s>: 35<s>px</s> 35<s>px</s></td><td>35<s>px</s> 35<s>px</s></td></tr>
    <tr><td>p40 - m40</td><td><s>space</s>: 40<s>px</s> 40<s>px</s></td><td>40<s>px</s> 40<s>px</s></td></tr>
    <tr><td>p50 - m50</td><td><s>space</s>: 50<s>px</s> 50<s>px</s></td><td>50<s>px</s> 50<s>px</s></td></tr>
    <tr><td>p75 - m75</td><td><s>space</s>: 75<s>px</s> 75<s>px</s></td><td>75<s>px</s> 75<s>px</s></td></tr>
    <tr><td>p100 - m100</td><td><s>space</s>: 100<s>px</s> 100<s>px</s></td><td>100<s>px</s> 100<s>px</s></td></tr>
    <tr class="txt_center"><td colspan="3">Espaço <strong>superior e inferior</strong></td></tr>
    <tr><td>py5 - my5</td><td><s>space</s>-top: 5<s>px</s>; <s>space</s>-bottom: 5<s>px</s></td><td>5<s>px</s></td></tr>
    <tr><td>py10 - my10</td><td><s>space</s>-top: 10<s>px</s>; <s>space</s>-bottom: 10<s>px</s></td><td>10<s>px</s></td></tr>
    <tr><td>py15 - my15</td><td><s>space</s>-top: 15<s>px</s>; <s>space</s>-bottom: 15<s>px</s></td><td>15<s>px</s></td></tr>
    <tr><td>py20 - my20</td><td><s>space</s>-top: 20<s>px</s>; <s>space</s>-bottom: 20<s>px</s></td><td>20<s>px</s></td></tr>
    <tr><td>py25 - my25</td><td><s>space</s>-top: 25<s>px</s>; <s>space</s>-bottom: 25<s>px</s></td><td>25<s>px</s></td></tr>
    <tr><td>py30 - my30</td><td><s>space</s>-top: 30<s>px</s>; <s>space</s>-bottom: 30<s>px</s></td><td>30<s>px</s></td></tr>
    <tr><td>py35 - my35</td><td><s>space</s>-top: 35<s>px</s>; <s>space</s>-bottom: 35<s>px</s></td><td>35<s>px</s></td></tr>
    <tr><td>py40 - my40</td><td><s>space</s>-top: 40<s>px</s>; <s>space</s>-bottom: 40<s>px</s></td><td>40<s>px</s></td></tr>
    <tr><td>py50 - my50</td><td><s>space</s>-top: 50<s>px</s>; <s>space</s>-bottom: 50<s>px</s></td><td>50<s>px</s></td></tr>
    <tr><td>py75 - my75</td><td><s>space</s>-top: 75<s>px</s>; <s>space</s>-bottom: 75<s>px</s></td><td>75<s>px</s></td></tr>
    <tr><td>py100 - my100</td><td><s>space</s>-top: 100<s>px</s>; <s>space</s>-bottom: 100<s>px</s></td><td>100<s>px</s></td></tr>
    <tr class="txt_center"><td colspan="3">Espaço laterais <strong>direita e esquerda</strong></td></tr>
    <tr><td>px5 - mx5</td><td><s>space</s>-right: 5<s>px</s>; <s>space</s>-left: 5<s>px</s></td><td>5<s>px</s></td></tr>
    <tr><td>px10 - mx10</td><td><s>space</s>-right: 10<s>px</s>; <s>space</s>-left: 10<s>px</s></td><td>10<s>px</s></td></tr>
    <tr><td>px15 - mx15</td><td><s>space</s>-right: 15<s>px</s>; <s>space</s>-left: 15<s>px</s></td><td>15<s>px</s></td></tr>
    <tr><td>px20 - mx20</td><td><s>space</s>-right: 20<s>px</s>; <s>space</s>-left: 20<s>px</s></td><td>20<s>px</s></td></tr>
    <tr><td>px25 - mx25</td><td><s>space</s>-right: 25<s>px</s>; <s>space</s>-left: 25<s>px</s></td><td>25<s>px</s></td></tr>
    <tr><td>px30 - mx30</td><td><s>space</s>-right: 30<s>px</s>; <s>space</s>-left: 30<s>px</s></td><td>30<s>px</s></td></tr>
    <tr><td>px35 - mx35</td><td><s>space</s>-right: 35<s>px</s>; <s>space</s>-left: 35<s>px</s></td><td>35<s>px</s></td></tr>
    <tr><td>px40 - mx40</td><td><s>space</s>-right: 40<s>px</s>; <s>space</s>-left: 40<s>px</s></td><td>40<s>px</s></td></tr>
    <tr><td>px50 - mx50</td><td><s>space</s>-right: 50<s>px</s>; <s>space</s>-left: 50<s>px</s></td><td>50<s>px</s></td></tr>
    <tr><td>px75 - mx75</td><td><s>space</s>-right: 75<s>px</s>; <s>space</s>-left: 75<s>px</s></td><td>75<s>px</s></td></tr>
    <tr><td>px100 - mx100</td><td><s>space</s>-right: 100<s>px</s>; <s>space</s>-left: 100<s>px</s></td><td>100<s>px</s></td></tr>
    <tr class="txt_center"><td colspan="3">Espaço <strong>superior</strong></td></tr>
    <tr><td>pt5 - mt5</td><td><s>space</s>-top: 5<s>px</s></td><td>5<s>px</s></td></tr>
    <tr><td>pt10 - mt10</td><td><s>space</s>-top: 10<s>px</s></td><td>10<s>px</s></td></tr>
    <tr><td>pt15 - mt15</td><td><s>space</s>-top: 15<s>px</s></td><td>15<s>px</s></td></tr>
    <tr><td>pt20 - mt20</td><td><s>space</s>-top: 20<s>px</s></td><td>20<s>px</s></td></tr>
    <tr><td>pt25 - mt25</td><td><s>space</s>-top: 25<s>px</s></td><td>25<s>px</s></td></tr>
    <tr><td>pt30 - mt30</td><td><s>space</s>-top: 30<s>px</s></td><td>30<s>px</s></td></tr>
    <tr><td>pt35 - mt35</td><td><s>space</s>-top: 35<s>px</s></td><td>35<s>px</s></td></tr>
    <tr><td>pt40 - mt40</td><td><s>space</s>-top: 40<s>px</s></td><td>40<s>px</s></td></tr>
    <tr><td>pt50 - mt50</td><td><s>space</s>-top: 50<s>px</s></td><td>50<s>px</s></td></tr>
    <tr><td>pt75 - mt75</td><td><s>space</s>-top: 75<s>px</s></td><td>75<s>px</s></td></tr>
    <tr><td>pt100 - mt100</td><td><s>space</s>-top: 100<s>px</s></td><td>100<s>px</s></td></tr>
    <tr class="txt_center"><td colspan="3">Espaço a <strong>direita</strong></td></tr>
    <tr><td>pr5 - mr5</td><td><s>space</s>-right: 5<s>px</s></td><td>5<s>px</s></td></tr>
    <tr><td>pr10 - mr10</td><td><s>space</s>-right: 10<s>px</s></td><td>10<s>px</s></td></tr>
    <tr><td>pr15 - mr15</td><td><s>space</s>-right: 15<s>px</s></td><td>15<s>px</s></td></tr>
    <tr><td>pr20 - mr20</td><td><s>space</s>-right: 20<s>px</s></td><td>20<s>px</s></td></tr>
    <tr><td>pr25 - mr25</td><td><s>space</s>-right: 25<s>px</s></td><td>25<s>px</s></td></tr>
    <tr><td>pr30 - mr30</td><td><s>space</s>-right: 30<s>px</s></td><td>30<s>px</s></td></tr>
    <tr><td>pr35 - mr35</td><td><s>space</s>-right: 35<s>px</s></td><td>35<s>px</s></td></tr>
    <tr><td>pr40 - mr40</td><td><s>space</s>-right: 40<s>px</s></td><td>40<s>px</s></td></tr>
    <tr><td>pr50 - mr50</td><td><s>space</s>-right: 50<s>px</s></td><td>50<s>px</s></td></tr>
    <tr><td>pr75 - mr75</td><td><s>space</s>-right: 75<s>px</s></td><td>75<s>px</s></td></tr>
    <tr><td>pr100 - mr100</td><td><s>space</s>-right: 100<s>px</s></td><td>100<s>px</s></td></tr>
    <tr class="txt_center"><td colspan="3">Espaço <strong>inferior</strong></td></tr>
    <tr><td>pb5 - mb5</td><td><s>space</s>-bottom: 5<s>px</s></td><td>5<s>px</s></td></tr>
    <tr><td>pb10 - mb10</td><td><s>space</s>-bottom: 10<s>px</s></td><td>10<s>px</s></td></tr>
    <tr><td>pb15 - mb15</td><td><s>space</s>-bottom: 15<s>px</s></td><td>15<s>px</s></td></tr>
    <tr><td>pb20 - mb20</td><td><s>space</s>-bottom: 20<s>px</s></td><td>20<s>px</s></td></tr>
    <tr><td>pb25 - mb25</td><td><s>space</s>-bottom: 25<s>px</s></td><td>25<s>px</s></td></tr>
    <tr><td>pb30 - mb30</td><td><s>space</s>-bottom: 30<s>px</s></td><td>30<s>px</s></td></tr>
    <tr><td>pb35 - mb35</td><td><s>space</s>-bottom: 35<s>px</s></td><td>35<s>px</s></td></tr>
    <tr><td>pb40 - mb40</td><td><s>space</s>-bottom: 40<s>px</s></td><td>40<s>px</s></td></tr>
    <tr><td>pb50 - mb50</td><td><s>space</s>-bottom: 50<s>px</s></td><td>50<s>px</s></td></tr>
    <tr><td>pb75 - mb75</td><td><s>space</s>-bottom: 75<s>px</s></td><td>75<s>px</s></td></tr>
    <tr><td>pb100 - mb100</td><td><s>space</s>-bottom: 100<s>px</s></td><td>100<s>px</s></td></tr>
    <tr class="txt_center"><td colspan="3">Espaço a <strong>esquerda</strong></td></tr>
    <tr><td>pl5 - ml5</td><td><s>space</s>-left: 5<s>px</s></td><td>5<s>px</s></td></tr>
    <tr><td>pl10 - ml10</td><td><s>space</s>-left: 10<s>px</s></td><td>10<s>px</s></td></tr>
    <tr><td>pl15 - ml15</td><td><s>space</s>-left: 15<s>px</s></td><td>15<s>px</s></td></tr>
    <tr><td>pl20 - ml20</td><td><s>space</s>-left: 20<s>px</s></td><td>20<s>px</s></td></tr>
    <tr><td>pl25 - ml25</td><td><s>space</s>-left: 25<s>px</s></td><td>25<s>px</s></td></tr>
    <tr><td>pl30 - ml30</td><td><s>space</s>-left: 30<s>px</s></td><td>30<s>px</s></td></tr>
    <tr><td>pl35 - ml35</td><td><s>space</s>-left: 35<s>px</s></td><td>35<s>px</s></td></tr>
    <tr><td>pl40 - ml40</td><td><s>space</s>-left: 40<s>px</s></td><td>40<s>px</s></td></tr>
    <tr><td>pl50 - ml50</td><td><s>space</s>-left: 50<s>px</s></td><td>50<s>px</s></td></tr>
    <tr><td>pl75 - ml75</td><td><s>space</s>-left: 75<s>px</s></td><td>75<s>px</s></td></tr>
    <tr><td>pl100 - ml100</td><td><s>space</s>-left: 100<s>px</s></td><td>100<s>px</s></td></tr>
    <tr class="txt_center"><td colspan="3">Margin <strong>auto</strong></td></tr>
    <tr><td>mauto</td><td>margin-right: auto; margin-left: auto; display: block</td><td>auto</td></tr>
</table>

<hr class="doc">

<div id="download--margin-padding" class="fw_download py100">
    <a class="fw_btn right" href="<?php _urli('assets/framework/css/utils/margin.css') ?>" download>Download margin.css</a>
    <br>
    <a class="fw_btn right" href="<?php _urli('assets/framework/css/utils/padding.css') ?>" download>Download padding.css</a>
</div>