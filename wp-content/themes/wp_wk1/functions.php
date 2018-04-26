<?php
    function web_files(){
        wp_enqueue_style('myStyle', get_stylesheet_uri(), NULL, microtime());
    }
    add_action('wp_enqueue_scripts', 'web_files');
?>