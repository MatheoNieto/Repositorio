function nobackbutton(){

window.location.hash="no-back-button";
window.location.hash="Again-No-back-button"
window.onhashchange=function(){
    window.location.hash="no-back-button";}
}

document.oncontextmenu = function() {
return false
}
function right(e) {

if (navigator.appName == 'Netscape' && e.which == 3) {
 alert(msg); //- Si no quieres asustar a tu usuario entonces quita esta linea...
 return false;
}
else if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {

return false;
} 
return true;
}
document.onmousedown = right;

!function ($) {
    
    // Le left-menu sign
    /* for older jquery version
    $('#left ul.nav li.parent > a > span.sign').click(function () {
        $(this).find('i:first').toggleClass("icon-minus");
    }); */
    
    $(document).on("click","#left ul.nav li.parent > a > span.sign", function(){          
        $(this).find('i:first').toggleClass("icon-minus");      
    }); 
    
    // Open Le current menu
    $("#left ul.nav li.parent.active > a > span.sign").find('i:first').addClass("icon-minus");
    $("#left ul.nav li.current").parents('ul.children').addClass("in");

}(window.jQuery);
//***************EFECTO OPCIONES*******************************
$(document).ready(function () {
  var $body = $('body');

  $body.on('click', 'div.master_list div.list-group button', function () {
    var $button = $(this),
      article_option = $button.attr('data-option'),
      article_selector = 'article.' + article_option,
      $master_detail = $button.closest('.master_detail'),
      $article = $master_detail.find(article_selector);

    $master_detail.find('article').removeClass('grow fadeIn');

    $article.addClass('grow fadeIn');
  });
});



$(document).ready(function(){ 
    $('#characterLeft').text('250 Caracteres disponibles (La descripcion debe tener un minimo de 100 caracteres)');
    $('#txtdescripcionanteproyecto').keyup(function () {
        var max = 250;
        var len = $(this).val().length;
        if (len > max) {
            $('#characterLeft').text('Excedio el limite de caracteres');
            $('#characterLeft').addClass('red');
            $('#btncrear').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' Caracteres disponibles  (La descripcion debe tener un minimo de 100 caracteres)');
            $('#btncrear').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});




//***************AL_INICIAR_LA_PAGINA*******************************
jQuery(document).ready(function () { 
    
$("#container-div-actualizar").hide();       
$("#contenedor-div-editar-documento").hide();    
$("#notasincrearante").hide();    
$("#enclacecrearproyecto").hide();    
$("#container-div-contacto").hide();    
$("#conatiner-div-opciones").hide();    
$("#conatiner-div-integrantes").hide();
$("#contenedor-adjuntosdocument").hide();
$("#contenedor-viewdocument").hide();
$("#contenedoranexo").hide();
$("#contenedoranexo2").hide();    
$("#container-div-agragranexos").hide(); 
$("#container-div-anexos").hide(); 
$("#container-div-actualizar2").hide();     
$("#contenedor-div-editar-documento2").hide();     
$("#conatiner-div-integrantes2").hide();
$("#contenedor-adjuntosdocument2").hide();
$("#contenedor-viewdocument2").hide();
$("#container-div-agragranexos2").hide(); 
$("#container-div-anexos2").hide(); 
$('#txtprimerautor').attr('readonly', true);
$("#tbl_integrantes").hide();
$("#tbl_titulos").hide();    
$("#disponible").hide();    
$("#tbl_integrantes2").hide();    
 
var saberm = $("#btn-principal2").text();
var stringPartsm = saberm.split("-");
 if (stringPartsm[1] == ' Proceso'){
   $("#main-container").hide();
   $("#main-container2").show();
     
     
     
 }else if (stringPartsm[1] == ' Terminado'){
       $("#main-container").hide();
       $("#editaranteproyecto2").hide();
       $("#btnsubiradjunto2").hide();
       $("#btn-agregar-anexo2").hide();
   $("#main-container2").show();
     swal({
            title: 'Felicitaciones!',
            text: 'Ya terminaste tu proyecto de grado.',
            imageUrl: 'https://78.media.tumblr.com/d99e324a3eeb2dd51492cc3fb01932f9/tumblr_n25cacMmI91rogm6to1_400.gif',
            animation: false
        });
 }else{
    $("#main-container").show();
   $("#main-container2").hide();
 }

var sabert = $("#btn-principal").text();
var stringPartst = sabert.split("-");
if(stringPartst[1] == ' '){
    $("#btn-principal").hide();
    $("#btn-principal2").hide();
    $("#opciones").hide();
    $("#btn-editar").hide();
    $("#notasincrearante").show();
    $("#enclacecrearproyecto").show();
}else if (stringPartst[1] == ' Terminado'){
     $("#notasincrearante").hide();
     $("#enclacecrearproyecto").hide();
   $("#editaranteproyecto").hide();
   $("#btnsubiradjunto").hide();
   $("#infosubir").hide();
   $("#btn-agregar-anexo").hide();    
     
 }else{
 $("#notasincrearante").hide();
 $("#enclacecrearproyecto").hide();
  $("#editaranteproyecto").show();
   $("#btnsubiradjunto").show();
   $("#infosubir").show();
   $("#btn-agregar-anexo").show();
 }


    
    
    
    
    

    $("#divsuccess").hide();
    
   $(function () {
  $('#txtsegundoautor').quicksearch('table#tbl_integrantes tbody tr');			
		
});
 
  

$('input#txtsegundoautor').quicksearch('table#tbl_integrantes tbody tr'); 

   $(function () {
  $('#txttitulo').quicksearch('table#tbl_titulos tbody tr');			
		
});

    exampleFunction2 = function(){         
          $("#tbl_titulos").fadeOut("slow");
           $("#disponible").fadeIn();
        setTimeout(function(){  $("#disponible").hide();}, 1000);

}

$('input#txttitulo').quicksearch(
	'table#tbl_titulos tbody tr',
	{'onNoResultFound': exampleFunction2}
); 



$("#btn-editar").click(function() {
$("#container-div-actualizar").show(); 

});

$("#cerradatos").click(function() {
$("#container-div-actualizar").hide(); 
 $("#formactualizar")[0].reset();
    

}); 

$("#cerraranexos").click(function() {
$("#container-div-agragranexos").hide(); 

});
    
$("#cerraranexos2").click(function() {
$("#container-div-agragranexos2").hide(); 

});

$("#btn-agregar-anexo").click(function() {
$("#container-div-agragranexos").show(); 

}); 
    
$("#btn-agregar-anexo2").click(function() {
$("#container-div-agragranexos2").show(); 

});  


$("#btn-anexos").click(function() {
$("#container-div-anexos").show();
$("#conatiner-div-integrantes").hide();
$("#contenedor-adjuntosdocument").hide();
$("#contenedor-adjuntos").hide();
$("#contenedor-viewdocument").hide();

});
$("#btn-anexos2").click(function() {
$("#container-div-anexos2").show();
$("#conatiner-div-integrantes2").hide();
$("#contenedor-adjuntosdocument2").hide();
$("#contenedor-adjuntos2").hide();
$("#contenedor-viewdocument2").hide();

});

$("#btn-integrantes").click(function() {
$("#conatiner-div-integrantes").show(); 
$("#contenedor-adjuntos").hide();
$("#container-div-anexos").hide();
$("#contenedor-adjuntosdocument").hide();
$("#contenedor-viewdocument").hide();

});
$("#btn-integrantes2").click(function() {
$("#conatiner-div-integrantes2").show(); 
$("#contenedor-adjuntos2").hide();
$("#container-div-anexos2").hide();
$("#contenedor-adjuntosdocument2").hide();

});




$("#cancelar-info").click(function() {
$("#container-div-actualizar").hide();
     $("#formactualizar")[0].reset();

});

$("#contacto").click(function() {
$("#container-div-contacto").show(); 

});


$("#cerrarcontac").click(function() {
$("#container-div-contacto").hide(); 

});

$("#opciones").click(function() {
$("#conatiner-div-opciones").show(); 

});
$("#cerrarconfi").click(function() {
$("#conatiner-div-opciones").hide(); 

});

$("#btn-atras").click(function() {
$("#contenedor-adjuntos").show(); 
$("#contenedor-adjuntosdocument").hide(); 

});
$("#btn-atrasfinal").click(function() {
$("#contenedor-adjuntos2").show(); 
$("#contenedor-adjuntosdocument2").hide(); 

});

$("#btn-atras2").click(function() {
$("#contenedor-viewdocument").hide(); 
$("#contenedor-adjuntosdocument").show(); 

});
$("#btn-atras2final").click(function() {
$("#contenedor-viewdocument2").hide(); 
$("#contenedor-adjuntosdocument2").show(); 

});
    $(".disabledfila").click(function() {
swal("Opps!","El estudiante ya tiene su grupo de trabajo","error"); 

});

$("#btn-principal").mousedown(function(e) { 
    
  
    
if(e.which == 3){
$("#contenedor-adjuntos").show();
$("#conatiner-div-integrantes").hide();
$("#container-div-anexos").hide();
$("#main-container2").hide();
$("#contenedor-adjuntosdocument").hide();
$("#main-container").show();
}



});
$("#btn-principal2").mousedown(function(e) { 
    if(e.which ==1){
 var saber = $("#btn-principal2").text();
var stringParts = saber.split("-");
 if (stringParts[1] == ' Sin iniciar'){
      swal("Opps!","se accede con el click derecho","info");
    }
    }
    if(e.which == 3){
        var saber = $("#btn-principal2").text();
var stringParts = saber.split("-");
 if (stringParts[1] == ' Sin iniciar'){
       swal("Lo sentimos","No se puede iniciar el informe final si terminar el ante proyecto","info");




 }else{
         $("#main-container").hide();
   $("#main-container2").show();
$("#contenedor-adjuntos2").show();
$("#container-div-anexos2").hide();
$("#contenedor-adjuntosdocument2").hide();
    $("#conatiner-div-integrantes2").hide();
 }
    }


});



//$("#noadjuntar").click(function() {
//$("#contenedoradjuntos").fadeOut("slow"); 

//});
//$("#contenedoradjuntos2").click(function() {
//$("#contenedor-viewdocument2").show(); 
//$("#contenedor-adjuntosdocument2").hide(); 

//});



});


////////////////////////////bucarintegrantes/////////////////////


$(document).ready(function(){
      $('#txtsegundoautor').keyup(function(){
          var buscar = $(this).val();
         
          if( buscar == ""){
              $("#tbl_integrantes").fadeOut("slow");
          }else{
              $("#tbl_integrantes").fadeIn("slow");
          }
                   
          
      });
});
$(document).ready(function(){
      $('#txttitulo').keyup(function(){
          var buscar = $(this).val();
         
          if( buscar == ""){
              $("#tbl_titulos").fadeOut("slow");
              $("#disponible").hide();
          }else{
              $("#tbl_titulos").fadeIn("slow");
          }
                   
          
      });
});


 $(document).ready(function() {
   

      $(".boton").click(function() {

        var apellidos = "";
        var nombre = "";
        var codigo = "";

        // Obtenemos todos los valores contenidos en los <td> de la fila
        // seleccionada
        $(this).parents("tr").find(".apelli").each(function() {
          apellidos += $(this).html();
        });
           $(this).parents("tr").find(".nombre").each(function() {
          nombre += $(this).html();
        });
           $(this).parents("tr").find(".numero").each(function() {
          codigo += $(this).html();
        });
          $("#txtsegundoautor").val(apellidos+" "+nombre);
          $("#txtcodigo2").val(codigo);
           $("#tbl_integrantes").fadeOut();
        
      });
    });



$(function() {
   $("#formcdocument").validate({
      	rules: {
					txttitulo:{
						required: true,
						minlength: 10,
                        maxlength: 150
					},
					txtprimerautor: {
						required: true,
						minlength: 10,
                        maxlength: 50
					},
					txtsegundoautor: {
						minlength: 10,
                        maxlength: 50
					},
					txtdescripcionanteproyecto: {
						required: true,
						minlength: 150,
                        maxlength: 250
					},
				},
				messages: {
					txttitulo: {
						required: "Por favor ingresa el titulo",
						minlength: "El titulo debe tener minimo de 10 caracteres",
                        maxlength: "Excedio los 150 caracteres"
					},
						txtprimerautor: {
						required: "Por favor ingresa el primer autor",
						minlength: "El primer autor debe tener minimo de 10 caracteres",
                        maxlength: "Excedio los 50 caracteres para el primer autor"
					},
                    txtsegundoautor: {
						minlength: "Opps!, debe selecionar un autor de la lista",
                        maxlength: "Excedio los 50 caracteres para el segundo autor"
					},
						txtdescripcionanteproyecto: {
						required: "Por favor ingresa la descripcion del ante proyecto",
						minlength: "la descripcion debe tener minimo de 150 caracteres",
                        maxlength: "Excedio los 250 caracteres para la descripcion"
					}
				},
        submitHandler: function(form,event) {
     
                event.preventDefault();
                $.ajax({
			url:$("#formcdocument").attr("action"),
			type:$("#formcdocument").attr("method"),
			data:$("#formcdocument").serialize(),
            complete : function() {
       
        location.reload();

    }
		});
         
         
             
      
        
    }
   }); 
    
});

$(function() {
   $("#formcontacto").validate({
      	rules: {
					txtnombres:{
						required: true,
                        maxlength: 100
					},txtasunto:{
						required: true,
                        maxlength: 100
					},
					txtemail: {
                        required: true,
                        email: true,
                        minlength: 10,
                        maxlength: 50
					},
					txttel: {
                        required: true,
                        number: true,
                        minlength: 7,
                        maxlength: 12
					},txtmensajes: {
                        required: true,
                        minlength: 15,
                        maxlength: 250
					},
				},
				messages: {
					txtnombres: {
						required: "Por favor ingresa sus nombres y apellidos",
                        maxlength: "Excedio los 100 caracteres"
					},	txtasunto: {
						required: "Por favor ingresa el asunto",
                        maxlength: "Excedio los 100 caracteres"
					},
						txtemail: {
						required: "Por favor ingresa el correo al que desean contactarte",
						minlength: "debe tener un minimo de 10 caracteres",
                        maxlength: "Excedio los 50 caracteres"
					},
                    txttel: {
                        required: "Por favor ingresa el telefono",
						number: "Opps!, debe ingresar solo numeros",
                        minlength: "el numero de telefono debe tener minimo 7 caracteres",
                        maxlength: "Excedio los 12 caracteres"
					},
						txtmensajes: {
						required: "Por favor ingresa la dificultad detalladamente",
						minlength: "la descripcion debe tener minimo de 15 caracteres",
                        maxlength: "Excedio los 250 caracteres para la descripcion"
					}
				},
        submitHandler: function(form,event) {     
                event.preventDefault();
                $.ajax({
			url:$("#formcontacto").attr("action"),
			type:$("#formcontacto").attr("method"),
			data:$("#formcontacto").serialize(),
            success : function(data) {
                
                if(data){
                 swal("Listo!","se envio sin problemas","success");
                 $("#container-div-contacto").fadeOut("slow");
                }else{
                   swal("Opps!","Intente de nuevo","error"); 
                }
                
            }
		});
         
    }
   }); 
    
});$(function() {
   $("#fomrsugerencia").validate({
      	rules: {
					txtsugerie:{
						required: true,
                        maxlength: 150
					},
				},
				messages: {
					txtsugerie: {
						required: "por favor ingresa la sugerencia",
                        maxlength: "Excedio los 150 caracteres"
					}
				},
        submitHandler: function(form,event) {     
                event.preventDefault();
                $.ajax({
			url:$("#fomrsugerencia").attr("action"),
			type:$("#fomrsugerencia").attr("method"),
			data:$("#fomrsugerencia").serialize(),
            success : function(data) {
                
                if(data){
                 swal("Listo!","se creo el documento sin problemas","success");
                 $("#conatiner-div-opciones").fadeOut("slow");
                }else{
                   swal("Opps!","Intente de nuevo","error"); 
                }
                
            }
		});
         
    }
   }); 
    
});

function cargardator(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"http://repositorioucp.com/principal/cargaDatos",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#contenedor-adjuntos").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}
function cargardator2(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"http://repositorioucp.com/principal/cargaDatos2",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#conatiner-div-integrantes").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}
function cargardator3(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"http://repositorioucp.com/principal/cargaDatos3",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#contenedor-div-editar-documento").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}function cargardator3_1(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"http://repositorioucp.com/principal/cargaDatos3",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#contenedor-div-editar-documento").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}
function cargardator4(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"http://repositorioucp.com/principal/cargaDatos4",
                        type:"POST",
                        success:function(data){
                            if(data){
                              $("#sidebar").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}




$(document).ready( function () {
    
$("#img1").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/1.jpg");
    $("#textimg").val("1.jpg");

});
    
    $("#img2").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/2.jpg");
    $("#textimg").val("2.jpg");

});
    $("#img3").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/3.jpg");
$("#textimg").val("3.jpg");
    
});
    $("#img4").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/4.jpg");
$("#textimg").val("4.jpg");
    
});
    $("#img5").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/5.jpg");
$("#textimg").val("5.jpg");
    
});
    $("#img6").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/6.jpg");
$("#textimg").val("6.jpg");
    
});
    $("#img7").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/7.jpg");
$("#textimg").val("7.jpg");
    
});
    $("#img8").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/8.jpg");
$("#textimg").val("8.jpg");
    
});
    $("#img9").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/9.jpg");
$("#textimg").val("9.jpg");
    
});
    $("#img10").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/10.jpg");
$("#textimg").val("10.jpg");
    
});
    $("#img11").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/11.jpg");
$("#textimg").val("11.jpg");
    
});
    $("#img12").click(function() {
$("#imgfondo").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/fondos/12.jpg");
$("#textimg").val("12.jpg");
});
    ////////////////////////////////////cambiar tema
    
    $('#toggleButton').click(function(){
        if( $('#toggleButton').prop('checked') ) {
            
   $('#headermenu').css({'background-color':'rgba(0,0,0,0.65)'});
            
   $('#main-container').css({'background-color':'rgba(0,0,0,0.65)','border-left':'1px solid #fff','border-top':'1px solid #fff'});

    $('#main-container2').css({'background-color':'rgba(0,0,0,0.65)','border-left':'1px solid #fff','border-top':'1px solid #fff'});
            
   $('#sidebar').css({'background-color':'rgba(0,0,0,0.65)','color':'#fff'});
            
    $('#opciones').css({'background-color':'transparent','color':'#fff','border':'none'});
            
    $('#contacto').css({'background-color':'transparent','color':'#fff','border':'none'}); $('#veracent').css({'background-color':'transparent','color':'#fff','border':'none'});
            
    $('#titlerepo').css({'color':'#fff'});
   
    $('#contentinforante').css({'box-shadow':'none','-moz-box-shadow':'none',' -webkit-box-shadow':'none'});
            
    $('#lista-tareas').css({'box-shadow':'none','-moz-box-shadow':'none',' -webkit-box-shadow':'none'});
            
    $('#contentinforante').css({'box-shadow':'none','-moz-box-shadow':'none',' -webkit-box-shadow':'none'});
            
    $('#lista-tareas2').css({'box-shadow':'none','-moz-box-shadow':'none',' -webkit-box-shadow':'none'});
            
}else{
   $('#headermenu').css({'background-color':'rgba(255,255,255,0.65)'});
            
   $('#main-container').css({'background-color':'rgba(255,255,255,0.6)','border-left':'1px solid black','border-top':'1px solid black'});

    $('#main-container2').css({'background-color':'rgba(255,255,255,0.6)','border-left':'1px solid black','border-top':'1px solid black'});
            
   $('#sidebar').css({'background-color':'rgba(255,255,255,0.6)','color':'black'});
            
    $('#opciones').css({'background-color':'#b0b3b6','color':'black','border':'1px solid #000000'});
            
    $('#contacto').css({'background-color':'#199d63','color':'#fff','border':'1px solid #000000'}); $('#veracent').css({'background-color':'#199d63','color':'#fff','border':'1px solid #000000'});
            
    $('#titlerepo').css({'color':'black'});
    
    $('#contentinforante').css({'box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)','-moz-box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)',' -webkit-box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)'});
    
    $('#lista-tareas').css({'box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)','-moz-box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)',' -webkit-box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)'});
}
   $('#contenifnoinforme').css({'box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)','-moz-box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)',' -webkit-box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)'});
    
    $('#lista-tareas2').css({'box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)','-moz-box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)',' -webkit-box-shadow':'10px 10px 5px 0px rgba(0,0,0,0.75)'});

     });

    
    
        $("#formfondo").submit(function(event){
            event.preventDefault();
                $.ajax({
                url:$("#formfondo").attr("action"),
                type:$("#formfondo").attr("method"),
                data:$("#formfondo").serialize(),
                success :function(respuesta){
                swal("Se modifico","sin problemas","success");
                $('#conatiner-div-opciones').fadeOut();
			}
		});
                 
            });
    
    
    
});
 




function adjunto(){

     $("#contenedoradjuntos").fadeIn("slow");
   var nombre = document.getElementById('archivo').files[0].name;
     
    $("#titulodocumento").text(nombre);
    
}function adjunto2(){

     $("#contenedoradjuntos2").fadeIn("slow");
   var nombre = document.getElementById('archivo2').files[0].name;
     
    $("#titulodocumento2").text(nombre);
    
}function adjuntoA(){

     $("#contenedoranexo").fadeIn("slow");
   var nombre = document.getElementById('anexo2').files[0].name;
     
    $("#titulodocumentoa2").text(nombre);
    
}












