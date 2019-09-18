    <!-----------------------------anexos------------>
    <div id="container-div-agragranexos">
    <br><br><br>
    <div class="container">
    <div class="row">
    <div class="col-md-12" >
    <div class="well well-sm" id="contendorform">
    <form id="formagragaranexos" class="form-horizontal" method="POST" action="<?php echo base_url(); ?>principal/subiranexo">
    <fieldset>
    <legend class="text-center header">Agregando Anexo 
    <img src="<?php echo base_url(); ?>css/images/archivo.png"  alt="" class="fa fa-user bigicon">
    <button type="reset" class="close" aria-label="Close" id="cerraranexos">
    <span aria-hidden="true">&times;</span>
    </button>   
    </legend>
       
        <div class="col-sm-3"></div>         
        <div class="col-sm-6"><span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Agrega el anexo...</span>
        <input type="file" name="anexo" id="anexo"  required accept="*" onchange="adjuntoA()">
    </span></div>
        
        <div class="col-sm-6 col-md-4  media contenedordeladjunto" id="contenedoranexo" style="margin-left:25%;">
                <div class="media-left media-middle">
                <a href="#">
                <img class="media-object" src="<?php echo base_url(); ?>css/images/adjuntar.png" alt="...">
                </a>
                </div>
                <div class="media-body">
               <h4 class="media-heading" id="titulodocumentoa">titulo</h4>
               </div>
        </div>
     
      <br><br><br>
     
    <input type="text" value="<?php foreach ($documentos as $documents){
    echo $documents->id;} ?>" name="iddocumentoanexo" style="display:none;" required>
    <div class="form-group">
    <div class="col-md-8">
    <textarea  class="form-control" id="txtdescripcionanexos" name="txtdescripcionanexos" placeholder="Ingrese la descripcion del anexo" rows="7" style="margin-left:30%;resize: none;" maxlength="150" required></textarea>
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

   <script>function adjuntoA(){

     $("#contenedoranexo").fadeIn("slow");
   var nombre = document.getElementById('anexo').files[0].name;
     
    $("#titulodocumentoa").text(nombre);
    
}</script>
    
<!-- <script src="<?php echo base_url(); ?>scripts/script7.js " ></script>  -->