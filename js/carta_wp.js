/* Validdamos que el objeto global jQuery no sea indefinido o no exista */
if (typeof  jQuery == 'undefined') {
    throw new Error('El plugin carta_wp necesita la librería jQuery para funcionar.');
}

(function ($) {

    'use strict';
    /********** Funcionalidad de filtrado *********/

    // Creamos un objeto (nombramos la variable empezando con mayúsculas) cuyo valor va a ser igual a una función
    var TJ_CartaWp = function (element, options, callback) {
        this.element = null;
        this.options = null;

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
                $item.show(1000);
            } else {
                // Si el elemento que pulsamos no tiene la clase cwp-categoria-activa vamos a agrgársela y quitársela a los hermanos
                if (!$this.hasClass('cwp-categoria-activa')) {
                    $this.addClass('cwp-categoria-activa').siblings().removeClass('cwp-categoria-activa');
                    // Ocultamos todos los items
                    $item.fadeOut(300);
                    // Ejecutamos la acción pasados unos milisegundos
                    setTimeout(function (){
                        // Mostramos  solo los items que tengan como valor del atributo data-f el valor de filtro (data-filter del botón en este caso)
                        // Utilizamos *= para indicar que data-f tiene que contener el valor de filtro, por si hay más de un filtro aplicado
                        $('[data-f *= "'+filtro+'"]').fadeIn(300);
                    },600);
                }
            }

        });
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



