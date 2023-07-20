<h2 class="doc ft_light">Nosso Reset: Simplicidade e Eficiência.</h2>
<h3 class="ft_light">Oferecendo uma abordagem que evita forçar a barra e, por consequência, previne problemas e dificuldades futuras na estilização de elementos.
</h3>
<h4 class="doc mt20">Global</h4>
<p>Removemos <code>outline</code> e <code>box-sizing</code></p>
<pre class="fws_syntax">
*, *::before, *::after {
    outline: 0;
    box-sizing: border-box;
}
</pre>

<h4 class="doc mt30">Elemento <code>body</code></h4>
<pre class="fws_syntax">
body {
    position: relative;
    margin: 0;
    font-size: 1.0625rem; /* Equivalente a 17px */
    line-height: 1.35;
    font-family: var(--font_system);
    color: var(--color);
    background-color: var(--background);
}
</pre>
<div class="alert warning custom ft22 mt35 txt_center">Saiba mais sobre as variáveis em <a class="doc" href="<?php _urli('guia/variaveis/') ?>">guia > variáveis</a>.</div>

<h4 class="doc mt30">Cabeçalhos - elementos <code>h1-h6</code>.</h4>
<pre class="fws_syntax">
h1 { font-size: 2rem; }
h2 { font-size: 1.563rem; }
h3 { font-size: 1.375rem; }
h4 { font-size: 1.25rem; }
h5 { font-size: 1.125rem; }
h6 { font-size: 1rem; }
h2, h3, h4, h5, h6 {
    margin: 0.688rem 0 0.25rem 0; /* 11px 0 4px 0 */
}
</pre>
<p>Margins e fontes alterados para medidas <code>rem</code>. A margin de h1 não é alterada, por ser o título principal da página cabe ao desenvolvedor alterar com bem entender. <small class="fw_gray">Aquele esquema de não vamos forçar a amizade</small></p>

<h4 class="doc mt30">Parágrafos - elemento <code>p</code></h4>
<pre class="fws_syntax mb0">p { margin: 0.625rem 0; }</pre>
<p class="mb15">Primeiro alteramos a margin para <code>0.625rem</code> que equivale à <code>10px</code></p>
<pre class="fws_syntax mb0">
h2 ~ p, h3 ~ p, h4 ~ p, h5 ~ p, h6 ~ p {
    margin-top: 0;
}
</pre>
<p class="mb15">Depois removemos a margin-top quando os elementos <code>h2-h6</code> vem antes de <code>p</code></p>

<h4 class="doc mt30">Conteúdo - elementos <code>article</code>, <code>h2-h6</code> e <code>p</code></h4>
<pre class="fws_syntax mb0">
article p:first-child, 
article h2:first-child, 
article h3:first-child, 
article h4:first-child, 
article h5:first-child, 
article h6:first-child {
    margin-top: 0;
}
</pre>
<p class="mb15">Este trecho de código tem como propósito eliminar a margem superior de cabeçalhos <code>h2-h6</code> e parágrafos quando eles são o primeiro elemento filho de <code>article</code>.</p>
<pre class="fws_syntax mb0">
article p:last-child, 
article h2:last-child, 
article h3:last-child, 
article h4:last-child, 
article h5:last-child, 
article h6:last-child {
    margin-bottom: 0;
}
</pre>
<p>Já esse é eliminar a margem inferior de cabeçalhos <code>h2-h6</code> e parágrafos quando eles são o último elemento filho de <code>article</code>.</p>

<h4 class="doc mt30">Link - elemento <code>a</code></h4>
<pre class="fws_syntax">
a {
    color: var(--color);
    text-decoration: none;
    transition: .3s;
}
a:hover, a:focus, a:active {
    color: var(--color);
    text-decoration: var(--text_decoration);
}
</pre>
<a href="#" onclick="return false">Link de exemplo</a>

<h4 class="doc mt30">Listas - elementos <code>ol</code>, <code>ul</code>, <code>li</code> e <code>dl</code>, <code>dt</code> <small>e</small> <code>dd</code></h4>
<pre class="fws_syntax">
ul, ol {
    padding-left: 27px;
    margin: 10px 0;
    font-size: 1rem; /* Eq. 16px */
}
dl {
    margin: 5px 0;
}
dt {
    font-size: 85%;
    margin: 0 0 5px 5px;
}
dd {
    position: relative;
    margin-left: 27px;
    font-size: 1rem;
}
dd::before {
    position: absolute;
    top: -4px;
    left: -14px;
    content: '\02022';
    font-size: 1.43rem;
}
</pre>
<p>Sem nenhuma modificação no elemento <code>li</code></p>
<p>Adicionamos um tipo de lista não ordenada no elemento <code>dl > dd</code></p>
<p class="fw_alert info">Veja exemplos de listas em: <a class="doc" href="<?php _urli('tipografia/listas') ?>">tipografia &gt; listas</a></p>

<h4 class="doc mt30">Elementos de incorporação e auxiliares 
    <?php foreach(['img', 'figure', 'figcaption', 'audio', 'video'] as $element) { echo '<code>'.$element.'</code>, ';} ?> e <code>iframe</code>.
</h4>
<pre class="fws_syntax">
img {
    max-width: 100%; 
    height: auto; 
    font-size: 14px !important;
}
figure {
    background-color: var(--background);
    margin: 0.75rem;
    padding: 5px;
}
figcaption {
    padding: 8px;
    font-size: 1rem;
}
audio, video, iframe {
    padding: 0 0;
    width: 100%;
    height: 100%;
}
</pre>
<p>Adicionamos o <code>font-size</code> no <code>img</code> para o caso da imagem não carregar, o texto do atributo <code>alt</code> não ficar muito grande.</p>
<p>Elemento figure com uma variável para alterar a cor de fundo</p>
<p>Poucar coisa é alterado nos elementos <code>audio</code>, <code>video</code> e <code>iframe</code> pois pra isso temos classes adicionais. Navegue até Áudio, Vídeo e Iframe na aba Incorporação e veja os exemplos. A declaração <code>height: 100%</code> não tem efeito algum adicionadas assim direto nesses elementos, isso é para auxiliar nas dependencias.</p>

<h4 class="doc mt30">Pré formatado - elemento <code>pre</code></h4>
<pre class="fws_syntax">
pre {
    white-space: pre-wrap;
    margin: 10px 0;
    padding: 5px 10px 6px;
    line-height: 1.3;
    letter-spacing: 1.1px;
    font-family: var(--font_mono);
    color: var(--color);
    background-color: var(--background);
    border: var(--border);
}
</pre>
<p>Váriaveis para estilização adicionais <code>background-color</code> e <code>border</code> que podem ser editadas ou removidas.</p>

<h4 class="doc mt30">Trecho de código - elemento <code>code</code></h4>
<pre class="fws_syntax mb0">
code {
    color: var(--color);
    font-family: var(--font_mono);
    background-color: var(--background);
    position: relative;
    display: inline-block;
    top: -1px;
    font-size: 98%;
    padding: 0 1.5px 0.5px;
    border-radius: 2px;
}
</pre>
<p class="ft15">Nós fizemos várias modificações neste elemento porque não gostávamos da forma como ele era exibido por padrão, especialmente em relação ao tamanho da fonte. Como desenvolvedores, utilizamos o elemento <code>code</code> com frequência e queríamos personalizá-lo para uma melhor experiência.</p>

<h4 class="doc mt30">Elementos de citações</h4>
<code>cite</code>:
<pre class="fws_syntax">
cite {
    position: relative;
    display: inline-block;
    font-size: 0.9rem;
    margin-top: 10px;
    font-style: italic;
    font-family: var(--font_system);
}
cite::before {
    position: relative;
    content: "– ";
}
</pre>
<code>q</code>:
<pre class="fws_syntax">
q {
    display: inline-block;
    margin: 0 2px;
    font-size: 105%;
    font-family: var(--font_serif);
}
q::before, q::after {
    font-size: 1.35rem;
    font-family: serif;
}
q::before {
    margin-right: 3px;
}
q::after {
    margin-left: 3px;
}
</pre>
<code>blockquote</code>:
<pre class="fws_syntax">
blockquote {
    margin: 0.5rem 0;
    padding: 0.5rem 0 0.5rem 1rem;
    font-size: 1.3rem;
    font-style: italic;
    font-weight: 300;
    text-indent: 1rem;
    letter-spacing: 0.06rem;
    border-left: 9px solid #CCCCCC;
    font-family: var(--font_serif);
}
</pre>
<p class="fw_alert info">Veja os <a class="doc" href="<?php _urli('tipografia/citacoes/') ?>">exemplos</a></p>


<h4 class="doc mt30">Linha horizontal - elemento <code>hr</code></h4>
<p>Estilizado para dar a impressão de profundidade</p>
<pre class="fws_syntax">
hr {
    margin: 0.9rem 0;
    height: 2px;
    border-right: none;
    border-left: none;
    border-top: var(--border_top);
    border-bottom: var(--border_bottom);
    border-radius: 1px;
    clear: both;
}
</pre>
<p><small>Linha horizontal de exemplo:</small></p>
<hr>
<p>Cores de borda na váriavel, como sempre para facilitar a edição do código. Nesse caso precisa mudar de acordo com a cor de fundo do site.</p>
<p><span class="txt_info">Dica:</span> Caso queira uma aparencia de mais profundidade coloque <code>height: 3px</code> e adicione background-color com uma cor que esteja entre 'border-top' e 'border-bottom'</p>
<p><small>Ficará assim nesse plano de fundo:</small></p>
<hr class="doc add">

<h4 class="doc mt30">Elementos de formulário</h4>
<p>Não alteramos nada em elementos de formulário no reset. Só adicionamos <code>cursor: pointer</code> em button, reset e submit.</p>
<p>Para estilização em itens de formulários adicione a classe <code>formit</code> na tag <code>form</code></p>
<p>Outras estilizações especificas navegue nos links da aba <strong class="fw_red">Formulários</strong></p>  

<h4 class="doc mt30">Seleção de texto</h4>
<pre class="fws_syntax">
::selection { 
    text-shadow: none; 
    background-color: var(--background); 
    color: var(--color);
}
</pre>

<h4 class="doc mt30">elemento <code></code></h4>
<p>xxx <code>xxx</code></p>
<pre class="fws_syntax">
xxx
</pre>

<h4 class="doc mt30">elemento <code></code></h4>
<p>xxx <code>xxx</code></p>
<pre class="fws_syntax">
xxx
</pre>

<h4 class="doc mt30">elemento <code></code></h4>
<p>xxx <code>xxx</code></p>
<pre class="fws_syntax">
xxx
</pre>

<h4 class="doc mt30">elemento <code></code></h4>
<p>xxx <code>xxx</code></p>
<pre class="fws_syntax">
xxx
</pre>

<h4 class="doc mt30">elemento <code></code></h4>
<p>xxx <code>xxx</code></p>
<pre class="fws_syntax">
xxx
</pre>

<h4 class="doc mt30">elemento <code></code></h4>
<p>xxx <code>xxx</code></p>
<pre class="fws_syntax">
xxx
</pre>

<h4 class="doc mt30">elemento <code></code></h4>
<p>xxx <code>xxx</code></p>
<pre class="fws_syntax">
xxx
</pre>

<h4 class="doc mt30">elemento <code></code></h4>
<p>xxx <code>xxx</code></p>
<pre class="fws_syntax">
xxx
</pre>


<h3 class="ft_light">
    <p class="mb20">Tenha em mente que ao utilizar esse framework, é necessário modificar valores ou até mesmo excluir declarações se não for necessária para seu propósito, e isso inclui o <strong>reset</strong>.</p>
</h3>
<h4 class="ft_light">
    A liberdade de modificar não só o reset, mas todas as folhas de estilo para atender aos requisitos particulares é uma das vantagens desse framework, permitindo que os desenvolvedores tenham controle total sobre o visual e a interação do site ou aplicação. Com essa abordagem, torna-se possível criar projetos verdadeiramente únicos.
</h4>
<pre class="fit1"> * font-display: 
 * https://iainbean.com/posts/2021/5-steps-to-faster-web-fonts/
</pre>