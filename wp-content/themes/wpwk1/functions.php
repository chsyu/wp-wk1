<?php
    function web_files(){
        wp_enqueue_style('mystyle', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'web_files');
?>