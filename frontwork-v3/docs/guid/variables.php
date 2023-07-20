Variáveis

<p>As váriaveis quase sempre tem o mesmo nome para cada elemento e propriedade.</p>
<p>Exemplo:</p>
<pre class="fws_syntax">
element {
    --color: #444444;
    --background: #E5E5E8;
    --border: 1px solid #FF0000;
    --border_color: #007580;
    --border_style: solid;
    --box_shadow: 2px 2px 1px rgba(0, 0, 0, 0.60);
    --text_shadow: 1px 1px rgba(255, 255, 255, 0.60);
}
</pre>
<p>Na maioria essas variaveis são para alterar cores de texto, borda e background.</p>

<p>No arquivo <code>reset.css</code> usamos a pseudo <code>:root</code> para declarações gerais.</p>
<pre class="fws_syntax">
:root {
    --font_system: system-ui, Segoe UI, Roboto, Oxygen, Ubuntu, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
    --font_sans: '@font-face:Sans', var(--font_system);
    --font_serif: '@font-face:Serif', ui-serif, serif;
    --font_mono: '@font-face:Mono', ui-monospace, monospace;

    --font_prime: '@font-face:Primaria', var(--font_system);
    --font_sub: '@font-face:Secundaria', var(--font_system);

    --color: #4C4D4F;
    --background: #F2F2F2;
}
</pre>
<p class="fw_alert danger">Edite de acordo com o seu projeto, agora se excluir tudo, terá que ir em cada arquivo procurando por propriedades e editando seus valores. Dessa forma fica bem mais trabalhoso.</p>
<p>Seguidas de elementos especificos, se não for declarado um nome de variável igual, então é usado a variável definido na pseudo :root.</p>