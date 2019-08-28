
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
                        url:"http://localhost/Dropbox/proyecto/repositorio/principal/cargaDatos71",
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
window.location.href = "http://repositorioucp.com/principal";

});
});