<footer>
	<?php 
		wp_nav_menu( array(
			'theme_location'  => 'footer-menu',
			'container'       => 'div',
			'container_class' => 'container-footer ',
			'container_id'    => 'container-footer',
			'menu_class'      => 'menu-footer',
			'menu_id'         => 'menu-footer',
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => ' <span class="separador"> | </span>',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
		) );
	?>
	<div class="info-footer">
		<p class="texto-centrado">
			Diagonal 144 No 84 - 98 <br> Bogotá - Colombia
		</p>
	</div>
	<p class="copyright texto-centrado">
		 Diseño y desarrollo por Hernando J Chaves <?php echo date('Y') ?> <br>
		 &copy; Derechos reservados 
	</p>
</footer>
	<?php wp_footer(); ?>

</body>
</html>