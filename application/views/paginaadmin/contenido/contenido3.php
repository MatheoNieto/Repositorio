
        <tbody>
         <?php 
            
            foreach ($datosestudiantes as $datosesutdiantes){
                echo '<tr>
                <td class="codigo">'.$datosesutdiantes->codigo.'</td>
                <td class="nombreyapelldios">'.$datosesutdiantes->apellidos.' '.$datosesutdiantes->nombre1.' '.$datosesutdiantes->nombre2.'</td>
                <td class="telefono" >'.$datosesutdiantes->tel.'</td>
                <td class="mail">'.$datosesutdiantes->email.'</td>
                <td><button class="btn btn-default btn-sm boton" data-toggle="modal" data-target="#datospersonales" ><img src="'.base_url().'css/images/dibujar.png" alt=""></button></td>               
                </tr>';
            }         
            
            ?>          
        </tbody>
        
   