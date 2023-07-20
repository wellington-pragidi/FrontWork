
<div id="simple" class="sectionhash">
    <h2 class="title">Alertas simles <small class="screen_reader f_light ft14">(básico)</small></h2>
    <div class="alert success">
        Simples alerta de sucesso ou informação.
    </div>
    <div class="alert warning">
        Simples alerta de atenção.
    </div>
    <div class="alert error">
        Simples alerta de erro.
    </div>

<?php
syntax('<div class="alert success">
    Simples alerta de sucesso ou informação.
</div>
<div class="alert warning">
    Simples alerta de atenção.
</div>
<div class="alert error">
    Simples alerta de erro.
</div>');
?>
</div>

<hr class="doc" />

<div id="simple--semantic-html" class="sectionhash">
    <h2 class="title">Alertas <span class="f_light">simples</span> com tags html semânticas</h2>
    <div class="alert success">
        <h3>Cabeçalho 3</h3><p>strong <strong>texto em negrito</strong> link <a href="#">frontwork.webship.com.br</a> underline <u>texto sublinhado</u> em <em>texto em itálico</em> mark <mark>texto destacado</mark> code <code>trecho de código</code></p>
        <hr><p>Tempus sem aliquid vestibulum eiusmod nibh! Fermentum necessitatibus kacus.</p>
    </div>
    <div class="alert warning">
        <h4>Cabeçalho 4</h4><p>strong <strong>texto em negrito</strong> link <a href="#">frontwork.webship.com.br</a> underline <u>texto sublinhado</u> em <em>texto em itálico</em> mark <mark>texto destacado</mark> code <code>trecho de código</code></p>
        <hr><p>Tempus sem aliquid vestibulum eiusmod nibh! Fermentum necessitatibus kacus.</p>
    </div>
    <div class="alert error">
        <h5>Cabeçalho 5</h5><p>strong <strong>texto em negrito</strong> link <a href="#">frontwork.webship.com.br</a> underline <u>texto sublinhado</u> em <em>texto em itálico</em> mark <mark>texto destacado</mark> code <code>trecho de código</code></p>
        <hr><p>Tempus sem aliquid vestibulum eiusmod nibh! Fermentum necessitatibus kacus.</p>
    </div>
<?php
syntax('<div class="alert success">
    <h3>Cabeçalho 3</h3>
    <p>strong <strong>texto em negrito</strong> link <a href="#">frontwork.webship.com.br</a> underline <u>texto sublinhado</u> em <em>texto em itálico</em> mark <mark>texto destacado</mark> code <code>trecho de código</code></p>
    <hr><p>Tempus sem aliquid vestibulum eiusmod nibh! Fermentum necessitatibus kacus.</p>
</div>
<div class="alert warning">
    <h4>Cabeçalho 4</h4>
    <p>strong <strong>texto em negrito</strong> link <a href="#">frontwork.webship.com.br</a> underline <u>texto sublinhado</u> em <em>texto em itálico</em> mark <mark>texto destacado</mark> code <code>trecho de código</code></p>
    <hr><p>Tempus sem aliquid vestibulum eiusmod nibh! Fermentum necessitatibus kacus.</p>
</div>
<div class="alert error">
    <h5>Cabeçalho 5</h5>
    <p>strong <strong>texto em negrito</strong> link <a href="#">frontwork.webship.com.br</a> underline <u>texto sublinhado</u> em <em>texto em itálico</em> mark <mark>texto destacado</mark> code <code>trecho de código</code></p>
    <hr><p>Tempus sem aliquid vestibulum eiusmod nibh! Fermentum necessitatibus kacus.</p>
</div>');
syntax_in_popup('simple_alert',
'.alert {
    position: relative;
    margin-top: 0.75rem;
    margin-bottom: 1.5rem;
    padding: 12px 15px;
    border-radius: 3px;
    font-size: 1.1rem;
    text-shadow: 1px 1px rgba(255, 255, 255, 0.35);
}
.alert a {
    text-shadow: none;
}
.alert a:hover {
    text-decoration: underline;
}
.alert mark, .alert code {
    padding: 0 3px;
}
.alert mark {
    position: relative;
    display: inline-block;
    top: -0.5px;
    padding-bottom: 1px;
    line-height: 1.15;
}
.alert code {
    background-color: rgba(255, 255, 255, 0.25);
    font-weight: normal;
    font-size: 99.5%;
}
.alert hr {
    background-color: transparent;
    border-top: 1px solid rgba(0, 0, 0, 0.15);
    border-bottom: 1px solid rgba(255, 255, 255, 0.30);
}
.alert.success {
    background-color: #99D3F4;
    border: 1px solid #6AB2DC;
    color: #0B3852;
}
.alert.warning {
    background-color: #FBF37E;
    border: 1px solid #E6DE4A;
    color: #696110;
}
.alert.error {
    background-color: #E0ACB3;
    border: 1px solid #C6989E;
    color: #4E2229;
    text-shadow: 1px 1px rgba(255, 255, 255, 0.25);
}
.alert.success a {
    color: #00005C;
}
.alert.success mark {
    background-color: #6AB2DC;
}
.alert.warning a {
    color: #7D7D00;
}
.alert.warning mark {
    background-color: #E6DE4A;
}
.alert.warning hr {
    border-top: 1px solid rgba(0, 0, 0, 0.09);
    border-bottom: 1px solid rgba(255, 255, 255, 0.63);
}
.alert.error a {
    color: #550022;
}
.alert.error mark {
    background-color: #C6989E;
}
.alert.error code {
    background-color: rgba(255, 255, 255, 0.17);
}')
?>
</div>

<hr class="doc" />

<div id="simple--discard-icon" class="sectionhash">
    <h2 class="title">Alertas com ícone de descarte</h2>
    <h4 class="ligth_title">O <a href="<?php _urli('utilitarios/#discard') ?>">ícone de descarte</a> é independente. Ele fecha qualquer elemento parente relativo mais proximo</h4>
    <div class="alert success discard">
        Esse é um alerta de sucesso com ícone de descarte
    </div>
    <div class="alert warning discard">
        Esse é um alerta de aviso com ícone de descarte
    </div>
    <div class="alert error discard">
        Esse é um alerta de erro com ícone de descarte
    </div>

<?php syntax('<div class="alert success discard">
    Esse é um alerta de sucesso com ícone de descarte
</div>
<div class="alert warning discard">
    Esse é um alerta de aviso com ícone de descarte
</div>
<div class="alert error discard">
    Esse é um alerta de erro com ícone de descarte
</div>'); 
?>
</div>

<hr class="doc" />

<div id="custom" class="sectionhash">
    <h2 class="title">Alertas com design arrojado</h2>
    <div class="alert success custom">
        Alerta peculiar de sucesso ou informação.
    </div>
    <div class="alert warning custom">
        Alerta peculiar para chamar atenção.
    </div>
    <div class="alert error custom">
        Alerta peculiar de erro.
    </div>
<?php
syntax('<div class="alert success custom">
        Alerta peculiar de sucesso ou informação.
    </div>
    <div class="alert warning custom">
        Alerta peculiar para chamar atenção.
    </div>
    <div class="alert error custom">
        Alerta peculiar de erro.
</div>');
?>
</div>

<hr class="doc" />
    
<div id="custom--semantic-html-discard-icon" class="sectionhash">
    <h2 class="title">Design arrojado com html semântico e ícone de descarte</h2>
    <div class="alert success custom discard">
        <h5>Cabeçalho 5</h5>
        <p>Esse mollit <strong>aqui o texto em negrito</strong> dui incididunt aliquam nisi <a href="#">um link aqui</a> autem option eleifend. <u>Aqui o texto sublinhado</u> molestiae nostra <em>aqui o texto em itálico `inclinado`</em> natus parturient, <small>fonte pequena com small tag</small> accusantium delectus eros <mark>destaque de texto com mark</mark> dictum molestias. Dictumst et <code>trecho de código com a tag code</code> illum auctor sapien.</p>
    </div>
    <div class="alert warning custom discard">
        <h4>Cabeçalho 4</h4>
        <p>Esse mollit <strong>aqui o texto em negrito</strong> dui incididunt aliquam nisi <a href="#">um link aqui</a> autem option eleifend. <u>Aqui o texto sublinhado</u> molestiae nostra <em>aqui o texto em itálico `inclinado`</em> natus parturient, <small>fonte pequena com small tag</small> accusantium delectus eros <mark>destaque de texto com mark</mark> dictum molestias. Dictumst et <code>trecho de código com a tag code</code> illum auctor sapien.</p>
    </div>
    <div class="alert error custom discard">
        <h3>Cabeçalho 3</h3>
        <p>Esse mollit <strong>aqui o texto em negrito</strong> dui incididunt aliquam nisi <a href="#">um link aqui</a> autem option eleifend. <u>Aqui o texto sublinhado</u> molestiae nostra <em>aqui o texto em itálico `inclinado`</em> natus parturient, <small>fonte pequena com small tag</small> accusantium delectus eros <mark>destaque de texto com mark</mark> dictum molestias. Dictumst et <code>trecho de código com a tag code</code> illum auctor sapien.</p>
    </div>
<?php
syntax('<div class="alert success custom discard">
    <h5>Cabeçalho 5</h5>
    <p><strong>negrito</strong><a href="#">link</a><u>sublinhado</u><em>itálico</em><small>small</small><mark>destaque</mark><code>trecho de código</code></p>
</div>
<div class="alert warning custom discard">
    <h4>Cabeçalho 4</h4>
    <p><strong>negrito</strong><a href="#">link</a><u>sublinhado</u><em>itálico</em><small>small</small><mark>destaque</mark><code>trecho de código</code></p>
</div>
<div class="alert error custom discard">
    <h3>Cabeçalho 3</h3>
    <p><strong>negrito</strong><a href="#">link</a><u>sublinhado</u><em>itálico</em><small>small</small><mark>destaque</mark><code>trecho de código</code></p>
</div>');
syntax_in_popup('custom_alert', 
'.alert {
    position: relative;
    margin-top: 0.75rem;
    margin-bottom: 1.5rem;
    padding: 12px 15px;
    border-radius: 3px;
    font-size: 1.1rem;
    text-shadow: 1px 1px rgba(255, 255, 255, 0.35);
}
.alert a {
    text-shadow: none;
}
.alert a:hover {
    text-decoration: underline;
}
.alert mark, .alert code {
    padding: 0 3px;
}
.alert mark {
    position: relative;
    display: inline-block;
    top: -0.5px;
    padding-bottom: 1px;
    line-height: 1.15;
}
.alert code {
    background-color: rgba(255, 255, 255, 0.25);
    font-weight: normal;
    font-size: 99.5%;
}
.alert hr {
    background-color: transparent;
    border-top: 1px solid rgba(0, 0, 0, 0.15);
    border-bottom: 1px solid rgba(255, 255, 255, 0.30);
}
.alert.warning hr {
    border-top: 1px solid rgba(0, 0, 0, 0.09);
    border-bottom: 1px solid rgba(255, 255, 255, 0.63);
}
.alert.error {
    text-shadow: 1px 1px rgba(255, 255, 255, 0.25);
}
.alert.error.custom a {
    color: #550022;
}

.alert.success.custom {
    background-image: linear-gradient(to bottom, #01EBFF 5%, #00A4B3 95%);
    border: 2px solid #01EBFF;
    border-image: linear-gradient(to bottom, #00A4B3, #01EBFF, #01EBFF, #007580);
    border-image-slice: 2;
    color: #00171A;
}
.alert.warning.custom {
    background-image: linear-gradient(to bottom, #E4D100 5%, #B3A400 95%);
    border: 2px solid #C1B700;
    border-image: linear-gradient(to bottom, #B3A400, #E4D100, #E4D100, #7E7300);
    border-image-slice: 2;
    color: #1A1700;
}
.alert.error.custom {
    background-image: linear-gradient(to bottom, #FF0000 5%, #B30000 95%);
    border: 2px solid #DE0C02;
    border-image: linear-gradient(to bottom, #B30000, #FF0000, #FF0000, #800000);
    border-image-slice: 2;
    color: #1A0000;
}
.alert.custom mark {
    box-shadow: 0 -1px 2px 1px rgba(0, 0, 0, 0.15) inset;
}
.alert.success.custom mark {
    background-image: linear-gradient(to bottom, #0091a0, #009aa9, #00a4b3, #20aebd, #32b8c7);
}
.alert.warning.custom a {
    color: yellow;
}
.alert.warning.custom mark {
    background-image: linear-gradient(to bottom, );
}
.alert.error.custom mark {
    background-image: linear-gradient(to bottom, #9f0000, #a50000, #ac0000, #b30000, #ba1005, #c11b0a, #c82410);
}');
?>
</div>

<hr class="doc">

<div id="download-alerts" class="sectionhash fw_download py100">
    <a class="fw_btn right" href="<?php _urli('assets/framework/css/alerts.css') ?>" download>Download alert.css</a>
</div>

<p class="mt30 txt_right">Veja também, <a href="<?php _urli('addons/alerts/') ?>" class="link">funções para alertas com PHP</a>.</p>

