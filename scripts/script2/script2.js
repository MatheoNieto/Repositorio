$(function() {
   $("#editar_informe").validate({
      	rules: {
					txttituloinformem:{
						required: true,
						minlength: 10,
                        maxlength: 50
					},
					txtdescripcionanteproinformem: {
						required: true,
						minlength: 150,
                        maxlength: 250
					},
				},
				messages: {
					txttituloinformem: {
						required: "Por favor ingresa el titulo del informe final",
						minlength: "El titulo debe tener minimo de 10 caracteres",
                        maxlength: "Excedio los 50 caracteres"
					},
						txtdescripcionanteproinformem: {
						required: "Por favor ingresa la descripcion del Informe final",
						minlength: "la descripcion debe tener minimo de 150 caracteres",
                        maxlength: "Excedio los 250 caracteres para la descripcion"
					}
				},
        submitHandler: function(form,event) {
     
                event.preventDefault();
                $.ajax({
			url:$("#editar_informe").attr("action"),
			type:$("#editar_informe").attr("method"),
			data:$("#editar_informe").serialize(),
			success :function(xhr, status){

			},
        complete : function(xhr, status) {
        swal("Listo!","se modifico el informe final","success");
        $("#contenedor-div-editar-documento2").fadeOut("slow");

        cargardator1();
    }
		});
         
         
             
      
        
    }
   }); 
    
});

function cargardator1(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"http://localhost/Dropbox/proyecto/repositorio/principal/cargaDatos1",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#contenedor-adjuntos2").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}