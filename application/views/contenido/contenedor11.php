
    <div id="conatiner-div-opciones" class="container">
    <br><br><br>
    <div class="container" id="contenemenuopciones">
    <legend class="text-center header">Configuraciones 
    <img src="<?php echo base_url(); ?>css/images/ajustes.png"  alt="" class="fa fa-user bigicon">
    <button type="reset" class="close" aria-label="Close" id="cerrarconfi">
    <span aria-hidden="true">&times;</span>
    </button>   
    </legend>
    <div class="master_detail">
    <div class="row">
    <div class="col-md-2 col-sm-12 col-xs-12">
    <div class="master_list">
    <div class="list-group">
    <button type="button" class="list-group-item" data-option="option1">Tema</button>
    <button type="button" class="list-group-item" data-option="option2">Enviar sugerencias</button>
    <button type="button" class="list-group-item" data-option="option3">Ayuda</button>
    </div>
    </div>
    </div>
    <div class="col-md-10 col-sm-12 col-xs-12">
    <div class="detail_list">
    <article class="option1">
    <div class="text-">
    <form action="<?php base_url();?>principal/modificarfondo" method="POST" id="formfondo" class="form-horizontal">
    <input type="text" name="nombreimgfondo" id="textimg" style="display:none;" readonly>
    <div class="toggle-button toggle-button--aava">
    <input id="toggleButton" type="checkbox" name="toggleButton" value="1" <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'checked';}} ?>>
    <label for="toggleButton" data-on-text="Dark" data-off-text="Light"></label>
    <div class="toggle-button__icon"></div>
    </div>
    <button class="btn btn-primary" type="submit" id="btncambiartema">Cambiar <img src="<?php echo base_url(); ?>css/images/imagen.png"  alt="" class="fa fa-user bigicon">
    </button>    
    
    </form>


    </div>


    <div class="row">
    <div class="col-xs-6 col-md-3" id="img1">
    <a href="#" class="thumbnail btnimage">
    <img class="rounded mx-auto d-block" src="<?php echo base_url(); ?>css/images/fondos/1.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>

    <div class="col-xs-6 col-md-3" id="img2">
    <a href="#" class="thumbnail btnimage">
    <img class="img-responsive" src="<?php echo base_url(); ?>css/images/fondos/2.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>


    <div class="col-xs-6 col-md-3" id="img3">
    <a href="#" class="thumbnail btnimage">
    <img class="img-responsive" src="<?php echo base_url(); ?>css/images/fondos/3.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>

    <div class="col-xs-6 col-md-3" id="img4">
    <a href="#" class="thumbnail btnimage">
    <img class="img-responsive" src="<?php echo base_url(); ?>css/images/fondos/4.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>

    </div>

    <div class="row">
    <div class="col-xs-6 col-md-3" id="img5">
    <a href="#" class="thumbnail btnimage">
    <img class="rounded mx-auto d-block" src="<?php echo base_url(); ?>css/images/fondos/5.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>

    <div class="col-xs-6 col-md-3" id="img6">
    <a href="#" class="thumbnail btnimage">
    <img class="img-responsive" src="<?php echo base_url(); ?>css/images/fondos/6.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>


    <div class="col-xs-6 col-md-3" id="img7">
    <a href="#" class="thumbnail btnimage">
    <img class="img-responsive" src="<?php echo base_url(); ?>css/images/fondos/7.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>

    <div class="col-xs-6 col-md-3" id="img8">
    <a href="#" class="thumbnail btnimage">
    <img class="img-responsive" src="<?php echo base_url(); ?>css/images/fondos/8.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>

    </div>

    <div class="row" >
    <div class="col-xs-6 col-md-3" id="img9">
    <a href="#" class="thumbnail btnimage">
    <img class="rounded mx-auto d-block" src="<?php echo base_url(); ?>css/images/fondos/9.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>

    <div class="col-xs-6 col-md-3" id="img10">
    <a href="#" class="thumbnail btnimage">
    <img class="img-responsive" src="<?php echo base_url(); ?>css/images/fondos/10.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>


    <div class="col-xs-6 col-md-3" id="img11">
    <a href="#" class="thumbnail btnimage">
    <img class="img-responsive" src="<?php echo base_url(); ?>css/images/fondos/11.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>

    <div class="col-xs-6 col-md-3" id="img12">
    <a href="#" class="thumbnail btnimage">
    <img class="img-responsive" src="<?php echo base_url(); ?>css/images/fondos/12.jpg"  alt="No se econtro la imagen " width="100%" height="100%">
    </a>
    </div>

    </div>





    </article>
    <article class="option2">
    <h3>Enviar comentario</h3>
    <div class="row">
    <div class="col-md-12">
    <form id="fomrsugerencia" class="form-horizontal" method="POST" action="<?php echo base_url(); ?>principal/enviarsugerencias">
    <fieldset>
    <div class="form-group">
    <span class="col-md-1 col-md-offset-2 text-center"><img src="<?php echo base_url(); ?>css/images/maquina-de-escribir.png"  alt="" class="fa fa-user bigicon"></span>
    <div class="col-md-8">
    <textarea class="form-control" id="txtsugerie" name="txtsugerie" placeholder="Ingrese su masaje aquí. Gracias!!" rows="7" required style="width: 605px; height: 160px;"></textarea>
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


    </article>
    <article class="option3">
    <h3>Ayuda</h3>
    <div class="jumbotron">
  <p>Cuando tengas un problema escribele una solicitud al administrador de la pagina, este te ayudara a solucionarlor, se puede contactar en el menu principal en el boton contacto o en el boton que se encuentra aqui abajo </p>
 <center><br>
 
 <button class="btn btn-info" onclick="$('#container-div-contacto').fadeIn();$('#conatiner-div-opciones').hide();">Contactar</button>
 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal6">Tutoriales</button>
  <button type="button" class="btn btn-info" onclick="url = 'http://biblioteca.ucp.edu.co/herramientasbibliograficas/#content'; window.open(url, '_blank');">Herramientas Bibliograficas</button>
 
 </center>
</div>

    </article>

    </div>
    </div>
    </div>
    </div>
    </div>

    </div>


