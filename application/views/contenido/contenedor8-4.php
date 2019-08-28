<form id="formlisttareas2" role="form">          
           
            <div class="col-md-5" id="lista-tareas2"  <?php foreach ($usuarios as $user){  if ($user->tema > 0){
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
                        <input id="checkbox1" type="checkbox" class="required2" disabled  <?php foreach ($documentos2 as $documents2){
    if ($documents2->resumen  > 0  ){echo "checked";}
     } ?> >
                        <label for="checkbox1">
                          Resumen o Abstrac
                        </label>
                    </div>
                         <div class="checkbox checkbox-success">
                        <input id="checkbox12" type="checkbox" class="required2" disabled  <?php foreach ($documentos2 as $documents2){
    if ($documents2->introduccion   > 0  ){echo "checked";}
     } ?> >
                        <label for="checkbox12">
                          Introduccion
                        </label>
                    </div>
                    <div class="checkbox checkbox-success">
                        <input id="checkbox2" type="checkbox"  class="required2"  disabled  <?php foreach ($documentos2 as $documents2){
    if ($documents2->marco_teorico  > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox2">
                           Marco Teorico
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required2" id="checkbox3" type="checkbox" disabled <?php foreach ($documentos2 as $documents2){
    if ($documents2->metodologia  > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox3">
                            Metodologia
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required2" id="checkbox4" type="checkbox" disabled <?php foreach ($documentos2 as $documents2){
    if ($documents2->resultados  > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox4">
                            Resultados
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required2" id="checkbox5" type="checkbox" disabled <?php foreach ($documentos2 as $documents2){
    if ($documents2->concluciones  > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox5">
                          Concluciones
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required2" id="checkbox6" type="checkbox" disabled <?php foreach ($documentos2 as $documents2){
    if ($documents2->anexos  > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox6">
                            Anexos o Apendices
                        </label>
                    </div>
                     <div class="checkbox checkbox-success">
                        <input class="required2" id="checkbox7" type="checkbox" disabled  <?php foreach ($documentos2 as $documents2){
    if ($documents2->bibliografia  > 0  ){echo "checked";}
     } ?>>
                        <label for="checkbox7">
                            Bibliografia
                        </label>
                    </div>
                                   
                </fieldset>
            </div>
       
    </form>
                
                <div class="meter" id="barrap2" >
                <div id="percentage2"></div>
                </div>
 <script src="<?php echo base_url(); ?>scripts/script2/script1.js " ></script> 

                </div>
                </div>


               

               
               
               
               
               
               
               