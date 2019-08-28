function adjuntoAA(){

     $("#contenedoranexo2").fadeIn("slow");
   var nombre = document.getElementById('anexo2').files[0].name;
     
    $("#titulodocumentoa2").text(nombre);
    
}


$(function() {
   $("#formagragaranexos2").validate({
      	rules: {
					anexo2:{
						required: true
					},
					txtdescripcionanexos2: {
						required: true,
						minlength: 50,
                        maxlength: 150
					},
				},
				messages: {
					anexo2: {
						required: "Por seleciona el adjunto que desea agregar"
					},
						txtdescripcionanexos2: {
						required: "Por favor ingresa la descripcion del anexo",
						minlength: "la descripcion debe tener minimo de 50 caracteres",
                        maxlength: "Excedio los 150 caracteres para la descripcion"
					}
				},
        submitHandler: function(form,event) {
     event.preventDefault(); 
        var formData = new FormData($("#formagragaranexos2")[0]);
    		$.ajax({
    			url:$("#formagragaranexos2").attr("action"),
    			type:$("#formagragaranexos2").attr("method"),
    			data:formData,
                cache:false,
    			contentType:false,
    			processData:false,    			
    			success:function(data){
                    
                    
                if (data != "no"){
                    swal("Listo!","Se subio el anexo sin problemas","success");
                     $("#container-div-agragranexos2").hide();
                   cargardator92();
                    cargaDatos93();
                }else{
                 swal("Opps!","El adjunto debe pesar como maximo 512 MB","error");
                     $("#container-div-agragranexos2").hide();
                   cargardator92();
                    cargaDatos93();
                }
                    
    			
    
    			}
    		});
         
         
             
      
        
    }
   }); 
    
});

function cargardator92(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"http://localhost/Dropbox/proyecto/repositorio/principal/cargaDatos92",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#contentanexo2").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}
function cargardator93(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"<?php echo site_url();?>/principal/cargaDatos93",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#btn-anexos2").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}