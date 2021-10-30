/* Validdamos que el objeto global jQuery no sea indefinido o no exista */
if (typeof  jQuery == 'undefined') {
    throw new Error('El plugin carta_wp necesita la librería jQuery para funcionar.');
}

(function ($) {

    'use strict';
    /********** Funcionalidad de filtrado *********/

    // Creamos un objeto (nombramos la variable empezando con mayúsculas) cuyo valor va a ser igual a una función
    var TJ_CartaWp = function (element, options, callback) {
        this.element    = null;
        this.options    = null;
        this.zoomfull       = '<!--  INICIO - Maquetación al pinchar sobre un item -->\n' +
                            '<div class="card shadow-lg" id="cwp-zoom">\n' +
                            '    <img src="" class="card-img-top cwp-main-image" alt="...">\n' +
                            '    <div class="card-body">\n' +
                            '        <h6 class="card-title cwp-title">Orejas de pollo al ajillo</h6>\n' +
                            '        <p class="card-text text-secondary m-1 cwp-description">Acompañadas de patatas caseras y pimientos.</p>\n' +
                            '        <h6 class="card-text cwp-price">18,50 €</h6>\n' +
                            '        <ul class="list-inline m-0 cwp-alergenos">\n' +
                            '            <li class="list-inline-item"><img src="img/alergenos/altramuces.png" alt=""></li>\n' +
                            '            <li class="list-inline-item"><img src="img/alergenos/apio.png" alt=""></li>\n' +
                            '            <li class="list-inline-item"><img src="img/alergenos/pescado.png" alt=""></li>\n' +
                            '            <li class="list-inline-item"><img src="img/alergenos/gluten.png" alt=""></li>\n' +
                            '        </ul>\n' +
                            '    </div>\n' +
                            '</div>\n' +
                            '<!--  FIN - Maquetación al pinchar sobre un item -->';
        this.overdark   =   '<div class="cwp-fondo-zoom"></div>'; // Máscara negra al hace zoom

        this.init(element, options, callback);
        };

    // Valores por defecto
    TJ_CartaWp.Defaults = {
        filter : '.cwp-categorias li', // selector de los filtros
        item : '.cwp-item', // selector  los item a filtrar (clase que tendrá el contenedor de cada plato)
        animation : 'scale',
        callback : null
    }

    // Método para ejecutar las acciones iniciales
    TJ_CartaWp.prototype.init = function (element, options, callback) {
        this.$element = $(element);
        this.options = this.getOptions(options);

        // Llamamos al método filtro pasándole las options
        this.filtro(this.options);

        // Añadimos el html de la máscara y el zoom al final de body (las hemos declarado como propiedades al crear el objeto TJ_CartaWp)
        $('body').prepend(this.zoomfull);
        $('body').prepend(this.overdark);

        // Inicializamos el métido para hacer zoom
        this.zoom();

        // Aplicamos la clase cwp-item a cada contenedor de plato
        this.$element.children().addClass(this.options.item.replace('.',''));

        // Validamos los métodos callback
        if (typeof callback == 'function'){
            callback.call(this);
        }
        if (typeof this.options.callback == 'function'){
            this.options.callback.call(this);
        }
    }

    // Método que nos va a devolver los valores de las propiedades por defecto
    TJ_CartaWp.prototype.getDefaults = function () {
        return TJ_CartaWp.Defaults;
    }

    // Método que nos va a devolver los valores de las opciones introducidas por el usuario
    TJ_CartaWp.prototype.getOptions = function (options){
        // devolvemos la fusión de las opciones por Default con las opciones pasada por el usuario
        return $.extend({}, this.getDefaults(), options);
    }

    // Método para el filtrado. Al pulsar alguno de los botones nos muestre los platos de esa categoría
    TJ_CartaWp.prototype.filtro = function (options) {
        // Al hacer click sobre algún botón contenido en options.filter (hemos definido ya su valor por defecto del contenedor de los botones)
        $(document).on('click', options.filter, function (){
            // Variable para almacenar el elemento sobre el que hacemos click
            var $this = $(this);
            // Variable para almacenar el valos del atributo data-filter del botón
            var filtro = $this.attr('data-filter');
            // Variable para almacenar la selección de todas los platos.
            var $item   = $(options.item);

            // Evaluamos la variable filtro para ver el valor del atributo data-filter del botón
            if (filtro == 'todo') {
                // Le añadimos la clase cwp-categoria-activa y a todos los hermanos le quitamos la clase cwp-categoria-activa
                $this.addClass('cwp-categoria-activa').siblings().removeClass('cwp-categoria-activa');
                // Muestra todas la imágenes
                $item.show();
            } else {
                // Si el elemento que pulsamos no tiene la clase cwp-categoria-activa vamos a agrgársela y quitársela a los hermanos
                if (!$this.hasClass('cwp-categoria-activa')) {
                    $this.addClass('cwp-categoria-activa').siblings().removeClass('cwp-categoria-activa');
                    // Ocultamos todos los items
                    $item.hide();
                    // Ejecutamos la acción pasados unos milisegundos
                    setTimeout(function (){
                        // Mostramos  solo los items que tengan como valor del atributo data-f el valor de filtro (data-filter del botón en este caso)
                        // Utilizamos *= para indicar que data-f tiene que contener el valor de filtro, por si hay más de un filtro aplicado
                        $('[data-f *= "'+filtro+'"]').show();
                        // Redibujamos la cuadrícula para que se ordene
                        $
                    },600);
                }
            }

        });
    }

    // Método para hacer Zoom al pinchar sobre un plato
    TJ_CartaWp.prototype.zoom = function () {
        // variable con la máscara negra
        var $overdark = $('.cwp-fondo-zoom');
        // variable con el contenedor que va a contener todo cuando hagamos zoom
        var $contenedor_zoom = $('#cwp-zoom');
        // Variables con los datos para pasarlos del contenedor pequeño al contenedor grande (cuando hacemos zoom
        var $imagen_pricipal = $('.cwp-main-image');
        // Evento para cuando hagamos click sobre el contenedor cwp-single-container
        $(document).on('click','.cwp-single-container', function (){
            // Almacenamos en una variable el elemento sobre el cual estamos haciendo click
            var $contenedor_pequeno = $(this);
            // Variables para almacenar los datos del contenedor pequeño:
            // Variable con la url de la imagen principal.
            var src = $contenedor_pequeno.find('.cwp-main-image').attr('src');
            console.log(src);
            // Título
            var $titulo = $contenedor_pequeno.find('.card-title').text()
            console.log($titulo);
            // Parámetro para mostrar el zoom y el overdark
            $contenedor_zoom.fadeIn();
            $overdark.fadeIn();
            // Pasamos los valores del contenedor chico al grande
            $contenedor_zoom.children('cwp-main-image').attr('src', src);
            console.log($contenedor_zoom.children('.cwp-main-image').attr('src', src));
        });

        // Tras aparecer el overdark y el contenedor zoom vamos a ocultarlos cuando hagamos click sobre cualquiera de ellos
        $.merge($overdark,$contenedor_zoom).on('click', function (){
            $overdark.fadeOut();
            $contenedor_zoom.fadeOut();
        })


    }

    // Extendemos el objeto jQuery creando la funciionalidad
    /* $(element).cwp({}, function(){
        ...
        })
    */
    var Plugin = function (options, callback) {
        return this.each(function () {
            options = typeof options == 'object' && options;
            var data = new TJ_CartaWp( this, options, callback);
        });
    }

    // para evitar conflictos con otros plugins
    var old = $.fn.cwp;
    //Método que vamos a usar en los elementos
    $.fn.cwp = Plugin;
    $.fn.cwp.Constructor = TJ_CartaWp;

    // Para evitar conflictos de nuestro plugin con otros plugins o frameworks con el símbolo $
    $.fn.cwp.noConflict = function () {
        $.fn.cwp = old;
    }

    // Iniciamos el plugin de filtrado, si no le pasamos valores cogerá los por defecto.
    // Indicamos el contedor donde se encuentra el contenido a filtrar
    $('.cwp-container').cwp({}, function (){
        console.log('todo correcto')
    });

})(jQuery);



