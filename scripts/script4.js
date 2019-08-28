$(document).ready(function(){
$("#contenedoradjuntos").hide();
    
  $("#noadjuntar").click(function() {
$("#contenedoradjuntos").fadeOut("slow"); 

});  
    

});

function adjunto(){

     $("#contenedoradjuntos").fadeIn("slow");
   var nombre = document.getElementById('archivo').files[0].name;
     
    $("#titulodocumento").text(nombre);
    
}

$(document).ready(function(){
 $("#formadjuntos").submit(function(event){
             var formData = new FormData($("#formadjuntos")[0]);
    		event.preventDefault();
    		$.ajax({
    			url:$("#formadjuntos").attr("action"),
    			type:$("#formadjuntos").attr("method"),
    			data:formData,
                cache:false,
    			contentType:false,
    			processData:false,    			
    			success:function(data){
                    
                if (data !="no"){
                    swal("Listo!","Se subio el archivo sin problemas","success");                  
                   cargardator6(); 
                $("#contenedoradjuntos").fadeOut();
                      $("#formadjuntos")[0].reset();
                }else{
                    swal("Opps!","El adjunto no cumple con las recomendaciones","error");
                         $("#contenedoradjuntos").fadeOut();
                      $("#formadjuntos")[0].reset();
                }    
    			
    			}
    		});
    	});
});

function cargardator6(){
                    $.ajax({
                      url:"http://localhost/Dropbox/proyecto/repositorio/principal/cargaDatos6",
                        type:"POST",
                        success:function(data){  
                         $("#files").empty();
                         $("#files").html(data);
                        }
                    });
}


