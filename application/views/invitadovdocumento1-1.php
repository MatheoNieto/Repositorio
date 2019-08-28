<br>
      <?php 

foreach($comentarios as $comtar){    
    
    echo '<div class="col-md-12">
         <label>Alguien comento:</label>    
         <textarea maxlength="150" placeholder="Ingresa su comentario" class="form-control" rows="5" style="resize: none;" readonly>'.$comtar->comentario.'</textarea>
         </div>         
         <br>';
    
    
}



?>
         
        
         
    