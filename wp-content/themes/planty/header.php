<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?> 

</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?> 

	<header>
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?> 
			<ul class="nav-links">
				<li><a href="Nous-rencontrer">Nous rencontrer</a></li> 
				<?php if ( is_user_logged_in() ) { ?> 
					<li><a href="<?php echo esc_url( admin_url() ); ?>">Admin</a></li> 
				<?php } ?>
				<li><a href="Commander">Commander</a></li> 
			</ul>
		</nav>
	</header>

</body>
<html>
