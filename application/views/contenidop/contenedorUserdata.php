<div id="Userdata">
        <ul class="nav navbar-nav navbar-right">
           
            <li id="datosuser" class="dropdown">
                <a href="#" class="dropdown-toggle" style="font-size:1.5em; padding: 19px 25px 19px 25px; font-family:'Gill Sans MT';font-weight: 100;" data-toggle="dropdown">
                    <span>
                        <?php foreach ($usuarios as $user){
                            echo $user->nombre1;} 
                        ?>
                    </span>
                    <span class="caret"></span>
                </a>
                
                <ul class="dropdown-menu">
                    <li>
                        <div class="navbar-login">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-center">
                                        <span class="glyphicon glyphicon-user icon-size"></span>
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-left">
                                        <strong>
                                            <?php foreach ($usuarios as $user){
                                                echo $user->nombre1; echo" "; echo $user->nombre2; } 
                                            ?>
                                        </strong>
                                    </p>
                                    <p class="text-left small">
                                        <?php foreach ($usuarios as $user){
                                            echo $user->apellidos;
                                        } 
                                        ?>
                                    </p> 
                                    <p class="text-left small">
                                        <?php foreach ($usuarios as $user){
                                            echo $user->codigo;
                                        } 
                                        ?>
                                    </p>
                                    <p class="text-left small">
                                        <?php foreach ($usuarios as $user){
                                            echo $user->tel;
                                        }
                                        ?>
                                    </p> 
                                    <p class="text-left small">
                                        <?php foreach ($usuarios as $user){
                                            echo $user->email;
                                        } 
                                        ?>
                                    </p> 
                                    <p class="text-left">
                                        <a id="btn-editar" class="btn btn-primary btn-block btn-sm"  >Actualizar Datos</a>
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
                                        <a href="<?php echo base_url(); ?>login/cerrarsession" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            
            <li>
                <a id="btninicio" style="font-size:1.5em; padding: 19px 25px 19px 25px; font-family:'Gill Sans MT';font-weight: 100;" data-toggle="modal" data-target="#myModal6">    
                    <span class="glyphicon glyphicon-question-sign"></span>
                </a>
            </li>
            
        </ul>
        </div>

    
        <script>
    
        $(document).ready(function(){
    
                $("#btn-editar").click(function() {
                    $("#container-div-actualizar").show(); 
                });
                $("#cerradatos").click(function() {
                    $("#container-div-actualizar").hide(); 

                });
                $("#cancelar-info").click(function() {
                    $("#container-div-actualizar").hide(); 

                });
            });
            
        </script>
    
    </div>
    </div>
</div>
</div>