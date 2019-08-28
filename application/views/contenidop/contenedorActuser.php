<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

<div id="container-div-actualizar">
    <br><br><br><br><br><br>
    <div class="container" id="container_info">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-left:25%;">
                <div class="well well-sm" id="editar_info">
                    <form id="formactualizar" class="form-horizontal" method="POST" action="<?php base_url();?>profesor/modificardatospersonales" autocomplete="off">
                        <fieldset>
                            <legend class="text-center header">Modificando mis datos 
                                <button type="reset" class="close" aria-label="Close" id="cerradatos">
                                    <span aria-hidden="true">&times;</span>
                                </button>                                                
                            </legend>
                            <div class="form-group ">                           
                                <div class="col-md-6">
                                    <input id="txtnombresa" name="txtnombresa" type="text" placeholder="Primer Nombre" class="form-control" value="<?php foreach ($usuarios as $user){
                                    echo $user->nombre1; echo" "; echo $user->nombre2; } ?>" readonly style="cursor:no-drop;">
                                </div>
                                <div class="col-md-6">
                                    <input id="txtapellidosa" name="txtapellidosa" type="text" placeholder="Apellidos" class="form-control" value="<?php foreach ($usuarios as $user){
                                    echo $user->apellidos;}?>" readonly style="cursor:no-drop;">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input id="txttelefonoa" name="txttelefonoa" type="text" placeholder="telefono" class="form-control" value="<?php foreach ($usuarios as $user){
                                    echo $user->tel;} ?>">
                                </div>
                                <div class="col-md-6">
                                    <input id="txtcodiogoa" name="txtcodiogoa" type="text" placeholder="codigo" class="form-control" value="<?php foreach ($usuarios as $user){
                                    echo $user->codigo;} ?>" readonly style="cursor:no-drop;">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="txtemaia" name="txtemaia" type="text" placeholder="Email" class="form-control" value="<?php foreach ($usuarios as $user){
                                    echo $user->email;} ?>" readonly style="cursor:no-drop;">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-right ">
                                    <p style="text-align: left; font-size:1.1em;">
                                        <strong>Nota:</strong> Si hay un error en sus datos por favor informarlo al administrador de la pagina para corregir
                                    </p>
                                    <button type="reset" class="btn btn-secondary btn-lg" id="cancelar-info">Cancelar</button>
                                    <button type="submit" class="btn btn-primary btn-lg">Cambiar</button>                         
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
