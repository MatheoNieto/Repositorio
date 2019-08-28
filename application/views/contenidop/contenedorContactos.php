<!---------------------------------------------------------------------------------------------------------------------------->
<!-----------------------------------------------VERSIONES ANTERIORES -------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

    <!-- Modal -->
    <div class="modal fade" id="myModal5" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <center> 
                        <h2 class="modal-title">
                            Contactanos para solucionar tus problemas
                            <img src="../../../css/images/cartelera.png"  alt="" class="fa fa-user bigicon">
                        </h2>
                    </center>
                </div>
                
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
                
                <div class="modal-body">
                  
                   <form id="formcontacto" class="form-horizontal" action="<?php echo base_url(); ?>principal/enviarproblema" method="POST">
                    <fieldset><br>

                    <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url(); ?>css/images/perfil.png"  alt="" class="fa fa-user bigicon"></span>
                    <div class="col-md-8">
                    <input id="txtnombres" name="txtnombres" type="text" placeholder="Nombres" class="form-control" value="<?php foreach ($usuarios as $user){
                    echo $user->nombre1; echo" "; echo $user->nombre2; echo" "; echo $user->apellidos;} ?>">
                    </div>
                    </div>

                    <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url(); ?>css/images/email.png"  alt="" class="fa fa-user bigicon"></span>
                    <div class="col-md-8">
                    <input id="txtemail" name="txtemail" type="text" placeholder="Correo" class="form-control"  value="<?php foreach ($usuarios as $user){
                    echo $user->email;} ?>">
                    </div>
                    </div>

                    <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url(); ?>css/images/llamada-telefonica.png"  alt="" class="fa fa-user bigicon"></span>
                    <div class="col-md-8">
                    <input id="txttel" name="txttel" type="text" placeholder="Telefono" class="form-control" value="<?php foreach ($usuarios as $user){
                    echo $user->tel;} ?>">
                    </div>
                    </div>

                    <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url(); ?>css/images/info.png"  alt="" class="fa fa-user bigicon"></span>
                    <div class="col-md-8">
                    <input id="txtasunto" name="txtasunto" type="text" placeholder="Asunto" class="form-control">
                    </div>
                    </div>

                    <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url(); ?>css/images/maquina-de-escribir.png"  alt="" class="fa fa-user bigicon"></span>
                    <div class="col-md-8">
                    <textarea class="form-control" id="txtmensajes" name="txtmensajes" placeholder="Ingrese su difucultad detalladamente. Nos pondremos en contacto con usted." rows="7"></textarea>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar  <img src="<?php echo base_url(); ?>css/images/enviar.png"  alt="" class="fa fa-user bigicon" data-dismiss="modal"></button>
                    </div>
                    </div>
                    </fieldset>
                    </form>
                    
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
               
                <br>
                
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
                
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>         
                </div>
            </div>
        </div>
    </div>
    
<script>

    $(function() {
   $("#formcontacto").validate({
      	rules: {
					txtnombres:{
						required: true,
                        maxlength: 100
					},txtasunto:{
						required: true,
                        maxlength: 100
					},
					txtemail: {
                        required: true,
                        email: true,
                        minlength: 10,
                        maxlength: 50
					},
					txttel: {
                        required: true,
                        number: true,
                        minlength: 7,
                        maxlength: 12
					},txtmensajes: {
                        required: true,
                        minlength: 15,
                        maxlength: 250
					},
				},
				messages: {
					txtnombres: {
						required: "Por favor ingresa sus nombres y apellidos",
                        maxlength: "Excedio los 100 caracteres"
					},	txtasunto: {
						required: "Por favor ingresa el asunto",
                        maxlength: "Excedio los 100 caracteres"
					},
						txtemail: {
						required: "Por favor ingresa el correo al que desean contactarte",
						minlength: "debe tener un minimo de 10 caracteres",
                        maxlength: "Excedio los 50 caracteres"
					},
                    txttel: {
                        required: "Por favor ingresa el telefono",
						number: "Opps!, debe ingresar solo numeros",
                        minlength: "el numero de telefono debe tener minimo 7 caracteres",
                        maxlength: "Excedio los 12 caracteres"
					},
						txtmensajes: {
						required: "Por favor ingresa la dificultad detalladamente",
						minlength: "la descripcion debe tener minimo de 15 caracteres",
                        maxlength: "Excedio los 250 caracteres para la descripcion"
					}
				},
        submitHandler: function(form,event) {     
                event.preventDefault();
                $.ajax({
			url:$("#formcontacto").attr("action"),
			type:$("#formcontacto").attr("method"),
			data:$("#formcontacto").serialize(),
            success : function(data) {
                
                if(data){
                 swal("Listo!","se envio sin problemas","success");
                 $("#container-div-contacto").fadeOut("slow");
                 $("#txtasunto").val("");
                 $("#txtmensajes").val("");
                }else{
                   swal("Opps!","Intente de nuevo","error"); 
                }
                
            }
		});
         
    }
   }); 
    
});

    
</script>