  <div class="col-sm-7 col-md-6" id="contenido">
                <div class="thumbnail" id="contentinforante"  <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'style=" -webkit-box-shadow:none;
-moz-box-shadow:none;
box-shadow:none;"';}else{
    echo 'style=" -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);"';
}} ?>>
                <a class="edita-datos-proyecto" id="editaranteproyecto"><span class="label label-danger">Editar</span></a>
                <img src="<?php echo base_url(); ?>css/images/adjuntar2.png"  alt="Imagen no encontrada">
                <div class="caption">
                <h3><?php foreach ($documentos as $documents){
    echo $documents->titulo;} ?></h3>
                <br>

                <p id="description"><?php foreach ($documentos as $documents){
    echo $documents->descripcion;} ?><span class="datetime">   Fecha de creaci&oacute;n: <?php foreach ($documentos as $documents){
    echo $documents->fecha_creacion;} ?></span></p>
                <p><a href="#" class="btn btn-primary" role="button" id="btnverdocument">Ver adjuntos </a> 
                </div>
                </div>
                </div>
               