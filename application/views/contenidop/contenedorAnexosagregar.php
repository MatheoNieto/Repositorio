</div>
                    </div>
                </div>    
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                </div>
            </div>
        </div>
    </div>
    
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------AGREGAR ANEXO------------------------------------------------------------>
<!---------------------------------------------------------------------------------------------------------------------------->

    <!-- Modal -->
    <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                    &times;
                    </button>
                    <center> 
                        <h2 class="modal-title">
                            Agregar un nuevo anexo
                            <img src="<?php echo base_url();?>css/images/archivo.png"  alt="" class="fa fa-user bigicon">  
                        </h2>
                    </center>
                </div>
                
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------AGREGAR ANEXO BODY------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

                <div class="modal-body">
                    
                    <?php if ($Estado == "ante"){?> 

                    <form id="formagragaranexos" class="form-horizontal" method="POST" action="<?php echo base_url(); ?>profesor/subiranexo">
                    
                    <?php }else{?> 
                    
                    <form id="formagragaranexos" class="form-horizontal" method="POST" action="<?php echo base_url(); ?>profesor/subiranexo2">
                    
                    <?php }?> 
                   
                        <span class="btn btn-success fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i>
                            <input type="file" name="anexo" id="anexo" required accept="*" onchange="seleccionaranexo()">Agrega un anexo...
                        </span>

                        <br><br>

                        <div class="col-sm-6 col-md-4  media contenedordeladjunto" id="contenedoranexo" style="margin-left:0%;">
                            <div class="media-left media-middle">
                                <a href="#">
                                <img class="media-object" src="<?php echo base_url(); ?>css/images/adjuntar.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" id="titulodocumentoa">Titulo del anexo</h4>
                            </div>
                        </div>
                        
                        <input type="text" value="<?php foreach ($Adjunto as $adj){echo $adj->id_documento;} ?>" name="iddocumentoanexo" id="iddocumentoanexo" style="display:none;" required>

                        <textarea  class="form-control" id="txtdescripcionanexos" name="txtdescripcionanexos" placeholder="Ingrese la descripcion del anexo" rows="7" style="resize: none;" maxlength="200" required></textarea>
                    
                    </form>
                     
                </div> 
                
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
                  
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">volver</button>
                <button onclick="adjuntoanexo()" type="submit" class="btn btn-success" data-dismiss="modal">Agregar Anexo</button>
                </div>
            </div>
        </div>
    </div>

<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->


<!---------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------SCRIPTS------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

<script>

    $(document).ready(function(){
        
        $("#contenedoranexo").fadeOut("slow");
        
    });
</script>

<script>

//---------------------------------------------------------------------------------------------------------------------------->
//--------------------------------------------------crear anexo nuevo--------------------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->


    function seleccionaranexo(){

        $("#contenedoranexo").fadeIn("slow");
        var nombre = document.getElementById('anexo').files[0].name;
        $("#titulodocumentoa").text(nombre);
    }
    
    function adjuntoanexo(){
        
        var id = $('#iddocumentoanexo').val();        
        var formData = new FormData($("#formagragaranexos")[0]);
        
        $.ajax({
            url:$("#formagragaranexos").attr("action"),
            type:$("#formagragaranexos").attr("method"),
            data:formData,
            cache:false,
            contentType:false,
            processData:false,    			
            success:function(data){
                swal("Listo!","Se subio el anexo sin problemas","success");
                cargarnuevosanexos(id);
            }
        });
        
    }

    function cargarnuevosanexos(id){
        
        if (tipo == "ante"){
        
            var parametros = {"id" : id, "tipo" : tipo};

            $.ajax({
                url:"<?php echo base_url(); ?>profesor/cargarnuevosanexos",
                type:"POST",
                data:parametros,
                success:function(data){
                        $("#anexosguardados").empty();
                        $("#anexosguardados").html(data);
                }
            });
            
        }if (tipo == "final"){
            
            var parametros = {"id" : id, "tipo" : tipo};

            $.ajax({
                url:"<?php echo base_url(); ?>profesor/cargarnuevosanexos2",
                type:"POST",
                data:parametros,
                success:function(data){
                        $("#anexosguardados").empty();
                        $("#anexosguardados").html(data);
                }
            });
            
        }
    }

</script>

</div>