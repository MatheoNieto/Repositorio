 <form role="form" id="formlisttareas">          
           
            <div class="col-md-5" id="lista-tareas"  <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'style=" -webkit-box-shadow:none;
-moz-box-shadow:none;
box-shadow:none;"';}else{
    echo 'style=" -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);"';
}} ?>>
                <fieldset >
                    <legend class="text-center header">
                        Contenido  <img src="<?php echo base_url(); ?>css/images/lista.png"  alt="" class="fa fa-user bigicon">
                    </legend>
                    
                    <div class="checkbox checkbox-success">
                        <input id="checkbox1" type="checkbox" class="required"  disabled  <?php foreach ($documentos as $documents){
    if ($documents->descripcionproblema > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox1">
                           Descripcion del problema
                        </label>
                    </div>
                    <div class="checkbox checkbox-success">
                        <input id="checkbox2" type="checkbox"  class="required"  disabled <?php foreach ($documentos as $documents){
    if ($documents->objetivos  > 0  ){echo "checked";}
     } ?> >
                        <label for="checkbox2">
                            Objetivos
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required" id="checkbox3" type="checkbox" disabled <?php foreach ($documentos as $documents){
    if ($documents->justificacion > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox3">
                            Justificacion
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required" id="checkbox4" type="checkbox" disabled <?php foreach ($documentos as $documents){
    if ($documents->Antecedentes  > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox4">
                            Antecendentes
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required" id="checkbox5" type="checkbox" disabled <?php foreach ($documentos as $documents){
    if ($documents->marcoc  > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox5">
                            Marco Contextual
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required" id="checkbox6" type="checkbox" disabled <?php foreach ($documentos as $documents){
    if ($documents->marcot > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox6">
                            Marco Teorico
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required" id="checkbox7" type="checkbox" disabled <?php foreach ($documentos as $documents){
    if ($documents->alcance > 0 ){echo "checked";}
     } ?>>
                        <label for="checkbox7">
                            Alcance y Limitaciones
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required" id="checkbox8" type="checkbox" disabled <?php foreach ($documentos as $documents){
    if ($documents->cronograma  > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox8">
                            Cronograma
                        </label>
                    </div>
                   <div class="checkbox checkbox-success">
                        <input class="required" id="checkbox9" type="checkbox" disabled <?php foreach ($documentos as $documents){
    if ($documents->presupuesto  > 0 ){echo "checked";}
     } ?>>
                        <label for="checkbox9">
                            Presupuesto
                        </label>
                    </div>
                   <div class="checkbox checkbox-success">
                        <input class="required" id="checkbox10" type="checkbox" disabled <?php foreach ($documentos as $documents){
    if ($documents->bibliografia > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox10">
                            Bibliografia
                        </label>
                    </div>
                   
                </fieldset>
            </div>
       
    </form>
                
                <div class="meter" id="barrap" >
                <div id="porcentaje"></div>
                </div>
 <script src="<?php echo base_url(); ?>scripts/script1.js " ></script> 

                </div>
                </div>
