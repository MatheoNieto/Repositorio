$(document).ready(function(){
$("#contenedoradjuntos2").hide();
    
  $("#noadjuntar2").click(function() {
$("#contenedoradjuntos2").fadeOut("slow"); 

});  
    
    $(".verarchivo2").click(function(){
        $("#contenedor-viewdocument2").show();
        $("#contenedor-adjuntosdocument2").fadeOut();        
    });
});

function adjunto2(){

     $("#contenedoradjuntos2").fadeIn("slow");
   var nombre2 = document.getElementById('archivo2').files[0].name;
     
    $("#titulodocumento2").text(nombre2);
    
}

 $("#formadjuntos2").submit(function(event){
    		event.preventDefault();
    		
    		var formData = new FormData($("#formadjuntos2")[0]);
    		$.ajax({
    			url:$("#formadjuntos2").attr("action"),
    			type:$("#formadjuntos2").attr("method"),
    			data:formData,
                cache:false,
    			contentType:false,
    			processData:false,    			
    			complete:function(data){
    			swal("Listo!","Se subio el archivo sin problemas","success");
                    $("#contenedoradjuntos2").fadeOut("slow"); 
                    $("#formadjuntos2")[0].reset();
                   cargardator62(); 
    			}
    		});
    	});

  
function cargardator62(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"http://localhost/Dropbox/proyecto/repositorio/principal/cargaDatos61",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#files2").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}


