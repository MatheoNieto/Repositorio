 <!-- The container for the uploaded files -->
             
                
                <!--========================================--->
                <?php foreach ($adjuntos as $adj){
         
                echo '<div class="col-sm-6 col-md-4  media contenedordeladjunto" >
                <div class="media-left media-middle">
                <a href="#">
                <img class="media-object" src="'.base_url().'css/images/adjuntar.png" alt="...">
                </a>
                </div>
                <div class="media-body">
                <h4 class="media-heading">' .$adj->adjunto.'</h4>
                <form id="formcargardocumento" action="'.base_url().'principal/cargardocumento" method="POST">
                <input type="text" value="'.$adj->id.'" name="txtidadjunto" style="display:none;" required>
                <button class="verarchivo" class="btn btn-sm btn-default" type="submit">
                Ver documento <span class="glyphicon glyphicon-eye-open"></span>
                </button></form> 
                <span class="datetime">Fecha de subida:' .$adj->fecha_adjunto.' </span> 
                </div>
                </div>';

                }?>             

       
                
    