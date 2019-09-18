    </div>
           </fieldset>
                </form>
           
            </div>
        </div> 
    </body>
</html>
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
                    $("#formcomentarios2")[0].reset();
               }
			}
		});
                 
            });
});
 $(document).ready(function() {
      var refreshId =  setInterval( function(){
        var valor = $("#txtidadjunto2").val();
     var parametros = {"id" : valor};
          
    $.ajax({
       url:"<?php echo base_url(); ?>principal/cargaDatos71",
        type:"POST",
        data:parametros,
        success:function(data){
            
                $("#contendorcomnetarios2").empty();
                $("#contendorcomnetarios2").html(data);
            
           
        }
    });

   }, 1000 );
});
    
    
    
    
    
    
    
    

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