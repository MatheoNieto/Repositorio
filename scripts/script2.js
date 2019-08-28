$(function() {
   $("#editar_anteproyecto").validate({
      	rules: {
					txttitulom:{
						required: true,
						minlength: 10,
                        maxlength: 150
					},
					txtdescripcionanteprom: {
						required: true,
						minlength: 150,
                        maxlength: 250
					},
				},
				messages: {
					txttitulom: {
						required: "Por favor ingresa el titulo",
						minlength: "El titulo debe tener minimo de 10 caracteres",
                        maxlength: "Excedio los 150 caracteres"
					},
						txtdescripcionanteprom: {
						required: "Por favor ingresa la descripcion del ante proyecto",
						minlength: "la descripcion debe tener minimo de 150 caracteres",
                        maxlength: "Excedio los 250 caracteres para la descripcion"
					}
				},
        submitHandler: function(form,event) {
     
                event.preventDefault();
                $.ajax({
			url:$("#editar_anteproyecto").attr("action"),
			type:$("#editar_anteproyecto").attr("method"),
			data:$("#editar_anteproyecto").serialize(),
			success :function(xhr, status){

			},
        complete : function(xhr, status) {
        swal("Listo!","se modifico el documento","success");
        $("#contenedor-div-editar-documento").fadeOut("slow");

        cargardator();
    }
		});
         
         
             
      
        
    }
   }); 
    
});

function cargardator(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"http://localhost/Dropbox/proyecto/repositorio/principal/cargaDatos",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#contenedor-adjuntos").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}