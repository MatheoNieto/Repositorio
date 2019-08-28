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

function loading(){  
    $("#antenproceodiv").hide();
    $("#antenterminadosdiv").hide();
    $("#antentodosdiv").hide();
    $("#antensinrediv").hide();

    $("#informeproceodiv").hide();
    $("#informesinrediv").hide();
    $("#informeterminadosdiv").hide();
    $("#informetodosdiv").hide();         
    $("#informesinini").hide();         
    
    $("#loading").hide();
}

$(document).ready(function(){
  
    
    $(".messages").hover(function(){
   $(".imgemail").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/nota2.png");
        }, function(){
         $(".imgemail").attr("src","http://localhost/Dropbox/proyecto/repositorio/css/images/nota.png");
    });
});



function informacionmensaje(id){
   
     var parametros = {"id" : id};
    
        $.ajax({
             url:"http://localhost/Dropbox/proyecto/repositorio/admin/consultarmensaje",   
            type:"POST",
             data:parametros,
            success :function(data){
            $("#modalmensajes").html(data);
                
            }
        });      
}

$(document).ready(function(){
    
    
     $("#inicio").click(function(){
           $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#antensinrediv").hide();  
         
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
         
          $("#widgesprinciapl").fadeIn();
        $("#donde").text("Inicio");
    });
    $("#anteproceso").click(function(){
          $("#widgesprinciapl").hide();
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antensinrediv").hide();
        
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
        
          $("#antenproceodiv").fadeIn();
          $("#donde").text("Anteproyecto-Proceso");
        
    });
    $("#antesinrev").click(function(){
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
        
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
        
          $("#antensinrediv").fadeIn();
        $("#donde").text("Anteproyecto-Sin revision");
    });  
    $("#anteterminados").click(function(){
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
        
          $("#antenterminadosdiv").fadeIn();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
          $("#antensinrediv").hide();
        $("#donde").text("Anteproyecto-Terminados");
    });  
    $("#antetodos").click(function(){
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
        
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").fadeIn();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
          $("#antensinrediv").hide();
        $("#donde").text("Anteproyecto-Todos");
    }); 

    
    $("#inforproceso").click(function(){
          $("#widgesprinciapl").hide();
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#informesinini").hide();
        
         $("#informeproceodiv").fadeIn();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#antensinrediv").hide();
        
          $("#antenproceodiv").hide();
          $("#donde").text("Informe Final-Proceso");
        
    });
    $("#informesinrevi").click(function(){
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
        
         $("#informeproceodiv").hide();
            $("#informesinrediv").fadeIn();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
        
          $("#antensinrediv").hide();
        $("#donde").text("Informe Final-Sin revision");
    });  
    $("#informesininiciar").click(function(){
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
        
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").fadeIn();
        
          $("#antensinrediv").hide();
        $("#donde").text("Informe Final-Sin iniciar");
    });  
    $("#informeterminados").click(function(){
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").fadeIn();
          $("#informetodosdiv").hide();
          $("#antensinrediv").hide();
        
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
          $("#antensinrediv").hide();
        $("#donde").text("Informe Final-Terminados");
    });  
    $("#informetodos").click(function(){
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#antensinrediv").hide();
          $("#informetodosdiv").fadeIn();
        
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
          $("#antensinrediv").hide();
        $("#donde").text("Informer Final-Todos");
    });
    
    
});

   


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("actives");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
   

$(document).ready(function(){

    $("#buscadortitulos").keyup(function(){
     var titulos = $('.titulos');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor").keyup(function(){
     var autor = $('.autor');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });
    
     $("#buscadortitulos2").keyup(function(){
     var titulos = $('.titulos2');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor2").keyup(function(){
     var autor = $('.autor2');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });    $("#buscadortitulos3").keyup(function(){
     var titulos = $('.titulos3');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor3").keyup(function(){
     var autor = $('.autor3');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });  $("#buscadortitulos4").keyup(function(){
     var titulos = $('.titulos4');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor4").keyup(function(){
     var autor = $('.autor4');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });
    
   $("#buscadortitulos5").keyup(function(){
     var titulos = $('.titulos5');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor5").keyup(function(){
     var autor = $('.autor5');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });   $("#buscadortitulos6").keyup(function(){
     var titulos = $('.titulos6');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor6").keyup(function(){
     var autor = $('.autor6');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });$("#buscadortitulos7").keyup(function(){
     var titulos = $('.titulos7');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor7").keyup(function(){
     var autor = $('.autor7');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });$("#buscadortitulos8").keyup(function(){
     var titulos = $('.titulos8');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor8").keyup(function(){
     var autor = $('.autor8');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });$("#buscadortitulos9").keyup(function(){
     var titulos = $('.titulos9');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor9").keyup(function(){
     var autor = $('.autor9');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
    
    
});



    $(document).ready(function() {
   

      $(".boton").click(function() {

        
        var apellidos = "";
        var nombres = "";
        var telefono = "";
        var emai = "";
        var codigo = "";

               $(this).parents("tr").find(".codigo").each(function() {
          codigo += $(this).html();
        });
           $(this).parents("tr").find(".nombreyapelldios").each(function() {
          nombres += $(this).html();
        });
           $(this).parents("tr").find(".telefono").each(function() {
          telefono += $(this).html();
        });  $(this).parents("tr").find(".mail").each(function() {
          emai += $(this).html();
        });
          
        var saberm = nombres;
        var stringPartsm = saberm.split(" ");
          
          var apellidos = stringPartsm[0]+" "+stringPartsm[1];
          var nombre1 = stringPartsm[2];
          var nombre2 = stringPartsm[3];     
          
          
          $("#codigomodiicar").val(codigo);
          $("#codigoantiguo").val(codigo);
          $("#txtelefono").val(telefono);
          $("#txtxmailmodifi").val(emai);
          $("#primernombre").val(nombre1);
          $("#secondnombre").val(nombre2);
          $("#apellidos").val(apellidos);
                  
      });
    });
$(document).ready(function() {
   

      $(".botonpro").click(function() {

        
        var apellidospro = "";
        var nombrespro = "";
        var telefonopro = "";
        var emaipro = "";
        var codigopro = "";

               $(this).parents("tr").find(".codigopro").each(function() {
          codigopro += $(this).html();
        });
           $(this).parents("tr").find(".nombreyapelldiospro").each(function() {
          nombrespro += $(this).html();
        });
           $(this).parents("tr").find(".telefonopro").each(function() {
          telefonopro += $(this).html();
        });  $(this).parents("tr").find(".mailpro").each(function() {
          emaipro += $(this).html();
        });
          
        var sabermpro = nombrespro;
        var stringPartsmpro = sabermpro.split(" ");
          
          var apellidospro = stringPartsmpro[0]+" "+stringPartsmpro[1];
          var nombre1pro = stringPartsmpro[2];
          var nombre2pro = stringPartsmpro[3];     
          
          
          $("#atigugocoidogprofesor").val(codigopro);
          $("#codigomodiicarpro").val(codigopro);
          $("#txtelefonopro").val(telefonopro);
          $("#txtxmailmodifipro").val(emaipro);
          $("#primernombrepro").val(nombre1pro);
          $("#secondnombrepro").val(nombre2pro);
          $("#apellidospro").val(apellidospro);
                  
      });
    });

  
$(document).ready(function(){
    
    $("#formularismodiestudiante").submit(function(event){        
        
            event.preventDefault();
                $.ajax({
			url:$("#formularismodiestudiante").attr("action"),
			type:$("#formularismodiestudiante").attr("method"),
			data:$("#formularismodiestudiante").serialize(),
            complete :function(data){
            location.reload();
                
            }
        }); 
        
        
    });

});  

$(document).ready(function(){
    
    $("#formregisstudents").submit(function(event){        
        
            event.preventDefault();
                $.ajax({
			url:$("#formregisstudents").attr("action"),
			type:$("#formregisstudents").attr("method"),
			data:$("#formregisstudents").serialize(),
            complete :function(data){
           swal("Listo","Se registro el nuevo estudiante","success");
                 location.reload();
                
            }
        }); 
        
        
    });

});$(document).ready(function(){
    
    $("#formulariodocentemodificar").submit(function(event){        
        
            event.preventDefault();
                $.ajax({
			url:$("#formulariodocentemodificar").attr("action"),
			type:$("#formulariodocentemodificar").attr("method"),
			data:$("#formulariodocentemodificar").serialize(),
            complete :function(data){
            location.reload();
                
            }
        }); 
        
        
    });

});  

$(document).ready(function(){
    
    $("#formularioregistrardocente").submit(function(event){        
        
            event.preventDefault();
                $.ajax({
			url:$("#formularioregistrardocente").attr("action"),
			type:$("#formularioregistrardocente").attr("method"),
			data:$("#formularioregistrardocente").serialize(),
            complete :function(data){
           swal("Listo","Se registro el nuevo profesor","success");
                 location.reload();
                
            }
        }); 
        
        
    });

});

















