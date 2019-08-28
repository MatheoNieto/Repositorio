
                <div  id="contenedor-adjuntosdocument2" class="animated fadeInRight">
                <div class="row"> <a  id="btn-atrasfinal" style="margin-left:20px;"><img src="<?php echo base_url(); ?>css/images/flecha-atras.png"  alt="" class="fa fa-user bigicon"></a></div>
                  <br>
                <form id="formadjuntos2" action="<?php echo base_url(); ?>principal/subiradjutno2" method="POST" enctype="multipart/form-data">
                <div class="col-sm-6" id="btnsubiradjunto2">
                    <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Agrega un adjunto...</span>
                    <input type="file" name="archivo2" id="archivo2"  onchange="adjunto2()"  required accept="application/pdf">
                    </span>
                    </div>
    <br>
    <br>
       <script src="<?php echo base_url(); ?>scripts/script2/script3.js" ></script>
     <div class="col-sm-6 col-md-4  media contenedordeladjunto" id="contenedoradjuntos2" >
                <div class="media-left media-middle">
                <a href="#">
                <img class="media-object" src="<?php echo base_url(); ?>css/images/adjuntar.png" alt="...">
                </a>
                </div>
                <div class="media-body">
                <input type="text" value="<?php foreach ($documentos2 as $documents2){
                echo $documents2->id;}?>" name="iddocumento2" style="display:none;">
               <h4 class="media-heading" id="titulodocumento2">titulo</h4>
                <button type="submit" class="btn btn-sm btn-info">
                Subir Adjunto <img  src="<?php echo base_url(); ?>css/images/subir.png" alt="...">
                </button> 
                <button type="reset"class="btn btn-sm btn-danger" id="noadjuntar2" style="font-size:10px;">
                Cancelar
                </button>  
                </div>
</div>
 </form>
  
             
              
