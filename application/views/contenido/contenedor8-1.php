 <div id="contentanexo">
           
                 <?php foreach ($anexos as $anex){
         
                echo '<div class="col-sm-5 col-md-4  media contenedordelanexo" >
                <div class="media-left media-middle">
                <a href="#">
                <img class="media-object" src="'.base_url().'css/images/anexos.png" alt="...">
                </a>
                </div>
                <div class="media-body">
                <h4 class="media-heading">Descripcion del anexo</h4>
                '.$anex->descripcionanexo.'
                <br>
                <a title="Ver Anexo" target="_blank" href="'.base_url().'css/anexos/'.$anex->anexo.'"><img src="'. base_url().'css/images/ver.png"  alt="Agregar un anexo"></a>

                <span class="label label-default">'.$anex->fecha_anexo.'</span>
                </div>
                </div>';

                }?> 
               
                
                </div> 

            </div> 
   </div>

  
  

  
  
  
  
  
  
  
  
  
  
  
  

