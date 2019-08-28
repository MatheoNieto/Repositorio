function nobackbutton(){

    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button"
    window.onhashchange=function(){
        window.location.hash="no-back-button";
    }
}

document.oncontextmenu = function() {
    return false
}

function right(e) {

    if (navigator.appName == 'Netscape' && e.which == 3) {
        //alert(msg); //- Si no quieres asustar a tu usuario entonces quita esta linea...pero los sustos son buenos de vez en cuando xD
        return false;
    }else if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {
        return false;
    } 
        return true;
}

document.onmousedown = right;

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
        url:"http://localhost/Dropbox/proyecto/repositorio/cargardatosUser",
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

//------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------Anteproyectos Completos-----------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------------------------Anteproyectos-----------------------------------------------------------------

    function cargarAnteproyectoS(){
        
        $.ajax({
            // cargamos url a nuestro contralador y método indicado
            url:"http://localhost/Dropbox/proyecto/repositorio/profesor/cargarAnteproyectoC",
            type:"POST",
            success:function(data){
                if(data){
                    $("#ContenedorMasivo").html(data);
                }
                else{
                    alert("error");
                }
            }
        });
    }

//-------------------------------------------------------Finales-----------------------------------------------------------------------


    function cargarFinalesS(){

        $.ajax({
            // cargamos url a nuestro contralador y método indicado
            url:"http://localhost/Dropbox/proyecto/repositorio/profesor/cargarFinalC",
            type:"POST",
            success:function(data){
                if(data){
                    $("#ContenedorMasivoF").html(data);
                }
                else{
                    alert("error");
                }
            }
        });
    }


//------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------Anteproyectos--------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------------------------Proceso-----------------------------------------------------------------------

        
    function cargarAnteproyectoPS(){
        
        $.ajax({
            // cargamos url a nuestro contralador y método indicado
            url:"http://localhost/Dropbox/proyecto/repositorio/profesor/cargarAnteproyectoP",
            type:"POST",
            success:function(data){
                if(data){
                    $("#ContenedorMasivo").html(data);
                }
                else{
                    alert("error");
                }
            }
        });
    }

//------------------------------------------------------Terminados-----------------------------------------------------------------------


    function cargarAnteproyectoTS(){

        $.ajax({
            // cargamos url a nuestro contralador y método indicado
            url:"http://localhost/Dropbox/proyecto/repositorio/profesor/cargarAnteproyectoT",
            type:"POST",
            success:function(data){
                if(data){
                    $("#ContenedorMasivo").html(data);
                }
                else{
                    alert("error");
                }
            }
        });
    }

//------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------Finales-----------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------------------------Proceso-----------------------------------------------------------------------

    function cargarFinalFPS(){
        
        $.ajax({
            // cargamos url a nuestro contralador y método indicado
            url:"http://localhost/Dropbox/proyecto/repositorio/profesor/cargarFinalP",
            type:"POST",
            success:function(data){
                if(data){
                    $("#ContenedorMasivoF").html(data);
                }
                else{
                    alert("error");
                }
            }
        });
        
    }

//------------------------------------------------------Terminados-----------------------------------------------------------------------

    function cargarFinalFTS(){
        
        $.ajax({
            // cargamos url a nuestro contralador y método indicado
            url:"http://localhost/Dropbox/proyecto/repositorio/profesor/cargarFinalT",
            type:"POST",
            success:function(data){
                if(data){
                    $("#ContenedorMasivoF").html(data);
                }
                else{
                    alert("error");
                }
            }
        });
        
    }
   
//------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------Ocultar/mostrar contenedores--------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------

$(document).ready(function(){
    
    $("#anteproyecto").hide();
    $("#informe").hide();
    $("#btnatras").hide();
    $("#btndocsant").hide();
    $("#btnanexos").hide();
    $("#contendorAvances").hide();
    $("#contenedormenucomentarios").hide();
    $("#Documentovisible").hide();
    $("#container-div-actualizar").hide();
    
    $("#btninicio").click(function(){
        $("#anteproyecto").hide();
        $("#informe").hide();
        $("#avanceante").hide();
        $("#contentslider").show();
    });

    $("#btnanteproyecto").click(function(){
        $("#anteproyecto").show();
        $("#informe").hide();
        $("#avanceante").hide();
        $("#contentslider").hide();
        cargarAnteproyectoS();
    });
    
    $("#btninforme").click(function(){
        $("#anteproyecto").hide();
        $("#informe").show();
        $("#avanceante").hide();
        $("#contentslider").hide();
        cargarFinalesS();
    });
        
    $("#btn-editar").click(function() {
        $("#container-div-actualizar").show(); 
    });
    
    $("#cerradatos").click(function() {
        $("#container-div-actualizar").hide(); 

    });
    
    $("#cancelar-info").click(function() {
        $("#container-div-actualizar").hide(); 

    });
    

    
});

//------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------Menu comentario-------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------


$(document).ready(function () {
    $("#btncomentarios").click(function(){
        $("#menucomentarios").css({"width": "25%", "left": "75%","background-color": "#fffefd"});
        $("#formcomentarios").css({"opacity":"1"});
        $(".embed-container").css({"width": "70%"});
        $("#span").removeClass("glyphicon glyphicon-arrow-left");
        $("#span").addClass("glyphicon glyphicon-arrow-right");  
    });

    $("#btncomentarios").dblclick(function(){
        $("#menucomentarios").css({"width": "10%", "left": "97.5%","background-color": "transparent"});
        $("#formcomentarios").css({"opacity":"0"});
        $(".embed-container").css({"width": "95%"});
        $("#span").removeClass("glyphicon glyphicon-arrow-right");
        $("#span").addClass("glyphicon glyphicon-arrow-left");
    });
});

//------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------Cerrar Session--------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------

function cerrarsesion()
	{
		window.location.href = 'http://localhost/Dropbox/proyecto/repositorio/login/cerrarsession';
	}

//------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------slider-------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------

(function( $ ) {

    //Function to animate slider captions 
    function doAnimations( elems ) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function () {
            var $this = $(this),
            $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load 
    var $myCarousel = $('#carousel-example-generic'),
    $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

    //Initialize carousel 

    //Animate captions in first slide on page load 
    doAnimations($firstAnimatingElems);

    //Pause carousel  


    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });  

})(jQuery);	