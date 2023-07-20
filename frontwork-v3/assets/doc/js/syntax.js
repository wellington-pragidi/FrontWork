/*addEventListener('load', function() {
    FWSyntax.forEach( syntax => {
        let sxcode = new Worker("<?php // echo tmp_js_url('syntax') ?>");
        sxcode.onmessage = (event) => { syntax.innerHTML = event.data; }
        sxcode.postMessage(syntax.textContent);
    });
});*/
onmessage = (event) => {
    importScripts('http://localhost/frontwork-v3/assets/tmp/js/highlight.js');
    const result = self.hljs.highlightAuto(event.data);
    postMessage(result.value);
};