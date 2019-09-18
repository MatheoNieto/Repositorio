<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href= "<?php echo base_url(); ?>css/images/favicon.ico" />
        <title>Bienvenido al Repositorio</title>
        <!-----------------------------------css----------------------->
        <link rel = "stylesheet" type = "text/css" 
        href = "<?php echo base_url(); ?>css/style.css">
          <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css"/> 
        <link rel = "stylesheet" type = "text/css" 
        href = "<?php echo base_url(); ?>css/main.css">  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />

                   
        <!-----------------------------------css----------------------->
           <script src="<?php echo base_url(); ?>scripts/jquery2.js" ></script>
            <script src="<?php echo base_url(); ?>scripts/jquery.validate.js " ></script> 
              <script src="<?php echo base_url(); ?>scripts/sweetalert2.js " ></script>
           <script src="<?php echo base_url(); ?>scripts/scriptlogin.js" ></script> 
    </head>
    <body onload="nobackbutton()" style="padding:10px">
        <center>
            <div id="bg"></div>
            <header id="header1">
                <img id="img1" src="<?php echo base_url(); ?>css/images/Imagen1.png" width="100%" height="100%" >                
            </header>
            <div class="col-sm-3"></div>
            
            <header id="header" class="col-sm-6">
            <h1>ACCESO  AL REPOSITORIO</h1>
            <h2>De antproyectos e informes finales</h2>
            <br>
                <div class="login-page">
                   
                    <div class="form">
                     
                      <form id="fomrlogin" action="<?php base_url();?>login/iniciar" method="POST">
                            <input type="text" name="codigo" id="usuario" class="usuario" placeholder="Ingrese el c&oacute;digo" required/>
                            <input type="password" name="password" id="contrasena" class="contraseña" placeholder="Ingrese la contraseña"/>
                            <button type="submit" name="login" id="login">INGRESAR</button>
                            <!-- Single button -->

                       </form>
                       
                       <div class="dropup">
                            <button class="btn btn-default dropdown-toggle" type="button" id="btolcontra" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Olvido su contraseña?
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><p style="text-align: center; font-size:1.3em; ">Restablecer contraseña</p></li> 
                                <li>
                                <form id="formrestablecer" action="<?php base_url();?>login/restablecer" method="post">
                                    <div class="form-group"> 
                                        <div class="col-md-12">
                                            <input type="email" class="form-control" placeholder="Pepito@ucp.edu.co" name="txtcorreo" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                               <input type="submit" class="form-control" value="Restablecer"/>

                                        </div>
                                    </div>
                                </form>
                                <p style="font-size: 1em; margin:3px;"><strong>Nota:</strong>En el correo llegara un link para restablecer la contraseña</p></li>
                            </ul>
                        </div>
                        <a href="<?php echo site_url('login/invitado'); ?>">Ingresar como invitado</a><br>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a style="font-size:1.5em; padding: 12px 25px 12px 25px; font-family:'Gill Sans MT';font-weight: 100;" data-toggle="modal" data-target="#myModal6">    
                                <span class="glyphicon glyphicon-question-sign"></span>
                                </a>
                            </li>
                        </ul><br>
                        
                    </div>
                </div>            
            </header>
        </center>
     
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

