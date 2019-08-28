<div id="avanceante">

<?php 
    echo '<script>
    
        var tipo = "'.$Estado.'";
    
    </script>' 
?>



<!---------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------CALIFICACIONES------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times; 
                </button>
                <center>   
                    <h2 class="modal-title">
                        Calificar el avance  
                        <img src="<?php echo base_url(); ?>css/images/lista.png"  alt="" class="fa fa-user bigicon">
                    </h2>
                </center>
            </div> 
            
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
            
            <form action="">
               
               <?php
                    
                    if ($Estado == "ante"){
                        
                        foreach ($Avance as $avan){
                            
                            echo '<script> var idavance = "'.$avan->iddocumento.'"; </script>';
                        
                            echo '

                            <div class="modal-body"> 

                            <div class="checkbox checkbox-success">';
                                                        
                            if ($avan->descripcionproblema == "1"){
                            
                                echo '
                                <input id="checkbox1" type="checkbox" class="required" disabled checked>
                                <label for="checkbox1">
                                Descripción del problema
                                </label>
                                </div>
                                ';
                                    
                            }else{
                                
                                echo '
                                <input id="checkbox1" type="checkbox" class="required">
                                <label for="checkbox1">
                                Descripción del problema
                                </label>
                                </div>
                                ';
                                
                            }
                                
                            echo'<div class="checkbox checkbox-success">';
                            
                            if ($avan->objetivos == "1"){
                            
                                echo '
                                <input id="checkbox2" type="checkbox"  class="required" disabled checked>
                                <label for="checkbox2">
                                Objetivos
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo '
                                <input id="checkbox2" type="checkbox"  class="required" >
                                <label for="checkbox2">
                                Objetivos
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->justificacion == "1"){
                            
                                echo '
                                <input class="required" id="checkbox3" type="checkbox" disabled checked>
                                <label for="checkbox3">
                                Justificación
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo '
                                <input class="required" id="checkbox3" type="checkbox" >
                                <label for="checkbox3">
                                Justificación
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->Antecedentes == "1"){
                                
                                echo'                            
                                <input class="required" id="checkbox4" type="checkbox" disabled checked>
                                <label for="checkbox4">
                                Antecendentes
                                </label>
                                </div>
                                ';
                                    
                            }else{
                                
                                echo'                            
                                <input class="required" id="checkbox4" type="checkbox" >
                                <label for="checkbox4">
                                Antecendentes
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->marcoc == "1"){
                                
                                echo'
                                <input class="required" id="checkbox5" type="checkbox" disabled checked>
                                <label for="checkbox5">
                                Marco Contextual
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo'
                                <input class="required" id="checkbox5" type="checkbox" >
                                <label for="checkbox5">
                                Marco Contextual
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->marcot == "1"){
                                
                                echo'
                                <input class="required" id="checkbox6" type="checkbox" disabled checked>
                                <label for="checkbox6">
                                Marco Teórico
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo'
                                <input class="required" id="checkbox6" type="checkbox" >
                                <label for="checkbox6">
                                Marco Teórico
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->alcance == "1"){
                                
                                echo'
                                <input class="required" id="checkbox7" type="checkbox" disabled checked>
                                <label for="checkbox7">
                                Alcance
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo'
                                <input class="required" id="checkbox7" type="checkbox" >
                                <label for="checkbox7">
                                Alcance
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->cronograma == "1"){
                                
                                echo'
                                <input class="required" id="checkbox8" type="checkbox" disabled checked>
                                <label for="checkbox8">
                                Cronograma
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo'
                                <input class="required" id="checkbox8" type="checkbox" >
                                <label for="checkbox8">
                                Cronograma
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->presupuesto == "1"){
                                
                                echo'
                                <input class="required" id="checkbox9" type="checkbox" disabled checked>
                                <label for="checkbox9">
                                Presupuesto
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo'
                                <input class="required" id="checkbox9" type="checkbox" >
                                <label for="checkbox9">
                                Presupuesto
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->bibliografia == "1"){
                                
                                echo'
                                <input class="required" id="checkbox10" type="checkbox" disabled checked>
                                <label for="checkbox10">
                                Bibliografía
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo'
                                <input class="required" id="checkbox10" type="checkbox">
                                <label for="checkbox10">
                                Bibliografía
                                </label>
                                </div>
                                ';
                                
                            }
                            
                            echo'
                            <div class="meter" id="barrap">
                                <div id="percentage"></div>
                            </div>
                            <br>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                                <button id="btnnotca" type="button" class="btn btn-danger" data-dismiss="modal">¡No tenia nada bien!</button> 
                                <button onclick="avancesdoc(idavance)" class="btn btn-success"  data-dismiss="modal">¡Calificar!</button>
                            </div>';
                            
                    }
                    
                    }if($Estado == "final"){
                        
                        foreach ($Avance as $avan){
                            
                            echo '<script> var idavance = "'.$avan->id_documento.'"; </script>';
                        
                            echo '

                            <div class="modal-body"> 

                            <div class="checkbox checkbox-success">';
                                                        
                            if ($avan->resumen == "1"){
                            
                                echo '
                                <input id="checkbox1" type="checkbox" class="required" disabled checked>
                                <label for="checkbox1">
                                Resumen
                                </label>
                                </div>
                                ';
                                    
                            }else{
                                
                                echo '
                                <input id="checkbox1" type="checkbox" class="required">
                                <label for="checkbox1">
                                Resumen
                                </label>
                                </div>
                                ';
                                
                            }
                             
                            echo'<div class="checkbox checkbox-success">';
                            
                            if ($avan->introduccion == "1"){
                            
                                echo '
                                <input id="checkbox2" type="checkbox"  class="required" disabled checked>
                                <label for="checkbox2">
                                Introducción
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo '
                                <input id="checkbox2" type="checkbox"  class="required" >
                                <label for="checkbox2">
                                Introducción
                                </label>
                                </div>
                                ';
                                
                            }
                            
                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->marco_teorico == "1"){
                            
                                echo '
                                <input class="required" id="checkbox3" type="checkbox" disabled checked>
                                <label for="checkbox3">
                                Marco teórico
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo '
                                <input class="required" id="checkbox3" type="checkbox" >
                                <label for="checkbox3">
                                Marco teórico
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->metodologia == "1"){
                                
                                echo'                            
                                <input class="required" id="checkbox4" type="checkbox" disabled checked>
                                <label for="checkbox4">
                                Metodología
                                </label>
                                </div>
                                ';
                                    
                            }else{
                                
                                echo'                            
                                <input class="required" id="checkbox4" type="checkbox" >
                                <label for="checkbox4">
                                Metodología
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->resultados == "1"){
                                
                                echo'
                                <input class="required" id="checkbox5" type="checkbox" disabled checked>
                                <label for="checkbox5">
                                Resultados
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo'
                                <input class="required" id="checkbox5" type="checkbox" >
                                <label for="checkbox5">
                                Resultados
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->concluciones == "1"){
                                
                                echo'
                                <input class="required" id="checkbox6" type="checkbox" disabled checked>
                                <label for="checkbox6">
                                Conclusiones
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo'
                                <input class="required" id="checkbox6" type="checkbox" >
                                <label for="checkbox6">
                                Conclusiones
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->anexos == "1"){
                                
                                echo'
                                <input class="required" id="checkbox7" type="checkbox" disabled checked>
                                <label for="checkbox7">
                                Anexos
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo'
                                <input class="required" id="checkbox7" type="checkbox" >
                                <label for="checkbox7">
                                Anexos
                                </label>
                                </div>
                                ';
                                
                            }

                            echo '<div class="checkbox checkbox-success">';
                            
                            if ($avan->bibliografia == "1"){
                                
                                echo'
                                <input class="required" id="checkbox8" type="checkbox" disabled checked>
                                <label for="checkbox8">
                                Bibliografía
                                </label>
                                </div>
                                ';
                                
                            }else{
                                
                                echo'
                                <input class="required" id="checkbox8" type="checkbox" >
                                <label for="checkbox8">
                                Bibliografía
                                </label>
                                </div>
                                ';
                                
                            }
                            
                            echo'
                            <div class="meter" id="barrap">
                                <div id="percentage"></div>
                            </div>
                            <br>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                                <button id="btnnotca" type="button" class="btn btn-danger" data-dismiss="modal">¡No tenia nada bien!</button> 
                                <button onclick="avancesdoc(idavance)" class="btn btn-success"  data-dismiss="modal">¡Calificar!</button>
                            </div>';
                        }
                    }
                    
                    ?>
                    
            </form>
            </div>
        </div>
    </div>
</div>
   
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
    
<div id="Anteriores"> 

<!---------------------------------------------------------------------------------------------------------------------------->
<!-----------------------------------------------VERSIONES ANTERIORES -------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

    <!-- Modal -->
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <center> 
                        <h2 class="modal-title">
                            Documentos Anteriores
                            <img src="<?php echo base_url(); ?>css/images/material-de-oficina.png"  alt="" class="fa fa-user bigicon">
                        </h2>
                    </center>
                </div>
                
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
                
                <div class="modal-body">
                    
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
                <br>
                
                <?php  
                    foreach ($AdjuntoC as $adjC){ 

                        echo '<div class="col-sm-6 col-md-5  media contenedordeladjunto"  >
                            <div class="media-left media-middle">
                                <a>
                                <img class="media-object" src="'.base_url().'/css/images/adjuntar.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    '.$adjC->adjunto.'
                                </h4>
                                <button onclick="cargardocumentoAdjunto('.$adjC->id_documento.','.$adjC->id.',tipo);" class="btn btn-sm btn-info"  data-dismiss="modal">
                                    Ver documento 
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </button>
                                <br>
                                <span class="datetime">Fecha de subida: '.$adjC->fecha_adjunto.'</span> 
                            </div>
                        </div>';
                    }
                ?>  
                    
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
                
                </div>   
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>         
                </div>
            </div>
        </div>
    </div>
    
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
    
</div>

<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
</div>
<!---------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------SCRIPTS------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->


<script>

    $(document).ready(function(){
        
        $(function(){
            $('#percentage').formProgress({
                speed : 500,
                style : 'green',
                bubble : true,
                minPercent : false,
                message : 'Requiere de todos los campos!',
                selector : '.required'
            });
        });
    });
</script>

<script>
    
    $(document).ready(function(){
    
        $("#btnlistca").click(function(){
            swal("Listo","Seguardo el avance del anteproyyecto","success");
            setTimeout ("location.reload();", 1000);    
        });

        $("#btnnotca").click(function(){
            location.reload();
        });
    
    });
    
//---------------------------------------------------------------------------------------------------------------------------->
//--------------------------------------------------Cargar adjunto correspondiente-------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    function cargardocumentoAdjunto(id,idadjunto,tipo){
        
        var parametros = {"id" : id , "idadjunto" : idadjunto, "tipo" : tipo};
    
        if (tipo == "ante"){
                
            $.ajax({
                url:"<?php echo base_url(); ?>profesor/cargardAdjuntoAid",
                type:"POST",
                data:parametros,
                success :function(data){

                    $("#menucomentarios").css({"width": "10%", "left": "97.5%","background-color": "transparent"});
                    $("#formcomentarios").css({"opacity":"0"});
                    $("#cmt").css({"opacity":"0"});
                    $(".embed-container").css({"width": "95%"});
                    $("#span").removeClass("glyphicon glyphicon-arrow-right");
                    $("#span").addClass("glyphicon glyphicon-arrow-left"); 

                    $("#Documentovisible").empty();
                    $("#Documentovisible").html(data);

                }
            });
            
        }if (tipo == "final"){
            
            $.ajax({
                url:"<?php echo base_url(); ?>profesor/cargardAdjuntoFid",
                type:"POST",
                data:parametros,
                success :function(data){   

                    $("#menucomentarios").css({"width": "10%", "left": "97.5%","background-color": "transparent"});
                    $("#formcomentarios").css({"opacity":"0"});
                    $("#cmt").css({"opacity":"0"});
                    $(".embed-container").css({"width": "95%"});
                    $("#span").removeClass("glyphicon glyphicon-arrow-right");
                    $("#span").addClass("glyphicon glyphicon-arrow-left"); 

                    $("#Documentovisible").empty();
                    $("#Documentovisible").html(data);

                }
            });
            
        }
    }
    
//---------------------------------------------------------------------------------------------------------------------------->
//--------------------------------------------------Actualizar los progesos del doc------------------------------------------->
//---------------------------------------------------------------------------------------------------------------------------->
    
    function avancesdoc(idavance){
        
        swal({
            title: "¿Estás seguro?",
            text: "Los cambios realizados no podrán revertirse",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true
            }, function () {
            
        setTimeout(function () {

        if (tipo == "ante"){
        
            var descripcionproblema = 0;
            var objetivos = 0;
            var justificacion = 0;
            var antecedentes = 0;
            var marcoc = 0;
            var marcot = 0;
            var alcance = 0;
            var cronograma = 0;
            var presupuesto = 0;
            var bibliografia = 0;

            if ($('#checkbox1').prop('checked')){

                descripcionproblema = 1;

            }if ($('#checkbox2').prop('checked')){

                objetivos = 1;

            }if ($('#checkbox3').prop('checked')){

                justificacion = 1;

            }if ($('#checkbox4').prop('checked')){

                antecedentes = 1;

            }if ($('#checkbox5').prop('checked')){

                marcoc = 1;

            }if ($('#checkbox6').prop('checked')){

                marcot = 1;

            }if ($('#checkbox7').prop('checked')){

                alcance = 1;

            }if ($('#checkbox8').prop('checked')){

                cronograma = 1;

            }if ($('#checkbox9').prop('checked')){

                presupuesto = 1;

            }if ($('#checkbox10').prop('checked')){

                bibliografia = 1;

            }
            
            var parametros = {
                "descripcionproblema" : descripcionproblema , 
                "objetivos" : objetivos, 
                "justificacion" : justificacion,
                "antecedentes" : antecedentes,
                "marcoc" : marcoc,
                "marcot" : marcot,
                "alcance" : alcance,
                "cronograma" : cronograma,
                "presupuesto" : presupuesto,
                "bibliografia" : bibliografia,
                "idavance" : idavance
            };
            
            $.ajax({
                url:"<?php echo base_url(); ?>profesor/actualizarante",
                type:"POST",
                data:parametros,
                success :function(data){   
                    
                    if (descripcionproblema == 1 && objetivos == 1 && justificacion == 1 && antecedentes == 1 && marcoc == 1 && marcot ==1 && alcance == 1 && cronograma == 1 && presupuesto == 1 && bibliografia == 1){
                        
                        var parametros2 = {
                            "Estado" : "Terminado",
                            "Estado2" : "Proceso",
                            "idavance" : idavance
                        };
                        
                        $.ajax({
                            url:"<?php echo base_url(); ?>profesor/actualizarante2",
                            type:"POST",
                            data:parametros2,
                            success :function(data){   
                        
                            swal("¡Finalizado!", "El proyecto se encuentra ahora en estado Terminado", "success");
                            location.reload();
                    
                            }
                        });
                        
                    }
                    
                    swal("¡Actualizado!", "Los avances han sido registrados con exito", "success");
                    location.reload();
                    
                }
            });

            
        }else{
                        
            var resumen = 0;
            var introduccion = 0;
            var marco_teorico = 0;
            var metodologia = 0;
            var resultados = 0;
            var concluciones = 0;
            var anexos = 0;
            var bibliografia = 0;

            if ($('#checkbox1').prop('checked')){

                resumen = 1;

            }if ($('#checkbox2').prop('checked')){

                introduccion = 1;

            }if ($('#checkbox3').prop('checked')){

                marco_teorico = 1;

            }if ($('#checkbox4').prop('checked')){

                metodologia = 1;

            }if ($('#checkbox5').prop('checked')){

                resultados = 1;

            }if ($('#checkbox6').prop('checked')){

                concluciones = 1;

            }if ($('#checkbox7').prop('checked')){

                anexos = 1;

            }if ($('#checkbox8').prop('checked')){

                bibliografia = 1;

            }
            
            var parametros = {
                "resumen" : resumen , 
                "introduccion" : introduccion, 
                "marco_teorico" : marco_teorico,
                "metodologia" : metodologia,
                "resultados" : resultados,
                "concluciones" : concluciones,
                "anexos" : anexos,
                "bibliografia" : bibliografia,
                "idavance" : idavance
            };
            
            $.ajax({
                url:"<?php echo base_url(); ?>profesor/actualizarfinal",
                type:"POST",
                data:parametros,
                success :function(data){   
                    
                    if (resumen == 1 && introduccion == 1 && marco_teorico == 1 && metodologia == 1 && resultados == 1 && concluciones ==1 && anexos == 1 && bibliografia == 1){
                        
                        var parametros2 = {
                            "Estado" : "Terminado",
                            "idavance" : idavance
                        };
                        
                        $.ajax({
                            url:"<?php echo base_url(); ?>profesor/actualizarfinal2",
                            type:"POST",
                            data:parametros2,
                            success :function(data){   
                        
                            swal("¡Finalizado!", "El proyecto se encuentra ahora en estado Terminado", "success");
                            location.reload();
                    
                            }
                        });
                        
                    }
                    
                    swal("¡Actualizado!", "Los avances han sido registrados con exito", "success");
                    location.reload();
                    
                }
            });            
        }
            
    }, 1000);});

    }    
    

</script>
