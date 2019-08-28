     <!-- Sidebar Holder -->
           <nav id="sidebar" <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'style="background-color:rgba(0,0,0,0.65);color:#fff"';}else{
    echo 'style="background-color:rgba(255,255,255,0.6);color:black;"';
}} ?>>
            <div class="sidebar-header">
                <div id="mage">
                    <a href="">
                    <img src="<?php echo base_url(); ?>css/images/Imagen1.png" width="100%" height="100%"/></a>
                </div>
            </div>

            <ul class="list-unstyled components">
                <p id="titlerepo" <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'style="color:#fff"';}else{
    echo 'style="color:black;"';
}} ?>>Repositorio proyectos de grado Tecnologia en desarrollo de software</p>
                <li <?php 
                    foreach ($documentos as $documents){
                if ($documents->Estado == "Proceso"){
                    echo 'class="active"';
                }else{
                    
                }
                    } ?> >
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" id="btn-principal">Anteproyecto - <?php foreach ($documentos as $documents){
                echo $documents->Estado;} ?></a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                <li><a id="btn-integrantes" href="#">Integrantes</a></li>
                <li><a href="#" id="btn-anexos">Anexos <span class="badge"> <?php foreach ($countanexos as $nanexos){
                echo $nanexos->cantanex;} ?></span></a></li>
                </ul>
                </li>
                <li  <?php 
                    foreach ($documentos2 as $documents2){
                if ($documents2->Estado == "Proceso"){
                    echo 'class="active"';
                }else{
                    
                }
                    } ?>>
                <a href="#pageSubmenu"<?php foreach ($documentos2 as $documents2){
    if ($documents2->Estado  === 'Sin iniciar' ){
        echo 'style = "cursor:no-drop;" title="Bloqueado por que no ha terminado el informe final" ';
    }else{echo 'data-toggle="collapse" aria-expanded="false"';}
     } ?>  id="btn-principal2" >Informe Final - <?php foreach ($documentos2 as $documents2){
                echo $documents2->Estado;} ?></a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href="#" id="btn-integrantes2">Integrantes</a></li>
                <li><a href="#" id="btn-anexos2">Anexos <span class="badge"><?php foreach ($countanexos2 as $nanexos2){
                echo $nanexos2->cantanex;} ?></span></a></li>
                </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li><a id="contacto" class="download"  <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'style="background-color:transparent;color:#fff;border:none;"';}else{
    echo 'style="background-color:#199d63;color:#fff;border:1px solid #000000;"';
}} ?>>Contacto</a></li>
                <li><a id="opciones"  class="download"  <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'style="background-color:transparent;color:#fff;border:none;"';}else{
    echo 'style="background-color:#b0b3b6;color:black;border:1px solid #000000;"';
}} ?>>Opciones</a></li>
       <li><a id="veracent" class="download" target="_blank" href="<?php echo site_url('verproyectos');?>"  <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'style="background-color:transparent;color:#fff;border:none;"';}else{
    echo 'style="background-color:#199d63;color:#fff;border:1px solid #000000;"';
}} ?>>Ver Anteproyectos</a></li>
            </ul>
        </nav>

        