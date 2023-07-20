<?php include('config.php'); include('navigations.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php routes('title') ?></title>
<style id="doc_css"><?php stylesheet('doc'); ?></style>
<style id="fw_css"><?php stylesheet('framework'); ?></style>
</head>
<body id="frontwork">

    <section id="section">

        <aside id="aside">
            <?php navigation() ?>
        </aside>

        <main id="main">
            <header id="header">
                <h1 id="master_title"><?php routes('heading') ?></h1>
            </header>

            <article id="<?php routes('content_id') ?>" class="article">
                <?php routes() ?>
            </article>
        </main>

        <nav id="navhash">
            <?php navhash() ?>
        </nav>

    </section>

        <footer id="footer">
            <div>
                <p class="p">
                    FrontWork v2.0. Projetado e mantido por webship. <br />
                    <span><a href="<?php echo('licenca-termos-condicoes/') ?>">Licença</a></span>
                    <span><a href="<?php echo('licenca-termos-condicoes/') ?>">Termos e condições
                    </a></span>
                </p>
                <p class="p">
                    Licenciado por <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">
                        Creative Commons <span class="screen_reader">Atribuição Não Comercial - Compartilha Igual 4.0 Internacional</span><img alt="Licença Creative Commons" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /><!-- /88x31.png" /> -->
                    </a>
                </p>
            </div>
        </footer>
        <a href="#frontwork" class="anchor backtop" title="Voltar ao topo">
            <i class="icon_top"></i>
        </a>
        <a class="link_webship" href="https://webship.com.br/" title="WebShip - Design e Desenvolvimento web">
            <!-- <img src="<?php //echo('assets/img/logowhite.png') ?>" class="logo" alt="WebShip - Design e Desenvolvimento web"> -->
        </a>

<script id="doc_js" src="<?= doc_js('frontwork') ?>"></script>
<script id="fw_js" src="<?= fw_js('frontwork') ?>"></script>
<script>
let FWSyntax = document.querySelectorAll(".fws_syntax");
FWSyntax.forEach( syntax => {
    var high = syntax.innerHTML;
    high = high.replace(/</g, '&lt;').replace(/>/g, '&gt;');
    syntax.innerHTML = high;
});
</script>
<script src="<?= doc_js('highlight') ?>"></script>
<script>
document.querySelectorAll(".fws_syntax").forEach(syntax => {
    hljs.highlightElement(syntax);
});
</script>
</body>
</html>