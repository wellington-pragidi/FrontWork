<div id="textoverflow" class="fw_example">
	<p class="py5 px10 ft19" style="width: 400px; border: 1px solid #668D92;">
		Texto transbordando o elemento pai e causando uma quebra de linha indesejada.
	</p>
	<p class="text_overflow py5 px10 ft19" 
		style="width: 400px; border: 1px solid #668D92;" 
		title="Texto transbordando o elemento pai sem quebra de linha e o usuário consiente disso.">
		Texto transbordando o elemento pai sem quebra de linha e o usuário consiente disso.
	</p>
<?php syntax('<p class="text_overflow" title="Texto transbordando o elemento pai sem quebra de linha.">
    Texto transbordando o elemento pai sem quebra de linha.
</p>') ?>
	<p class="ft15 fw_alert warn">DICA: A pesar do leitor de tela reconhecer o texto todo e a maioria dos usuários estar consiente de ele continua é legal adicionar também o texto no atributo <code>title</code>. É frustante não poder adivinhar o resto do texto né..</p>

<?php syntax('.text_overflow, .text_nowrap, .text_ellipsis {
    display: block;
    overflow: hidden !important;
    white-space: nowrap !important;
    text-overflow: ellipsis !important;
}') ?>
</div>