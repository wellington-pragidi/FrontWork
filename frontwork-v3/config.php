<?php 
setlocale(LC_ALL, 'pt_BR.UTF-8');
mb_internal_encoding('UTF8'); 
mb_regex_encoding('UTF8');
date_default_timezone_set('America/Bahia');

// error_reporting(0);
// ini_set('display_errors', 0);

define('DIRECTORY', __DIR__);

class URL {

    private $slug = NULL;

    static function root($extend = '') {
        $root = DIRECTORY;
        $root = str_replace("\\", "/", $root);
        $root = str_replace($_SERVER["DOCUMENT_ROOT"], $_SERVER["SERVER_NAME"], $root);
        return self::protocol().$root.$extend;
    }

    static function current() {
        return self::protocol().$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }

    static function iG($action) {
        return isset($_GET[$action]) ? $_GET[$action] : '';
    }

    private static function protocol() {
        return isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
    }

    static function param($param) {
        return (new URL)->slugify($param);
    }

    public function slugify($param) {
        if($this->slug == NULL)
            $this->listurl();

        if(isset($this->slug[$param])) 
            return $this->slug[$param];

        return NULL;
    }

    private function listurl() {

        $delete_index = substr($_SERVER["SCRIPT_FILENAME"], strlen( $_SERVER["DOCUMENT_ROOT"] ), - 9);

        $request = substr($_SERVER["REQUEST_URI"], strlen( $delete_index ));

        $uri_tmp = explode("?", $request);
        $request = $uri_tmp[0];

        $after_bar = explode("/", $request);
        $regress = array();

        for($i = 0; $i <= count($after_bar); $i ++) {
            if(isset($after_bar[$i]) AND $after_bar[$i] != "") {
                array_push($regress, $after_bar[$i]);
            }
        }
        $this->slug = $regress;
    }
}


/** 
 * abreviacoes para Diretorios URL's */
function urli($extend = '') {
    return URL::root().'/'.$extend;
}
function diry($extend = '') {
    return DIRECTORY.'/'.$extend;
}
function _urli($extend = '') {
    echo urli($extend);
}
function _diry($extend = '') {
    echo diry($extend);
}

function docs($extend) {
    return DIRECTORY.'/docs/'.$extend.'.php';
}
function include_doc($name) {
    include(docs($name));
}

function doc_js($extend) {
    return URL::root('/assets/doc/js/').$extend.'.js';
}
function fw_js($extend) {
    return URL::root('/assets/framework/js/').$extend.'.js';
}
/*function tmp_css($extend) {
    return URL::root('/assets/tmp/css/').$extend.'.css';
}
function doc_css($extend) {
    return URL::root('/assets/tmp/css/').$extend.'.css';
}*/

function iG($action) {
    return isset($_GET[$action]) ? $_GET[$action] : NULL;
}


function compress_css($replace) {
    $replace = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $replace);
    $replace = str_replace(': ', ':', $replace);
    $replace = str_replace(' {', '{', $replace);
    $replace = str_replace('{ ', '{', $replace);
    $replace = str_replace(', .', ',.', $replace);
    $replace = str_replace('# .', '#.', $replace);
    $replace = str_replace(', ', ',', $replace);
    $replace = str_replace(' (', '(', $replace);
    $replace = str_replace(';  ', ';', $replace);
    $replace = str_replace('; ', ';', $replace);
    $replace = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $replace);
    $replace = str_replace(';}', '}', $replace);
    return $replace;
}
function stylesheet($assets) {
    ob_start('compress_css');
        $files = '';
        if($assets == 'framework') {
            $files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator(
                    DIRECTORY.'/assets/framework/css/'
                ), RecursiveIteratorIterator::SELF_FIRST
            );
        }
        else {
            include_once( diry('assets/doc/fonts/fonts.css') );
            $files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator(
                    DIRECTORY.'/assets/doc/css/'
                ), RecursiveIteratorIterator::SELF_FIRST
            );
        }
        foreach($files as $file) { 
            if( $file->isDir() ) 
                continue;
            if( $file->getExtension() == 'css' ) 
                include_once( $file->getRealPath() );
        }
    ob_end_flush();
}


// LOAD || AUTOLOAD
/*
spl_autoload_register( function($class) {
    if( file_exists( __DIR__.'/src/'.$class.'.php' ) )
        include_once( __DIR__.'/src/'.$class.'.php' );
});
*/
/*
$requests = new RecursiveIteratorIterator( 
    new RecursiveDirectoryIterator( 
        DIRECTORY::request()
    ), RecursiveIteratorIterator::SELF_FIRST
);
foreach($requests as $request) { 
    if($request->isDir()) continue;
    if($request->getExtension() == 'php') {
        include_once( $request->getRealPath() );
    } 
}
*/

function syntax($code, $convert = false) {
    /*$replace = ["<" => "&lt;", ">", "&gt;"];
    $code = strtr($code, $replace);*/
    //$code = $code.str_replace(">", "&gt;", $code);
    //$code = $code.str_replace("<", "&lt;", $code);
    echo '<pre class="fws_syntax">'.$code.'</pre>';
}

function syntax_in_popup($attr_id, $code, $btn_text = 'CSS') {
    // $code = $code.str_replace(">", "&gt;", $code);
    // $code = $code.str_replace("<", "&lt;", $code);

    echo '<div class="fw_popup" id="'.$attr_id.'" data-btntext="'.$btn_text.'">
        <div class="fw_popup_content">
            <pre class="fws_syntax">'.$code.'</pre>
        </div>
    </div>';
}


include('routes.php');