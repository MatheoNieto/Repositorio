


    <div id="container-div-contacto">
    <br><br><br>
    <div class="container">
    <div class="row">
    <div class="col-md-12" >
    <div class="well well-sm" id="contendorform">
    <form id="formcontacto" class="form-horizontal" action="<?php echo base_url(); ?>principal/enviarproblema" method="POST">
    <fieldset>
    <legend class="text-center header">Contacto 
    <img src="<?php echo base_url(); ?>css/images/cartelera.png"  alt="" class="fa fa-user bigicon">
    <button type="reset" class="close" aria-label="Close" id="cerrarcontac">
    <span aria-hidden="true">&times;</span>
    </button>   
    </legend>

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
    <button type="submit" class="btn btn-primary btn-lg">Enviar  <img src="<?php echo base_url(); ?>css/images/enviar.png"  alt="" class="fa fa-user bigicon"></button>
    </div>
    </div>
    </fieldset>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>



