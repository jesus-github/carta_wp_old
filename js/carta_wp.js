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
        item : '.cwp-item', // selector  los item a filtrar
        animation : 'scale',
        callback : null
    }

    // Método para ejecutar las acciones iniciales
    TJ_CartaWp.prototype.init = function (element, options, callback) {
        this.$element = $(element);
        this.options = this.getOptions(options);

        // Validamos los métodos callback
        if (typeof callback == 'function'){
            callback.call(this);
        }
        if (typeof this.options.callback == 'function'){
            this.options.callback.call(this);
        }
    }

    // Método que nos va a devolver los valores de las propiedades por defecto
    TJ_CartaWp.prototype.getDefaultOptions = function () {
        return TJ_CartaWp.Defaults;
    }

    // Método que nos va a devolver los valores de las opciones introducidas por el usuario
    TJ_CartaWp.prototype.getOptions = function (options){
        // devolvemos la fusión de las opciones por Default con las opciones pasada por el usuario
        return $.extend({}, this.getDefaultOptions(), options);
    }

    // Método para filtrar
    TJ_CartaWp.prototype.filtro = function (options) {
        $(document).on('click', options.filter, function (){
            var $this   = $(this), // Elemento sobre el que hacemos click
                filtro  = $this.attr('data-filter'), // Captura el valor del atributo data-filter
                $item   = $(options.item) // Recuperamos todas los platos



        });
    }


    // Extendemos el objeto jQuery creando la funciionalidad
    /* $(element).cwp({}, function(){
        ...
        })
    */
    var Plugin = function (options, callback) {
        return this.each(function () {
            var options = typeof options == 'options' && options,
            data        = new TJ_CartaWp( this, options, callback);
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

    $('.container').cwp({}, function (){
        console.log('todo correcto')
    });

})(jQuery);



