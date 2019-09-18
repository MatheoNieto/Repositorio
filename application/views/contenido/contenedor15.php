
 <script src="<?php echo base_url(); ?>scripts/script.js " ></script> 
 <script src="<?php echo base_url(); ?>scripts/script2.js " ></script> 


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