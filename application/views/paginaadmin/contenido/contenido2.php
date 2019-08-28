</div>       
       
        <!-- Modal -->
        
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <center>
                        <div class="pull-center info">
                            <img src="<?php echo base_url(); ?>css/images/Imagen1.png" width="100%" height="100%" />
                        </div>
                    </center>

                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu Principal</li>
                    <li class="treeview">
                        <a id="inicio">
            <i class="fa fa-home"></i> <span>Inicio</span>
          </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
              <i class="fa fa-folder"></i> <span>Anteproyectos</span>  <span class="label label-success"><?php foreach ($countanteprocesotodos as $counanteprotodos){
                            echo $counanteprotodos->cuneta;} ?></span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
                        <ul class="treeview-menu">
                            <li ><a id="anteproceso" ><i class="fa fa-circle text-green"></i>En proceso <span class="label label-success"><?php foreach ($countanteproceso as $counantepro){
                            echo $counantepro->cuneta;} ?></span></a></li>
                            <li class="active"><a id="antesinrev"><i class="fa fa-circle text-red"></i> <span>Sin revisi&oacute;n <span class="label label-danger"><?php foreach ($countanteprocesosinrevi as $counanteprosinrevi){
                            echo $counanteprosinrevi->cuneta;} ?></span></span></a></li>
                            <li><a id="anteterminados"><i class="fa fa-circle text-green"></i>Terminados <span class="label label-success"><?php foreach ($countanteprocesotermi as $counanteprotermi){
                            echo $counanteprotermi->cuneta;} ?></span></a></li>
                            <li><a id="antetodos"><i class="fa fa-circle text-green"></i>Todos <span class="label label-success"><?php foreach ($countanteprocesotodos as $counanteprotodos){
                            echo $counanteprotodos->cuneta;} ?></span></a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
            <i class="fa fa-folder"></i> <span>Informes Finales</span>
             <span class="label label-success"><?php foreach ($cantidaddeinformestodos as $counanteprosinrevi){
                            echo $counanteprosinrevi->cuneta;} ?></span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
                        <ul class="treeview-menu">
                             <li><a id="inforproceso"><i class="fa fa-circle text-green"></i>En proceso <span class="label label-success"><?php foreach ($cantinforme as $cantidadinforme){
                            echo $cantidadinforme->cuneta;} ?></span></a></li>
                             <li><a id="informesininiciar"> <i class="fa fa-circle text-yellow"></i>Sin iniciar <span class="label label-warning"><?php foreach ($cantinformesini as $counanteprosinrevi){
                            echo $counanteprosinrevi->cuneta;} ?></span></a></li>
                            <li class="active"><a id="informesinrevi"><i class="fa fa-circle text-red"></i> <span>Sin revisi&oacute;n <span class="label label-danger"><?php foreach ($cantinformesinrevi as $counanteprosinrevi){
                            echo $counanteprosinrevi->cuneta;} ?></span></span></a></li>
                            <li><a id="informeterminados"><i class="fa fa-circle text-green"></i>Terminados <span class="label label-success"><?php foreach ($cantinfoterminados as $counanteprosinrevi){
                            echo $counanteprosinrevi->cuneta;} ?></span></a></li>
                            <li><a id="informetodos"><i class="fa fa-circle text-green"></i>Todos <span class="label label-success"><?php foreach ($cantidaddeinformestodos as $counanteprosinrevi){
                            echo $counanteprosinrevi->cuneta;} ?></span></a></li>
                        </ul>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Repositorio &raquo;
                    <small id="donde">Inicio</small>
                </h1>

            </section>

            <!-- Main content -->
            <section class="content" id="widgesprinciapl">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    
                    <!-- ./col -->
                    <div class="col-md-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3><?php foreach($cantestudiantes as $cant){ echo $cant->cantestudiantes;} ?></h3>

                                <p>Estudiantes registrados</p>
                            </div>
                            <div class="icon">
                                <i class="ion-android-contacts"></i>
                            </div>
                           <a data-toggle="modal" data-target="#modaluserest" class="small-box-footer">Mas informaci&oacute;n <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                                        
                    
                      <!-- Modal -->
                      <div class="modal fade" id="modaluserest" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Estudiantes Registrados</h4>
                            </div>
                            <div class="modal-body">
                            
                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalresgitrasestuds">Registrar un nuevo estudiante</button>
                                    
                            <table id="" class="table table-striped table-bordered display" style="width:100%">
                            
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombres y apellidos</th>
                                    <th>telefono</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>