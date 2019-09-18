<!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-default" id="headermenu" <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'style="background-color:rgba(0,0,0,0.65);"';}else{
    echo 'style="background-color:rgba(255,255,255,0.7);"';
}} ?> >
                <div class="container-fluid">

                <div class="navbar-header">
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                <span></span>
                <span></span>
                <span></span>
                </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><img id="avatar" src="<?php echo base_url(); ?>css/images/perfil/<?php foreach ($usuarios as $user){ echo $user->imgperfil; } ?>" width="35%" height="35%"> <?php foreach ($usuarios as $user){ echo $user->nombre1; } ?></a>
                <ul class="dropdown-menu">
                <li>
                <div class="navbar-login">
                <div class="row">
                <div class="col-lg-4">
                <center>
                <img src="<?php echo base_url(); ?>css/images/perfil/<?php foreach ($usuarios as $user){ echo $user->imgperfil; } ?>" 
                alt="Error cargar imagen perfil" class="img-responsive" /></center>

                </div>
                <div class="col-lg-8">
                <p class="text-left"><strong><?php foreach ($usuarios as $user){
                echo $user->nombre1; echo" "; echo $user->nombre2; } ?></strong></p>
                <p class="text-left small"><?php foreach ($usuarios as $user){
                echo $user->apellidos;}?></p>
                <p class="text-left small"><?php foreach ($usuarios as $user){
                echo $user->codigo;} ?></p>
                <p class="text-left small" id="tel"><?php foreach ($usuarios as $user){
                echo $user->tel;} ?></p>
                <p class="text-left small"><?php foreach ($usuarios as $user){
                echo $user->email;} ?></p>
                <p class="text-left">     
                </p>
                </div>
                </div>
                </div>
                </li>
                <li class="divider"></li>
                <li>
                <div class="navbar-login navbar-login-session">
                <div class="row">
                <div class="col-lg-12">
                <p>
                <a id="btn-editar" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                <a href="<?php echo base_url(); ?>login/cerrarsession" class="btn btn-danger btn-block">Cerrar Sesion</a>
                </p>
                </div>
                </div>
                </div>
                </li>
                </ul>
                </li>                                

                </ul>
                <ul class="nav navbar-nav navbar-right">
              <li>
                <a style="font-size:1.5em; padding: 29px 25px 29px 25px; font-family:'Gill Sans MT';font-weight: 100;" data-toggle="modal" data-target="#myModal6">    
                    <span class="glyphicon glyphicon-question-sign"></span>
                </a>
            </li>
          </ul>
                </div>
                
                </div>
                
                
            </nav>