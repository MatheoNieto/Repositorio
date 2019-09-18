    <div id="contenedor-div-editar-documento2">
    <br><br><br>
    <div class="container">
    <div class="row">
    <div class="col-md-12" >
    <div class="well well-sm" id="contendorform">
    <form class="form-horizontal" method="POST" id="editar_informe"  action="<?php base_url();?>principal/modificardatosinforme" autocomplete="off">
    <fieldset>
    <legend class="text-center header">Editando Infome Final 
    <img src="<?php echo base_url(); ?>css/images/ordenador.png"  alt="" class="fa fa-user bigicon">  
    <button type="reset" class="close" aria-label="Close" id="cerrareditar2">
    <span aria-hidden="true">&times;</span>
    </button>    
    </legend>

    <div class="form-group">
   <label class="col-sm-3 control-label" for="txttituloinformem">Titulo</label>
   
    <div class="col-md-8">
    <input id="txttituloinformem" name="txttituloinformem" type="text" placeholder="Ingrese el titulo del informe final" class="form-control" value="<?php 
                    foreach ($documentos2 as $documents2){
                        echo $documents2->titulo;}?>">
    </div>
    </div>

    <div class="form-group">
   <label class="col-sm-3 control-label" for="txtdescripcionanteproinformem">Descricion del anteproyecto</label>
    <div class="col-md-8">
    <textarea class="form-control" id="txtdescripcionanteproinformem" name="txtdescripcionanteproinformem" placeholder="Ingrese la descripcion del informe final" rows="7" ><?php 
                    foreach ($documentos2 as $documents2){
                        echo $documents2->descripcion;}?></textarea>
    </div>
    </div>

    <div class="form-group">
    <div class="col-md-12 text-center">
    <button type="submit" class="btn btn-primary btn-lg" id="btnmodificarap">Aceptar  <img src="<?php echo base_url(); ?>css/images/editar.png"  alt="" class="fa fa-user bigicon"></button>
    </div>
    </div>
    </fieldset>
    </form>
    </div>
    </div>
    </div>
    </div>  
    </div> 
    
 <!-- <script src="<?php echo base_url(); ?>scripts/script.js " ></script>  -->
 <!-- <script src="<?php echo base_url(); ?>scripts/script2/script2.js " ></script>  -->
 