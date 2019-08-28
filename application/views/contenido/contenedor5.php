 <script src="<?php echo base_url(); ?>scripts/script4.js " ></script> 
<div  id="contenedor-adjuntosdocument" class="animated fadeInRight">
                <div class="row"> <a  id="btn-atras" style="margin-left:20px;"><img src="<?php echo base_url(); ?>css/images/flecha-atras.png"  alt="" class="fa fa-user bigicon"></a> </div>
                <br>
                <form id="formadjuntos" action="<?php echo base_url(); ?>principal/subiradjutno" method="POST" enctype="multipart/form-data">
                <div class="col-sm-6" id="btnsubiradjunto">
                    <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Agrega un adjunto...</span>
                    <input type="file" name="archivo" id="archivo"  onchange="adjunto()"  required accept="application/pdf">
                    </span>
                    </div><br>
    <br>
     <div class="col-sm-6 col-md-4  media contenedordeladjunto" id="contenedoradjuntos" >
                <div class="media-left media-middle">
                <a href="#">
                <img class="media-object" src="<?php echo base_url(); ?>css/images/adjuntar.png" alt="...">
                </a>
                </div>
                <div class="media-body">
                <input type="text" id="iddocumento" name="iddocumento" value="<?php foreach ($documentos as $documents){
                echo $documents->id;} ?>"   style="display:none;">
               <h4 class="media-heading" id="titulodocumento">titulo</h4>
                <button type="submit" class="btn btn-sm btn-info">
                Subir Adjunto <img  src="<?php echo base_url(); ?>css/images/subir.png" alt="...">
                </button> 
                <button type="reset"class="btn btn-sm btn-danger" id="noadjuntar" style="font-size:10px;">
                Cancelar
                </button>  
                </div>
</div>
 </form>
  
  
   

                