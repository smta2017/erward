<?php

function st_add_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-script',get_template_directory_uri() . '/main.js',array('jquery'),false,true);
}

add_action('wp_enqueue_scripts','st_add_scripts');



?>