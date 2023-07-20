<?php
function routes($rules = '') {
	$title = ''; $inc = '';
	switch(URL::param(0)) {
		case NULL:
			$inc .= 'index';
		break;
		case 'alertas':
			$title .= 'Alertas';
			$inc .= 'alerts';
		break;
		case 'acordeao':
			$title .= 'Acordeão';
			$inc .= 'accordion';
		break;
		case 'botoes':
			$title .= 'Botões';
			$inc .= 'buttons';
		break;
		case 'link-de-ancora':
			$title .= 'Rolagem suave para link de âncora';
			$inc .= 'scroll-anchor';
		break;
		case 'modal-popup':
			$title .= 'Modal Popup';
			$inc .= 'modal-popup';
		break;
		case 'parallax':
			$title .= 'Parallax';
			$inc .= 'parallax';
		break;
		case 'reset':
			$title .= 'Reset';
			$inc .= 'reset';
		break;
		case 'tabelas':
			$title .= 'Tabelas';
			$inc .= 'tables';
		break;
		case 'formulario':
			switch(URL::param(1)) {
				case NULL:
					$title .= 'Formulários';
					$inc .= 'forms/index';
				break;
				case 'input-checkbox':
					$title .= 'Input Checkbox';
					$inc .= 'forms/input-checkbox';
				break;
				case 'input-file':
					$title .= 'Input File';
					$inc .= 'forms/input-file';
				break;
				case 'input-number':
					$title .= 'Input Number';
					$inc .= 'forms/input-number';
				break;
				case 'input-password':
					$title .= 'Input Password';
					$inc .= 'forms/input-password';
				break;
				case 'input-radio':
					$title .= 'Input Radio';
					$inc .= 'forms/input-radio';
				break;
				case 'input-search':
					$title .= 'Input Search';
					$inc .= 'forms/input-search';
				break;
				case 'textarea':
					$title .= 'Textarea ';
					$inc .= 'forms/textarea';
				break;
			}
		break;
		case 'grid':
			switch(URL::param(1)) {
				case 'flex':
					$title .= 'Grid Flex';
					$inc .= 'grids/';
				break;
				case 'float':
					$title .= 'Grid Float';
					$inc .= 'grids/';
				break;
				case 'template':
					$title .= 'Grid Template';
					$inc .= 'grids/';
				break;
			}
		break;
		case 'incorporacao':
		    $title = '<small>Incorporação de</small> ';
			switch(URL::param(1)) {
				case 'imagens':
					$title .= 'Imagens ';
					$inc .= 'incorporation/images';
				break;
				case 'video':
					$title .= 'Vídeo ';
					$inc .= 'incorporation/video';
				break;
				case 'audio':
					$title .= 'Áudio ';
					$inc .= 'incorporation/audio';
				break;
				case 'iframe':
					$title .= 'Iframe ';
					$inc .= 'incorporation/iframe';
				break;
			}
		break;
		case 'navegacao':
			switch(URL::param(1)) {
				case 'abas':
					$title .= 'Abas de Navegação';
					$inc .= 'navs/tabs';
				break;
				case 'menu-horizontal':
					$title .= 'Menu de Navegação Horizontal';
					$inc .= 'navs/menu-horizontal';
				break;
				case 'menu-vertical':
					$title .= 'Menu de Navegação Vertical';
					$inc .= 'navs/menu-vertical';
				break;
			}
		break;
		case 'tipografia':
			switch(URL::param(1)) {
				case 'cabecalhos':
					$title .= 'Cabeçalhos';
					$inc .= 'typography/headings';
				break;
				case 'paragrafo':
					$title .= 'Parágrafo';
					$inc .= 'typography/paragraph';
				break;
				case 'tamanos-de-fonte':
					$title .= 'Tamanhos de fontes';
					$inc .= 'typography/font-sizes';
				break;
				case 'listas':
					$title .= 'Listas';
					$inc .= 'typography/lists';
				break;
				case 'citacoes':
					$title .= 'Citações';
					$inc .= 'typography/quotes';
				break;
				case 'pre-formatado':
					$title .= 'Pré-formatado';
					$inc .= 'typography/pre-formatted';
				break;
				case 'elementos-inline':
					$title .= 'Elementos inline';
					$inc .= 'typography/elements-inline';
				break;
				case 'alinhamento-de-texto':
					$title .= 'Alinhamento de texto';
					$inc .= 'typography/text-align';
				break;
				case 'peso-da-fonte':
					$title .= 'Peso da fonte';
					$inc .= 'typography/font-weight';
				break;
				case 'transbordamento-de-texto':
					$title .= 'Transbordamento de texto';
					$inc .= 'typography/text-overflow';
				break;
			}
		break;
		case 'utilitarios':
			switch(URL::param(1)) {
				case 'alinhamentos':
					$title .= 'Alinhamentos ';
					$inc .= 'utils/aligns';
				break;
				case 'icone-de-descarte':
					$title .= 'Ícone de descarte ';
					$inc .= 'utils/discard';
				break;
				case 'visibilidade':
					$title .= 'Visibilidade '; // screenreaders
					$inc .= 'utils/visibility';
				break;
				case 'limpar-flutuacao':
					$title .= 'Envolvedor de elementos flutuantes ';
					$inc .= 'utils/clean-float';
				break;
				case 'margins-e-paddings':
					$title .= 'Espaçamento - Margins e Paddings ';
					$inc .= 'utils/margins-paddings';
				break;
			}
		break;
	}
	
	if($rules == 'title') {
		if(URL::param(0) == NULL)
			echo 'FrontWork';
		else
			echo $title.' – FrontWork';
	}
	else if($rules == 'heading') {
		if(URL::param(0) == NULL)
			echo 'Framework HTML, CSS, JavaScript e PHP';
		else
			echo $title;
	}
	else if($rules == 'content_id') {
		echo str_replace('/', '-', $inc);
	}
	else {
		return include_doc($inc);
	}
}