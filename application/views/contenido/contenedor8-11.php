      <!DOCTYPE html>
      <html>
      
          <head>
              <meta charset="utf-8">
              <!----------------icono_pestaña------------------>
                 <link rel="shortcut icon" type="image/x-icon" href= "<?php echo base_url(); ?>css/images/favicon.ico" />
              <title>Bienvenido &raquo; Visor del documento</title>

            <!-- Bootstrap CSS CDN a94442-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap2.min.css"/>
            <!-- Our Custom CSS -->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/stylecon6.css">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css"/>
            <!-----------------------------------Scripts-----------------------> 
            <script src="<?php echo base_url(); ?>scripts/jquery-1.11.3.min.js" ></script>
            <script src="<?php echo base_url(); ?>scripts/sweetalert2.js " ></script>
            <!-- <script src="<?php echo base_url(); ?>scripts/script2/script6.js" ></script>  -->
            
          </head>
          <body onload="nobackbutton()">
            <div id="fondo">
        <img src="<?php echo base_url(); ?>css/images/fondos/<?php foreach ($usuarios as $user){ echo $user->imgfondo; } ?>" id="imgfondo2"  alt="No se encontro la imagen de fondo" width="100%" height="100%">
    </div>
      <div id="contenedor-viewdocument2" class="animated zoomInUp">
                <div class="row"> <a  id="btn-atras3" style="margin-left:20px; cursor:pointer;"><img src="<?php echo base_url(); ?>css/images/flecha-atras.png"  alt="" class="fa fa-user bigicon"></a></div>
<br>
 <div class="embed-container">
    <iframe width="560" height="315" src="<?php echo base_url(); ?>css/adjuntos2/<?php foreach ($mostraradjunto2 as $adjuntom2){ echo $adjuntom2->adjunto; } ?>" frameborder="0" allowfullscreen></iframe>
</div>
<div id="menucomentarios2">
    <button type="button" class="btn btn-info btn-sm" id="btncomentarios2">
          <span id="span2" class="glyphicon glyphicon-arrow-left"></span>
        </button>
        <form id="formcomentarios2" class="form-horizontal" method="POST" action="<?php base_url();?>hacercomentario2" autocomplete="off" >
                <fieldset>
                <legend class="text-center header">Comentarios 
                <img src="<?php echo base_url(); ?>css/images/multimedia.png"  alt="" class="fa fa-user bigicon">
                </legend>
                
<div class="media">
    <div class="media-left">
        <a href="#">
        <img class="media-object" src="<?php echo base_url(); ?>css/images/perfil/<?php foreach ($usuarios as $user){ echo $user->imgperfil; } ?>" alt="..." width="50px" height="50px">
        </a>
    </div>
    <input type="text" value="<?php foreach ($mostraradjunto2 as $madjunto2){ echo $madjunto2->id; } ?>" style="display:none;" name="txtidadjunto2" id="txtidadjunto2">
    <div class="media-body">
    
    <h4 class="media-heading"><?php foreach ($usuarios as $user){
    echo $user->nombre1; echo" "; echo $user->nombre2; } ?></h4>
    
    <textarea placeholder="Escriba su comentario"  rows="5" cols="35" maxlength="150" required style="resize: none;" name="txtcomentario2" id="txtcomentario2"></textarea>
    <br>
    <button type="submit"class="btn btn-sm btn-danger" style="font-size:10px;">Comentar</button> 
    </div>
</div>
         
          <br>
    <div id="contendorcomnetarios2">
          
          
 
      


   
   