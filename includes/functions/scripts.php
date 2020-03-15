<?php
// Load HTML5 Blank scripts (header.php)
function custom_js() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        $main = '/public/js/main.js';
        wp_register_script('main', get_template_directory_uri() . $main, array(), '1.0.0');
        wp_enqueue_script('main');
    }
}
add_action('wp_footer', 'custom_js');
// Load HTML5 Blank styles
function custom_css() {
    global $wp_query;
    $template_name = get_post_meta($wp_query->post->ID, '_wp_page_template', true);
    $post_type = get_post_type($wp_query->post->ID);
    $main = '/public/css/main.css';
    wp_register_style('main-css', get_template_directory_uri() . $main, array(), '1.0.0');
    wp_enqueue_style('main-css');
    if ($template_name == 'views/template-home.php') {
        $value = '/public/css/home.css';
    } else {
        $value = '/public/css/page.css';
    }
    wp_register_style($value . '-css', get_template_directory_uri() . $value, array(), '1.0.0');
    wp_enqueue_style($value . '-css');
}
add_action('wp_enqueue_scripts', 'custom_css');