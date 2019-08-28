            <div class="modal-body"> 
                <span type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal4">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>  
                        Agrega un anexo...
                    </span>
                </span>
                <br>
                <br>



                    <div class="row">    
                    
                    <?php      
                    
                        foreach ($Anexos as $anex){ 

                        echo '
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img src="'.base_url().'/css/images/anexos.png" alt="...">
                                        <div class="caption">
                                            <h3>'.$anex->anexo.'</h3>
                                            <p>'.$anex->descripcionanexo.'</p>';

                                            if ($Estado == "ante"){
                                                echo '<p><a href="'.base_url().'/css/anexos/'.$anex->anexo.'" target="_blank" class="btn btn-primary" role="button">Ver Anexo</a></p>';
                                            }else{
                                                echo '<p><a href="'.base_url().'/css/anexos2/'.$anex->anexo.'" target="_blank" class="btn btn-primary" role="button">Ver Anexo</a></p>';
                                            }

                                    echo'</div>
                                    </div>
                                </div>
                            ';

                        }
                    ?> 
                    
 
                    
                        