<p>Citações inclue os elementos cite, q e blockquote</p>

<div id="cite" class="sectionhash">
    <h2 class="title ft_light">Referência de citação. <span class="ft22 ft_light txtstd">Elemento <code class="ft_light">cite</code></span></h2>
    <cite>Clarice Lispector</cite>
<?php syntax('<cite>Clarice Lispector</cite>') ?>
</div>

<hr class="doc my50">

<div id="q" class="sectionhash">
    <h2 class="title ft_light">Linha de citação. <span class="ft22 ft_light txtstd">Elemento <code class="ft_light">q</code></span></h2>
    <q>Felis, tellus euismod sodales mauris id nibh itaque eget cupidatat quam quis! Tellus placeat duis</q>
<?php syntax('<q>Felis, tellus euismod sodales mauris id nibh itaque eget cupidatat quam quis! Tellus placeat duis</q>') ?>
<h6 class="doc mt30 ft_light ft18">Linha de citação com referência: <small class="txtstd"><code>&lt;q&gt;Texto &lt;cite&gt;Autor&lt;cite&gt;&lt;q&gt;</code></small></h6>
    <q>Não confunda diploma com conhecimento <cite>Elon Musk</cite></q>
<?php syntax('<q>Não confunda diploma com conhecimento <cite>Elon Musk</cite></q>') ?>
</div>

<hr class="doc my50">

<div id="blockquote" class="sectionhash">
    <h2 class="title ft_light">Blocos de citação. <span class="ft22 ft_light txtstd">Elemento <code class="ft_light">blockquote</code></span></h2>
    <h5 class="doc ft20 ft_light mb20">Bloco de citação padrão definido em <a href="<?php _urli('reset/') ?>">reset:</a></h5>
    <blockquote>
        Purus duis nullam totam augue. Reprehenderit aenean? Consequuntur scelerisque! Elit, proident accusantium condimentum ipsum, repellat quam, conubia metus! Asperiores recusandae curabitur deserunt distinctio, rutrum magna.
    </blockquote>
<?php syntax('<blockquote>-- Texto --</blockquote>') ?>
<hr class="doc add mt40 mb30">
    <h5 class="doc ft20 ft_light mb20">Estilos adicionais:</h5>
    <code>bqk_1</code>
    <blockquote class="bkq_1">
        Purus duis nullam totam augue. Reprehenderit aenean? Consequuntur scelerisque! Elit, proident accusantium condimentum ipsum, repellat quam, conubia metus! Asperiores recusandae curabitur deserunt distinctio, rutrum magna.
    </blockquote>
<?php syntax('<blockquote class="bkq_1">-- Texto --</blockquote>') ?>
<hr class="doc add my40">
    <code>bqk_2</code>
    <blockquote class="bkq_2"><em class="ico_ldquo" aria-label="Aspas duplas direita"></em>
        Purus duis nullam totam augue. Reprehenderit aenean? Consequuntur scelerisque! Elit, proident accusantium condimentum ipsum, repellat quam, conubia metus! Asperiores recusandae curabitur deserunt distinctio, rutrum magna.
    </blockquote>
<?php syntax('<blockquote class="bkq_2">
    <em class="ico_ldquo" aria-label="Aspas duplas direita"></em>
    -- Texto --
</blockquote>') ?>
<hr class="doc add my40">
    <code>bqk_3</code>
    <blockquote class="bkq_3">
        Iaculis auctor quibusdam cum posuere massa! Cupidatat penatibus? Maecenas occaecati duis magna eveniet iure, quisquam, debitis. Iaculis, blanditiis. Deserunt sem! Quaerat aspernatur! Habitasse scelerisque! Magni. Voluptas. Mollit, ipsa lorem alias eos, aliquam, nostra error habitant inceptos, sodales neque per montes imperdiet sed, molestie sodale
    </blockquote>
<?php syntax('<blockquote class="bkq_3">-- Texto --</blockquote>') ?>
<hr class="doc add mt30 mb20">
    <p class="mb20">Blocos de citação com referência: <code>&lt;blockquote&gt;Texto &lt;cite&gt;Autor&lt;cite&gt;&lt;blockquote&gt;</code></p>
    <code>bqk_4</code>
    <blockquote class="bkq_4">
        <p>
            <em class="ico_ldquo" aria-label="Aspas duplas direita"></em>Sim, eu sou um péssimo programador, mas provavelmente ainda sou melhor que você.<em class="ico_rdquo" aria-label="Aspas duplas esquerda"></em>
            <cite>Rasmus Lerdorf</cite>
        </p>
    </blockquote>
<?php syntax('<blockquote class="bkq_4">
    <p>
        <em class="ico_ldquo" aria-label="Aspas duplas direita"></em>
        Sim, eu sou um péssimo programador, mas provavelmente ainda sou melhor que você.
        <em class="ico_rdquo" aria-label="Aspas duplas esquerda"></em>
        <cite>Rasmus Lerdorf</cite>
    </p>
</blockquote>') ?>
<hr class="doc add my40">
    <code>bqk_4 topcite</code>
    <blockquote class="bkq_4 topcite">
        <p>
            <em class="ico_ldquo" aria-label="Aspas duplas direita"></em>Sim, eu sou um péssimo programador, mas provavelmente ainda sou melhor que você.<em class="ico_rdquo" aria-label="Aspas duplas esquerda"></em>
            <cite>Rasmus Lerdorf</cite>
        </p>
    </blockquote>
<?php syntax('<blockquote class="bkq_4 topcite">
    <p>
        <em class="ico_ldquo" aria-label="Aspas duplas direita"></em>
        Sim, eu sou um péssimo programador, mas provavelmente ainda sou melhor que você.
        <em class="ico_rdquo" aria-label="Aspas duplas esquerda"></em>
        <cite>Rasmus Lerdorf</cite>
    </p>
</blockquote>') ?>
<hr class="doc add my40 my40">
    <code>bqk_5</code>
    <blockquote class="bkq_5">
        Purus duis nullam totam augue. Reprehenderit aenean? Consequuntur scelerisque! Elit, proident accusantium condimentum ipsum, repellat quam, conubia metus! Asperiores recusandae curabitur deserunt distinctio, rutrum magna.
        <cite>Dummy Text</cite>
    </blockquote>
<?php syntax('<blockquote class="bkq_5">
    -- Texto --
    <cite>Dummy Text</cite>
</blockquote>') ?>
</div><!-- #blockquote -->
