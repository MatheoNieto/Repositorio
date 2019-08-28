
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button><center> <h3 class="modal-title"><?php foreach($mensaje as $msj) echo $msj->asunto ?></h3></center>         
        </div>
        <div class="modal-body">
     <form id="formulariossolucios" action="<?php base_url();?>admin/enviarcorreo" method="post" >
     
    <div class="form-group">
      <label for="">Nombre de la persona:</label>
      <input type="text" value="<?php foreach($mensaje as $msj) echo $msj->id; ?>" id="txtid" name="txtid" style="display:none;">
      <input type="text" class="form-control" id="txtnombreyapellidos" name="txtnombreyapellidos" value="<?php foreach($mensaje as $msj) echo $msj->nombreyapellidos; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="">Telefono:</label>
      <input type="text" class="form-control" id="txttel" name="txttel" value="<?php foreach($mensaje as $msj) echo $msj->telefono; ?>" readonly>
    </div> 
     <div class="form-group">
      <label for="">Correo:</label>
      <input type="text" class="form-control" id="txtemail" name="txtemail" value="<?php foreach($mensaje as $msj) echo $msj->email; ?>" readonly>
    </div>
     <label for="">Descripci&oacute;n del inconveniente:</label>
          <br>
           <textarea style="resize: none;
    padding: 10px; width:500px; border:none; cursor:default;" placeholder="Escriba la soluci&oacute;n del inconveniente" id="txtinconveninte" name="txtinconveninte" readonly><?php foreach($mensaje as $msj) echo $msj->descripcion;  ?></textarea>
          
          <br><br>
             <label for="">Soluci&oacute;n del inconveniente</label>
             <br>
              <textarea rows="7" style="resize: none;
    padding: 10px; width:500px;" placeholder="Escriba la soluci&oacute;n del inconveniente" id="txtanswer" name="txtanswer"></textarea>
         <br>
          <button type="submit" class="btn btn-success">Responder</button> 
                 
  </form>            
        </div>
        <div class="modal-footer">
        <p>Gracias por tu apoyo</p>
        </div>
      </div>
    </div>
    
    <script>

$(document).ready(function(){
    $("#formulariossolucios").submit(function(e){
              e.preventDefault();
            $.ajax({
			url:$("#formulariossolucios").attr("action"),
			type:$("#formulariossolucios").attr("method"),
			data:$("#formulariossolucios").serialize(),
            beforeSend:function(){
                swal({
                    title:"Alert informativo",
                    text: "Por favor espere se esta enviando la solucion al correo del usuario",
                    type:"info",
                    showCancelButton: false,
                    showConfirmButton: false
                });
            },
			complete :function(data){
                swal("Listo","Respuesta enviada sin problemas","success");
                location.reload();
			}
		});
    });
});


</script>
  