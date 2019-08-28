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
                        url:"http://localhost/Dropbox/proyecto/repositorio/principal/cargaDatos8",
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


