<body onload="nobackbutton()">

<div id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container" id="content"> 
    <div id="ContentSuperior">
    <div class="navbar-header"><a target="_blank" href="#" class="navbar-brand"><img src="<?php echo base_url(); ?>css/images/Imagen1.png" height="270%" style="margin-top:-10px; margin-left:-100px;"/></a>
    <br>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a id="btninicio" style="font-size:1.5em; padding: 19px 25px 19px 25px; font-family:'Gill Sans MT';font-weight: 100;" href="<?php echo base_url(); ?>profesor">    
                    <span class="glyphicon glyphicon-home"></span> Inicio
                </a>
            </li>
            
            <li>
                <a id="btnatras">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="margin-left: 10px;">
                        Volver
                    </button>
                </a>
            </li>
               
            <li>
                <a id="btndocsant">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">
                    Ver documentos anteriores
                </button>
                </a>
            </li>
               
            <li>
                <a id="btnanexos">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3">
                    Ver Anexos
                </button> 
                </a>
            </li>
            
             <li class="dropdown">
                <a id="btnflecha" style="font-size:1.5em; padding: 21px 25px 21px 25px; font-family:'Gill Sans MT'; font-weight: 100;" class="dropdown-toggle" data-toggle="dropdown">Ver
                <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a id="btnanteproyecto" style="font-size:1.5em; color:black;" href="#">Anteproyectos</a></li>
                    <li><a id="btninforme" style="font-size:1.5em; color:black;" >Informe Final</a></li>
                </ul>
             </li>  
                      
            <li>
                <a id="btncontacto">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal5">
                    ¿Tienes algún inconveniente?
                </button> 
                </a>
            </li>            
                       
         </ul>    

    

    
        