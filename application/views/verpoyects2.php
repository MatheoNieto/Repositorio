  </div>
        
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
            url:"<?php echo base_url(); ?>verproyectos/consultaradjunto",
            type:"POST",
            data:parametros,
            success :function(data){
             $("#modalbody").empty();
             $("#modalbody").html(data);
            }
        });
            
            
            
        }
      
        
        </script>
  
  
  
  
  
   
    </body>
</html>