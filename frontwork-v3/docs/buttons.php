<div id="default" class="sectionhash current">
    <h2 class="title">Botões padrão</h2>
    <button class="btn xsm">Botão extra pequeno</button> 
    <button class="btn sm">Botão pequeno</button> 
    <button class="btn">Tamanho padrão</button> 
    <button class="btn md">Botão médio</button>  
    <button class="btn lg">Botão grande</button>  
    <button class="btn xlg">Botão extra grande</button>
</div>
<?php
syntax('
<button class="btn xsm">Botão extra pequeno</button> 
<button class="btn sm">Botão pequeno</button> 
<button class="btn">Tamanho padrão</button> 
<button class="btn md">Botão médio</button>  
<button class="btn lg">Botão grande</button>  
<button class="btn xlg">Botão extra grande</button>
');
?>
<div id="align-center" class="">
    <h2 class="title">&nbsp;</h2>
    <button class="btn center">Botão alinhado ao centro</button>
</div>
<?php syntax('<button class="btn center">Botão alinhado ao centro</button>') ?>
<div id="align-right" class="">
    <h2 class="title">&nbsp;</h2>
    <button class="btn right">Botão alinhado ao direita</button>
</div>
<?php syntax('<button class="btn right">Botão alinhado ao direita</button>') ?>
<h3 class="f_light ft18">Os botões padrão podem ser personalizados de forma fácil através da utilização de variáveis, permitindo a modificação de elementos como cor, fonte e sombras.</h3>
<?php
syntax('
.btn {
    --font: &apos;OpenSans&apos;, Arial, Helvetica, Tahoma, sans-serif;
    --color: #808080;
    --background: #D6D3D7;
    --border: 1px solid #BBBBBB;
    --box_shadow: 2px 2px 1px #CECBCF inset, -2px -2px 1px #CECBCF inset, 0 2px 2px -1px rgba(0, 0, 0, 0.5);
    --text_shadow: 1px 1px rgba(255, 255, 255, 0.60);
}
.btn:hover, .btn:focus, .btn:active {
    --color: #808080;
    --background: #DAD7DB;
    --border: 1px solid #B3B3B3;
    --box_shadow: 2px 2px 1px #CECBCF inset, -2px -2px 1px #CECBCF inset, 0 3px 5px -4px rgba(0, 0, 0, 0.5);
}
.btn:focus, .btn:active {
    --box_shadow: 0 2px 1px #C1BDC2 inset, 2px 0 1px #C1BDC2 inset, -2px 0 1px #C1BDC2 inset;
}');
echo '<p class="ft15">Se precisar usar só os botões padrão click no botão abaixo</p>';
syntax_in_popup('padrao',
'.btn {
    --font: &apos;OpenSans&apos;, Arial, Helvetica, Tahoma, sans-serif;
    --color: #808080;
    --background: #D6D3D7;
    --border: 1px solid #BBBBBB;
    --box_shadow: 2px 2px 1px #CECBCF inset, -2px -2px 1px #CECBCF inset, 0 2px 2px -1px rgba(0, 0, 0, 0.5);
    --text_shadow: 1px 1px rgba(255, 255, 255, 0.60);
}
.btn:hover, .btn:focus, .btn:active {
    --color: #808080;
    --background: #DAD7DB;
    --border: 1px solid #B3B3B3;
    --box_shadow: 2px 2px 1px #CECBCF inset, -2px -2px 1px #CECBCF inset, 0 3px 5px -4px rgba(0, 0, 0, 0.5);
}
.btn:focus, .btn:active {
    --box_shadow: 0 2px 1px #C1BDC2 inset, 2px 0 1px #C1BDC2 inset, -2px 0 1px #C1BDC2 inset;
}
.btn, a.btn {
    text-align: center;
    text-decoration: none;
    padding: 6px 12px;
    font-size: 1rem;
    transition: background-color .3s;
    border-radius: 3px;
    font-family: var(--font);
    color: var(--color);
    background-color: var(--background);
    border: var(--border);
    box-shadow: var(--box_shadow);
    text-shadow: var(--text_shadow);
}
.btn:hover, .btn:focus, .btn:active, a.btn:hover, a.btn:focus, a.btn:active {
    text-decoration: none;
    transition: background-color .3s;
    color: var(--color);
    background-color: var(--background);
    border: var(--border);
    box-shadow: var(--box_shadow);
}
.btn:focus, .btn:active {
    box-shadow: var(--box_shadow);
}
.btn.xsm {
    padding: 3px 9px 3px 9px;
    font-size: 0.76rem;
}
.btn.sm {
    padding: 5px 10px 5px 10px;
    font-size: 0.85rem;
}
.btn.md {
    padding: 7px 12px;
    font-size: 1.1rem;
}
.btn.lg {
    padding: 8px 13px 8px 13px;
    font-size: 1.22rem;
}
.btn.xlg {
    padding: 9px 14px 9px 14px;
    font-size: 1.32rem;
}

.btn.center {
    display: block;
    margin: auto;
}
.btn.right {
    display: block;
    margin-left: auto;
    margin-right: 0;
}
a.btn.center, a.btn.right {
    display: table;
}',
'CSS completo dos botões padrão');
?>

<hr class="doc" />

<div id="btn-alerts" class="sectionhash">
    <h2 class="title">Botões de alerta</h2>
    <h3 class="f_light ft20">Botões de sucesso ou informação</h3>
    <button class="btn success xsm">Botão extra pequeno</button>
    <button class="btn success sm">Botão padrão</button>
    <button class="btn success">Tamanho padrão</button>
    <button class="btn success md">Botão médio</button>
    <button class="btn success lg">Botão grande</button>
    <button class="btn success xlg">Botão extra grande</button>

    <h3 class="f_light ft20">Botões de aviso</h3>
    <button class="btn warning xsm">Botão extra pequeno</button>
    <button class="btn warning sm">Botão padrão</button>
    <button class="btn warning">Tamanho padrão</button>
    <button class="btn warning md">Botão médio</button>
    <button class="btn warning lg">Botão grande</button>
    <button class="btn warning xlg">Botão extra grande</button>

    <h3 class="f_light ft20">Botões de erro, cancelar, deletar ou perigo</h3>
    <button class="btn error xsm">Botão extra pequeno</button>
    <button class="btn error sm">Botão padrão</button>
    <button class="btn error">Tamanho padrão</button>
    <button class="btn error md">Botão médio</button>
    <button class="btn error lg">Botão grande</button>
    <button class="btn error xlg">Botão extra grande</button>
<?php
syntax('
<button class="btn success">Sucesso</button>
<button class="btn warning">Aviso</button>
<button class="btn error">Erro</button>
');
?>
<h4 class="f_light ft17">Classes adicionais para tamanho dos botões de alerta além do padrão são as mesmas: <code>xsm</code>, <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code></h4>
</div>

<hr class="doc" />

<div id="btn-alerts-outline" class="sectionhash">
    <h2 class="title">Botões de alerta <span style="text-decoration:underline;" lang="en">outline</span></h2>
    <h3 class="f_light ft20">Botões de sucesso ou informação <span class="bordered" lang="en">outline</span></h3>
    <button class="btn success outline xsm">Botão extra pequeno</button>
    <button class="btn success outline sm">Botão padrão</button>
    <button class="btn success outline">Tamanho padrão</button>
    <button class="btn success outline md">Botão médio</button>
    <button class="btn success outline lg">Botão grande</button>
    <button class="btn success outline xlg">Botão extra grande</button>

    <h3 class="f_light ft20">Botões de aviso <span class="bordered" lang="en">outline</span></h3>
    <button class="btn warning outline xsm">Botão extra pequeno</button>
    <button class="btn warning outline sm">Botão padrão</button>
    <button class="btn warning outline">Tamanho padrão</button>
    <button class="btn warning outline md">Botão médio</button>
    <button class="btn warning outline lg">Botão grande</button>
    <button class="btn warning outline xlg">Botão extra grande</button>

    <h3 class="f_light ft20">Botões de erro, cancelar, deletar ou perigo <span class="bordered" lang="en">outline</span></h3>
    <button class="btn error outline xsm">Botão extra pequeno</button>
    <button class="btn error outline sm">Botão padrão</button>
    <button class="btn error outline">Tamanho padrão</button>
    <button class="btn error outline md">Botão médio</button>
    <button class="btn error outline lg">Botão grande</button>
    <button class="btn error outline xlg">Botão extra grande</button>
<?php
syntax('
<button class="btn success outline">Sucesso</button>
<button class="btn warning outline">Aviso</button>
<button class="btn error outline">Erro</button>
');
?>
</div>

<hr class="doc" />

<div id="btn-animated" class="sectionhash">
    <h2 class="title">Botões com animação:</h2>
    <p class="ft13" style="position:relative;top:-18px;opacity:.7;">Todos os botões suportam as classes adicionais de tamanhos</p>
</div>

<div id="btn-enhance" class="sectionhash">
    <h3 class="f_light ft20 doc">Botão para chamar a atenção com realce de cores</h3>
    <div class="pt20 pb15 txt_center">
        <button class="btn enhance md">FALE CONOSCO</button> &nbsp; 
        <button class="btn enhance lg">FALE CONOSCO</button> &nbsp; 
        <button class="btn enhance xlg">FALE CONOSCO</button>
    </div>
<?php syntax('<button class="btn enhance md">FALE CONOSCO</button>
<button class="btn enhance lg">FALE CONOSCO</button>
<button class="btn enhance xlg">FALE CONOSCO</button>');
    echo '<p class="ft15">Mude as cores de fundo utilizando as variáveis declaradas</p>';
syntax('.btn.enhance {
    --bkcolor_enhance_1: #B6AE1F;
    --bkcolor_enhance_2: #8F3B3F;
    --bkcolor_enhance_3: #374457;
}'); ?>
</div>
    <hr class="doc add" />
<div id="btn-flash" class="sectionhash">
    <h3 class="f_light ft20 doc">Botão para chamar a atenção com borda em flash</h3>
    <div class="p25 txt_center">
        <button class="btn flash sm">BORDER FLASH</button> &nbsp; &nbsp; &nbsp; 
        <button class="btn flash">BORDER FLASH</button> &nbsp; &nbsp; &nbsp; 
        <button class="btn flash md">BORDER FLASH</button>
    </div>
<?php syntax('<button class="btn flash sm">BORDER FLASH</button>
<button class="btn flash">BORDER FLASH</button>
<button class="btn flash md">BORDER FLASH</button>') ?>
</div>

<div id="btn-flashs" class="sectionhash">
    <h3 class="f_light ft20 doc">Bordas duplas</h3>
    <div class="p25 txt_center">
        <button class="btn flash dual xsm">BORDER FLASH DUPLO</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <button class="btn flash dual">BORDER FLASH DUPLO</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <button class="btn flash dual xlg">BORDER FLASH DUPLO</button>
    </div>
<?php syntax('<button class="btn flash dual xsm">BORDER FLASH DUPLO</button>
<button class="btn flash dual">BORDER FLASH DUPLO</button>
<button class="btn flash dual xlg">BORDER FLASH DUPLO</button>');
    echo '<p class="ft15">Mude a cor de fundo e borda utilizando as variáveis declaradas</p>';
syntax('.btn.flash {
    --background: #374457;
    --border: 1px solid #3E454F;
}'); ?>
</div>
    <hr class="doc add" />
<div id="btn-progress" class="sectionhash">
    <h3 class="f_light doc mt20">Botão progresso</h3>
    <button class="btn progress lg mt20 mb20">Click em mim</button>
<?php syntax('<button class="btn progress">Click em mim</button>'); ?>
</div>

<hr class="doc" />

<div id="btn-link" class="sectionhash">
    <h2 class="doc">Botões com aparencia de link</h2>
    <button type="submit" class="input_false link">Botão com aparencia de link comum</button><br>
    <input type="submit" class="input_false link" value="Input com aparencia de link comum" /><br>
    <button type="submit" class="input_false link delete">Botão com aparencia de link delete</button><br>
    <input type="submit" class="input_false link delete" value="Input com aparencia de link delete" />
<?php syntax('<button type="submit" class="input_false link">Botão com aparencia de link comum</button>
<input type="submit" class="input_false link" value="Input com aparencia de link comum" />
<button type="submit" class="input_false link delete">Botão com aparencia de link delete</button>
<input type="submit" class="input_false link delete" value="Input com aparencia de link delete" />'); ?>
</div>

<hr class="doc add">

<div id="btn-text" class="sectionhash">
    <h2 class="doc">Botões com estilização de texto comum</h2>
    <button class="input_false">Eu sou um botão com aparencia de texto</button><br>
    <input class="input_false" type="button" value="Eu sou um input do tipo button com aparencia de texto" /><br>
    <input class="input_false" type="submit" value="Eu sou um input do tipo submit com aparencia de texto" /><br>
    <input class="input_false" type="reset" value="Eu sou um input do tipo reset com aparencia de texto" /><br>
<?php syntax('<button class="input_false">Eu sou um botão com aparencia de texto</button><br>
<input class="input_false" type="button" name="delete" value="Eu sou um input do tipo button com aparencia de texto" />
<input class="input_false" type="submit" name="submit" value="Eu sou um input do tipo submit com aparencia de texto" />
<input class="input_false" type="reset" name="reset" value="Eu sou um input do tipo reset com aparencia de texto" />'); ?>
</div>

<hr class="doc" />

<div id="btn--delete-cancel-danger" class="sectionhash">
    <h2 class="title">Botão para deletar, cancelar ou perigo</h2>
    <p>
        <button class="btn_cancel">Cancelar</button> &nbsp;
        <button class="btn_cancel">
            <a href="<?php _urli('botoes/#btn--delete-cancel-danger') ?>">Cancelar</a>
        </button>
        <a class="btn_cancel" href="<?php _urli('botoes/#btn--delete-cancel-danger') ?>">Cancelar</a>
    </p>
<?php syntax('<button onclick="history.back(1)" class="btn_cancel">Cancelar</button>
<button class="btn_cancel">
    <a href="javascript:history.back()">Cancelar</a>
</button>
<a class="btn_cancel" href="javascript:history.back()">Cancelar</a>'); ?>
    <p>
        <button class="btn_cancel upperstr">Cancelar</button> &nbsp;
        <button class="btn_cancel upperstr">
            <a href="<?php _urli('botoes/#btn--delete-cancel-danger') ?>">Cancelar</a>
        </button>
        <a class="btn_cancel upperstr" href="<?php _urli('botoes/#btn--delete-cancel-danger') ?>">Cancelar</a>
    </p>
<?php syntax('<button onclick="history.back(1)" class="btn_cancel upperstr">Cancelar</button>
<button class="btn_cancel">
    <a href="javascript:history.back()">Cancelar</a>
</button>
<a class="btn_cancel upperstr" href="javascript:history.back()">Cancelar</a>'); ?>
    <p class="ft15">A classe <code>upperstr</code> deixa o texto maiúsculo e negrito</p>
    <hr class="doc add" />
    <p class="mt20">
        <p class="ft17">Usando a font <code>Baloo2</code></p>
        <button style="font-family:'Baloo';" class="btn_danger"><a href="">Cancelar</a></button>
        <button style="font-family:'Baloo';" class="btn_danger upperstr">Cancelar</button>
    </p>
    <p class="mt20 fw_alert info">Todas essas classes funcionam para esse botão: <code>btn_delete</code>, <code>btn_cancel</code>, <code>btn_danger</code></p>
</div>

<hr class="doc" />

<div id="moon" class="sectionhash">
    <h2 class="title">Lua: Para botões e outros elementos com estilo lunar</h2>
    <p class="fw_alert info"><code>.moon</code> foi projetado para os elementos <span lang="en">parent</span>: <code>button</code> e <code>label</code>, <span lang="en">child</span>: <code>span</code> e <code>a</code>, mais você pode tentar outros elementos.</p>
    <h4 class="f_light doc">Estilo básico</h4>
    <p class="doc">
        <label class="moon"><span>Preencher formulário</span></label> &nbsp; &nbsp; &nbsp;
        <button class="moon"><span>Enviar formulário</span></button>
    </p>
<?php syntax('<label class="moon"><span>Preencher formulário</span></label>
<button class="moon"><span>Enviar formulário</span></button>') ?>
    <p class="doc">
        <h6 class="f_light">Efeito hover:</h6>
        <h6 class="f_light ft15">Desaparece</h6>
        <label class="moon wane">
            <span>Endereço de e-mail:</span>
        </label> &nbsp; &nbsp; &nbsp;
        <button class="moon wane">
            <a href="<?php _urli('botoes/#moon') ?>">Conheça nossos planos</a>
        </button>
        <br>
        <h6 class="f_light ft15">Aparece</h6>
        <label class="moon crescent">
            <span>Endereço de e-mail:</span>
        </label> &nbsp; &nbsp; &nbsp;
        <button class="moon crescent">
            <a href="<?php _urli('botoes/#moon') ?>">Conheça nossos planos</a>
        </button>
    </p>
<?php syntax('<label class="moon wane"><span>Endereço de e-mail:</span></label>
<button class="moon wane"><a href="botoes/#moon">Conheça nossos planos</a></button>

<label class="moon crescent"><span>Endereço de e-mail:</span></label>
<button class="moon crescent"><a href="botoes/#moon">Conheça nossos planos</a></button>') ?>
    <p class="fw_alert info">Para os estilos básico é necessário adicionar a mesma cor de fundo do elemento <span lang="en">parent</span> de <code>moon</code> ao elementos internos "<code>span</code> e <code>a</code>"</p>
    <p>A variável está definida assim:</p>
<?php syntax('.moon span, .moon a {
    --color: #007580;
    --background: #EEEEEE;
}') ?>
    <p class="ft16">Substitua o valor da variável <code>--background:</code> para a cor de fundo do <span lang="en">wrap</span> do seu site</p>
    <hr class="doc add" />
    <h4 class="f_light doc">Lua Nova</h4>
    <p>
        <button class="moon new">
            <a href="<?php _urli('botoes/#moon') ?>">Conheça nossos planos</a>
        </button> &nbsp; &nbsp; &nbsp;
        <label class="moon new wane">
            <span href="<?php _urli('botoes/#moon') ?>">Conheça nossos planos</span>
        </label> &nbsp; &nbsp; &nbsp;
        <button class="moon new crescent">
            <span href="<?php _urli('botoes/#moon') ?>">Conheça nossos planos</span>
        </button>
    </p>
<?php syntax('<button class="moon new"><a href="botoes/#moon">Conheça nossos planos</a></button>
<button class="moon new"><span>Conheça nossos planos</span></button>
<label class="moon new"><span>Conheça nossos planos</span></label>

<button class="moon new wane"><a href="botoes/#moon">Conheça nossos planos</a></button>
<button class="moon new wane"><span>Conheça nossos planos</span></button>
<label class="moon new wane"><span>Conheça nossos planos</span></label>

<button class="moon new crescent"><a href="botoes/#moon">Conheça nossos planos</a></button>
<button class="moon new crescent"><span>Conheça nossos planos</span></button>
<label class="moon new crescent"><span>Conheça nossos planos</span></label>') ?>
    <hr class="doc add" />
    <h4 class="f_light doc">Tamanhos:</h4>
    <label class="moon sm"><span>Tamanho pequeno</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon"><span>Tamanho padrao</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon lg"><span>Tamanho maior</span></label>
    <p class="op4">– – – – – – – – – – – – – – – – – – – – – – – – – – – – – – – – –</p>
    <label class="moon wane sm"><span>Tamanho pequeno</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon wane"><span>Tamanho padrao</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon wane lg"><span>Tamanho maior</span></label>
    <p class="op4">– – – – – – – – – – – – – – – – – – – – – – – – – – – – – – – – –</p>
    <label class="moon crescent sm"><span>Tamanho pequeno</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon crescent"><span>Tamanho padrao</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon crescent lg"><span>Tamanho maior</span></label>
    <p class="op4">– – – – – – – – – – – – – – – – – – – – – – – – – – – – – – – – –</p>
    <label class="moon new sm"><span>Tamanho pequeno</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon new"><span>Tamanho padrao</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon new lg"><span>Tamanho maior</span></label>
    <p class="op4">– – – – – – – – – – – – – – – – – – – – – – – – – – – – – – – – –</p>
    <label class="moon new wane sm"><span>Tamanho pequeno</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon new wane"><span>Tamanho padrao</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon new wane lg"><span>Tamanho maior</span></label>
    <p class="op4">– – – – – – – – – – – – – – – – – – – – – – – – – – – – – – – – –</p>
    <label class="moon new crescent sm"><span>Tamanho pequeno</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon new crescent"><span>Tamanho padrao</span></label> &nbsp; &nbsp; &nbsp;
    <label class="moon new crescent lg"><span>Tamanho maior</span></label>

<?php syntax('<label class="moon sm"><span>Tamanho pequeno</span></label>
<label class="moon"><span>Tamanho padrao</span></label>
<label class="moon lg"><span>Tamanho maior</span></label>

<label class="moon wane sm"><span>Tamanho pequeno</span></label>
<label class="moon wane"><span>Tamanho padrao</span></label>
<label class="moon wane lg"><span>Tamanho maior</span></label>

<label class="moon crescent sm"><span>Tamanho pequeno</span></label>
<label class="moon crescent"><span>Tamanho padrao</span></label>
<label class="moon crescent lg"><span>Tamanho maior</span></label>

<label class="moon new sm"><span>Tamanho pequeno</span></label>
<label class="moon new"><span>Tamanho padrao</span></label>
<label class="moon new lg"><span>Tamanho maior</span></label>

<label class="moon new wane sm"><span>Tamanho pequeno</span></label>
<label class="moon new wane"><span>Tamanho padrao</span></label>
<label class="moon new wane lg"><span>Tamanho maior</span></label>

<label class="moon new crescent sm"><span>Tamanho pequeno</span></label>
<label class="moon new crescent"><span>Tamanho padrao</span></label>
<label class="moon new crescent lg"><span>Tamanho maior</span></label>');
syntax_in_popup('cssmoon', 
'.moon {
    --transition: all 0.8s ease-in-out;
    --font_family: &apos;OpenSans&apos;, sans-serif;
}
.moon span, .moon a {
    --color: #007580;
    --background: #EEEEEE;
}
.moon::before {
    --border_color: #007580;
    --border_style: solid;
    --box_shadow: 1px 1px #fff inset;
}
label.moon a, label.moon span { --cursor: default; }
button.moon a, button.moon span { --cursor: pointer; }
.moon {
    position: relative;
    display: inline-flex;
    align-items:center;
    height: 40px;
    font-family: var(--font_family);
    background-color: transparent;
    border: none;
    margin: 2px 0;
    padding: 0 0;
    cursor: default;
}
.moon span, .moon a {
    position: relative;
    display: inline-block;
    left: 14px;
    font-size: 1rem;
    color: var(--color);
    background-color: var(--background);
    border-radius: 8px;
    z-index: 56;
    text-decoration: none;
}
.moon span:hover, .moon a:hover, .moon span:focus, .moon a:focus, .moon span:active, .moon a:active {
    text-decoration: none;
    color: var(--color);
}
.moon::before {
    position: absolute;
    display: block;
    content: &apos;&apos;;
    top: 0;
    left: 0;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    border-width: 2px;
    border-style: var(--border_style);
    border-color: var(--border_color);
    box-shadow: var(--box_shadow);
    z-index: 55;
}
.moon *, .moon *:hover {
    text-decoration: none;
    cursor: var(--cursor);
}
.moon.new span, .moon.new a {
    background-color: transparent;
}
.moon.new::before {
    border-top-width: 2px;
    border-right-width: 0;
    border-bottom-width: 0;
    border-left-width: 3px;
    border-style: groove;
    border-color: var(--border_color);
    transform: rotate(338deg);
}
.moon.wane::before {
    transform: scale(1);
}
.moon.new.wane::before { 
    transform: scale(1) rotate(338deg) 
}
.moon.wane:hover::before { 
    transform: scale(0) 
}
.moon.new.wane:hover::before { 
    transform: scale(0) rotate(338deg) 
}
.moon.wane:hover a, .moon.wane:hover span {
    left: 0;
}
.moon.crescent a, .moon.crescent span {
    left: 0;
}
.moon.crescent:hover a, .moon.crescent:hover span {
    left: 14px;
}
.moon.crescent::before {
    transform: scale(0);
}
.moon.new.crescent::before {
    transform: scale(0) rotate(338deg);
}
.moon.crescent:hover::before {
    transform: scale(1);
}
.moon.new.crescent:hover::before {
    transform: scale(1) rotate(338deg);
}
.moon a, .moon span, .moon:hover a, .moon:hover span, .moon::before, .moon:hover::before {
    transition: var(--transition);
}
.moon.sm {
    height: 30px;
}
.moon.sm span, .moon.sm a {
    font-size: 0.83rem;
}
.moon.crescent.sm:hover a, .moon.crescent.sm:hover span {
    left: 10px;
}
.moon.sm::before {
    width: 28px;
    height: 28px;
}
.moon.lg {
    height: 49px;
}
.moon.lg span, .moon.lg a {
    font-size: 1.13rem;
}
.moon.crescent.lg:hover a, .moon.crescent.lg:hover span {
    left: 18px;
}
.moon.lg::before {
    width: 47px;
    height: 47px;
    border-width: 3px;
}
.moon.new.lg::before {
    border-top-width: 3px;
    border-right-width: 0;
    border-bottom-width: 0;
    border-left-width: 4px;
}', 'CSS completo dos estilos lunar'); ?>
</div>

<hr class="doc">

<div id="download-buttons" class="sectionhash fw_download py100">
    <a class="fw_btn right" href="<?php _urli('assets/framework/css/buttons.css') ?>" download>Download buttons.css</a>
</div>