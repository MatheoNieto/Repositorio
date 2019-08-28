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

$(function() {
   $("#fomrlogin").validate({
      	rules: {
					codigo:{
						required: true,
                        maxlength: 20
					},
					password: {
						required: true,
						minlength: 2,
                        maxlength: 100
					},
				},
				messages: {
					codigo: {
						required: "Por favor ingresa el codigo",
                        maxlength: "Excedio los 20 caracteres"
					},
						password: {
						required: "Por favor ingresa la contrasena ",
						minlength: "la contrasena debe tener minimo de 10 caracteres",
                        maxlength: "Excedio los 20 caracteres para la contrasena"
					}
				},
        submitHandler: function(form,event) {
     
            var pass = $("#contrasena").val();
            $("#contrasena").val(pass+"*****-----");
            
                event.preventDefault();
                $.ajax({
			url:$("#fomrlogin").attr("action"),
			type:$("#fomrlogin").attr("method"),
			data:$("#fomrlogin").serialize(),
			success :function(data){

                if (data == 'false'){
                    swal("Oops!","Codigo o contrasena incorrecta", "error");
                    $("#contrasena").val("");
                }else{
                    location.reload();
                }

			},
       
		});
         
         
             
      
        
    }
       
   }); 
    
});




$(document).ready(function(){
    $("#formrestablecer").submit(function(ev){
        ev.preventDefault();
                $.ajax({
			url:$("#formrestablecer").attr("action"),
			type:$("#formrestablecer").attr("method"),
			data:$("#formrestablecer").serialize(),
            beforeSend: function () {
                        swal("Informacion!","Se esta enviando un link al correo para restablecer su contrasena por favor espere", "info");
                },
			success :function(data){
                if (data == 'false'){
                    swal("Oops!","Email incorrecto", "error");
                  
                }else{
                    swal("listo!","Al correo le llego un enlace para restablecer la contrasena","success");
                       url = "https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin";
                        window.open(url, '_blank');
             
                    
                }

			},
       
		});
        
        
        
       
    });
});