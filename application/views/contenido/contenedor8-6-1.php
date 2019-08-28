      
                
                <!--=========================================--->
                <?php foreach ($adjuntos2 as $adj2){
         
                echo '<div class="col-sm-6 col-md-4  media contenedordeladjunto" id="contenedoradjuntos2" >
                <div class="media-left media-middle">
                <a href="#">
                <img class="media-object" src="'.base_url().'css/images/adjuntar.png" alt="...">
                </a>
                </div>
                <div class="media-body">
                <h4 class="media-heading">' .$adj2->adjunto.'</h4>
                <form id="formcargardocumento2" action="'.base_url().'principal/cargardocumento2" method="POST">
                <input type="text" value="'.$adj2->id.'" name="txtidadjunto2" style="display:none;" required>
                <button class="verarchivo" class="btn btn-sm btn-default" type="submit">
                Ver documento <span class="glyphicon glyphicon-eye-open"></span>
                </button></form> 
                <span class="datetime">Fecha de subida:' .$adj2->fecha_adjunto.' </span> 
                </div>
                </div>';

                }?>             

        
                
 






