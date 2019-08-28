</div>
</div>
    
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------SCRIPTS------------------------------------------------------------------>
<!----------------------------------------------------------------------------------------------------------------------------> 
    
    <script>

        $(document).ready(function () {
            $("#btncomentarios").click(function(){
                $("#menucomentarios").css({"width": "25%", "left": "75%","background-color": "#fffefd"});
                $("#formcomentarios").css({"opacity":"1"});
                $("#cmt").css({"opacity":"1"});
                $(".embed-container").css({"width": "70%"});
                $("#menucomentarios").css({"border-left":"1px solid"});
                $("#span").removeClass("glyphicon glyphicon-arrow-left");
                $("#span").addClass("glyphicon glyphicon-arrow-right");  
            });

            $("#btncomentarios").dblclick(function(){
                $("#menucomentarios").css({"width": "10%", "left": "97.5%","background-color": "transparent"});
                $("#formcomentarios").css({"opacity":"0"});
                $("#cmt").css({"opacity":"0"});
                $(".embed-container").css({"width": "95%"});
                $("#menucomentarios").css({"border-left":"0px solid"});
                $("#span").removeClass("glyphicon glyphicon-arrow-right");
                $("#span").addClass("glyphicon glyphicon-arrow-left");
            });
        });
        
//---------------------------------------------------------------------------------------------------------------------------->
//------------------------------------------------------AJAX------------------------------------------------------------------>
//----------------------------------------------------------------------------------------------------------------------------> 
        
        function enviarcomentario (tipo){
            
            if ($("#txtcomentario").val() != ""){
                
                var comentario = $("#txtcomentario").val();
                var idusuario = $("#txtidusuario").val();
                var idadjunto = $("#txtidadjunto").val();
                
                var parametros = {"idadjunto" : idadjunto, "idusuario" : idusuario, "comentario" : comentario, "tipo" : tipo};
                
//----------------------------------------------Anteproyecto------------------------------------------------------------------>

                
               if (tipo == "ante"){

                    $.ajax({
                        url:"<?php echo base_url(); ?>profesor/enviarcomentA",
                        type:"POST",
                        data:parametros,
                        success :function(data){  
                            
                            $("#contenedormenucomentarios").show();                
                            $("#contenedormenucomentarios").empty();
                            $("#contenedormenucomentarios").html(data);  
                            $("#menucomentarios").css({"width": "25%", "left": "75%","background-color": "#fffefd"});
                            $("#formcomentarios").css({"opacity":"1"});
                            $("#cmt").css({"opacity":"1"});
                            $(".embed-container").css({"width": "70%"});
                            $("#span").removeClass("glyphicon glyphicon-arrow-left");
                            $("#span").addClass("glyphicon glyphicon-arrow-right");  
                        }
                    });

                }
                
//----------------------------------------------------Final------------------------------------------------------------------->
                
                
                if (tipo == "final"){

                    $.ajax({
                        url:"<?php echo base_url(); ?>profesor/enviarcomentF",
                        type:"POST",
                        data:parametros,
                        success :function(data){  
                            
                            $("#contenedormenucomentarios").show();                
                            $("#contenedormenucomentarios").empty();
                            $("#contenedormenucomentarios").html(data);
                            $("#menucomentarios").css({"width": "25%", "left": "75%","background-color": "#fffefd"});
                            $("#formcomentarios").css({"opacity":"1"});
                            $("#cmt").css({"opacity":"1"});
                            $(".embed-container").css({"width": "70%"});
                            $("#span").removeClass("glyphicon glyphicon-arrow-left");
                            $("#span").addClass("glyphicon glyphicon-arrow-right"); 
                        }
                    });

                }                 
                
            }else{
                
                swal("Error","No se puede enviar un comentario vacio, por favor escriba su mensaje","success");
                
            }
        }    
        
        function comentarios(){
            
            var id = $('#iddocumentoadj').val(); 
            var parametros = {"id" : id, "tipo" : tipo};
            
            if (tipo == "ante"){
            
                $.ajax({
                    url:"<?php echo base_url(); ?>profesor/cargarComentariosAnte",
                    type:"POST",
                    data:parametros,
                    success :function(data){  

                        $("#contendorcomentarios").empty();
                        $("#contendorcomentarios").html(data); 
                    }
                });
                
            }if (tipo == "final"){
                
                var id = $('#iddocumentoadj').val(); 
                var parametros = {"id" : id, "tipo" : tipo};
                
                $.ajax({
                    url:"<?php echo base_url(); ?>profesor/cargarComentariosFinal",
                    type:"POST",
                    data:parametros,
                    success :function(data){  

                        $("#contendorcomentarios").empty();
                        $("#contendorcomentarios").html(data); 
                    }
                });
            }
            
        }
        
        window.onload = function {
            var intevalo = setInterval('comentarios()',1000);
        }        

</script>
