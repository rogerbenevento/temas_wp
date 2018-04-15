<?php
/**
 * Arquivo de ganchos / hocks
 */


/**
 * Carrega os assets do site
 */
function carrega_scripts() {
    // CSS
    wp_enqueue_style('template', get_template_directory_uri() .'/css/template.css', [], '1.0', 'all');
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css', [], '1.0', 'all');
    
    // JS
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', [], '1.0', true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', [], '1.0', true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', [], '1.0', true);
    wp_enqueue_script('template', get_template_directory_uri() .'/js/template.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'carrega_scripts');

/**
 * Criação do Menu da aplicação
 */
register_nav_menus([
    'meu_menu_principal' => 'Menu Principal',
    'menu_rodape' => 'Menu Rodapé',
]);

// Adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');