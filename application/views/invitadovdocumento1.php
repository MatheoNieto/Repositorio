<br><br>
 <div id="viewdocument" class="col-md-9">
     
      <button onclick="$('#contentdocumento').hide();" type="button" class="btn btn-danger">&times;</button>
      <center><h2>Documento del proyecto</h2></center>
      <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo base_url(); ?>css/adjuntos/<?php foreach($documento as $docuemts){ echo $docuemts->adjunto; }?>"></iframe>
</div>    
   
    </div>
    <div id="contendorcomentarios" class="col-md-3">
     <form id="formcomentarios" class="form-horizontal" method="post" action="<?php base_url();?>verporyectosinvi/hacercomentario" autocomplete="off" >
         <div class="form-group">
             <div class="col-md-12">
             <br>
             <label for="">Invitado:</label>
             <input type="text" name="txtidadjunto" id="txtcodigoadjunto" value="<?php foreach($documento as $docuemts){ echo $docuemts->id;}?>" style="display:none">
             <textarea name="txtcomentario" maxlength="150" placeholder="Ingresa su comentario" class="form-control" rows="5" style="resize: none;" required></textarea>
             </div>
         </div>
         
         <div class="form-group">
             <div class="col-md-12">
                <button type="submit" class="btn btn-danger form-control">Comentar</button>
             </div>
         </div>
     </form>
     <script>
           $(document).ready(function(){
   $("#formcomentarios").submit(function(event){
            event.preventDefault();
                $.ajax({
                url:$("#formcomentarios").attr("action"),
                type:$("#formcomentarios").attr("method"),
                data:$("#formcomentarios").serialize(),
                complete :function(){                 
                 
                         $("#formcomentarios")[0].reset();
                    vercomentarios();
			}
		});
                 
            });
});
        
        
        
        
        </script>
     <div id="subcontentcomentarios" class="col-md-12">
        