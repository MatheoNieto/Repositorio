
 <!-- <script src="<?php echo base_url(); ?>scripts/script.js " ></script>  -->
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
       
</body>
</html>