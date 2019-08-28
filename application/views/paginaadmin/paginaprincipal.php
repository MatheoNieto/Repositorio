<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>css/images/favicon.ico" />
    <title>Bienvenido &raquo; Admnistrador</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    
  
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssadmin/styleadmin.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssadmin/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssadmin/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssadmin/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssadmin/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssadmin/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssadmin/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssadmin/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssadmin/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/cssadmin/bootstrap3-wysihtml5.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAlert.css"/>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> 
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        
       
    
</head>

<body id="body" class="hold-transition skin-blue sidebar-mini" onload="nobackbutton(); loading();">


    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a target="_blank" href="http://repositorioucp.com/admin" class="logo">
   Repositorio TDS
    </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope"></i>
              
              <span class="label label-danger"><?php foreach ($countdifi as $difinum){echo $difinum->contardifi; } ?></span>
            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Usted tiene
                                    <?php foreach ($countdifi as $difinum){echo $difinum->contardifi; } ?> mensajes</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <?php
                    foreach ($contacto as $ayuda){

                date_default_timezone_set('America/Bogota');
                $fechafin =   date("Y/m/d H:i:s");
                        
                $fecha1 = new DateTime("$ayuda->fechasolicitud");
                $fecha2 = new DateTime("$fechafin");
                $fecha = $fecha1->diff($fecha2);
                        
                        echo ' <li>
                    <a onclick="informacionmensaje('.$ayuda->id.')" href="#" class="messages" data-toggle="modal" data-target="#modalmensajes">
                      <div class="pull-left">
                        <img src="'.base_url().'css/images/nota.png" class="imgemail" alt="correo" width="10%" height="10%">
                      </div>
                      <h4>'.$ayuda->asunto.'<small><i class="fa fa-clock-o"></i> ';
                        
                        if($fecha->m >0){
                              echo $fecha->m.' meses</small>
                      </h4>
                      <p>'.$ayuda->descripcion.'</p>
                    </a>
                  </li>'; 
                        }else{
                             if($fecha->d >0){
                              echo $fecha->d.' dias</small>
                      </h4>
                      <p>'.$ayuda->descripcion.'</p>
                    </a>
                  </li>'; 
                        }else{
                              if($fecha->h >0){
                              echo $fecha->h.' horas</small>
                      </h4>
                      <p>'.$ayuda->descripcion.'</p>
                    </a>
                  </li>'; }elseif($fecha->h ==0){
                              echo $fecha->i.' minutos</small>
                      </h4>
                      <p>'.$ayuda->descripcion.'</p>
                    </a>
                  </li>'; }
                        }
                        }
                                            }
                   ?>
                                    </ul>
                                </li>
                                
                                <li class="footer"><a><br></a></li>
                            </ul>
                        </li>
                
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>css/images/perfil/<?php foreach($datosadmin as $datosamdin){ echo $datosamdin->imgperfil;} ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php foreach($datosadmin as $datosamdin){echo ''.$datosamdin->nombre1.' '.$datosamdin->nombre2.' '.$datosamdin->apellidos;  } ?></span>
            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url(); ?>css/images/perfil/<?php foreach($datosadmin as $datosamdin){ echo $datosamdin->imgperfil;} ?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?php foreach($datosadmin as $datosamdin){echo ''.$datosamdin->nombre1.' '.$datosamdin->nombre2.' '.$datosamdin->apellidos;  } ?>
                                        <small>Administrador</small>
                                    </p>
                                </li>
                                <br>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="col-md-12">
                                        <a href="<?php echo base_url(); ?>login/cerrarsession" class="btn btn-default btn-flat">Cerrar Sesi&oacute;n</a>
                                    </div>
                                </li>
                                <br>
                            </ul>
                            
                        </li>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a style="font-size:1.5em; padding: 12px 25px 12px 25px; font-family:'Gill Sans MT';font-weight: 100;" data-toggle="modal" data-target="#myModal6">    
                                <span class="glyphicon glyphicon-question-sign"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                    
                </div>
            </nav>
        </header>

       <!-- Modal -->
  <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modalmensajes" >