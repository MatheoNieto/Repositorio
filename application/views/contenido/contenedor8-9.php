    <!-----------------------------anexos-- --------->

    <div id="container-div-agragranexos2">
    <br><br><br>
    <div class="container">
    <div class="row">
    <div class="col-md-12" >
    <div class="well well-sm" id="contendorform2">
    <form id="formagragaranexos2" class="form-horizontal" method="POST" action="<?php echo base_url(); ?>principal/subiranexo2">
    <fieldset>
    <legend class="text-center header">Agregando Anexo  para el informe 
    <img src="<?php echo base_url(); ?>css/images/archivo.png"  alt="" class="fa fa-user bigicon">
    <button type="reset" class="close" aria-label="Close" id="cerraranexos2">
    <span aria-hidden="true">&times;</span>
    </button>   
    </legend>
       
        <div class="col-sm-3"></div>         
        <div class="col-sm-6"><span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Agrega el anexo...</span>
        <input type="file" name="anexo2" id="anexo2"  required accept="*" onchange="adjuntoAA()">
        
    </span></div>
    <br>      
       <div class="col-sm-6 col-md-4  media contenedordeladjunto" id="contenedoranexo2" style="margin-left:25%;" >
                <div class="media-left media-middle">
                <a href="#">
                <img class="media-object" src="<?php echo base_url(); ?>css/images/adjuntar.png" alt="...">
                </a>
                </div>
                <div class="media-body">
               <h4 class="media-heading" id="titulodocumentoa2">titulo</h4>
               </div>
</div>
     
      <br><br><br>
     
      <br>
      <div class="col-sm-3"></div>
    <input type="text" value="<?php foreach ($documentos2 as $documents2){
    echo $documents2->id;} ?>" name="iddocumentoanexo2" style="display:none;" required>
    <div class="form-group">
    <div class="col-md-8">
    <textarea  class="form-control" id="txtdescripcionanexos2" name="txtdescripcionanexos2" placeholder="Ingrese la descripcion del anexo" rows="7" style=" resize: none;" maxlength="150" required></textarea>
    </div>
    </div>

    <div class="form-group">
    <div class="col-md-12 text-center">
    <button type="submit" class="btn btn-primary btn-lg">Agregar</button>
    </div>
    </div>
    </fieldset>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>

    
<script src="<?php echo base_url(); ?>scripts/script2/script4.js " ></script> 