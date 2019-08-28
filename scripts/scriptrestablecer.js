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
    
    $("#cambiarcontra").submit(function(eve){
        eve.preventDefault();
        var pass = $("#contrasena").val();
            $("#contrasena").val(pass+"*****-----");
                $.ajax({
			url:$("#cambiarcontra").attr("action"),
			type:$("#cambiarcontra").attr("method"),
			data:$("#cambiarcontra").serialize(),
			success :function(data){
                
                window.location.href = "http://repositorioucp.com/#no-back-button";

			}
});
    });
    

     
});