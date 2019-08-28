<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" type="image/x-icon" href= "<?php echo base_url(); ?>css/images/favicon.ico" />
    <title>Bienvenido &raquo; Repositorio</title>

    <!-- Bootstrap CSS CDN a94442-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap2.min.css"/>
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style5.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/formeter.css"/> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css"/>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />

    <!----------------------------------Scripts-----------------------> 
    <script src="<?php echo base_url(); ?>scripts/jquery-1.11.3.min.js" ></script>
    <script src="<?php echo base_url(); ?>scripts/jquery.validate.js " ></script>
    <script src="<?php echo base_url(); ?>scripts/formeter.js" ></script> 
    

    <script src="<?php echo base_url(); ?>scripts/upload.js " ></script>
    <script src="<?php echo base_url(); ?>scripts/sweetalert2.js " ></script>
    <script src="<?php echo base_url(); ?>scripts/jquery.quicksearch.js " ></script> 
  
<script>
        
   $(window).load(function(){
           $('#contenedorloader').hide();    
              
   });
    
    </script>
<!-----------------------------------Scripts----------------------->

</head>
<body onload="nobackbutton();">
    <div id="fondo">
        <img src="<?php echo base_url(); ?>css/images/fondos/<?php foreach ($usuarios as $user){ echo $user->imgfondo; } ?>" id="imgfondo"  alt="No se encontro la imagen de fondo" width="100%" height="100%">
    </div>
    
    <div id="contenedorloader">
  <p style="text-align: left; margin:5px;">Bienvenido! Por favor espere......</p>   
   <div id="contenedor">
  <div class="loader" id="loader"></div>
</div>
 </div>



    


