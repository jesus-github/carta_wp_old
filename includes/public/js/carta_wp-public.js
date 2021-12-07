(function( $ ) {
	'use strict';

	$(function(){

		// Activamos la librería masonry al contenedor
		$('.cwp-container').masonry({
			//columnWidth: 200,
			itemSelector: '.cwp-single-container',
			percentPosition: true
		});
		// Activamos el plugin de jQuery para el filtrado indicando al objeto del DOM que se lo vamos a aplicar
		$('.cwp-container').filtro_cwp();


	});

})( jQuery );
