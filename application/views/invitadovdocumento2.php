
 </div>
     
    
    </div>
 
</div>                                                                         
                                                      
    <div id="contenedorloader">
  <h1 style="text-align: left; margin:5px;">Bienvenido! Por favor espere......</h1>   
   <div id="contenedor">
  <div class="loader" id="loader"></div>
</div>
 </div>
    
  
  
  <script>
      
        function verdocumento(id){           
            
                
        var parametros = {"id" : id};
                  
        $.ajax({
            url:"<?php echo base_url(); ?>verporyectosinvi/consultardocumento",
            type:"POST",
            data:parametros,
            success :function(data){
           
                $("#contentdocumento").show();
                $("#contentdocumento").empty();
                $("#contentdocumento").html(data);
                vercomentarios();
                
            }
        });
            
            
            
        }
      
      
      function vercomentarios(){
          
         var txtidadjunto = $("#txtcodigoadjunto").val();
          
            var parametros = {"id" : txtidadjunto};
                  
        $.ajax({
            url:"<?php echo base_url(); ?>verporyectosinvi/comentarios",
            type:"POST",
            data:parametros,
            success :function(data){
                
                $("#subcontentcomentarios").empty();
                $("#subcontentcomentarios").html(data);
                
            }
        });
            
          
          
      }
        
        </script>
  
  
  
  
  
   
    </body>
</html>