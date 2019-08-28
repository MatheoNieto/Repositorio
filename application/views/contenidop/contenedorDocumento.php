<div id="Documentovisible">
 
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
  
  <?php 
    
    echo '<script>
    
        var tipo = "'.$Estado.'";
    
    </script>';
    
        foreach ($Adjunto as $adj){

            echo '<script>window.onload=cargarComentario('.$adj->id.',tipo);</script>';

        }
        
    ?>
   
    <h3 style="margin-left: 3%;"><?php foreach ($Adjunto as $adj){echo $adj->adjunto;}?></h3>

<!---------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------DOCUMENTO------------------------------------------------------------------>
<!---------------------------------------------------------------------------------------------------------------------------->

    <?php 
        if ($Estado == "ante"){
    ?>
   
    <div class="embed-container">
        <iframe width="560" height="300" src="<?php echo base_url(); ?>css/adjuntos/<?php foreach ($Adjunto as $adj){echo $adj->adjunto;}?>" frameborder="0" allowfullscreen></iframe>
    </div>
    
    <?php 
        }elseif ($Estado == "final"){
    ?>
    
    <div class="embed-container">
        <iframe width="560" height="300" src="<?php echo base_url(); ?>css/adjuntos2/<?php foreach ($Adjunto as $adj){echo $adj->adjunto;}?>" frameborder="0" allowfullscreen></iframe>
    </div>
    
    <?php 
        }
    ?>
    
</div>
    
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
    
<script>

        function cargarComentario(id, tipo){
        
        var parametros = {"id" : id, "tipo" : tipo};
            
        if (tipo == "ante"){

            $.ajax({
                url:"<?php echo base_url(); ?>profesor/ComentariosAnte",
                type:"POST",
                data:parametros,
                success :function(data){  

                    $("#contenedormenucomentarios").show();                
                    $("#contenedormenucomentarios").empty();
                    $("#contenedormenucomentarios").html(data);

                }
            });
            
        }if (tipo == "final"){
            
            $.ajax({
                url:"<?php echo base_url(); ?>profesor/ComentariosFinal",
                type:"POST",
                data:parametros,
                success :function(data){  

                    $("#contenedormenucomentarios").show();                
                    $("#contenedormenucomentarios").empty();
                    $("#contenedormenucomentarios").html(data);

                }
            });
            
        }
    }

</script>

<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->