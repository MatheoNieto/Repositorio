<div id ="ContenedorMasivo">
    
<!---------------------------------------------------------------------------------------------------------------------------->    
<!-----------------------------------Anteproyectos por Titulo----------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
    
    <div id="anteproyectotitulo" class="col-sm-4" style="margin-left:10px;">
        <h3>Titulos de anteproyectos</h3>
        <ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true">
            <?php  
            if (isset($documentostaT)){
                foreach ($documentostaT as $doct){ 
                    if ($doct->Estado != "Sin iniciar"){
                            
                        echo '<li data-role="collapsible" data-iconpos="right" data-inset="false">
                                <h2>'.$doct->titulo.'</h2>
                                <ul data-role="listview" data-theme="b">
                                    <li><a>Autores: '.$doct->autor1.', '.$doct->autor2.'</a></li>
                                    <li><a>Descripcion: '.$doct->descripcion.'</a></li>
                                    <li><a>Fecha: '.$doct->fecha_creacion.'</a></li>
                                    <li>
                                    <div>';

                                    foreach ($AdjuntoT as $adj){
                                        if ($doct->id == $adj->id_documento){
                                            echo '<button onclick="cargardocumentoA('.$doct->id.');" class="btn btn-sm btn-default" style="color:black; width:100%">
                                            Ver avance del anteproyecto ('.$doct->Estado.')  <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>';
                                            break;
                                        }
                                    }

                                    echo '</div>
                                    </li>
                                </ul>
                            </li>';
                    }
                }
            }
            ?>
        </ul>
        <br>
        <br>
    </div>
    
<!---------------------------------------------------------------------------------------------------------------------------->
<!-----------------------------------Anteproyectos por Autor ----------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->    
    
    <div id="anteproyectoautor" class="col-sm-4" style="margin-left:10px;">
        <h3>Autores de anteproyectos</h3>
        <ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true">

            <?php  
                if (isset($documentostaA)){
                foreach ($documentostaA as $doct){ 
                    if ($doct->Estado != "Sin iniciar"){
                        
                        echo '<li data-role="collapsible" data-iconpos="right" data-inset="false">
                                <h2>'.$doct->autor1.'</h2>
                                <ul data-role="listview" data-theme="b">
                                    <li><a>Titulo: '.$doct->titulo.'</a></li>
                                    <li><a>Segundo Autor: '.$doct->autor2.'</a></li>
                                    <li><a>Descripcion: '.$doct->descripcion.'</a></li>
                                    <li><a>Fecha: '.$doct->fecha_creacion.'</a></li>
                                    <li>
                                    <div>';
                        
                                        foreach ($AdjuntoT as $adj){
                                            if ($doct->id == $adj->id_documento){
                                                echo '<button onclick="cargardocumentoA('.$doct->id.');" class="btn btn-sm btn-default" style="color:black; width:100%">
                                                Ver avance del anteproyecto ('.$doct->Estado.')  <span class="glyphicon glyphicon-eye-open"></span>
                                                </button>';
                                                break;
                                            }
                                        }

                                        echo '</div>
                                    </li>
                                </ul>
                            </li>';
                    }
                }
            }
            ?>  

        </ul>
        <br>
        <br>
    </div>
    
<!---------------------------------------------------------------------------------------------------------------------------->
<!-----------------------------------Anteproyectos por Estado ---------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
   
<div class="col-sm-3" style="margin-left:20px;">
    <h3>Estados de anteproyectos</h3>
    
<!--------------------------------------------------Proceso ------------------------------------------------------------------>
    
    <ul data-role="listview" data-count-theme="b" data-inset="true">
        <li>
            <a onclick="cargarAnteproyectoPS()" href="#">En proceso 
                <span class="ui-li-count">

                <?php 
                    $i=0;
                    if (isset($documentosA)){
                    foreach ($documentosA as $doct){ 
                    if ($doct->Estado == "Proceso"){
                        $i++;                 
                    }
                    }
                    }
                    echo $i
                ?>   

                </span>
            </a>
        </li>
        
<!--------------------------------------------------Terminado ---------------------------------------------------------------->
        
        <li>
            <a onclick="cargarAnteproyectoTS()"  href="#">Terminados 
                <span class="ui-li-count">

                <?php 
                    $i=0;
                    if (isset($documentosA)){
                    foreach ($documentosA as $doct){ 
                    if ($doct->Estado == "Terminado"){
                        $i++;                 
                    }
                    }
                    }
                    echo $i
                ?>

                </span>
            </a>
        </li>
        
<!-----------------------------------------------------Todos ----------------------------------------------------------------->
        
        <li>
            <a onclick="cargarAnteproyectoS()"  href="#">Todos 
                <span class="ui-li-count">

                <?php 
                    $i=0;
                    if (isset($documentosA)){
                    foreach ($documentosA as $doct){ 
                        $i++;    
                    }
                    }
                    echo $i
                ?>

                </span>
            </a>
        </li>
    </ul>
    <br>
    <br>
</div>

<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

</div>
<script>
    

    function cargardocumentoA(id){
        
        var parametros = {"id" : id};
                
        $.ajax({
            url:"<?php echo base_url(); ?>profesor/cargardocumentoAid",
            type:"POST",
            data:parametros,
            success :function(data){    
                
                $("#anteproyecto").hide();
                $("#informe").hide();
                $("#contentslider").hide();
                $("#btninicio").hide();
                $("#btnflecha").hide();
                $("#datosuser").hide();
                $("#btnatras").show();
                $("#btndocsant").show();
                $("#btnanexos").show();
                $("#contendorAvances").show();
                $("#contendorAvances").html(data);
                revisardocumentoA(id);
            }
        });
        
    }
    
    function revisardocumentoA(id){
        
        var parametros = {"id" : id};
                
        $.ajax({
            url:"<?php echo base_url(); ?>profesor/revisardocumentoAid",
            type:"POST",
            data:parametros,
            success :function(data){    
                                
            }
        });
        
    }
     
</script>
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

</div>