$(document).ready(function(){

    $("#editaranteproyecto").click(function() {
        $("#contenedor-div-editar-documento").show(); 

    });

    $("#cerrareditar").click(function() {
        $("#contenedor-div-editar-documento").hide(); 

    });
    
    $("#btnverdocument").click(function() {
        $("#contenedor-adjuntos").hide(); 
        $("#contenedor-adjuntosdocument").show(); 

    });

    $("#btnverdocument2").click(function() {
        $("#contenedor-adjuntos2").hide(); 
        $("#contenedor-adjuntosdocument2").show(); 

    });

});

 $(document).ready(function(){
    $(function(){
        $('#porcentaje').formProgress({
            speed : 1500,
            style : 'green',
            bubble : true,
            selector : '.required'
        });
    });
});