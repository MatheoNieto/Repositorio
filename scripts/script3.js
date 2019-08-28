	$( document ).ready( function () {
			$( "#formactualizar" ).validate( {
				rules: {
					txtnombresa:{
						required: true,
						minlength: 5,
                        maxlength: 41
					},
					txtapellidosa: {
						required: true,
						minlength: 6,
                        maxlength: 20
					},
					txttelefonoa: {
                        required: true,
						minlength: 7,
                        maxlength: 15
					},
					txtcodiogoa: {
						required: true,
						minlength: 5,
                        maxlength: 20
					},
                    txtemaia: {
						required: true,
						minlength: 10,
                        maxlength: 50,
                        email: true
					},
				},
				messages: {
					txtnombresa: {
						required: "Por favor ingresa el nombre (si son dos dale un espacio)",
						minlength: "El nombre debe tener minimo de 10 caracteres",
                        maxlength: "Excedio los 40 caracteres"
					},
						txtapellidosa: {
						required: "Por favor ingresa sus apellidos",
						minlength: "El apellido debe tener minimo de 10 caracteres",
                        maxlength: "Excedio los 20 caracteres"
					},
                    txttelefonoa: {
                        required: "Por favor ingresa el numero del celular o telefono fijo",
						minlength: "El telefono debe tener minimo de 7 caracteres",
                        maxlength: "Excedio los 15 caracteres"
					},
						txtcodiogoa: {
						required: "Por favor ingresa el codigo (documento de identidad)",
						minlength: "El codigo debe tener minimo de 10 caracteres",
                        maxlength: "Excedio los 20 caracteres"
					},
                    txtemaia: {
						required: "Por favor ingresa el correo el institucional",
						minlength: "el correo debe tener un minimo de 10 caracteres",
                        maxlength: "Excedio los 50 caracteres",
                        email : "correo invalido"
					}
				},
                  submitHandler: function(form,event) {
     
                event.preventDefault();
                $.ajax({
			url:$("#formactualizar").attr("action"),
			type:$("#formactualizar").attr("method"),
			data:$("#formactualizar").serialize(),
			success :function(xhr, status){

			},
        complete : function(xhr, status) {
        swal("Listo!","se mofico su informacion sin problemas","success");
           var cam = $("#txttelefonoa").val();
            $("#tel").text(cam);
     $("#container-div-actualizar").fadeOut("slow");
            


    }
		});
         
             
      
        
    }
			} );

			
		} );





$(document).ready(function(){

$("#btn-editar").click(function() {
$("#container-div-actualizar").show(); 

});

$("#cerradatos").click(function() {
$("#container-div-actualizar").hide(); 

});
    $("#cancelar-info").click(function() {
$("#container-div-actualizar").hide(); 

});

});
		