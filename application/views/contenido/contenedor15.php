
 <!-- <script src="<?php echo base_url(); ?>scripts/script.js " ></script>  -->
 <!-- <script src="<?php echo base_url(); ?>scripts/script2.js " ></script>  -->


<?php 
   foreach ($usuarios as $user){  
    if ( $user->ingresa == 1){
   echo  ' <script>$("#contenedor-div-crear-documento").hide();  </script>';
        
    }
   } 
    ?>



    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
    $(this).toggleClass('active');
    });
    });
    </script>

    <script>
    
    function cargardator(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"<?php echo base_url(); ?>principal/cargaDatos",
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
                        url:"<?php echo base_url(); ?>principal/cargaDatos2",
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
                        url:"<?php echo base_url(); ?>principal/cargaDatos3",
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
                        url:"<?php echo base_url(); ?>principal/cargaDatos3",
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
                        url:"<?php echo base_url(); ?>principal/cargaDatos4",
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
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/1.jpg");
    $("#textimg").val("1.jpg");

});
    
    $("#img2").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/2.jpg");
    $("#textimg").val("2.jpg");

});
    $("#img3").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/3.jpg");
$("#textimg").val("3.jpg");
    
});
    $("#img4").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/4.jpg");
$("#textimg").val("4.jpg");
    
});
    $("#img5").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/5.jpg");
$("#textimg").val("5.jpg");
    
});
    $("#img6").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/6.jpg");
$("#textimg").val("6.jpg");
    
});
    $("#img7").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/7.jpg");
$("#textimg").val("7.jpg");
    
});
    $("#img8").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/8.jpg");
$("#textimg").val("8.jpg");
    
});
    $("#img9").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/9.jpg");
$("#textimg").val("9.jpg");
    
});
    $("#img10").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/10.jpg");
$("#textimg").val("10.jpg");
    
});
    $("#img11").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/11.jpg");
$("#textimg").val("11.jpg");
    
});
    $("#img12").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>/css/images/fondos/12.jpg");
$("#textimg").val("12.jpg");
});
});
    
    
    
    </script>
       
</body>
</html>

<!-- Script admin -->

<script>

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
   $(".imgemail").attr("src","<?php echo base_url(); ?>css/images/nota2.png");
        }, function(){
         $(".imgemail").attr("src","<?php echo base_url(); ?>css/images/nota.png");
    });
});



function informacionmensaje(id){
   
     var parametros = {"id" : id};
    
        $.ajax({
             url:"<?php echo base_url(); ?>admin/consultarmensaje",   
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

</script>

<!-- Script 1 -->

<script>

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
                        url:"<?php echo base_url(); ?>principal/cargaDatos",
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
                        url:"<?php echo base_url(); ?>principal/cargaDatos2",
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
                        url:"<?php echo base_url(); ?>principal/cargaDatos3",
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
                        url:"<?php echo base_url(); ?>principal/cargaDatos3",
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
                        url:"<?php echo base_url(); ?>principal/cargaDatos4",
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
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/1.jpg");
    $("#textimg").val("1.jpg");

});
    
    $("#img2").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/2.jpg");
    $("#textimg").val("2.jpg");

});
    $("#img3").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/3.jpg");
$("#textimg").val("3.jpg");
    
});
    $("#img4").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/4.jpg");
$("#textimg").val("4.jpg");
    
});
    $("#img5").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/5.jpg");
$("#textimg").val("5.jpg");
    
});
    $("#img6").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/6.jpg");
$("#textimg").val("6.jpg");
    
});
    $("#img7").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/7.jpg");
$("#textimg").val("7.jpg");
    
});
    $("#img8").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/8.jpg");
$("#textimg").val("8.jpg");
    
});
    $("#img9").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/9.jpg");
$("#textimg").val("9.jpg");
    
});
    $("#img10").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/10.jpg");
$("#textimg").val("10.jpg");
    
});
    $("#img11").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/11.jpg");
$("#textimg").val("11.jpg");
    
});
    $("#img12").click(function() {
$("#imgfondo").attr("src","<?php echo base_url(); ?>css/images/fondos/12.jpg");
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
    
 }
//function adjuntoA(){

//      $("#contenedoranexo").fadeIn("slow");
//    var nombre = document.getElementById('anexo2').files[0].name;
     
//     $("#titulodocumentoa2").text(nombre);
    
// }

</script>

<!-- Script 2 -->

<script>

$(function() {
   $("#editar_anteproyecto").validate({
      	rules: {
					txttitulom:{
						required: true,
						minlength: 10,
                        maxlength: 150
					},
					txtdescripcionanteprom: {
						required: true,
						minlength: 150,
                        maxlength: 250
					},
				},
				messages: {
					txttitulom: {
						required: "Por favor ingresa el titulo",
						minlength: "El titulo debe tener minimo de 10 caracteres",
                        maxlength: "Excedio los 150 caracteres"
					},
						txtdescripcionanteprom: {
						required: "Por favor ingresa la descripcion del ante proyecto",
						minlength: "la descripcion debe tener minimo de 150 caracteres",
                        maxlength: "Excedio los 250 caracteres para la descripcion"
					}
				},
        submitHandler: function(form,event) {
     
                event.preventDefault();
                $.ajax({
			url:$("#editar_anteproyecto").attr("action"),
			type:$("#editar_anteproyecto").attr("method"),
			data:$("#editar_anteproyecto").serialize(),
			success :function(xhr, status){

			},
        complete : function(xhr, status) {
        swal("Listo!","se modifico el documento","success");
        $("#contenedor-div-editar-documento").fadeOut("slow");

        cargardator();
    }
		});
         
         
             
      
        
    }
   }); 
    
});

function cargardator(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"<?php echo base_url(); ?>principal/cargaDatos",
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

</script>

<!-- Script 2 2 -->

<script>

$(function() {
   $("#editar_informe").validate({
      	rules: {
					txttituloinformem:{
						required: true,
						minlength: 10,
                        maxlength: 50
					},
					txtdescripcionanteproinformem: {
						required: true,
						minlength: 150,
                        maxlength: 250
					},
				},
				messages: {
					txttituloinformem: {
						required: "Por favor ingresa el titulo del informe final",
						minlength: "El titulo debe tener minimo de 10 caracteres",
                        maxlength: "Excedio los 50 caracteres"
					},
						txtdescripcionanteproinformem: {
						required: "Por favor ingresa la descripcion del Informe final",
						minlength: "la descripcion debe tener minimo de 150 caracteres",
                        maxlength: "Excedio los 250 caracteres para la descripcion"
					}
				},
        submitHandler: function(form,event) {
     
                event.preventDefault();
                $.ajax({
			url:$("#editar_informe").attr("action"),
			type:$("#editar_informe").attr("method"),
			data:$("#editar_informe").serialize(),
			success :function(xhr, status){

			},
        complete : function(xhr, status) {
        swal("Listo!","se modifico el informe final","success");
        $("#contenedor-div-editar-documento2").fadeOut("slow");

        cargardator1();
    }
		});
         
         
             
      
        
    }
   }); 
    
});

function cargardator1(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"<?php echo base_url(); ?>principal/cargaDatos1",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#contenedor-adjuntos2").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}

</script>

<!-- Script 3 -->

<script>

$(document).ready(function(){
$("#contenedoradjuntos2").hide();
    
  $("#noadjuntar2").click(function() {
$("#contenedoradjuntos2").fadeOut("slow"); 

});  
    
    $(".verarchivo2").click(function(){
        $("#contenedor-viewdocument2").show();
        $("#contenedor-adjuntosdocument2").fadeOut();        
    });
});

function adjunto2(){

     $("#contenedoradjuntos2").fadeIn("slow");
   var nombre2 = document.getElementById('archivo2').files[0].name;
     
    $("#titulodocumento2").text(nombre2);
    
}

 $("#formadjuntos2").submit(function(event){
    		event.preventDefault();
    		
    		var formData = new FormData($("#formadjuntos2")[0]);
    		$.ajax({
    			url:$("#formadjuntos2").attr("action"),
    			type:$("#formadjuntos2").attr("method"),
    			data:formData,
                cache:false,
    			contentType:false,
    			processData:false,    			
    			complete:function(data){
    			swal("Listo!","Se subio el archivo sin problemas","success");
                    $("#contenedoradjuntos2").fadeOut("slow"); 
                    $("#formadjuntos2")[0].reset();
                   cargardator62(); 
    			}
    		});
    	});

  
function cargardator62(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"<?php echo base_url(); ?>principal/cargaDatos61",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#files2").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}



</script>

<!-- Script 4 -->

<Script>

function adjuntoAA(){

$("#contenedoranexo2").fadeIn("slow");
var nombre = document.getElementById('anexo2').files[0].name;

$("#titulodocumentoa2").text(nombre);

}


$(function() {
$("#formagragaranexos2").validate({
     rules: {
               anexo2:{
                   required: true
               },
               txtdescripcionanexos2: {
                   required: true,
                   minlength: 50,
                   maxlength: 150
               },
           },
           messages: {
               anexo2: {
                   required: "Por seleciona el adjunto que desea agregar"
               },
                   txtdescripcionanexos2: {
                   required: "Por favor ingresa la descripcion del anexo",
                   minlength: "la descripcion debe tener minimo de 50 caracteres",
                   maxlength: "Excedio los 150 caracteres para la descripcion"
               }
           },
   submitHandler: function(form,event) {
event.preventDefault(); 
   var formData = new FormData($("#formagragaranexos2")[0]);
       $.ajax({
           url:$("#formagragaranexos2").attr("action"),
           type:$("#formagragaranexos2").attr("method"),
           data:formData,
           cache:false,
           contentType:false,
           processData:false,    			
           success:function(data){
               
               
           if (data != "no"){
               swal("Listo!","Se subio el anexo sin problemas","success");
                $("#container-div-agragranexos2").hide();
              cargardator92();
               cargaDatos93();
           }else{
            swal("Opps!","El adjunto debe pesar como maximo 512 MB","error");
                $("#container-div-agragranexos2").hide();
              cargardator92();
               cargaDatos93();
           }
               
           

           }
       });
    
    
        
 
   
}
}); 

});

function cargardator92(){
               $.ajax({
                   // cargamos url a nuestro contralador y método indicado
                   url:"<?php echo base_url(); ?>principal/cargaDatos92",
                   type:"POST",
                   success:function(data){
                       if(data){
                           $("#contentanexo2").html(data);
                       }
                       else{
                           alert("error");
                       }
                   }
               });
}
function cargardator93(){
               $.ajax({
                   // cargamos url a nuestro contralador y método indicado
                   url:"<?php echo site_url();?>/principal/cargaDatos93",
                   type:"POST",
                   success:function(data){
                       if(data){
                           $("#btn-anexos2").html(data);
                       }
                       else{
                           alert("error");
                       }
                   }
               });
}

</Script>

<!-- Script 5 -->

<script>

    
$(document).ready(function(){
   $("#formcomentarios2").submit(function(event){
            event.preventDefault();
                $.ajax({
                url:$("#formcomentarios2").attr("action"),
                type:$("#formcomentarios2").attr("method"),
                data:$("#formcomentarios2").serialize(),
                success :function(respuesta){
                    if(respuesta == 'false'){
                        swal("Opps!","Hubo un error intenta mas tarde","error");
                    }else{
                swal("Se comento","sin problemas","success");
                    $("#formcomentarios2")[0].reset();
                cargardator71();}
			}
		});
                 
            });
});

function cargardator71(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"<?php echo base_url(); ?>principal/cargaDatos71",
                        type:"POST",
                        data:$("#formcomentarios2").serialize(),
                        success:function(data){
                            if(data){
                                $("#contendorcomnetarios2").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}


$(document).ready(function () {
$("#btncomentarios2").click(function(){
 
    $("#menucomentarios2").css({"width": "25%", "left": "75%","background-color": "#fffefd"});
     $("#formcomentarios2").css({"opacity":"1"});
    $(".embed-container").css({"width": "70%"});
     $("#span2").removeClass("glyphicon glyphicon-arrow-left");
    $("#span2").addClass("glyphicon glyphicon-arrow-right");  
    
});
});

$(document).ready(function () {
$("#btncomentarios2").dblclick(function(){
 
    $("#menucomentarios2").css({"width": "10%", "left": "96%","background-color": "transparent"});
    $("#formcomentarios2").css({"opacity":"0"});
    $(".embed-container").css({"width": "95%"});
     $("#span2").removeClass("glyphicon glyphicon-arrow-right");
     $("#span2").addClass("glyphicon glyphicon-arrow-left");

   
});
});

$(document).ready(function(){
$("#btn-atras3").click(function() {
window.location.href = "<?php echo base_url(); ?>principal";

});
});

</script>

<!-- Script 6 -->

<script>

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

$(document).ready(function(){
$("#formcargardocumento2").submit(function(event){
           // event.preventDefault();
                $.ajax({
                url:$("#formcargardocumento2").attr("action"),
                type:$("#formcargardocumento2").attr("method"),
                data:$("#formcargardocumento2").serialize(),
                complete :function(respuesta){      
                  
                 cargardator8();
			}
		});
                 
            });
    
});

function cargardator8(){
                    $.ajax({
                        url:"<?php echo base_url(); ?>principal/cargaDatos8",
                        type:"POST",
                        data:$("#formcargardocumento2").serialize(),
                        success:function(data){
                            if(data){
                                $("#contenedor-viewdocument2").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });    
}




</script>

<!-- Script 4 2 -->

<script>

$(document).ready(function(){
$("#contenedoradjuntos").hide();
    
  $("#noadjuntar").click(function() {
$("#contenedoradjuntos").fadeOut("slow"); 

});  
    

});

function adjunto(){

     $("#contenedoradjuntos").fadeIn("slow");
   var nombre = document.getElementById('archivo').files[0].name;
     
    $("#titulodocumento").text(nombre);
    
}

$(document).ready(function(){
 $("#formadjuntos").submit(function(event){
             var formData = new FormData($("#formadjuntos")[0]);
    		event.preventDefault();
    		$.ajax({
    			url:$("#formadjuntos").attr("action"),
    			type:$("#formadjuntos").attr("method"),
    			data:formData,
                cache:false,
    			contentType:false,
    			processData:false,    			
    			success:function(data){
                    
                if (data !="no"){
                    swal("Listo!","Se subio el archivo sin problemas","success");                  
                   cargardator6(); 
                $("#contenedoradjuntos").fadeOut();
                      $("#formadjuntos")[0].reset();
                }else{
                    swal("Opps!","El adjunto no cumple con las recomendaciones","error");
                         $("#contenedoradjuntos").fadeOut();
                      $("#formadjuntos")[0].reset();
                }    
    			
    			}
    		});
    	});
});

function cargardator6(){
                    $.ajax({
                      url:"<?php echo base_url(); ?>principal/cargaDatos6",
                        type:"POST",
                        success:function(data){  
                         $("#files").empty();
                         $("#files").html(data);
                        }
                    });
}


</script>

<!-- script 6 2 -->

<script>

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

$(document).ready(function(){
$("#formcargardocumento").submit(function(event){
           // event.preventDefault();
                $.ajax({
                url:$("#formcargardocumento").attr("action"),
                type:$("#formcargardocumento").attr("method"),
                data:$("#formcargardocumento").serialize(),
                complete :function(respuesta){      
                  
                 cargardator8();
			}
		});
                 
            });
    
});
function cargardator8(){
                    $.ajax({
                        url:"<?php echo base_url(); ?>principal/cargaDatos8",
                        type:"POST",
                        data:$("#formcargardocumento").serialize(),
                        success:function(data){
                            if(data){
                                $("#contenedor-viewdocument").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });    
}

</script>

<!-- Script 7 -->

<script>

    

$(function() {
   $("#formagragaranexos").validate({
      	rules: {
					anexo:{
						required: true
					},
					txtdescripcionanexos: {
						required: true,
						minlength: 50,
                        maxlength: 150
					},
				},
				messages: {
					anexo: {
						required: "Por seleciona el adjunto que desea agregar"
					},
						txtdescripcionanexos: {
						required: "Por favor ingresa la descripcion del anexo",
						minlength: "la descripcion debe tener minimo de 50 caracteres",
                        maxlength: "Excedio los 150 caracteres para la descripcion"
					}
				},
        submitHandler: function(form,event) {
     event.preventDefault(); 
        var formData = new FormData($("#formagragaranexos")[0]);
    		$.ajax({
    			url:$("#formagragaranexos").attr("action"),
    			type:$("#formagragaranexos").attr("method"),
    			data:formData,
                cache:false,
    			contentType:false,
    			processData:false,    			
    			success:function(data){
                    
                    if (data != "no"){
                        swal("Listo!","Se subio el anexo sin problemas","success");
                     $("#container-div-agragranexos").hide();
                   cargardator9();
                    cargaDatos91();
                    }else{
                        swal("Opps!","El adjunto debe pesar como maximo 512 MB","error");
                     $("#container-div-agragranexos").hide();
                   cargardator9();
                    cargaDatos91();
                    }
    			
    
    			}
    		});
         
         
             
      
        
    }
   }); 
    
});

function cargardator9(){
                    $.ajax({
                        url: "<?php echo base_url(); ?>principal/cargaDatos9",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#contentanexo").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}
function cargardator91(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"<?php echo base_url(); ?>principal/cargaDatos91",
                        type:"POST",
                        success:function(data){
                            if(data){
                                $("#btn-anexos").html(data);
                            }
                            else{
                                alert("error");
                            }
                        }
                    });
}

</script>