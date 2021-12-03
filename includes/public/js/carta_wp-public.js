(function( $ ) {
	'use strict';

	// Activamos el plugin de jQuery para el filtrado indicando al objeto del DOM que se lo vamos a aplicar
	$('.cwp-container').filtro_cwp();

	// Activamos la librería masonry al contenedor
	$(function(){
		$('.cwp-container').masonry({
			//columnWidth: 200,
			itemSelector: '.cwp-single-container',
			percentPosition: true
		});
	});

})( jQuery );
