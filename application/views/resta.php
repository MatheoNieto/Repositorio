<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href= "<?php echo base_url(); ?>css/images/favicon.ico" />
    
    <title>Restableciendo la contrasena</title>
    
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel = "stylesheet" type = "text/css" 
        href = "<?php echo base_url(); ?>css/styleretablecer.css">
        
        
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="<?php echo base_url(); ?>scripts/scriptrestablecer.js" ></script>
</head>

<body onload="nobackbutton()">
<div class="main" style="padding:2%;margin-top:5%;">        	
 <div class="col-lg-12">
         <div class="container">          	 
               <div class="col-lg-4"></div>
				 <div class="col-lg-4">
				 <div class="row grids text-center">
					<div class="view view-tenth">
					    <!--  <a href="single.html">-->
						   <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo base_url(); ?>css/images/perfil/ordenador.png" class="img-responsive" alt="" style="margin:0% auto;"/>
                     </div>
					<div class="label-product">
						<span class="new">Restablecer contrese&ntilde;a</span> 
					</div>
					<div class="mask" style="width:100% !important;">
						<h2>Bienvenido</h2>
                        <div class="main">
							<form id="cambiarcontra" action="<?php base_url();?>ee23dbaf02c1c082b56eea35e59adbf/modificar" method="post">
							<label for="">Ingrese el codigo</label>
							<input type="text" class="text" 
							placeholder="106547892"
							value="Aqui va el codigo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Aqui va el codigo';}" name="codigo" >
							<label for="">Ingrese la nueva contrase&ntilde;a</label>
							<input type="password" 
							placeholder="12345678"
							value="Aui va la contrasena" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Aui va la contrasena';}" id="contrasena" name="password" required>
							<div class="submit">
							
							<input type="submit"  value="Restablecer" ></div>
							<div class="clearfix"></div>
							</form>
						</div>
					</div>
							
			        </div>
					</div>
			        </div>
				    <!--  </a> -->
				</div>
		</div>
		
        </div>
        
  </div>




</body>

</html> 