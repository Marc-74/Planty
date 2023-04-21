<?php

add_action ('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{   wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

?>

<?php 

function register_custom_menu() {
    register_nav_menu('primary', 'Menu Rencontre');
}
add_action('init', 'register_custom_menu');
function add_menu_logo() {
    ?>
    <div class="menu-logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() . '/logo.png'; ?>" alt="Logo" />
        </a>
    </div>
    <?php
}

add_action('wp_nav_menu', 'add_menu_logo');

?>

<?php 

function button_quantity_shortcode() {
  
    return '<div class="button-group">
    <button class="quantity">0<span>+</span><span>-</span>
    </button><button class="ok">OK</button></div>';
}
add_shortcode('button_quantity', 'button_quantity_shortcode');

?>
