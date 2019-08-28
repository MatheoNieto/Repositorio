 </table>                            </div>
                           
                          </div>
                        </div>
                      </div>
                    
                    <!-- Modal -->
  <div class="modal fade" id="datospersonales" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos personales del estudiante</h4>
        </div>
        <div class="modal-body">
          <form id="formularismodiestudiante" method="post" action="<?php base_url();?>admin/modificarstudents" autocomplete="off">
    <div class="form-group">
      <label for="email">codigo:</label>
      <input type="text" id="codigoantiguo" name="codigoantiguo" style="display:none;">
      <input type="text" class="form-control" id="codigomodiicar" placeholder="1088345278" name="codigomodiicar">
    </div>
    <div class="form-group">
     <div class="col-md-4"> 
     <label for="pwd">Primer Nombre:</label>
      <input type="text" class="form-control" id="primernombre" placeholder="Pepito" name="primernombre">
      </div>  <div class="col-md-4"> 
     <label for="pwd">Segundo Nombre:</label>
      <input type="text" class="form-control" id="secondnombre" placeholder="Alvarito" name="secondnombre">
      </div>  <div class="col-md-4"> 
     <label for="pwd">Apellidos:</label>
      <input type="text" class="form-control" id="apellidos" placeholder="Perez Giraldo" name="apelllidos">
      </div>     
    </div>
    <br><br><br><br>
    <div class="form-group">
       <div class="col-md-6">
       <label for="">Correo</label>
       <input type="email" class="form-control" placeholder="pepito.perez@gmail.com" name="txtxmailmodifi" id="txtxmailmodifi"></div> 
       <div class="col-md-6">
       <label for="">telefono</label>
       <input type="text" class="form-control" placeholder="322456892" id="txtelefono" name="txtelefono"></div>        
    </div>
    <br><br><br><br>
    <div class="form-group">
        <div class="col-md-12">
        <button type="submit" class="btn btn-success form-control">Cambiar</button>
        </div>
    </div>
    <br><br>
    
  </form>
        </div>
      </div>
      
    </div>
  </div>
                   
                   
                   
                             <!-- Modal -->
  <div class="modal fade" id="modalresgitrasestuds" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registrando un nuevo estudiante</h4>
        </div>
        <div class="modal-body">
          <form id="formregisstudents" method="post" action="<?php base_url();?>admin/regis" autocomplete="off">
    <div class="form-group">
      <label for="email">codigo:</label>
      <input type="text" class="form-control" id="txtcodigoregis" placeholder="1088345278" name="txtcodigoregis">
    </div>
    <div class="form-group">
     <div class="col-md-4"> 
     <label for="pwd">Primer Nombre:</label>
      <input type="text" class="form-control" id="txtprimernombre" placeholder="Pepito" name="txtprimernombre">
      </div>  <div class="col-md-4"> 
     <label for="pwd">Segundo Nombre:</label>
      <input type="text" class="form-control" id="txtsegundonombreregis" placeholder="Alvarito" name="txtsegundonombreregis">
      </div>  <div class="col-md-4"> 
     <label for="pwd">Apellidos:</label>
      <input type="text" class="form-control" id="txtapelldiosregis" placeholder="Perez Giraldo" name="txtapelldiosregis">
      </div>     
    </div>
    <br><br><br><br>
    <div class="form-group">
       <div class="col-md-6">
       <label for="">Correo</label>
       <input type="email" class="form-control" placeholder="pepito.perez@gmail.com" name="txtemailregistrar" id="txtemailregistrar"></div> 
       <div class="col-md-6">
       <label for="">telefono</label>
       <input type="text" class="form-control" placeholder="322456892" id="txtelefonoregistrar" name="txtelefonoregistrar"></div>        
    </div>
    <br><br><br><br>
    <div class="form-group">
        <div class="col-md-12">
        <button type="submit" class="btn btn-success form-control">Registrar</button>
        </div>
    </div>
    <br><br>
    
  </form>
        </div>
      </div>
      
    </div>
  </div>
  
  
  
  
  
  
  
                    <!-- ./col -->
                    <div class="col-md-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3><?php foreach($cantdocentes as $cantdocentes){ echo $cantdocentes->cantdocentes; } ?></h3>

                                <p>Docentes Registrados</p>
                            </div>
                            <div class="icon">
                                <i class="ion-person-stalker"></i>
                            </div>
                          <a data-toggle="modal" data-target="#modalprofessors" class="small-box-footer">Mas informaci&oacute;n <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                     <!-- Modal -->
                      <div class="modal fade" id="modalprofessors" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Profesores Registrados</h4>
                            </div>
                            <div class="modal-body">
                            
                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalresgitraprofe">Registrar un nuevo profesor</button>
                                    
                            <table id=""  class="table table-striped table-bordered display" style="width:100%">
                            
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombres y apellidos</th>
                                    <th>telefono</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            