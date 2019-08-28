

$(function() {
   $("#formagragaranexos").validate({
      	rules: {
					anexo:{
						required: true
					},
					txtdescripcionanexos: {
						required: true,
						minlength: 50,
                        maxlength: 150
					},
				},
				messages: {
					anexo: {
						required: "Por seleciona el adjunto que desea agregar"
					},
						txtdescripcionanexos: {
						required: "Por favor ingresa la descripcion del anexo",
						minlength: "la descripcion debe tener minimo de 50 caracteres",
                        maxlength: "Excedio los 150 caracteres para la descripcion"
					}
				},
        submitHandler: function(form,event) {
     event.preventDefault(); 
        var formData = new FormData($("#formagragaranexos")[0]);
    		$.ajax({
    			url:$("#formagragaranexos").attr("action"),
    			type:$("#formagragaranexos").attr("method"),
    			data:formData,
                cache:false,
    			contentType:false,
    			processData:false,    			
    			success:function(data){
                    
                    if (data != "no"){
                        swal("Listo!","Se subio el anexo sin problemas","success");
                     $("#container-div-agragranexos").hide();
                   cargardator9();
                    cargaDatos91();
                    }else{
                        swal("Opps!","El adjunto debe pesar como maximo 512 MB","error");
                     $("#container-div-agragranexos").hide();
                   cargardator9();
                    cargaDatos91();
                    }
    			
    
    			}
    		});
         
         
             
      
        
    }
   }); 
    
});

function cargardator9(){
                    $.ajax({
                        url: "http://localhost/Dropbox/proyecto/repositorio/principal/cargaDatos9",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#contentanexo").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}
function cargardator91(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"http://localhost/Dropbox/proyecto/repositorio/principal/cargaDatos91",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#btn-anexos").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}