<h2 class="ft20 f_light">Os accordions são iguais para todos. Todos precisam da classe <code>accordion</code>, no primeiro exemplo só usa mesmo a classe <code>accordion</code>. Para os demais é necessário classe's adicionais, as mesmas estaram abaixo de cada exemlo</h2>
<div id="accordion-closed">
    <h6 class="ft20 f_light">Exemplo 1</h6>
    <h3 class="ft18 f_light">Neste acordion ao abrir a página todo conteúdo estará oculto. Se um conteúdo dentro do acordion for aberto e clicar para abrir outro, todos se manteram abertos, ao menos que clique novamente para fechar.</h3>
    <div class="accordion">
        <?php accordion(' closed', '1', '1'); accordion(' closed', '2', '2'); accordion(' closed', '3', '3'); ?>
    </div>
</div>
<hr class="doc" />
<div id="accordion-firstopen">
    <h6 class="ft20 f_light">Exemplo 2</h6>
    <h3 class="ft18 f_light">Neste accordion ao abrir a pagina o primeiro painél estará com o conteúdo visível. <q>do restante funciona como o accordion do exemplo 1</q>, se um acordion for aberto e clicar para abrir outro, todos se manteram abertos, ao menos que clique novamente para fechar, incluindo o primeiro que é aberto quando entra na página.</h3>
    <div class="accordion">
        <?php accordion(' firstopen', '1', '1'); accordion(' firstopen', '2', '2'); accordion(' firstopen', '3', '3') ?>
    </div>
</div>
<hr class="doc" />
<div id="accordion-collapse">
    <h6 class="ft20 f_light">Exemplo 3</h6>
    <h3 class="ft18 f_light">Neste acordion ao abrir a página o conteúdo de todos estaram ocultos. ao clicar para revelar um deles, e posteriormente clicar para abrir outro, esse abrirá e fechara o anterior aberto, deixando sempre somente um painél visível.</h3>
    <div class="accordion"><?php accordion(' collapse', '1', '1'); accordion(' collapse', '2', '2'); accordion(' collapse', '3', '3') ?>
    </div>
</div>
<hr class="doc" />
<div id="accordion--collapse-firstopen">
    <h6 class="ft20 f_light">Exemplo 4</h6>
    <h3 class="ft18 f_light">Este accordion funciona como o do exemplo 3, exceto que o primeiro painél estará aberto ao entrar na pagina, clicando para abrir outro ele irá se fechar, e assim por diante..</h3>
    <div class="accordion">
        <?php accordion(' collapse firstopen', '1', '1'); accordion(' collapse firstopen', '2', '2'); accordion(' collapse firstopen', '3', '3') ?>
   </div>
</div>

<?php 
function acc_content($content_n, $title_n) {
    switch($content_n) {
        case '1':
            return '<p>Cupiditate arcu donec ullam possimus parturient irure optio faucibus nesciunt? Debitis dignissimos, habitasse.</p> 
            <ul class="cklist">
                <li>Excepturi duis congue eligendi</li> 
                <li>Incididunt officiis</li> 
                <li>Facere animi, omnis senectus</li> 
                <li>Urna nesciunt excepteur mattis voluptatibus</li>
                <li>Dicta assumenda minus doloribus</li>
            </ul>
            <p>Vellectus imperdiet vestibulum aliquet accusamus dignissimos, dapibus sociis autem voluptatem? Lorem consequatur ante laoreet eros? Sapiente.</p>';
        break;
        case '2':
            return '<h4>Ullam morbi incididunt labore irure similique.</h4>
            <div class="grid"> 
                <figure class="c_3">  
                    <img src="//frontwork.webship.com.br/assets/img/unsplash/christopher-sardegna.jpg" alt="Photo by Christopher Sardegna on Unsplash">  
                    <figcaption>Possimus? Reprehenderit, laboris sem quos euismod elit, sociosqu! Bibendum pellentesque natoque.<cite>Photo by Christopher Sardegna on Unsplash</cite></figcaption>  
                </figure>  
                <figure class="c_3">  
                    <img src="//frontwork.webship.com.br/assets/img/unsplash/dave-hoefler.jpg" alt="Photo by Dave Hoefler on Unsplash">  
                    <figcaption>Animi commodo, aperiam atque nulla interdum. Nemo eveniet. Lobortis facilisis.<cite>Photo by Dave Hoefler on Unsplash</cite></figcaption>
                </figure>
                <figure class="c_3">  
                    <img src="//frontwork.webship.com.br/assets/img/unsplash/halgatewood-com.jpg" alt="Photo by HalGatewood.com on Unsplash">  
                    <figcaption>Erat, adipiscing proident ab cupiditate veniam sodales mus eros, eaque.<cite>Photo by HalGatewood.com on Unsplash</cite></figcaption>  
                </figure>
            </div>
            <p>Mi vehicula adipisicing. Maiores hic habitasse ornare nec, condimentum aliqua convallis molestias, dis lacus. Inventore interdum, porttitor suspendisse Quos iure.</p>';
        break;
        case '3':
            return '<p>Vestibulum fusce! Torquent justo unde tincidunt, explicabo, cursus, aliquet? Aspernatur inceptos fuga perferendis consectetur irure quod.</p>
            <blockquote class="bckq2">Pariatur tenetur ipsum doloremque eget per nostrud enim hac, quod dolorum mus pede tortor doloribus duis minus, maxime? Felis commodo <q>lacus reprehenderit</q>, semper id, nisi rutrum laboriosam praesent? Ipsam eros voluptatibus corporis metus hendrerit, elit delectus! Labore turpis! Leo tempor penatibus eget pretium hymenaeos lobortis praesent ad ultrices, ac mattis.</blockquote>
            <cite>Quisque dignissimos</cite>';
        break;
    }
}
function accordion($add_class, $content_n, $title_n) {
    echo '<div class="acc'.$add_class.'" accordion="'.$title_n.'">
        <h3 class="acc_title" acc_title="'.$title_n.'">Título accordion '.$title_n.'</h3>
        <div class="acc_panel">
            <div class="acc_content">'.acc_content($content_n, $title_n).'</div>
        </div>
    </div>';
}



/*
accordion closed = sanfona fechada
accordion firstopen = acordeão primeiro aberto
accordion collapse = colapso do acordeão
accordion collapse firstopen = acordeon colapso primeiro aberto
*/
