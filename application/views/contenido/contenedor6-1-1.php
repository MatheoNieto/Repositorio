   <br><br>
           </div>           

                 
            </div>
        </div> 
    </body>
</html>  

<script>
                    

$(document).ready(function(){
   $("#formcomentarios").submit(function(event){
            event.preventDefault();
                $.ajax({
                url:$("#formcomentarios").attr("action"),
                type:$("#formcomentarios").attr("method"),
                data:$("#formcomentarios").serialize(),
                complete :function(){                    
                 
                         $("#formcomentarios")[0].reset();
			}
		});
                 
            });
});

    $(document).ready(function() {
      var refreshId =  setInterval( function(){
             var valor = $("#txtidadjunto").val();
     var parametros = {"id" : valor};
    
                    $.ajax({
                        url:"http://localhost/Dropbox/proyecto/repositorio/principal/cargaDatos7",
                        type:"POST",
                        data:parametros,
                        success:function(data){                                     $("#contendorcomnetarios").empty; $("#contendorcomnetarios").html(data);
                            
                          
                        }
                    });
   
   }, 1000 );
});

    

$(document).ready(function () {
$("#btncomentarios").click(function(){
 
    $("#menucomentarios").css({"width": "25%", "left": "75%","background-color": "#fffefd"});
     $("#formcomentarios").css({"opacity":"1"});
    $(".embed-container").css({"width": "70%"});
     $("#span").removeClass("glyphicon glyphicon-arrow-left");
    $("#span").addClass("glyphicon glyphicon-arrow-right");  
    
});
});

$(document).ready(function () {
$("#btncomentarios").dblclick(function(){
 
    $("#menucomentarios").css({"width": "0%", "left": "97.5%","background-color": "transparent"});
    $("#formcomentarios").css({"opacity":"0"});
    $(".embed-container").css({"width": "98%"});
     $("#span").removeClass("glyphicon glyphicon-arrow-right");
     $("#span").addClass("glyphicon glyphicon-arrow-left");

   
});
});

$(document).ready(function(){
$("#btn-atras2").click(function() {
window.location.href = "http://localhost/Dropbox/proyecto/repositorio/principal";
   
});
});
</script> 