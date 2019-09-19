                   </table>                            </div>
                           
                          </div>
                        </div>
                      </div>  
                      
                      <div class="modal fade" id="datospersonalesprofesor" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Datos personales del profesor</h4>
        </div>
        <div class="modal-body">
          <form id="formulariodocentemodificar" method="post" action="<?php base_url();?>admin/mofificarprofesor" autocomplete="off">
    <div class="form-group">
      <label for="email">codigo:</label>
      <input type="text" id="atigugocoidogprofesor" name="atigugocoidogprofesor" style="display:none;">
      <input type="text" class="form-control" id="codigomodiicarpro" placeholder="1088345278" name="codigomodiicarpro">
    </div>
    <div class="form-group">
     <div class="col-md-4"> 
     <label for="pwd">Primer Nombre:</label>
      <input type="text" class="form-control" id="primernombrepro" placeholder="Pepito" name="primernombrepro">
      </div>  <div class="col-md-4"> 
     <label for="pwd">Segundo Nombre:</label>
      <input type="text" class="form-control" id="secondnombrepro" placeholder="Alvarito" name="secondnombrepro">
      </div>  <div class="col-md-4"> 
     <label for="pwd">Apellidos:</label>
      <input type="text" class="form-control" id="apellidospro" placeholder="Perez Giraldo" name="apellidospro">
      </div>     
    </div>
    <br><br><br><br>
    <div class="form-group">
       <div class="col-md-6">
       <label for="">Correo</label>
       <input type="email" class="form-control" placeholder="pepito.perez@gmail.com" name="txtxmailmodifipro" id="txtxmailmodifipro"></div> 
       <div class="col-md-6">
       <label for="">telefono</label>
       <input type="text" class="form-control" placeholder="322456892" id="txtelefonopro" name="txtelefonopro"></div>        
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
                     
                     
                     
     <div class="modal fade" id="modalresgitraprofe" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registrando un nuevo profesor</h4>
        </div>
        <div class="modal-body">
          <form id="formularioregistrardocente" method="post" action="<?php base_url();?>admin/regisprofesor" autocomplete="off">
    <div class="form-group">
      <label for="email">codigo:</label>
      <input type="text" class="form-control" id="txtcodigoregispro" placeholder="1088345278" name="txtcodigoregispro">
    </div>
    <div class="form-group">
     <div class="col-md-4"> 
     <label for="pwd">Primer Nombre:</label>
      <input type="text" class="form-control" id="txtprimernombrepro" placeholder="Pepito" name="txtprimernombrepro">
      </div>  <div class="col-md-4"> 
     <label for="pwd">Segundo Nombre:</label>
      <input type="text" class="form-control" id="txtsegundonombreregispro" placeholder="Alvarito" name="txtsegundonombreregispro">
      </div>  <div class="col-md-4"> 
     <label for="pwd">Apellidos:</label>
      <input type="text" class="form-control" id="txtapelldiosregispro" placeholder="Perez Giraldo" name="txtapelldiosregispro">
      </div>     
    </div>
    <br><br><br><br>
    <div class="form-group">
       <div class="col-md-6">
       <label for="">Correo</label>
       <input type="email" class="form-control" placeholder="pepito.perez@gmail.com" name="txtemailregistrarpro" id="txtemailregistrarpro"></div> 
       <div class="col-md-6">
       <label for="">telefono</label>
       <input type="text" class="form-control" placeholder="322456892" id="txtelefonoregistrarpro" name="txtelefonoregistrarpro"></div>        
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
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3><?php foreach($cantisoli as $cantsol){ echo $cantsol->cantsoli;} ?></h3>

                                <p>Cantidad de solicitudes atendidas</p>
                            </div>
                            <div class="icon">
                                <i class="ion-clipboard"></i>
                            </div>
                            <a data-toggle="modal" data-target="#modalsolicitudes" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    
                      <!-- Modal -->
                      <div class="modal fade" id="modalsolicitudes" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Soluciones de los inconvenientes</h4>
                            </div>
                            <div class="modal-body">
                            
                                    
                            <table id=""  class="table table-striped table-bordered display" style="width:100%">
                            
                            <thead>
                                <tr>
                                    <th>Nombre del solicitante</th>
                                    <th>Email</th>
                                    <th>telefono</th>
                                    <th>Asunto</th>
                                    <th>Descripcion del inconveniente</th>
                                    <th>Fecha de solicitud</th>
                                </tr>
                            </thead>
                                <tbody>
         <?php 
            
            foreach ($solicitudesinfor as $solicitudes){
                echo '<tr>
                <td>'.$solicitudes->nombreyapellidos.'</td>
                <td>'.$solicitudes->email.'</td>
                <td>'.$solicitudes->telefono.'</td>
                <td>'.$solicitudes->asunto.'</td>
                <td>'.$solicitudes->descripcion.'</td>              
                <td>'.$solicitudes->fechasolicitud.'</td>             
                </tr>';
            }        
            
            ?>          
        </tbody>
                            
                    

                               </table>                
                              </div>
                           
                          </div>
                        </div>
                      </div> 
                    
                    
                    
                    
                    
                    
                </div>
                <!-- /.row -->
                <br><br>
                <div class="row">
                    
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-file-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Anexos Subidos</span>
                                <?php foreach ($anexos as $cantdoments) 
                                { $num1 = $cantdoments->cuntaanexos;
                                foreach ($anexos2 as $cantdoments2){
                                   $num2 = $cantdoments2->cuntaanexos2;
                                    
                                    $sumadocuments = $num1+$num2;
                                     echo ' <span class="info-box-number">'.$sumadocuments.'</span>';
                                }}?>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-file-pdf-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Documentos Subidos</span>
                               <?php foreach ($documentoss as $cantdoments) 
                                { $num1 = $cantdoments->cuntadocuments;
                                foreach ($documentoss2 as $cantdoments2){
                                   $num2 = $cantdoments2->cuntadocuments2;
                                    
                                    $sumadocuments = $num1+$num2;
                                     echo ' <span class="info-box-number">'.$sumadocuments.'</span>';
                                }}?>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-files-o"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Archivos total subidos</span>
                                <?php foreach ($anexos as $cantanexos) 
                                { $num1 = $cantanexos->cuntaanexos;
                                foreach ($anexos2 as $cantanexos2){
                                   $num2 = $cantanexos2->cuntaanexos2;
                                    
                                      foreach ($documentoss as $cantdoments) 
                                { $num3 = $cantdoments->cuntadocuments;
                                foreach ($documentoss2 as $cantdoments2){
                                   $num4 = $cantdoments2->cuntadocuments2;
                                    
                                    $sumadocuments = $num1+$num2+$num3+$num4;
                                     echo ' <span class="info-box-number">'.$sumadocuments.'</span>';
                                            }
                                        } 
                                    }  
                                }
                                    
                                
                                    
                                    
                                    
                                    ?>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </section>
            <!-----------------------------------------------------------
            anteproyecto
            ----------------------------------------------------------->
            <section class="content" id="antenproceodiv">             
<br>

<div id="anteproyectotitulo" class="col-sm-5" style="margin:10px;">
<h2>Titulos de los anteproyectos</h2>
  <input id="buscadortitulos" class="search" type="text" name="search" placeholder="Buscar.....">
<br><br>
<?php
    foreach($anteproceso as $antepro){
        
        echo '<div class="item"><button class="accordion titulos">'.$antepro->titulo.'</button>
<div class="panel">
<p><strong>Autores: </strong>'.$antepro->autor1.', '.$antepro->autor2.'</p>
<p><strong>Descripcion: </strong>'.$antepro->descripcion.'</p>
<p><strong>Fecha de creacion: </strong>'.$antepro->fecha_creacion.'</p>';
 ?><?php
        $suma=$antepro->descripcionproblema+$antepro->objetivos+$antepro->justificacion+$antepro->Antecedentes+$antepro->marcoc+$antepro->marcot+$antepro->alcance+$antepro->cronograma+$antepro->presupuesto+$antepro->bibliografia;
    if($suma > 0){
       echo'
<p><strong>Avance del anteproyecto: </strong>'.$suma.'0%</p>

</div></div>'; 
    }else{
         echo'
<p><strong>Avance del anteproyecto: </strong>'.$suma.'%</p>

</div></div>';    
    }
        

    }
    
  ?> 


</div>

<div class="col-sm-1" ></div>

<div id="anteproyectoautor" class="col-sm-5" style="margin:10px;">
<h2>Autores de los anteproyectos</h2>
  <input id="buscardorautor" class="search" type="text" name="search" placeholder="Buscar.....">
<br>
<br>
<?php
    foreach($anteprocesoautor1 as $anteproauto1){
        echo '<div class="item"><button class="accordion autor">'.$anteproauto1->autor1.'</button>
<div class="panel">
<p><strong>Titulo del anteproyecto: </strong>'.$anteproauto1->titulo.'</p>
<p><strong>Segundo autor: </strong>'.$anteproauto1->autor2.'</p>
<p><strong>Descripcion: </strong>'.$anteproauto1->descripcion.'</p>
<p><strong>Fecha de creacion: </strong>'.$antepro->fecha_creacion.'</p>';
 ?><?php
        $suma1=$anteproauto1->descripcionproblema+$anteproauto1->objetivos+$anteproauto1->justificacion+$anteproauto1->Antecedentes+$anteproauto1->marcoc+$anteproauto1->marcot+$anteproauto1->alcance+$anteproauto1->cronograma+$anteproauto1->presupuesto+$anteproauto1->bibliografia;
    if($suma1 > 0){
       echo'
<p><strong>Avance del anteproyecto: </strong>'.$suma1.'0%</p>

</div></div>'; 
    }else{
         echo'
<p><strong>Avance del anteproyecto: </strong>'.$suma1.'%</p>

</div></div>';    
    }
        

    }
    
  ?> 
   <?php
    foreach($anteprocesoautor2 as $anteproauto2){
        if($anteproauto2->autor2 != ""){        
        
        
        echo '<div class="item"><button class="accordion autor">'.$anteproauto2->autor2.'</button>
<div class="panel">
<p><strong>Titulo del anteproyecto: </strong>'.$anteproauto2->titulo.'</p>
<p><strong>Primer autor: </strong>'.$anteproauto2->autor1.'</p>
<p><strong>Descripcion: </strong>'.$anteproauto2->descripcion.'</p>
<p><strong>Fecha de creacion: </strong>'.$antepro->fecha_creacion.'</p>';
 ?><?php
        $suma2=$anteproauto2->descripcionproblema+$anteproauto2->objetivos+$anteproauto2->justificacion+$anteproauto2->Antecedentes+$anteproauto2->marcoc+$anteproauto2->marcot+$anteproauto2->alcance+$anteproauto2->cronograma+$anteproauto2->presupuesto+$anteproauto2->bibliografia;
    if($suma2 > 0){
       echo'
<p><strong>Avance del anteproyecto: </strong>'.$suma2.'0%</p>

</div></div>'; 
    }else{
         echo'
<p><strong>Avance del anteproyecto: </strong>'.$suma2.'%</p>

</div></div>';    
    }
        }

    }
    
  ?> 



                </div>

            </section>
            
            <section class="content" id="antensinrediv">             
                <br>

                <div id="anteproyectotitulo" class="col-sm-5" style="margin:10px;">
                <h2>Titulos de los anteproyectos</h2>
                  <input id="buscadortitulos2" class="search" type="text" name="search" placeholder="Buscar.....">
                <br><br>
                <?php
                    foreach($anteprocesosinrevi as $anteprosinrevi){

                        echo '<div class="item"><button class="accordion titulos2">'.$anteprosinrevi->titulo.'</button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$anteprosinrevi->autor1.', '.$anteprosinrevi->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$anteprosinrevi->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$anteprosinrevi->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$anteprosinrevi->descripcionproblema+$anteprosinrevi->objetivos+$anteprosinrevi->justificacion+$anteprosinrevi->Antecedentes+$anteprosinrevi->marcoc+$anteprosinrevi->marcot+$anteprosinrevi->alcance+$anteprosinrevi->cronograma+$anteprosinrevi->presupuesto+$anteprosinrevi->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 


                </div>

                <div class="col-sm-1" ></div>

                <div id="anteproyectoautor" class="col-sm-5" style="margin:10px;">
                <h2>Autores de los anteproyectos</h2>
                  <input id="buscardorautor2" class="search" type="text" name="search" placeholder="Buscar.....">
                <br>
                <br>
                <?php
                    foreach($anteprocesoautor1sinrevi as $anteproauto1sinrevi){
                        echo '<div class="item"><button class="accordion autor2">'.$anteproauto1sinrevi->autor1.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$anteproauto1sinrevi->titulo.'</p>
                <p><strong>Segundo autor: </strong>'.$anteproauto1sinrevi->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$anteproauto1sinrevi->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$anteproauto1sinrevi->fecha_creacion.'</p>';
                 ?><?php
                        $suma1=$anteproauto1sinrevi->descripcionproblema+$anteproauto1sinrevi->objetivos+$anteproauto1sinrevi->justificacion+$anteproauto1sinrevi->Antecedentes+$anteproauto1sinrevi->marcoc+$anteproauto1sinrevi->marcot+$anteproauto1sinrevi->alcance+$anteproauto1sinrevi->cronograma+$anteproauto1sinrevi->presupuesto+$anteproauto1sinrevi->bibliografia;
                    if($suma1 > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma1.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma1.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 
                   <?php
                    foreach($anteprocesoautor2sinrevi as $anteproauto2sinrevi){
                        if($anteproauto2sinrevi->autor2 != ""){        


                        echo '<div class="item"><button class="accordion autor2">'.$anteproauto2sinrevi->autor2.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$anteproauto2sinrevi->titulo.'</p>
                <p><strong>Primer autor: </strong>'.$anteproauto2sinrevi->autor1.'</p>
                <p><strong>Descripcion: </strong>'.$anteproauto2sinrevi->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$anteproauto2sinrevi->fecha_creacion.'</p>';
                 ?><?php
                        $suma2=$anteproauto2sinrevi->descripcionproblema+$anteproauto2sinrevi->objetivos+$anteproauto2sinrevi->justificacion+$anteproauto2sinrevi->Antecedentes+$anteproauto2sinrevi->marcoc+$anteproauto2sinrevi->marcot+$anteproauto2sinrevi->alcance+$anteproauto2sinrevi->cronograma+$anteproauto2sinrevi->presupuesto+$anteproauto2sinrevi->bibliografia;
                    if($suma2 > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma2.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma2.'%</p>

                </div></div>';    
                    }
                        }

                    }

                  ?> 



                                </div>

            </section>
               
           <section class="content" id="antenterminadosdiv">             
                <br>

                <div id="anteproyectotitulo" class="col-sm-5" style="margin:10px;">
                <h2>Titulos de los anteproyectos</h2>
                  <input id="buscadortitulos3" class="search" type="text" name="search" placeholder="Buscar.....">
                <br><br>
                <?php
                    foreach($anteprocesotermi as $anteprotermi){

                        echo '<div class="item"><button class="accordion titulos3">'.$anteprotermi->titulo.'</button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$anteprotermi->autor1.', '.$anteprotermi->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$anteprotermi->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$anteprotermi->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$anteprotermi->descripcionproblema+$anteprotermi->objetivos+$anteprotermi->justificacion+$anteprotermi->Antecedentes+$anteprotermi->marcoc+$anteprotermi->marcot+$anteprotermi->alcance+$anteprotermi->cronograma+$anteprotermi->presupuesto+$anteprotermi->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 


                </div>

                <div class="col-sm-1" ></div>

                <div id="anteproyectoautor" class="col-sm-5" style="margin:10px;">
                <h2>Autores de los anteproyectos</h2>
                  <input id="buscardorautor3" class="search" type="text" name="search" placeholder="Buscar.....">
                <br>
                <br>
                <?php
                    foreach($anteprocesoautor1termi as $anteproauto1termin){
                        echo '<div class="item"><button class="accordion autor3">'.$anteproauto1termin->autor1.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$anteproauto1termin->titulo.'</p>
                <p><strong>Segundo autor: </strong>'.$anteproauto1termin->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$anteproauto1termin->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$anteproauto1termin->fecha_creacion.'</p>';
                 ?><?php
                        $suma1=$anteproauto1termin->descripcionproblema+$anteproauto1termin->objetivos+$anteproauto1termin->justificacion+$anteproauto1termin->Antecedentes+$anteproauto1termin->marcoc+$anteproauto1termin->marcot+$anteproauto1termin->alcance+$anteproauto1termin->cronograma+$anteproauto1termin->presupuesto+$anteproauto1termin->bibliografia;
                    if($suma1 > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma1.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma1.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 
                   <?php
                    foreach($anteprocesoautor2termi as $anteproauto2termini){
                        if($anteproauto2termini->autor2 != ""){        


                        echo '<div class="item"><button class="accordion autor3">'.$anteproauto2termini->autor2.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$anteproauto2termini->titulo.'</p>
                <p><strong>Primer autor: </strong>'.$anteproauto2termini->autor1.'</p>
                <p><strong>Descripcion: </strong>'.$anteproauto2termini->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$anteproauto2termini->fecha_creacion.'</p>';
                 ?><?php
                        $suma2=$anteproauto2termini->descripcionproblema+$anteproauto2termini->objetivos+$anteproauto2termini->justificacion+$anteproauto2termini->Antecedentes+$anteproauto2termini->marcoc+$anteproauto2termini->marcot+$anteproauto2termini->alcance+$anteproauto2termini->cronograma+$anteproauto2termini->presupuesto+$anteproauto2termini->bibliografia;
                    if($suma2 > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma2.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma2.'%</p>

                </div></div>';    
                    }
                        }

                    }

                  ?> 



                                </div>

            </section>
               
          <section class="content" id="antentodosdiv">             
                <br>

                <div id="anteproyectotitulo" class="col-sm-5" style="margin:10px;">
                <h2>Titulos de los anteproyectos</h2>
                  <input id="buscadortitulos4" class="search" type="text" name="search" placeholder="Buscar.....">
                <br><br>
                <?php
                    foreach($anteprocesotodos as $anteprotodos){

                        echo '<div class="item"><button class="accordion titulos4">'.$anteprotodos->titulo;
                        if($anteprotodos->vistop >0){
                                      echo '</button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$anteprotodos->autor1.', '.$anteprotodos->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$anteprotodos->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$anteprotodos->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$anteprotodos->descripcionproblema+$anteprotodos->objetivos+$anteprotodos->justificacion+$anteprotodos->Antecedentes+$anteprotodos->marcoc+$anteprotodos->marcot+$anteprotodos->alcance+$anteprotodos->cronograma+$anteprotodos->presupuesto+$anteprotodos->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'%</p>

                </div></div>';    
                    }
                        }else{
                echo ' <span class="label label-danger">Sin revision</span></button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$anteprotodos->autor1.', '.$anteprotodos->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$anteprotodos->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$anteprotodos->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$anteprotodos->descripcionproblema+$anteprotodos->objetivos+$anteprotodos->justificacion+$anteprotodos->Antecedentes+$anteprotodos->marcoc+$anteprotodos->marcot+$anteprotodos->alcance+$anteprotodos->cronograma+$anteprotodos->presupuesto+$anteprotodos->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'%</p>

                </div></div>';    
                    }  
                        }
                        
                        
              


                    }

                  ?> 


                </div>

                <div class="col-sm-1" ></div>

                <div id="anteproyectoautor" class="col-sm-5" style="margin:10px;">
                <h2>Autores de los anteproyectos</h2>
                  <input id="buscardorautor4" class="search" type="text" name="search" placeholder="Buscar.....">
                <br>
                <br>
                <?php
                    foreach($anteprocesoautor1todos as $anteproauto1todos){
                        echo '<div class="item"><button class="accordion autor4">'.$anteproauto1todos->autor1.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$anteproauto1todos->titulo.'</p>
                <p><strong>Segundo autor: </strong>'.$anteproauto1todos->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$anteproauto1todos->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$anteproauto1todos->fecha_creacion.'</p>';
                 ?><?php
                        $suma1=$anteproauto1todos->descripcionproblema+$anteproauto1todos->objetivos+$anteproauto1todos->justificacion+$anteproauto1todos->Antecedentes+$anteproauto1todos->marcoc+$anteproauto1todos->marcot+$anteproauto1todos->alcance+$anteproauto1todos->cronograma+$anteproauto1todos->presupuesto+$anteproauto1todos->bibliografia;
                    if($suma1 > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma1.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma1.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 
                   <?php
                    foreach($anteprocesoautor2todos as $anteproauto2todos){
                        if($anteproauto2todos->autor2 != ""){        


                        echo '<div class="item"><button class="accordion autor4">'.$anteproauto2todos->autor2.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$anteproauto2todos->titulo.'</p>
                <p><strong>Primer autor: </strong>'.$anteproauto2todos->autor1.'</p>
                <p><strong>Descripcion: </strong>'.$anteproauto2todos->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$anteproauto2todos->fecha_creacion.'</p>';
                 ?><?php
                        $suma2=$anteproauto2todos->descripcionproblema+$anteproauto2todos->objetivos+$anteproauto2todos->justificacion+$anteproauto2todos->Antecedentes+$anteproauto2todos->marcoc+$anteproauto2todos->marcot+$anteproauto2todos->alcance+$anteproauto2todos->cronograma+$anteproauto2todos->presupuesto+$anteproauto2todos->bibliografia;
                    if($suma2 > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma2.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma2.'%</p>

                </div></div>';    
                    }
                        }

                    }

                  ?> 



                                </div>

            </section>          
            <!-----------------------------------------------------------
            informe final
            ------------------------------------------------------------>
             
            <section class="content" id="informeproceodiv">             
                <br>

                <div id="anteproyectotitulo" class="col-sm-5" style="margin:10px;">
                <h2>Titulos de los Informes Finales</h2>
                  <input id="buscadortitulos5" class="search" type="text" name="search" placeholder="Buscar.....">
                <br><br>
                <?php
                    foreach($informeproceso as $inforproceso){

                        echo '<div class="item"><button class="accordion titulos5">'.$inforproceso->titulo.'</button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$inforproceso->autor1.', '.$inforproceso->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$inforproceso->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$inforproceso->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$inforproceso->resumen+$inforproceso->introduccion+$inforproceso->marco_teorico+$inforproceso->metodologia+$inforproceso->resultados+$inforproceso->concluciones+$inforproceso->anexos+$inforproceso->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 


                </div>

                <div class="col-sm-1" ></div>

                <div id="anteproyectoautor" class="col-sm-5" style="margin:10px;">
                <h2>Autores de los Informes Finales</h2>
                  <input id="buscardorautor5" class="search" type="text" name="search" placeholder="Buscar.....">
                <br>
                <br>
                <?php
                    foreach($informepreceautor1 as $autoresinformes){
                        echo '<div class="item"><button class="accordion autor5">'.$autoresinformes->autor1.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$autoresinformes->titulo.'</p>
                <p><strong>Segundo autor: </strong>'.$autoresinformes->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$autoresinformes->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$autoresinformes->fecha_creacion.'</p>';
                 ?><?php
                        $suma1=$autoresinformes->resumen+$autoresinformes->introduccion+$autoresinformes->marco_teorico+$autoresinformes->metodologia+$autoresinformes->resultados+$autoresinformes->concluciones+$autoresinformes->anexos+$autoresinformes->bibliografia;
                    if($suma1 > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma1.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma1.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 
                   <?php
                    foreach($informeprocesoautor2 as $autor2informe){
                        if($autor2informe->autor2 != ""){        


                        echo '<div class="item"><button class="accordion autor5">'.$autor2informe->autor2.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$autor2informe->titulo.'</p>
                <p><strong>Primer autor: </strong>'.$autor2informe->autor1.'</p>
                <p><strong>Descripcion: </strong>'.$autor2informe->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$autor2informe->fecha_creacion.'</p>';
                 ?><?php
                        $suma2=$autor2informe->resumen+$autor2informe->introduccion+$autor2informe->marco_teorico+$autor2informe->metodologia+$autor2informe->resultados+$autor2informe->concluciones+$autor2informe->anexos+$autor2informe->bibliografia;
                    if($suma2 > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma2.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma2.'%</p>

                </div></div>';    
                    }
                        }

                    }

                  ?> 



                                </div>

            </section>
            
              <section class="content" id="informesinini">             
                <br>

                <div id="anteproyectotitulo" class="col-sm-5" style="margin:10px;">
                <h2>Titulos de los Informes Finales</h2>
                  <input id="buscadortitulos6" class="search" type="text" name="search" placeholder="Buscar.....">
                <br><br>
                <?php
                    foreach($informesinini as $inforprosinini){

                        echo '<div class="item"><button class="accordion titulos6">'.$inforprosinini->titulo.'</button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$inforprosinini->autor1.', '.$inforprosinini->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$inforprosinini->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$inforprosinini->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$inforprosinini->resumen+$inforprosinini->introduccion+$inforprosinini->marco_teorico+$inforprosinini-> 	metodologia+$inforprosinini->resultados+$inforprosinini->concluciones+$inforprosinini->anexos+$inforprosinini->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 


                </div>

                <div class="col-sm-1" ></div>

                <div id="anteproyectoautor" class="col-sm-5" style="margin:10px;">
                <h2>Autores de los Informes Finales</h2>
                  <input id="buscardorautor6" class="search" type="text" name="search" placeholder="Buscar.....">
                <br>
                <br>
                <?php
                    foreach($informesiniautor1 as $autor1informesinini){
                        echo '<div class="item"><button class="accordion autor6">'.$autor1informesinini->autor1.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$autor1informesinini->titulo.'</p>
                <p><strong>Segundo autor: </strong>'.$autor1informesinini->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$autor1informesinini->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$autor1informesinini->fecha_creacion.'</p>';
                 ?><?php
                        $suma1=$autor1informesinini->resumen+$autor1informesinini->introduccion+$autor1informesinini->marco_teorico+$autor1informesinini-> 	metodologia+$autor1informesinini->resultados+$autor1informesinini->concluciones+$autor1informesinini->anexos+$autor1informesinini->bibliografia;
                    if($suma1 > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma1.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma1.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 
                   <?php
                    foreach($informesininioautor2 as $informeautor2sin){
                        if($informeautor2sin->autor2 != ""){        


                        echo '<div class="item"><button class="accordion autor6">'.$informeautor2sin->autor2.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$informeautor2sin->titulo.'</p>
                <p><strong>Primer autor: </strong>'.$informeautor2sin->autor1.'</p>
                <p><strong>Descripcion: </strong>'.$informeautor2sin->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$informeautor2sin->fecha_creacion.'</p>';
                 ?><?php
                        $suma2=$informeautor2sin->resumen+$informeautor2sin->introduccion+$informeautor2sin->marco_teorico+$informeautor2sin-> 	metodologia+$informeautor2sin->resultados+$informeautor2sin->concluciones+$informeautor2sin->anexos+$informeautor2sin->bibliografia;
                    if($suma2 > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma2.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma2.'%</p>

                </div></div>';    
                    }
                        }

                    }

                  ?> 



                                </div>

            </section>
            
            <section class="content" id="informesinrediv">             
                <br>

                <div id="anteproyectotitulo" class="col-sm-5" style="margin:10px;">
                <h2>Titulos de los Informes Finales</h2>
                  <input id="buscadortitulos7" class="search" type="text" name="search" placeholder="Buscar.....">
                <br><br>
                <?php
                    foreach($informesinrevi as $informesinrevi){

                        echo '<div class="item"><button class="accordion titulos7">'.$informesinrevi->titulo.'</button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$informesinrevi->autor1.', '.$informesinrevi->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$informesinrevi->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$informesinrevi->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$informesinrevi->resumen+$informesinrevi->introduccion+$informesinrevi->marco_teorico+$informesinrevi-> 	metodologia+$informesinrevi->resultados+$informesinrevi->concluciones+$informesinrevi->anexos+$informesinrevi->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 


                </div>

                <div class="col-sm-1" ></div>

                <div id="anteproyectoautor" class="col-sm-5" style="margin:10px;">
                <h2>Autores de los Informes Finales</h2>
                  <input id="buscardorautor7" class="search" type="text" name="search" placeholder="Buscar.....">
                <br>
                <br>
                <?php
                    foreach($informeautor1sinrevi as $autor1sinrevi){
                        echo '<div class="item"><button class="accordion autor7">'.$autor1sinrevi->autor1.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$autor1sinrevi->titulo.'</p>
                <p><strong>Segundo autor: </strong>'.$autor1sinrevi->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$autor1sinrevi->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$autor1sinrevi->fecha_creacion.'</p>';
                 ?><?php
                        $suma1=$autor1sinrevi->resumen+$autor1sinrevi->introduccion+$autor1sinrevi->marco_teorico+$autor1sinrevi-> 	metodologia+$autor1sinrevi->resultados+$autor1sinrevi->concluciones+$autor1sinrevi->anexos+$autor1sinrevi->bibliografia;
                    if($suma1 > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma1.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma1.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 
                   <?php
                    foreach($inforemeautro2sinrevi as $autor2informesinrevi){
                        if($autor2informesinrevi->autor2 != ""){        


                        echo '<div class="item"><button class="accordion autor7">'.$autor2informesinrevi->autor2.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$autor2informesinrevi->titulo.'</p>
                <p><strong>Primer autor: </strong>'.$autor2informesinrevi->autor1.'</p>
                <p><strong>Descripcion: </strong>'.$autor2informesinrevi->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$autor2informesinrevi->fecha_creacion.'</p>';
                 ?><?php
                        $suma2=$autor2informesinrevi->resumen+$autor2informesinrevi->introduccion+$autor2informesinrevi->marco_teorico+$autor2informesinrevi-> 	metodologia+$autor2informesinrevi->resultados+$autor2informesinrevi->concluciones+$autor2informesinrevi->anexos+$autor2informesinrevi->bibliografia;
                    if($suma2 > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma2.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma2.'%</p>

                </div></div>';    
                    }
                        }

                    }

                  ?> 



                                </div>

            </section>
            
             <section class="content" id="informeterminadosdiv">             
                <br>

                <div id="anteproyectotitulo" class="col-sm-5" style="margin:10px;">
                <h2>Titulos de los Informes Finales</h2>
                  <input id="buscadortitulos8" class="search" type="text" name="search" placeholder="Buscar.....">
                <br><br>
                <?php
                    foreach($informeteminados as $inforteminad0){

                        echo '<div class="item"><button class="accordion titulos8">'.$inforteminad0->titulo.'</button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$inforteminad0->autor1.', '.$inforteminad0->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$inforteminad0->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$inforteminad0->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$inforteminad0->resumen+$inforteminad0->introduccion+$inforteminad0->marco_teorico+$inforteminad0-> 	metodologia+$inforteminad0->resultados+$inforteminad0->concluciones+$inforteminad0->anexos+$inforteminad0->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 


                </div>

                <div class="col-sm-1" ></div>

                <div id="anteproyectoautor" class="col-sm-5" style="margin:10px;">
                <h2>Autores de los Informes Finales</h2>
                  <input id="buscardorautor8" class="search" type="text" name="search" placeholder="Buscar.....">
                <br>
                <br>
                <?php
                    foreach($inforteminautor1 as $indormeateruto1){
                        echo '<div class="item"><button class="accordion autor8">'.$indormeateruto1->autor1.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$indormeateruto1->titulo.'</p>
                <p><strong>Segundo autor: </strong>'.$indormeateruto1->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$indormeateruto1->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$indormeateruto1->fecha_creacion.'</p>';
                 ?><?php
                        $suma1=$indormeateruto1->resumen+$indormeateruto1->introduccion+$indormeateruto1->marco_teorico+$indormeateruto1-> 	metodologia+$indormeateruto1->resultados+$indormeateruto1->concluciones+$indormeateruto1->anexos+$indormeateruto1->bibliografia;
                    if($suma1 > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma1.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma1.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 
                   <?php
                    foreach($informetermiautor2 as $infortemiautor2){
                        if($infortemiautor2->autor2 != ""){        


                        echo '<div class="item"><button class="accordion autor8">'.$infortemiautor2->autor2.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$infortemiautor2->titulo.'</p>
                <p><strong>Primer autor: </strong>'.$infortemiautor2->autor1.'</p>
                <p><strong>Descripcion: </strong>'.$infortemiautor2->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$infortemiautor2->fecha_creacion.'</p>';
                 ?><?php
                        $suma2=$infortemiautor2->resumen+$infortemiautor2->introduccion+$infortemiautor2->marco_teorico+$infortemiautor2-> 	metodologia+$infortemiautor2->resultados+$infortemiautor2->concluciones+$infortemiautor2->anexos+$infortemiautor2->bibliografia;
                    if($suma2 > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma2.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma2.'%</p>

                </div></div>';    
                    }
                        }

                    }

                  ?> 



                                </div>

            </section>
            
             <section class="content" id="informetodosdiv">             
                <br>

                <div id="anteproyectotitulo" class="col-sm-5" style="margin:10px;">
                <h2>Titulos de los Informes Finales</h2>
                  <input id="buscadortitulos9" class="search" type="text" name="search" placeholder="Buscar.....">
                <br><br>
                <?php
                    foreach($inforemestodos as $todoslosinformestil){

                        echo '<div class="item"><button class="accordion titulos9">'.$todoslosinformestil->titulo;
                        if($todoslosinformestil->vistop >0){
                                      echo '</button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$todoslosinformestil->autor1.', '.$todoslosinformestil->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$todoslosinformestil->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$todoslosinformestil->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$todoslosinformestil->resumen+$todoslosinformestil->introduccion+$todoslosinformestil->marco_teorico+$todoslosinformestil-> 	metodologia+$todoslosinformestil->resultados+$todoslosinformestil->concluciones+$todoslosinformestil->anexos+$todoslosinformestil->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del anteproyecto: </strong>'.$suma.'%</p>

                </div></div>';    
                    }
                        }else{
                            
                    if($todoslosinformestil->Estado == "Sin iniciar"){
                         echo ' <span class="label label-warning">Sin Iniciar</span></button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$todoslosinformestil->autor1.', '.$todoslosinformestil->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$todoslosinformestil->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$todoslosinformestil->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$todoslosinformestil->resumen+$todoslosinformestil->introduccion+$todoslosinformestil->marco_teorico+$todoslosinformestil-> 	metodologia+$todoslosinformestil->resultados+$todoslosinformestil->concluciones+$todoslosinformestil->anexos+$todoslosinformestil->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma.'%</p>

                </div></div>';    
                    } 
                    }else{
                        echo ' <span class="label label-danger">Sin Revision</span></button>
                <div class="panel">
                <p><strong>Autores: </strong>'.$todoslosinformestil->autor1.', '.$todoslosinformestil->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$todoslosinformestil->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$todoslosinformestil->fecha_creacion.'</p>';
                 ?><?php
                        $suma=$todoslosinformestil->resumen+$todoslosinformestil->introduccion+$todoslosinformestil->marco_teorico+$todoslosinformestil-> 	metodologia+$todoslosinformestil->resultados+$todoslosinformestil->concluciones+$todoslosinformestil->anexos+$todoslosinformestil->bibliografia;
                    if($suma > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma.'%</p>

                </div></div>';    
                    }  
                    }
                            
                            
                            
                
                        } 

                    }

                  ?> 


                </div>

                <div class="col-sm-1" ></div>

                <div id="anteproyectoautor" class="col-sm-5" style="margin:10px;">
                <h2>Autores de los Informes Finales</h2>
                  <input id="buscardorautor9" class="search" type="text" name="search" placeholder="Buscar.....">
                <br>
                <br>
                <?php
                    foreach($todosinforesmesautor1 as $informetodos){
                        echo '<div class="item"><button class="accordion autor9">'.$informetodos->autor1.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$informetodos->titulo.'</p>
                <p><strong>Segundo autor: </strong>'.$informetodos->autor2.'</p>
                <p><strong>Descripcion: </strong>'.$informetodos->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$informetodos->fecha_creacion.'</p>';
                 ?><?php
                        $suma1=$informetodos->resumen+$informetodos->introduccion+$informetodos->marco_teorico+$informetodos-> 	metodologia+$informetodos->resultados+$informetodos->concluciones+$informetodos->anexos+$informetodos->bibliografia;
                    if($suma1 > 0){
                       echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma1.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma1.'%</p>

                </div></div>';    
                    }


                    }

                  ?> 
                   <?php
                    foreach($todosinformesautor2 as $inforteminaautor2){
                        if($inforteminaautor2->autor2 != ""){        


                        echo '<div class="item"><button class="accordion autor9">'.$inforteminaautor2->autor2.'</button>
                <div class="panel">
                <p><strong>Titulo del anteproyecto: </strong>'.$inforteminaautor2->titulo.'</p>
                <p><strong>Primer autor: </strong>'.$inforteminaautor2->autor1.'</p>
                <p><strong>Descripcion: </strong>'.$inforteminaautor2->descripcion.'</p>
                <p><strong>Fecha de creacion: </strong>'.$inforteminaautor2->fecha_creacion.'</p>';
                 ?><?php
                        $suma2=$inforteminaautor2->resumen+$inforteminaautor2->introduccion+$inforteminaautor2->marco_teorico+$inforteminaautor2-> 	metodologia+$inforteminaautor2->resultados+$inforteminaautor2->concluciones+$inforteminaautor2->anexos+$inforteminaautor2->bibliografia;
                    if($suma2 > 0){
                       echo'
                <p><strong>Avance del Informa Final: </strong>'.$suma2.'0%</p>

                </div></div>'; 
                    }else{
                         echo'
                <p><strong>Avance del Informe Final: </strong>'.$suma2.'%</p>

                </div></div>';    
                    }
                        }

                    }

                  ?> 



                                </div>

            </section>          
            
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                                   
                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <div id="loading">
        <p style="text-align:left; margin:10px; font-size:2.2em; font-family:'Gabriola';">Bienvenido! Por favor espere......</p>
        <center><img src="<?php echo base_url(); ?>css/images/loading.gif" alt=""></center>
    </div>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <!-- <script src="<?php echo base_url(); ?>scripts/jsadmin/script.js"></script> -->
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
    $(document).ready(function() {
    $('table.display').DataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true,
    "order": [[ 1, "asc" ]],
    language: {
    searchPlaceholder: "Pepito Perez",
    "sSearch": "Buscar: "
    }
    });
} );</script>
    <!-- jQuery 3 -->
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>scripts/jsadmin/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
       <!-- Morris.js charts -->
   
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>scripts/jsadmin/adminlte.min.js"></script>
       
    <script src="<?php echo base_url(); ?>scripts/sweetalert2.js " ></script>
    <script>
        
        $(function() {
            $('#imgperfil').change(function(e) {
                addImage(e);
            });

            function addImage(e) {
                var file = e.target.files[0],
                    imageType = /image.*/;

                if (!file.type.match(imageType))
                    return;

                var reader = new FileReader();
                reader.onload = fileOnload;
                reader.readAsDataURL(file);
            }

            function fileOnload(e) {
                var result = e.target.result;
                $('#imgSalida').attr("src", result);
            }
        });
    </script>

    <script>
    
    function nobackbutton(){
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button"
window.onhashchange=function(){
    window.location.hash="no-back-button";}
}

document.oncontextmenu = function() {
return false
}
function right(e) {

if (navigator.appName == 'Netscape' && e.which == 3) {
 alert(msg); //- Si no quieres asustar a tu usuario entonces quita esta linea...
 return false;
}
else if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {

return false;
} 
return true;
}
document.onmousedown = right;

function loading(){  
    $("#antenproceodiv").hide();
    $("#antenterminadosdiv").hide();
    $("#antentodosdiv").hide();
    $("#antensinrediv").hide();

    $("#informeproceodiv").hide();
    $("#informesinrediv").hide();
    $("#informeterminadosdiv").hide();
    $("#informetodosdiv").hide();         
    $("#informesinini").hide();         
    
    $("#loading").hide();
}

$(document).ready(function(){
  
    
    $(".messages").hover(function(){
   $(".imgemail").attr("src","<?php base_url();?>css/images/nota2.png");
        }, function(){
         $(".imgemail").attr("src","<?php base_url();?>css/images/nota.png");
    });
});



function informacionmensaje(id){
   
     var parametros = {"id" : id};
    
        $.ajax({
             url:"<?php base_url();?>admin/consultarmensaje",   
            type:"POST",
             data:parametros,
            success :function(data){
            $("#modalmensajes").html(data);
                
            }
        });      
}

$(document).ready(function(){
    
    
     $("#inicio").click(function(){
           $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#antensinrediv").hide();  
         
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
         
          $("#widgesprinciapl").fadeIn();
        $("#donde").text("Inicio");
    });
    $("#anteproceso").click(function(){
          $("#widgesprinciapl").hide();
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antensinrediv").hide();
        
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
        
          $("#antenproceodiv").fadeIn();
          $("#donde").text("Anteproyecto-Proceso");
        
    });
    $("#antesinrev").click(function(){
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
        
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
        
          $("#antensinrediv").fadeIn();
        $("#donde").text("Anteproyecto-Sin revision");
    });  
    $("#anteterminados").click(function(){
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
        
          $("#antenterminadosdiv").fadeIn();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
          $("#antensinrediv").hide();
        $("#donde").text("Anteproyecto-Terminados");
    });  
    $("#antetodos").click(function(){
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
        
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").fadeIn();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
          $("#antensinrediv").hide();
        $("#donde").text("Anteproyecto-Todos");
    }); 

    
    $("#inforproceso").click(function(){
          $("#widgesprinciapl").hide();
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#informesinini").hide();
        
         $("#informeproceodiv").fadeIn();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#antensinrediv").hide();
        
          $("#antenproceodiv").hide();
          $("#donde").text("Informe Final-Proceso");
        
    });
    $("#informesinrevi").click(function(){
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
        
         $("#informeproceodiv").hide();
            $("#informesinrediv").fadeIn();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").hide();
        
          $("#antensinrediv").hide();
        $("#donde").text("Informe Final-Sin revision");
    });  
    $("#informesininiciar").click(function(){
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
        
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#informetodosdiv").hide();
          $("#informesinini").fadeIn();
        
          $("#antensinrediv").hide();
        $("#donde").text("Informe Final-Sin iniciar");
    });  
    $("#informeterminados").click(function(){
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").fadeIn();
          $("#informetodosdiv").hide();
          $("#antensinrediv").hide();
        
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
          $("#antensinrediv").hide();
        $("#donde").text("Informe Final-Terminados");
    });  
    $("#informetodos").click(function(){
         $("#informeproceodiv").hide();
            $("#informesinrediv").hide();
          $("#informeterminadosdiv").hide();
          $("#antensinrediv").hide();
          $("#informetodosdiv").fadeIn();
        
          $("#antenterminadosdiv").hide();
            $("#antentodosdiv").hide();
          $("#antenproceodiv").hide();
          $("#widgesprinciapl").hide();
          $("#antensinrediv").hide();
        $("#donde").text("Informer Final-Todos");
    });
    
    
});

   


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("actives");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
   

$(document).ready(function(){

    $("#buscadortitulos").keyup(function(){
     var titulos = $('.titulos');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor").keyup(function(){
     var autor = $('.autor');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });
    
     $("#buscadortitulos2").keyup(function(){
     var titulos = $('.titulos2');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor2").keyup(function(){
     var autor = $('.autor2');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });    $("#buscadortitulos3").keyup(function(){
     var titulos = $('.titulos3');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor3").keyup(function(){
     var autor = $('.autor3');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });  $("#buscadortitulos4").keyup(function(){
     var titulos = $('.titulos4');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor4").keyup(function(){
     var autor = $('.autor4');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });
    
   $("#buscadortitulos5").keyup(function(){
     var titulos = $('.titulos5');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor5").keyup(function(){
     var autor = $('.autor5');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });   $("#buscadortitulos6").keyup(function(){
     var titulos = $('.titulos6');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor6").keyup(function(){
     var autor = $('.autor6');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });$("#buscadortitulos7").keyup(function(){
     var titulos = $('.titulos7');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor7").keyup(function(){
     var autor = $('.autor7');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });$("#buscadortitulos8").keyup(function(){
     var titulos = $('.titulos8');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor8").keyup(function(){
     var autor = $('.autor8');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });$("#buscadortitulos9").keyup(function(){
     var titulos = $('.titulos9');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < titulos.length; i++ ){
         item = $(titulos[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(titulos[i]).parents('.item').show(); 
              }else{
                   $(titulos[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
      $("#buscardorautor9").keyup(function(){
     var autor = $('.autor9');
     var buscar = $(this).val();
       var item='';
     for( var i = 0; i < autor.length; i++ ){
         item = $(autor[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscar.length == 0 || item.indexOf( buscar ) > -1 ){
                  $(autor[i]).parents('.item').show(); 
              }else{
                   $(autor[i]).parents('.item').hide();
              }
          }
     }
  });
    
    
    
    
});



    $(document).ready(function() {
   

      $(".boton").click(function() {

        
        var apellidos = "";
        var nombres = "";
        var telefono = "";
        var emai = "";
        var codigo = "";

               $(this).parents("tr").find(".codigo").each(function() {
          codigo += $(this).html();
        });
           $(this).parents("tr").find(".nombreyapelldios").each(function() {
          nombres += $(this).html();
        });
           $(this).parents("tr").find(".telefono").each(function() {
          telefono += $(this).html();
        });  $(this).parents("tr").find(".mail").each(function() {
          emai += $(this).html();
        });
          
        var saberm = nombres;
        var stringPartsm = saberm.split(" ");
          
          var apellidos = stringPartsm[0]+" "+stringPartsm[1];
          var nombre1 = stringPartsm[2];
          var nombre2 = stringPartsm[3];     
          
          
          $("#codigomodiicar").val(codigo);
          $("#codigoantiguo").val(codigo);
          $("#txtelefono").val(telefono);
          $("#txtxmailmodifi").val(emai);
          $("#primernombre").val(nombre1);
          $("#secondnombre").val(nombre2);
          $("#apellidos").val(apellidos);
                  
      });
    });
$(document).ready(function() {
   

      $(".botonpro").click(function() {

        
        var apellidospro = "";
        var nombrespro = "";
        var telefonopro = "";
        var emaipro = "";
        var codigopro = "";

               $(this).parents("tr").find(".codigopro").each(function() {
          codigopro += $(this).html();
        });
           $(this).parents("tr").find(".nombreyapelldiospro").each(function() {
          nombrespro += $(this).html();
        });
           $(this).parents("tr").find(".telefonopro").each(function() {
          telefonopro += $(this).html();
        });  $(this).parents("tr").find(".mailpro").each(function() {
          emaipro += $(this).html();
        });
          
        var sabermpro = nombrespro;
        var stringPartsmpro = sabermpro.split(" ");
          
          var apellidospro = stringPartsmpro[0]+" "+stringPartsmpro[1];
          var nombre1pro = stringPartsmpro[2];
          var nombre2pro = stringPartsmpro[3];     
          
          
          $("#atigugocoidogprofesor").val(codigopro);
          $("#codigomodiicarpro").val(codigopro);
          $("#txtelefonopro").val(telefonopro);
          $("#txtxmailmodifipro").val(emaipro);
          $("#primernombrepro").val(nombre1pro);
          $("#secondnombrepro").val(nombre2pro);
          $("#apellidospro").val(apellidospro);
                  
      });
    });

  
$(document).ready(function(){
    
    $("#formularismodiestudiante").submit(function(event){        
        
            event.preventDefault();
                $.ajax({
			url:$("#formularismodiestudiante").attr("action"),
			type:$("#formularismodiestudiante").attr("method"),
			data:$("#formularismodiestudiante").serialize(),
            complete :function(data){
            location.reload();
                
            }
        }); 
        
        
    });

});  

$(document).ready(function(){
    
    $("#formregisstudents").submit(function(event){        
        
            event.preventDefault();
                $.ajax({
			url:$("#formregisstudents").attr("action"),
			type:$("#formregisstudents").attr("method"),
			data:$("#formregisstudents").serialize(),
            complete :function(data){
           swal("Listo","Se registro el nuevo estudiante","success");
                 location.reload();
                
            }
        }); 
        
        
    });

});$(document).ready(function(){
    
    $("#formulariodocentemodificar").submit(function(event){        
        
            event.preventDefault();
                $.ajax({
			url:$("#formulariodocentemodificar").attr("action"),
			type:$("#formulariodocentemodificar").attr("method"),
			data:$("#formulariodocentemodificar").serialize(),
            complete :function(data){
            location.reload();
                
            }
        }); 
        
        
    });

});  

$(document).ready(function(){
    
    $("#formularioregistrardocente").submit(function(event){        
        
            event.preventDefault();
                $.ajax({
			url:$("#formularioregistrardocente").attr("action"),
			type:$("#formularioregistrardocente").attr("method"),
			data:$("#formularioregistrardocente").serialize(),
            complete :function(data){
           swal("Listo","Se registro el nuevo profesor","success");
                 location.reload();
                
            }
        }); 
        
        
    });

});


















    
    </script>
  

</body>

</html>