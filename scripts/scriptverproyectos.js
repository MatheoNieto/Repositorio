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
    
});