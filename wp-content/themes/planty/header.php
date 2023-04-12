<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>> 

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0" > 

		<link rel="profile" href="https://gmpg.org/xfn/11"> 

		<?php wp_head(); ?> <!-- Ajoute des scripts et des styles nécessaires à l'en-tête de la page -->

	</head>

	<body <?php body_class(); ?>> <!-- Ajoute des classes CSS à la balise body pour personnaliser les styles en fonction de la page -->

		<?php
		wp_body_open(); // Action qui permet d'ajouter du contenu avant la balise body
		?>

		<header> 

<nav>
  
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?> <!-- Génère un menu de navigation depuis les pages publiées sur le site -->
	
	<div class="burger-menu">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>
	<ul class="nav-links">
   		<li><a href="Nous-rencontrer">Nous rencontrer</a></li> 
    	<?php if ( is_user_logged_in() ) { ?> <!-- Condition qui vérifie si l'utilisateur est connecté -->
      	<li><a href="<?php echo esc_url( admin_url() ); ?>">Admin</a></li> 
    <?php } ?>

   		 <li><a href="Commander">Commander</a></li> 
		 
  </ul>

  

</header>
