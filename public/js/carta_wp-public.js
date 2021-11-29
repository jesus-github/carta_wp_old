(function( $ ) {
	'use strict';

	// Activamos el plugin de jQuery para el filtrado indicando al objeto del DOM que se lo vamos a aplicar
	$('.cwp-container').filtro_cwp();

	// Inicializamos la librería masonry en el contenedor .cpw-container después de que se hayan cargado todas las imágenes
	// var container = document.querySelector('.cwp-container');
	// var msnry;
	// imagesLoaded( container, function() {
	// 	msnry = new Masonry( container );
	// });

	// Activamos la librería masonry al contenedor
	$(function(){
		$('.cwp-container').masonry({
			//columnWidth: 200,
			itemSelector: '.cwp-single-container'
		});
		console.log('holaaaaaaa');
	});

})( jQuery );
