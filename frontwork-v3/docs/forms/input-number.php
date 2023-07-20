<?php
class Style {
    static function stylesheets() {
        if( file_exists( Site::dir('assets/css/')) ) {
            $css = new RecursiveIteratorIterator( 
                new RecursiveDirectoryIterator( 
                    get_template_directory().'/assets/css/'
                ),
                RecursiveIteratorIterator::SELF_FIRST
            );
            $path = '';
            foreach($css as $file) { 
                if($file->isDir()) continue;
                if($file->getExtension() == 'css') 
                    $path .= include_once( $file->getRealPath() );
            }
            return $path;
        }
    }

    static function compact($replace) {
        $replace = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $replace);
        $replace = str_replace(': ', ':', $replace);
        $replace = str_replace(array(' {', '{ '), '{', $replace);
        $replace = str_replace(', .', ',.', $replace);
        $replace = str_replace('# .', '#.', $replace);
        $replace = str_replace(', ', ',', $replace);
        $replace = str_replace(' (', '(', $replace);
        $replace = str_replace(array('; ', ';  '), ';', $replace);
        $replace = str_replace('  ', ' ', $replace);
        $replace = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $replace);
        return $replace;
    }

    static function css() {
        ob_start(array('self', 'compact'));

            if( file_exists(get_template_directory().'/assets/fonts/fonts.css') )
                include_once(get_template_directory().'/assets/fonts/fonts.css');
            
            self::stylesheets();

        ob_end_flush();
    }
}