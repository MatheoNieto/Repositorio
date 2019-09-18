    <div id="contenedor-div-editar-documento">
    <br><br><br>
    <div class="container">
    <div class="row">
    <div class="col-md-12" >
    <div class="well well-sm" id="contendorform">
    <form class="form-horizontal" method="POST" id="editar_anteproyecto"  action="<?php base_url();?>principal/modificardatosanteproyecto" autocomplete="off">
    <fieldset>
    <legend class="text-center header">Editando anteproyecto 
    <img src="<?php echo base_url(); ?>css/images/ordenador.png"  alt="" class="fa fa-user bigicon">  
    <button type="reset" class="close" aria-label="Close" id="cerrareditar">
    <span aria-hidden="true">&times;</span>
    </button>    
    </legend>

    <div class="form-group">
   <label class="col-sm-3 control-label" for="txttitulom">Titulo</label>
   
    <div class="col-md-8">
    <input id="txttitulom" name="txttitulom" type="text" placeholder="Ingrese el titulo del anteproyecto" class="form-control" value="<?php foreach ($documentos as $documents){
    echo $documents->titulo;} ?>">
    </div>
    </div>

    <div class="form-group">
   <label class="col-sm-3 control-label" for="txtdescripcionanteprom">Descricion del anteproyecto</label>
    <div class="col-md-8">
    <textarea class="form-control" id="txtdescripcionanteprom" name="txtdescripcionanteprom" placeholder="Ingrese la descripcion del anteproyecto" rows="7" ><?php foreach ($documentos as $documents){
    echo $documents->descripcion ;} ?></textarea>
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
    
<!-- <script src="<?php echo base_url(); ?>scripts/script2.js " ></script>  -->
 <!-- <script src="<?php echo base_url(); ?>scripts/script.js " ></script>  -->
 