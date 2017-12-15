<?php get_header() ?>
	<?php if(have_posts()): ?>

		<?php while(have_posts()):the_post() ?>

			<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
				<div class="contenido-hero">
					<div class="text-hero">
						<h1><?php the_title() ?></h1>
					</div>
				</div>
				
			</div>


			<div class="principal contenedor">
				<main class="texto-centrado contenido-paginas">
					<?php the_content() ?>
				</main>
			</div>

			<div class="informacion-cajas contenedor">
				
				<div class="caja">
					<?php 
						$imagen_id = get_field('imagen');
						$imagen = wp_get_attachment_image_src($imagen_id,'nosotros');
					?>
					<img src="<?php echo $imagen[0] ?>" class="imagen-caja">
					<div class="contenido-caja">
						<?php the_field('descripcion') ?>
					</div>
				</div>

				<div class="caja">
					<?php 
						$img_id = get_field('imagen_2');
						$imagen = wp_get_attachment_image_src($img_id,'nosotros');
					?>
					<div class="contenido-caja">
						<?php the_field('descripcion_2') ?>
					</div>
					<img src="<?php echo $imagen[0] ?>" alt="">
				</div>

				<div class="caja">
					<?php 
						$img_id = get_field('imagen_3');
						$imagen = wp_get_attachment_image_src($img_id,'nosotros');
					?>
					<img src="<?php echo $imagen[0] ?>" alt="">
					<div class="contenido-caja">
						<?php the_field('descripcion_3') ?>
					</div>
				</div>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>









<?php get_footer() ?>