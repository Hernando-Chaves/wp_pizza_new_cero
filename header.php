<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
	<header class="encabezado-sitio">

		<div class="contenedor">
			<div class="logo">
				<a href="<?php echo esc_url(home_url('/')) ?>">
					<img class="logotipo" src="<?php echo get_template_directory_uri().'/images/final/logo.svg' ?>" alt="">
				</a>
			</div><!-- Logo -->
			<div class="informacion-encabezado">
				<div class="redes-sociales">
					<?php 
						$args =[
							'theme_location'  => 'social-menu',
							'menu'            => '',
							'container'       => 'nav',
							'container_class' => 'container_social',
							'container_id'    => 'container_social',
							'menu_class'      => 'menu_social',
							'menu_id'         => 'menu_social',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'link_before'     => '<span class="sr-text">',
							'link_after'      => '<span>',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						];
						wp_nav_menu($args);
					?>
				</div><!-- Redes sociales -->
				<div class="direccion">
					<p>Diagonal 144 N<sup>o</sup> 84 - 98 <br>
						Bogotá - Colombia
					</p>
				</div>
			</div>
			
		</div><!-- Contenedor -->

	</header>
	<div id="menu-principal">
		<div class="mobile-menu">
			<a href="#" class="mobile"><i class="fa fa-bars"> Menu</i></a>
		</div>
		<div class="contenedor navegacion">
			<?php 
				$args = [
					'theme_location'  => 'header-menu',
					'container'       => 'nav',
					'container_class' => 'container_header',
					'container_id'    => 'container_id',
					'menu_class'      => 'menu_header',
					'menu_id'         => 'menu_header',
				];
				wp_nav_menu($args);
			?>
		</div>
	</div>
	
