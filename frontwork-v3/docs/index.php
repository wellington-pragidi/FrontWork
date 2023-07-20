<div id="index--header-info" class="">
    
    <h2 class="ft_light fwtxt_info">
        <p>HTML limpo sem elementos desnecessários.</p>
        <p>CSS não usa pré-processadores.</p>
        <p>JavaScript sem nenhuma dependencia.</p>
        <p>PHP para incluir e comprimir o CSS e algumas funções simples para agilizar e simplificar o uso.</p>
    </h2><h2 class="p">O FrontWork foi projetado na idéia de ser facilmente modificado para cada projeto. Frameworks são para agilizar o desenvolvimento, não só para copiar e colar o HTML com as classes e outros atributos e ficar tudo parecido. O projeto é seu, faça de cada um uma coisa única</h2>
    <h3 class="title ft_light">Inicialização</h3>
</div>

<div id="index-php" class="">
    <h4 class="sub_title ft_light">Comprimir e incluir os arquivos .css com PHP</h4>
    <h5 class="ligth_title ft_light">Estilo procedural</h5>
<pre class="fws_syntax">
function compress_css($replace) {
    $replace = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $replace);
    $replace = str_replace(': ', ':', $replace);
    $replace = str_replace([' {', '{ '], '{', $replace);
    $replace = str_replace(', .', ',.', $replace);
    $replace = str_replace('# .', '#.', $replace);
    $replace = str_replace(', ', ',', $replace);
    $replace = str_replace(' (', '(', $replace);
    $replace = str_replace('; ', ';', $replace);
    $replace = str_replace(["\r\n", "\r", "\n", "\t", '  ', '    ', '    '], '', $replace);
    $replace = str_replace(';}', '}', $replace);
    return $replace;
}
function stylesheet() {
    ob_start('compress_css');
        if( file_exists(__DIR__.'assets/fonts/fonts.css') )
            include_once(__DIR__.'assets/fonts/fonts.css'); // <– inclui antes

        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(
                __DIR__.'/assets/css/'
            ), RecursiveIteratorIterator::SELF_FIRST
        );
        $files = '';
        foreach($files as $file) { 
            if( $file->isDir() ) 
                continue;
            if( $file->getExtension() == 'css' ) 
                include_once( $file->getRealPath() );
        }
    ob_end_flush();
}
</pre>
    <p class="fw_alert warn" style="border: none;">Observem a linha com o comentário "<span style="color:#999">// <– incluído antes</span>". Este arquivo não está incluído no pacote de <a href="download">download</a>, mas provavelmente precisará ser adicionado para o layout em desenvolvimento. Adicionem todos os <code>@font-face</code> nesse arquivo para evitar problemas de carregamento das fontes. Além disso, notem que esse arquivo está localizado fora do diretório (pasta) <code>css/</code>. Deve permanecer em outro diretório para evitar o carregamento duplicado.</p>
    <h5 class="ligth_title ft_light">Estilo orientado a objetos</h5>
<pre class="fws_syntax">
class Style {
    public static function css() {
        ob_start(array('self', 'compress'));

        if( file_exists(__DIR__.'assets/fonts/fonts.css') )
            include_once(__DIR__.'assets/fonts/fonts.css');
        
        self::stylesheets();

        ob_end_flush();
    }
    protected static function compress($replace) {
        $replace = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $replace);
        $replace = str_replace(': ', ':', $replace);
        $replace = str_replace([' {', '{ '], '{', $replace);
        $replace = str_replace(', .', ',.', $replace);
        $replace = str_replace('# .', '#.', $replace);
        $replace = str_replace(', ', ',', $replace);
        $replace = str_replace(' (', '(', $replace);
        $replace = str_replace('; ', ';', $replace);
        $replace = str_replace(["\r\n", "\r", "\n", "\t", '  ', '    ', '    '], '', $replace);
        $replace = str_replace(';}', '}', $replace);
        return $replace;
    }
    protected static function stylesheets() {
        $files = new RecursiveIteratorIterator( 
            new RecursiveDirectoryIterator( 
                __DIR__.'assets/css/'
            ),
            RecursiveIteratorIterator::SELF_FIRST
        );
        $path = '';
        foreach($files as $file) { 
            if($file->isDir()) continue;
            if($file->getExtension() == 'css') 
                $path .= include_once( $file->getRealPath() );
        }
        return $path;
    }
}
</pre>
    <div id="" class="mt30 fw_alert info">
        <p>Com isso, você pode escrever seu CSS da maneira que preferir. Espaços e comentários não serão exibidos no código-fonte, resultando em um código limpo e comprimido</p>
        <p>E também não precisará deixar arquivos enormes que mal dá pra rolar a página de tanto código, incluir ou colocar mais tags de link para adicionar folhas estilo, É só colocar folhas de estilo dentro do diretório especificado ou até criar novo diretório que o script funciona como um autoload que inclui todos os arquivos recursivamente dentro do diretório especificado e subdiretórios.</p>
    </div>
</div><!-- #index-php -->

<div id="index-html" class="">
    <h4 class="sub_title ft_light mt25">Estrutura básica HTML</h4>
<pre class="fws_syntax syntax_manscape">
&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;title&gt;Hello World!&lt;/title&gt;
    &lt;!-- Estilo procedural --&gt;
    &lt;style&gt;&lt;?php compress_css() ?&gt;&lt;/style&gt;
    &lt;!-- Estilo orientado a objetos --&gt;
    &lt;style&gt;&lt;?php Style::css() ?&gt;&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;a href="#content" class="screen_reader"&gt;Ir para o conteúdo&lt;/a&gt;

    &lt;div id="content"&gt;&lt;/div&gt;

    &lt;script src="https://seudominio.com.br/assets/js/frontwork.min.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
</div><!-- #index-html -->

<div id="index-css" class="">
    <h4 class="sub_title ft_light mt30 mb10">CSS</h4>
    <p>Na estrutura básica do HTML incluimos os arquivos CSS dentro da tag <code>style</code> usando a função ou método PHP, que além de incluir já faz o trabalho de comprimir o codigo.</p>
    <p>Usar o CSS dentro da tag <code>style</code> ao invéz de <code>link</code> deixa o carregamento da página mais rápido. Caso ache inadequado ou incorreto é importante ressaltar que essa prática é recomendada pelo Google.</p>
    <p>Folhas de estilo separadas sem usar pré-processadores, com variáveis nativas do CSS já declaradas em quase todos as folhas de estilo pra facilitar ainda mais.</p>
    <p><a href="<?php _urli('reset/') ?>">Reset</a> funcional, sem frescuras e sem forçar a amizade.</p>
    <p>Adicione folhas de estilo adicionais dentro do diretório <code>css/</code> ou ainda melhor, adicione novo diretório dentro do mesmo que o script PHP carrega todos os arquivos mesmo em subdiretórios.</p>
</div><!-- #index-css -->

<div id="index-javascript" class="">
    <h4 class="sub_title ft_light mt30 mb10">JavaScript</h4>
    <p>Como dito anteriormente nosso JS não tem dependencias. <span class="op8">A pesar do jQuery ter coisas muito uteis e legais, temos o exencial sem a necessidade de usá-lo</span>.</p>
    <p>Todas as documentações já incluem os componentes que necessitam de JavaScript para funcionar, o que é bastante claro. Além disso, há uma página com <a href="<?php _urli('javascript/') ?>">recursos adicionais</a>.</p>
</div><!-- #index-javascript -->

<div id="frontwork-map" class="">
    <h3 class="title ft_light mt30">Mapa</h3>
<pre>
frontwork/
├─ assets/
│   ├─ css/
│   │   ├─ complements/
│   │   │   ├─ animations.css
│   │   │   └─ icons.css
│   │   ├─ forms/
│   │   │   ├─ form.css
│   │   │   ├─ input-xxx.css
│   │   │   └─ textarea.css
│   │   ├─ grids/
│   │   │   ├─ grid-flex.css
│   │   │   ├─ grid-float.css
│   │   │   ├─ grid-template.css
│   │   │   └─ wrap.css
│   │   ├─ incorporation/
│   │   │   ├─ iframe.css
│   │   │   └─ images.css
│   │   ├─ navs/
│   │   │   ├─ menu-horizontal.css
│   │   │   ├─ menu-vertical.css
│   │   │   ├─ pagination.css
│   │   │   └─ tabs.css
│   │   ├─ typography/
│   │   │   ├─ font-sizes.css
│   │   │   └─ headings.css
│   │   ├─ utils/
│   │   │   ├─ margins.css
│   │   │   ├─ paddings.css
│   │   │   └─ utils.css
│   │   ├─ accordion.css
│   │   ├─ alerts.css
│   │   ├─ buttons.css
│   │   ├─ reset.css
│   │   └─ tables.css
│   └─ js/
│       ├─ frontwork.js
│       └─ frontwork.min.js
├─ config.php
└─ functions.php
</pre>
</div><!-- #frontwork-map -->

<div id="footer--frontwork-info" class="">
    <p class="mt30 fw_alert info">Também é possível utilizar apenas partes do FrontWork, especialmente quando o elemento não possui dependências com outros, como o <a href="<?php _urli('reset/') ?>">reset</a>, e principalmente o '<a href="<?php _urli('javascript/') ?>">JavaScript</a>'. Sempre que possível, o download do CSS estará disponível no final de cada documentação.</p>
</div>