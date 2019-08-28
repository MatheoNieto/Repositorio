<br>
        <?php  

            foreach ($Adjunto as $adj){$idadjunto=  $adj->id_documento;};
            foreach ($Comentarios as $comen){ 
                echo '<div class="media">
                    <div id="cmt" class="media-left" style="opacity: 0;">
                        <a href="#">
                            <img class="media-object" src="'.base_url().'/css/images/perfil/'.$comen->imgperfil.'" alt="..." width:"5%" heigth:"5%">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">'.$comen->nombre1.' '.$comen->apellidos.'</h4>
                        <textarea placeholder="Escriba su comentario" rows="5" cols="35" style="resize: none; cursor:default;" readonly="">'.$comen->comentario.'</textarea>
                        <span class="datetime">Fecha comentado: '.$comen->fechacomentario.' </span>
                        <input type="text" value="'.$idadjunto.'" name="iddocumentoadj" id="iddocumentoadj" style="display:none;" required>
                        <br>
                    </div>
                </div>   
                <br>';
            }
        ?>  
    <br>
    </div>
    
