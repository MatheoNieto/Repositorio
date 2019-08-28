<h3>Nota: <small>si la ventana esta vacia es porque el autor todavia no ha subido el documento</small></h3>
<?php 
    foreach ($documento as $docum){
   if (isset($docum->adjunto)){
 echo '<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="'.base_url().'css/adjuntos/'.$docum->adjunto.'"></iframe>
</div>';
   }else{
    echo '<h3>El autor no ha subido el documento</h3>'; 
} 
   }
 ?>
 
 
