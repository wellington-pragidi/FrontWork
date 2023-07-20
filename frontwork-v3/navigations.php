<?php
function navigation() { ?>
<nav id="nav">
    <ul>
        <li class="brand">
            <a href="<?php _urli() ?>">
                FrontWork <small>webship</small>
            </a>
        </li>
        <!-- Components -->
        <li class="has">
            <a onclick="return false" class="upward" href="<?php _urli('components/') ?>">Components</a>
            <ul class="is">
                <li><a href="<?php _urli('acordeao/') ?>">Acordeão</a></li>
                <li><a href="<?php _urli('alertas/') ?>">Alertas</a></li>
                <li><a href="<?php _urli('botoes/') ?>">Botões</a></li>
                <li><a href="<?php _urli('modal-popup/') ?>">Modal Popup</a></li>
                <li><a href="<?php _urli('link-de-ancora/') ?>">Âncora JS</a></li>
                <li><a href="<?php _urli('parallax/') ?>">Parallax</a></li>
            </ul>
        </li>
        <!-- Formularios -->
        <li class="has">
            <a onclick="return false" class="upward" href="<?php _urli('formularios/') ?>">Formulários</a>
            <ul class="is">
                <li><a href="<?php _urli('formulario/') ?>">Geral</a></li>
                <li><a href="<?php _urli('formulario/input-checkbox/') ?>">Input Checkbox</a></li>
                <li><a href="<?php _urli('formulario/input-file/') ?>">Input File</a></li>
                <li><a href="<?php _urli('formulario/input-number/') ?>">Input Number</a></li>
                <li><a href="<?php _urli('formulario/input-password/') ?>">Input Password</a></li>
                <li><a href="<?php _urli('formulario/input-radio/') ?>">Input Radio</a></li>
                <li><a href="<?php _urli('formulario/input-search/') ?>">Input Search</a></li>
                <li><a href="<?php _urli('formulario/textarea/') ?>">Textarea</a></li>
            </ul>
        </li>
        <!-- Grids -->
        <li class="has">
            <a onclick="return false" class="upward" href="<?php _urli('grids/') ?>">Grids</a>
            <ul class="is">
                <li><a href="<?php _urli('grid/flex/') ?>">Grid flex</a></li>
                <li><a href="<?php _urli('grid/float/') ?>">Grid float</a></li>
                <li><a href="<?php _urli('grid/template/') ?>">Grid template</a></li>
            </ul>
        </li>
        <!-- Incorporation -->
        <li class="has">
            <a onclick="return false" class="upward" href="<?php _urli('incorporacao/') ?>">Incorporação</a>
            <ul class="is">
                <li><a href="<?php _urli('incorporacao/imagens/') ?>">Imagem</a></li>
                <li><a href="<?php _urli('incorporacao/audio/') ?>">Áudio</a></li>
                <li><a href="<?php _urli('incorporacao/video/') ?>">Vídeo</a></li>
                <li><a href="<?php _urli('incorporacao/iframe/') ?>">Iframe</a></li>
            </ul>
        </li>
        <!-- Navegação -->
        <li class="has">
            <a onclick="return false" class="upward" href="<?php _urli('navegacao/') ?>">Navegação</a>
            <ul class="is">
                <li><a href="<?php _urli('abas/') ?>">Abas</a></li><!-- Guias de navegação -->
                <li><a href="<?php _urli('menu-horizontal/') ?>">Menu Horizontal</a></li>
                <li><a href="<?php _urli('menu-vertical/') ?>">Menu Vertical</a></li>
            </ul>
        </li>

        <li><a href="<?php _urli('reset/') ?>">Reset</a></li>
        
        <li><a href="<?php _urli('tabelas/') ?>">Tabelas</a></li>

        <!-- Tipografia -->
        <li class="has">
            <a onclick="return false" class="upward" href="<?php _urli('tipografia/') ?>">Tipografia</a>
            <ul class="is">
                <li><a href="<?php _urli('tipografia/cabecalhos/') ?>">Cabeçalhos</a></li>
                <li><a href="<?php _urli('tipografia/paragrafo/') ?>">Parágrafo</a></li>
                <li><a href="<?php _urli('tipografia/tamanos-de-fonte/') ?>">Tamanhos de fontes</a></li>
                
                <li><a href="<?php _urli('tipografia/citacoes/') ?>">Citações</a></li>
                <li><a href="<?php _urli('tipografia/pre-formatado/') ?>">Pré-formatado</a></li>
                <li><a href="<?php _urli('tipografia/elementos-inline/') ?>">Elementos inline</a></li>
                <li><a href="<?php _urli('tipografia/alinhamento-de-texto/') ?>">Alinhamento de texto</a></li>
                <li><a href="<?php _urli('tipografia/peso-da-fonte/') ?>">Peso da fonte</a></li>
                <li><a href="<?php _urli('tipografia/transbordamento-de-texto/') ?>">Transbordamento de texto</a></li>
            </ul>
        </li>
        <!-- Utilitarios -->
        <li class="has">
            <a onclick="return false" class="upward" href="<?php _urli('utilitarios/') ?>">Utilitários</a>
            <ul class="is">
                <li><a href="<?php _urli('utilitarios/alinhamentos/') ?>">Alinhamentos</a></li>
                <li title="Envolvedor de elementos flutuantes"><a href="<?php _urli('utilitarios/clean-float/') ?>">Limpar flutuação</a></li>
                <li><a href="<?php _urli('utilitarios/icone-de-descarte/') ?>">Ícone de descarte</a></li>

                <!-- _urli('utilitarios/leitores-de-tela/') --><!-- Leitores de tela -->
                <li><a href="<?php _urli('utilitarios/visibility/') ?>">Visibilidade</a></li>

                
                <li><a href="<?php _urli('utilitarios/margins-e-paddings/') ?>">Margins e Paddings</a></li>
            </ul>
        </li>
        <!-- Complementos -->
        <li class="separate_complements"></li>
        <li class="has">
            <a onclick="return false" class="upward" href="<?php _urli('complementos/') ?>">Complementos</a>
            <ul class="is">
                <li><a href="<?php _urli('complementos/animacoes/') ?>">Animações</a></li>
                <li><a href="<?php _urli('complementos/icons/') ?>">Ícones</a></li>
                <li><a href="<?php _urli('complementos/alertas-php/') ?>">Alertas com PHP</a></li>
                <li><a href="<?php _urli('complementos/box-shadows/') ?>">Box Shadows</a></li>
                <li><a href="<?php _urli('complementos/text-shadows/') ?>">Text Shadows</a></li>
            </ul>
        </li>
    </ul>
</nav>
<?php }
function navhash() {
    /*if(URL::param(0) == 'acordeao') {
        echo '<ul>
            <li><a href="#simple" class="anchor">Simples</a></li>
            <li><a href="#simple--semantic-html" class="anchor">Simples com tags html semânticas</a></li>
            <li><a href="#simple--discard-icon" class="anchor">Simples com ícone de descarte</a></li>
            <li><a href="#custom" class="anchor">Alertas com design arrojado</a></li>
            <li><a href="#custom--semantic-html-discard-icon" class="anchor">Design arrojado com html semântico e ícone de descarte</a></li>
        </ul>';
    }*/
    if(URL::param(0) == 'alertas') {
        echo '<ul>
            <li><a href="#simple" class="anchor">Simples</a></li>
            <li><a href="#simple--semantic-html" class="anchor">Simples com tags html semânticas</a></li>
            <li><a href="#simple--discard-icon" class="anchor">Simples com ícone de descarte</a></li>
            <li><a href="#custom" class="anchor">Alertas com design arrojado</a></li>
            <li><a href="#custom--semantic-html-discard-icon" class="anchor">Design arrojado com html semântico e ícone de descarte</a></li>
            <li><a href="#download-alerts" class="anchor">Download</a></li>
        </ul>';
    }
    if(URL::param(0) == 'botoes') {
        echo '<ul>
            <li><a href="#default" class="anchor">Botões padrão</a></li>
            <li><a href="#btn-alerts" class="anchor">Botões de alerta</a></li>
            <li><a href="#btn-alerts-outline" class="anchor">Botões de alerta <em lang="en">outline</em> <span class="screen_reader">(contornado)</span></a></li>
            <li><a href="#btn-animated" class="anchor">Botões com animação:</a></li>
            <li><a href="#btn-enhance" class="anchor">- Realce de cores</a></li>
            <li><a href="#btn-flash" class="anchor">- Realce com borda em flash</a></li>
            <li><a href="#btn-flashs" class="anchor">- Realce com dupla borda em flash</a></li>
            <li><a href="#btn-progress" class="anchor">- Botão progresso</a></li>
            <li><a href="#btn-link" class="anchor">Botões com aparencia de link</a></li>
            <li><a href="#btn-text" class="anchor">Botões com aparencia de texto</a></li>
            <li><a href="#btn--delete-cancel-danger" class="anchor">Botão cancelar</a></li>
            <li><a href="#moon" class="anchor">Elementos com estilo Lunar</a></li>
            <li><a href="#download-buttons" class="anchor">Download</a></li>
        </ul>';
    }
    if(URL::param(0) == 'incorporacao' && URL::param(1) == 'imagens') {
        echo '<ul>
            <li><a href="#img" class="anchor">Imagens</a></li>
            <li><a href="#picture" class="anchor">Picture</a></li>
            <li><a href="#figure-img-figcaption" class="anchor">Figura - Imagem com legenda</a></li>
        </ul>';
    }
    if(URL::param(0) == 'tabelas') {
        echo '<ul>
            <li><a href="#borderless" class="anchor">Sem borda</a></li>

            <li><a href="#bordered" class="anchor">Com bordas</a></li>
            <li><a href="#border-x" class="anchor">Borda horizontal</a></li>
            <li><a href="#border-x-frontier" class="anchor">Borda horizontal e ao redor</a></li>
            <li><a href="#border-y" class="anchor">Borda vertical</a></li>
            <li><a href="#border-y-frontier" class="anchor">Borda vertical e ao redor</a></li>
            
            <li><a href="#background-striped" class="anchor">Linhas listradas</a></li>
            <li><a href="#background-chess" class="anchor">Linhas quadriculadas</a></li>
            <li><a href="#efect-hover" class="anchor">Efeito hover</a></li>
            <li><a href="#text-center" class="anchor">Texto alinhados ao centro</a></li>
            <li><a href="#inline" class="anchor">Tabela inline</a></li>
            <li><a href="#cels--colspan-cowspan" class="anchor">Células que abrangem mais linhas e colunas</a></li>
            <li><a href="#th-more-cols" class="anchor">&lt;th> ocupando mais colunas</a></li>
            <li><a href="#td-more-cols" class="anchor">&lt;td> ocupando mais colunas</a></li>
            <li><a href="#cels-more-rows" class="anchor">Células ocupando mais linhas</a></li>
            <li><a href="#cels-more-rows-cols" class="anchor">Células ocupando mais linhas e colunas</a></li>
        </ul>';
    }
    if(URL::param(0) == 'tipografia' && URL::param(1) == 'citacoes') {
        echo '<ul>
            <li><a href="#cite" class="anchor">Referência de citação</a></li>
            <li><a href="#q" class="anchor">Linha de citação</a></li>
            <li><a href="#blockquote" class="anchor">Bloco de citação</a></li>
        </ul>';
    }
    if(URL::param(0) == 'utilitarios' && URL::param(1) == 'alinhamentos') {
        echo '<ul>
            <li><a href="#horizontal" class="anchor">Horizontal</a></li>
            <li><a href="#vertical" class="anchor">Vertical</a></li>
            <li><a href="#horizontal-vertical" class="anchor">Horizontal e Vertical</a></li>
        </ul>';
    }
}
