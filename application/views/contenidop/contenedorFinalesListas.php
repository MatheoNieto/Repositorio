<div id ="ContenedorMasivoF">
    
<!---------------------------------------------------------------------------------------------------------------------------->    
<!----------------------------------------- Finales por Titulo --------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
    
    <div id="finaltitulo" class="col-sm-4" style="margin-left:10px;">
        <h3>Titulos de los informes finales</h3>
        <ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true">
            
            <?php
            if (isset($documentostfT)){
                foreach ($documentostfT as $doct){
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
                                            echo '<button onclick="cargardocumentoF('.$doct->id.');" class="btn btn-sm btn-default" style="color:black; width:100%">
                                            Ver avance del informe final ('.$doct->Estado.')  <span class="glyphicon glyphicon-eye-open"></span>
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
<!----------------------------------------- Finales por Autor ---------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

    <div id="finalautor" class="col-sm-4" style="margin-left:10px;">
        <h3>Autores de informe final</h3>
        <ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true">
            
            <?php  
            if (isset($documentostfA)){
                foreach ($documentostfA as $doct){ 
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
                                                echo '<button onclick="cargardocumentoF('.$doct->id.');" class="btn btn-sm btn-default" style="color:black; width:100%">
                                                Ver avance del informe final ('.$doct->Estado.')  <span class="glyphicon glyphicon-eye-open"></span>
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
        <br><br>
    </div>

<!----------------------------------------------------------------------------------------------------------------------------->    
<!----------------------------------------- Finales por Estado ---------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------->
    
    <div class="col-sm-3" style="margin-left:20px;">
        <h3>Estados de los informes</h3>
        
<!--------------------------------------------------Proceso ------------------------------------------------------------------>
        
        <ul data-role="listview" data-count-theme="b" data-inset="true">
            <li>
                <a onclick="cargarFinalFPS()" href="#">En proceso 
                    <span class="ui-li-count">
                    <?php 
                        $i=0;
                        if (isset($documentosF)){
                        foreach ($documentosF as $doct){ 
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
                <a onclick="cargarFinalFTS()" href="#">Terminados 
                    <span class="ui-li-count">
                        <?php 
                        $i=0;
                        if (isset($documentosF)){
                        foreach ($documentosF as $doct){ 
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
                <a onclick="cargarFinalesS()"  href="#">Todos 
                    <span class="ui-li-count">

                    <?php 
                        $i=0;
                        if (isset($documentosF)){
                        foreach ($documentosF as $doct){ 
                        if ($doct->Estado != "Sin iniciar"){
                            $i++;                 
                        }
                        }
                        }
                        echo $i
                    ?>

                    </span>
                </a>
            </li>
        </ul>
        <br><br>
    </div>
    
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
    
</div>
<script>
    

    function cargardocumentoF(id){
        
        var parametros = {"id" : id};
                
        $.ajax({
            url:"<?php echo base_url(); ?>profesor/cargardocumentoFid",
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
                revisardocumentoF(id);
                
            }
        });
    }
    
    function revisardocumentoF(id){
        
        var parametros = {"id" : id};
                
        $.ajax({
            url:"<?php echo base_url(); ?>profesor/revisardocumentoFid",
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