
        <tbody>
         <?php 
            
            foreach ($datosdelosprofesores as $datosprofe){
                echo '<tr>
                <td class="codigopro">'.$datosprofe->codigo.'</td>
                <td class="nombreyapelldiospro">'.$datosprofe->apellidos.' '.$datosprofe->nombre1.' '.$datosprofe->nombre2.'</td>
                <td class="telefonopro" >'.$datosprofe->tel.'</td>
                <td class="mailpro">'.$datosprofe->email.'</td>
                <td><button class="btn btn-default btn-sm botonpro" data-toggle="modal" data-target="#datospersonalesprofesor" ><img src="'.base_url().'css/images/dibujar.png" alt=""></button></td>               
                </tr>';
            }        
            
            ?>          
        </tbody>