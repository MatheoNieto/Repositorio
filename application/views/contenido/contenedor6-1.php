  <br>
              <?php
       foreach ($comentarios as $comentar){
    echo '<div class="media">
    <div class="media-left">
        <a href="#">
        <img class="media-object" src="'.base_url().'css/images/perfil/'.$comentar->imgperfil.'" alt="..." width="50px" heigth="50px">
        </a>
    </div>
    <div class="media-body">
    <h4 class="media-heading">'.$comentar->nombre1.' '.$comentar->nombre2.'</h4>
    <textarea placeholder="Escriba su comentario"  rows="5" cols="35"  style="resize: none; cursor:default;" readonly>'.$comentar->comentario.'</textarea>
    <span class="datetime">Fecha comentado: '.$comentar->fechacomentario.' </span>
    <br>
    </div>
</div>';
       }
       ?>
  
 