<div id="menucomentarios">

<?php 
    
    echo '<script>
    
        var tipo = "'.$Estado.'";
    
    </script>';
        
    ?>

<br>
<br>
<br>
<br>

<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------ESCRIBIR COMENTARIOS----------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
    <div id="estatico">
    <button type="button" class="btn btn-info btn-sm" id="btncomentarios" style="margin-left: 3px;">
        <span id="span" class="glyphicon glyphicon-arrow-left"> Comentarios</span>
    </button>
          
    <div id="formcomentarios">
           
            <legend class="text-center header">Bienvenido

            </legend>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="<?php echo base_url(); ?>css/images/perfil/profesor.png" alt="...">
                    </a>
                </div>
                <input type="text" value="<?php foreach ($Adjunto as $adj){echo $adj->id; break;}?>" style="display:none;" id="txtidadjunto">
                <input type="text" value="<?php foreach ($usuarios as $user){echo $user->codigo; break;}?>" style="display:none;" id="txtidusuario">

                <div class="media-body">

                    <h4 class="media-heading">
                        <?php foreach ($usuarios as $user){echo $user->nombre1;}?>
                        <?php foreach ($usuarios as $user){echo" "; echo $user->apellidos;} ?>
                    </h4>

                    <textarea placeholder="Escriba su comentario"  rows="5" cols="35" maxlength="150" required style="resize: none;" name="txtcomentario" id="txtcomentario"></textarea>
                    <br>
                    <button onclick="enviarcomentario(tipo)" class="btn btn-sm btn-danger" style="font-size:10px;">
                        Comentar
                    </button> 
                </div>
            </div>
            <br>
            
    <legend class="text-center header"></legend>

    </div>
</div>
       


<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------COMENTARIOS ADJUNTOS----------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
        
    <div id="contendorcomentarios" style="display: none;">
        <br>
        <?php  
            foreach ($Comentarios as $comen){ 
                echo '<div class="media">
                    <div id="cmt" class="media-left">
                        <a href="#">
                        </a>
                    </div>
                    <div class="media-body" style="padding-left: 5%;">
                        <h4 class="media-heading">'.$comen->nombre1.' '.$comen->apellidos.'</h4>
                        <textarea placeholder="Escriba su comentario" rows="5" cols="35" style="resize: none; cursor:default;" readonly="">'.$comen->comentario.'</textarea>
                        <span class="datetime">Fecha comentado: '.$comen->fechacomentario.' </span>
                        <br>
                    </div>
                </div>   
                <br>';
            }
        ?>  
    <br>
    </div>
    
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
                $("#contendorcomentarios").css({"display":"block"});
                $("#cmt").css({"opacity":"1"});
                $(".embed-container").css({"width": "70%"});
                $("#menucomentarios").css({"border-left":"1px solid"});
                $("#span").removeClass("glyphicon glyphicon-arrow-left");
                $("#span").addClass("glyphicon glyphicon-arrow-right");  
            });

            $("#btncomentarios").dblclick(function(){
                $("#menucomentarios").css({"width": "10%", "left": "97.5%","background-color": "transparent"});
                $("#formcomentarios").css({"opacity":"0"});
                $("#contendorcomentarios").css({"display":"none"});
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
                            $("#contendorcomentarios").css({"display":"block"});
                            $("#menucomentarios").css({"border-left":"1px solid"});
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
                            $("#contendorcomentarios").css({"display":"block"});
                            $("#menucomentarios").css({"border-left":"1px solid"});
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

</script>

<script>

        //------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------Actualizar los datos del usuario--------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------

$( document ).ready( function () {
    $( "#formactualizar" ).validate( {
        rules: {
            txtnombresa:{
                required: true,
                minlength: 5,
                maxlength: 41
            },
            txtapellidosa: {
                required: true,
                minlength: 6,
                maxlength: 20
            },
            txttelefonoa: {
                required: true,
                minlength: 7,
                maxlength: 15
            },
            txtcodiogoa: {
                required: true,
                minlength: 5,
                maxlength: 20
            },
            txtemaia: {
                required: true,
                minlength: 10,
                maxlength: 50,
                email: true
            },
        },
        messages: {
            txtnombresa: {
                required: "Por favor ingresa el nombre (si son dos dale un espacio)",
                minlength: "El nombre debe tener minimo de 10 caracteres",
                maxlength: "Excedio los 40 caracteres"
            },
            txtapellidosa: {
                required: "Por favor ingresa sus apellidos",
                minlength: "El apellido debe tener minimo de 10 caracteres",
                maxlength: "Excedio los 20 caracteres"
            },
            txttelefonoa: {
                required: "Por favor ingresa el numero del celular o telefono fijo",
                minlength: "El telefono debe tener minimo de 7 caracteres",
                maxlength: "Excedio los 15 caracteres"
            },
            txtcodiogoa: {
                required: "Por favor ingresa el codigo (documento de identidad)",
                minlength: "El codigo debe tener minimo de 10 caracteres",
                maxlength: "Excedio los 20 caracteres"
            },
            txtemaia: {
                required: "Por favor ingresa el correo el institucional",
                minlength: "el correo debe tener un minimo de 10 caracteres",
                maxlength: "Excedio los 50 caracteres",
                email : "correo invalido"
            }
        },
        submitHandler: function(form,event) {

            event.preventDefault();
            $.ajax({
                url:$("#formactualizar").attr("action"),
                type:$("#formactualizar").attr("method"),
                data:$("#formactualizar").serialize(),
                success :function(xhr, status){

                },
                complete : function() {
                    swal("Listo!","se mofico su informacion sin problemas","success");
                    $("#container-div-actualizar").fadeOut("slow"); 
                    cargardatosUserS();

                }
            });
        }
    });
});



function cargardatosUserS(){
    $.ajax({
        // cargamos url a nuestro contralador y método indicado
        url:"<?php base_url();?>repositorio/cargardatosUser",
        type:"POST",
        success:function(data){
            if(data){
                $("#Userdata").html(data);
            }
            else{
                alert("error");
            }
        }
    });
}

function limpiarUserdata(){
     	
$("#Userdata").empty()
}


</script>
