<div class="col-sm-7 col-md-6">
                <div class="thumbnail" id="contenifnoinforme" <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'style=" -webkit-box-shadow:none;
-moz-box-shadow:none;
box-shadow:none;"';}else{
    echo 'style=" -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);"';
}} ?>>
                <a class="edita-datos-proyecto" id="editaranteproyecto2"><span class="label label-danger">Editar</span></a>
                <img src="<?php echo base_url(); ?>css/images/controlar.png"  alt="Informe Final" width="50%" height="50%" >
                <div class="caption">
                <h3><?php 
                    foreach ($documentos2 as $documents2){
                        echo $documents2->titulo;}?></h3>
                <br>

                <p id="description2"><?php 
                    foreach ($documentos2 as $documents2){
                        echo $documents2->descripcion;}?><span class="datetime">   Fecha de creaci&oacute;n: <?php foreach ($documentos2 as $documents2){
                        echo $documents2->fecha_creacion;}?></span></p>
                <p><a href="#" class="btn btn-primary" role="button" id="btnverdocument2">Ver Adjuntos</a> 
                </div>
                </div>
                </div>
                