<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href= "<?php echo base_url(); ?>css/images/favicon.ico" />
    <title>Bienvenido &raquo; Repositorio</title>  
        <!----------------css------------------------>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/styleverporyectos.css">
                 
       <!----------------scripts------------------>
        <script src="<?php echo base_url(); ?>scripts/jquery-1.11.3.min.js" ></script>
    <script src="<?php echo base_url(); ?>scripts/scriptverproyectos.js" ></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
<script>
        
   $(window).load(function(){
           $('#contenedorloader').hide();    
              
   });
    
    </script>
    </head>
    <body onload="nobackbutton();">
    <div id="fondo">
        <img src="<?php echo base_url(); ?>css/images/fondos/fondover.jpg" id="imgfondo"  alt="No se encontro la imagen de fondo" width="100%" height="125%">
    </div>
    <div id="contenedorproeyctor">
        <div class="container" >
    <div class="row">
    <br><br>
		<div class="well" id="contentsub">
       <div class="form-group">
        <div class="col-md-12">
        <input type="text" class="form-control" placeholder="Buscar por titulo de los proyectos" id="buscadortitulos">
        </div>
        </div>
        <br><br><br>
        <div class="list-group">
      <?php
            foreach($datosproyectos as $datosproyects){
                echo '<a class="list-group-item item">
                <div class="media col-md-2">
                    <figure class="pull-left">
                       <br><center><img class="media-object img-rounded img-responsive"  src="'.base_url().'css/images/trabajoproeycto.png" ></center>                        
                    </figure>
                </div>
                <div class="col-md-7">
                    <h2 class="list-group-item-heading titulos ">'.$datosproyects->titulo.'</h2>
                    <p class="list-group-item-text">'.$datosproyects->descripcion.'
                    </p>
                </div>
                <div class="col-md-3 text-center">
                   <br><br><br>
                    <button type="button" onclick="verdocumento('.$datosproyects->id.')" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#myModal">Ver documento</button>
                    
                </div>
          </a><br>';
            }
                        
            ?>           
          
          
        </div>
        </div>
	</div>
</div>
        
        
        
    </div>        
            
                
         <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Viendo el documento del proyecto</h4>
        </div>
        <div class="modal-body" id="modalbody">
        
       
      