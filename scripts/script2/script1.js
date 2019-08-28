
$(document).ready(function(){

    $("#editaranteproyecto2").click(function() {
        $("#contenedor-div-editar-documento2").show(); 

    });

    $("#cerrareditar2").click(function() {
        $("#contenedor-div-editar-documento2").hide(); 

    });
    

    $("#btnverdocument2").click(function() {
        $("#contenedor-adjuntos2").hide(); 
        $("#contenedor-adjuntosdocument2").show(); 

    });

});

$(document).ready(function(){
    $(function(){
        $('#percentage2').formProgress({
            speed : 400,
            style : 'green',
            bubble : true,        
            selector : '.required2'
        });
    });
});