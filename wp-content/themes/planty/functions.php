<?php

add_action ('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    wp_enqueue_style('banniere-titre-shortcode', get_stylesheet_directory_uri() . '/css/shortcodes/banniere-titre.css', array(), filemtime(get_stylesheet_directory() . '/css/shortcodes/banniere-titre.css'));

}

?>

<?php 

// Ajout d'un shortcode 'banniere-titre'
add_shortcode('banniere-titre', 'banniere_titre_func');
// Génération du html retourné par le shortcode
function banniere_titre_func($atts)
{
    //Récupération des attributs mis sur le shortcode
    $atts = shortcode_atts(array(
        'src' => '',
        'titre' => 'Titre'
    ), $atts, 'banniere-titre');

    //Récupération du flux d'information
    ob_start();

    if ($atts['src'] != "") {
        ?>

        <div class="banniere-titre" style="background-image: url(<?= $atts['src'] ?>)">
            <h2 class="titre"><?= $atts['titre'] ?></h2>
        </div>

        <?php
    }

    //Fin de récupération du flux d'information et stockage dans la fonction $output
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}

?>





<?php 


function button_quantity_shortcode() {
    ob_start(); ?>
    <style>
      .button-group {
        display: flex;
        align-items: center;
        padding-left: 26px;
        padding-top: -120px;
   
      }
  
      button.quantity {
        background-color: #fff;
        border: none;
        color: black;
        padding: 10px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-weight: 400;
        cursor: pointer;
        position: relative;
       height: 61px;
       border-radius: 8px 0 0 8px;
       font-family: 'syne';
      }
  
      button.quantity span {
        position: absolute;
        width: 30px;
        height: 30px;
        background-color: #dc9f96;
        border: none;
        text-align: center;
        font-size: 20px;
        font-weight: 400;
        cursor: pointer;
        font-family: 'syne';
      }
  
      button.quantity span:first-child {
        top: 0;
        color: white;
        border-radius: 0 8px 0 0;
       margin-left: 24px;
       font-family: 'syne';
       font-weight: 400px;
       font-size: 20px;
      
      }
  
      button.quantity span:last-child {
        bottom: 0;
        color: white;
        border-radius: 0 0 8px 0;
        margin-left: 24px;
        font-family: 'syne';
      }
  
      button.ok {
        background-color: #e0b9b4;
        border: none;
        color: white;
        padding: 10px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-weight: 400;
        cursor: pointer;
        margin-left: 10px;
        width: 120px;
        height: 62px;
        border-radius: 8px;
        margin-left: 50px;
        font-family: 'syne';
      
       
      }
    </style>
  
    <div class="button-group">
      <button class="quantity">
       0
        <span>+</span>
        <span>-</span>
      </button>
      <button class="ok">OK</button>
    </div>
    <?php
    return ob_get_clean();
  }
  add_shortcode('button_quantity', 'button_quantity_shortcode');

?>





<?php 
function wpb_custom_new_menu() {
  register_nav_menu('primary',__( 'Menu Rencontre' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


function add_menu_logo() {
  echo '<div class="menu-logo"><a href="' . home_url() . '"><img src="' . get_stylesheet_directory_uri() . '/logo.png" alt="Logo" /></a></div>';
}
add_action( 'wp_nav_menu', 'add_menu_logo' );

?>


<?php

function image_container_shortcode() {
  $output = '<div class="image-container">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_moyen.png" style="height: 100px; ">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_grand.png" style="height: 120px; margin-top: -20px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_moyen.png" style="height: 100px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_petit.png" style="height: 80px; margin-top: 20px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_moyen.png" style="height: 100px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_grand.png" style="height: 120px; margin-top: -20px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_petit.png" style="height: 80px; margin-top: 20px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_moyen.png" style="height: 100px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_grand.png" style="height: 120px; margin-top: -20px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_moyen.png" style="height: 100px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_petit.png" style="height: 80px; margin-top: 20px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_moyen.png" style="height: 100px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_grand.png" style="height: 120px; margin-top: -20px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_moyen.png" style="height: 100px;">';
  $output .= '<img src="' . get_template_directory_uri() . '/images/image_petit.png" style="height: 80px; margin-top: 20px;">';
  $output .= '</div>';
  return $output;
}
add_shortcode( 'image_container', 'image_container_shortcode' );


?>


