
      <div id="contenedor-div-crear-documento">
    <br><br><br>
    <div class="container">
    <div class="row">
    <div class="col-md-12" >
    <div class="well well-sm" id="contendorform">
    <form id="formcdocument" class="form-horizontal" method="POST" action="<?php base_url();?>principal/creardocumento" autocomplete="off">
    <fieldset>
    <legend class="text-center header">Creando anteproyecto 
    <img src="<?php echo base_url(); ?>css/images/pluma.png"  alt="" class="fa fa-user bigicon">   
    </legend>

    <div class="form-group">
     <label class="col-sm-3 control-label" for="txttitulo"><br>Titulo</label>
    <div class="col-md-8">
    <span id="disponible" class="label label-success">Titulo disponible para su  anteproyecto</span>
    <br>
    <input id="txttitulo" name="txttitulo" type="text" placeholder="Ingrese el titulo del anteproyecto" class="form-control" maxlength="150">
    </div>
    </div>
     <center>
           <table id="tbl_titulos"   cellspacing="0" class="table table-responsive" style="width:50%;">
     <thead>
            <tr>
                <th>Titulos de los proyectos que existen</th>
            </tr>
        </thead>
        <tbody>
           <?php
            foreach ($tituloexitentes as $titulos){
            
                echo '<tr class="disabledfila">';
                echo "<td>$titulos->titulo</td>";
                echo "</tr>";
            }
            ?>
         
        </tbody>
        </table>
     </center>    
    
    
    <div class="form-group">
   <label class="col-sm-3 control-label" for="txtprimerautor">Primer autor</label>
    <div class="col-md-8">
    <input id="txtprimerautor" name="txtprimerautor" type="text" placeholder="Primer Autor" class="form-control" value="<?php foreach ($usuarios as $user){
    echo $user->apellidos; echo" "; echo $user->nombre1; echo" "; echo $user->nombre2;}?>" style="cursor:no-drop;">
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-3 control-label" for="txtprimerautor">Segundo autor</label>
    <div class="col-md-8">
    <input id="txtsegundoautor" name="txtsegundoautor" type="text" placeholder="Segundo Autor (Opcional)" class="form-control"  >
    <input style="display:none;" id="txtcodigo2" type="text" name="txtcodigo2"> 
    </div>
    </div>
     <table id="tbl_integrantes"  width="100%" cellspacing="0" class="table table-responsive">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
            <tfoot>
            <tr>
                  <th></th>
                <th>Codigo</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Telefono</th>
            </tr>
        </tfoot>
        <tbody>
        
        <?php
            foreach ($integrantes as $integrants){
             
                if ($integrants->ingresa >0){ 
                echo '<tr class="disabledfila">';
                echo '<td><img src="'.base_url().'css/images/perfil/'.$integrants->imgperfil.'" alt="imagen_perfil" class="imgperfiltabla" /></td>';
                echo "<td>$integrants->codigo</td>";
                echo "<td>$integrants->nombre1  $integrants->nombre2</td>"; 
                echo "<td>$integrants->apellidos</td>";
                echo "<td>$integrants->email</td>";
                echo "<td>$integrants->tel</td>";
                echo "</tr>";
                    
                }else{
                foreach ($usuarios as $user){
                if ($user->codigo == $integrants->codigo){
                
                }else{
                echo '<tr>';
                echo '<td  class="boton"><img src="'.base_url().'css/images/perfil/'.$integrants->imgperfil.'" alt="imagen_perfil" class="imgperfiltabla" /></td>';
                echo "<td class='numero boton'>$integrants->codigo</td>";
                echo "<td class='nombre boton'>$integrants->nombre1  $integrants->nombre2</td>"; 
                echo "<td class='apelli boton'>$integrants->apellidos</td>";
                echo "<td class='boton'>$integrants->email</td>";
                echo "<td class='boton'>$integrants->tel</td>";
                echo "</tr>";
                }}
                
                
            }
            }
            ?>
            
        </tbody>
    </table>
    <br>
    <div class="form-group">
    <label class="col-sm-3 control-label" for="txtprimerautor">Descripcion del ante proyecto</label>
    <div class="col-md-8">
    <textarea maxlength="250" class="form-control input"   id="txtdescripcionanteproyecto" name="txtdescripcionanteproyecto" placeholder="Ingrese la descripcion del anteproyecto" rows="7"></textarea>
      <span class="help-block"><p id="characterLeft" class="help-block ">Excedio el limite de caracteres</p></span>   
    </div>
    
    </div>
    <br style="clear:both">
    <div class="form-group">
    <div class="col-md-12 text-center">
    <button type="button" class="btn btn-deafault btn-lg" onclick="$('#contenedor-div-crear-documento').fadeOut('slow');">Todavia no</button> 
    <button type="submit" class="btn btn-primary btn-lg" id="btncrear">Crear</button>
    </div>
    </div>
    </fieldset>
    </form>
    </div>
    </div>
    </div>
    </div>  
    </div>     