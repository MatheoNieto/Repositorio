
            <br>
              <?php
       foreach ($comentarios2 as $comentar2){
    echo '<div class="media">
    <div class="media-left">
        <a href="#">
        <img class="media-object" src="'.base_url().'css/images/perfil/'.$comentar2->imgperfil.'" alt="..." width:"20px" heigth:"20px">
        </a>
    </div>
    <div class="media-body">
    <h4 class="media-heading">'.$comentar2->nombre1.' '.$comentar2->nombre2.'</h4>
    <textarea placeholder="Escriba su comentario"  rows="5" cols="35"  style="resize: none; cursor:default;" readonly>'.$comentar2->comentario.'</textarea>
    <span class="datetime">Fecha comentado: '.$comentar2->fechacomentario.' </span>
    <br>
    </div>
</div>';
       }
       ?>
     
 