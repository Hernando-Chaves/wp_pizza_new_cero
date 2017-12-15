$ = jQuery.noConflict();

$(document).ready(function(){
	// alert('uuuuuuuu');
	$('.mobile-menu').on('click',function(){
		$('.menu_header').toggle();
	});

	var breakpoint = 768;
	$(window).resize( function() {

		ajustarCaja();
		// console.log($(document).width());
		if($(document).width() >= breakpoint)
		{
			$('.menu_header').show();
		} else {
			$('.menu_header').hide();
		}
	});

	// REDIMENSIONAR CAJAS NOSOTROS
	ajustarCaja();
	
	function ajustarCaja()
	{
		var imagenes = $('.imagen-caja');

		if(imagenes.length > 0)
		{
			var altura = imagenes[0].height;
			var cajas  = $('.contenido-caja');

			$(cajas).each(function(i,elemento){
				$(elemento).css({'height' : altura+'px'})
			})
		}
	}

})


