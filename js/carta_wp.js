/* Acorta el texto de  un párrafo con leer más... Aplicando la clase minimize */
jQuery(function(){

    var minimized_elements = $('p.minimize');

    minimized_elements.each(function(){
        var t = $(this).text();
        if(t.length < 200) return;

        $(this).html(
            t.slice(0,200)+'<span>... </span><a href="#" class="more">More</a>'+
            '<span style="display:none;">'+ t.slice(200,t.length)+' <a href="#" class="less">Less</a></span>'
        );

    });

    $('a.more', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();
    });

    $('a.less', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();
    });

});



