         </div>
        </div>
    
    <br>
    
 
                </div> 
<br><br><br> 
                <div id="conatiner-div-integrantes"> 
                <div class="animated fadeInUp">
                <div class="row">
                <div class="col-md-12">
                <div class="well well-sm" style="border-radius: 0;">
                <form id="formintegrantes" class="form-horizontal" method="POST" action="<?php base_url();?>principal/modificarintegrante" autocomplete="off" >
                <fieldset>
                <legend class="text-center header">Integrantes 
                <img src="<?php echo base_url(); ?>css/images/personas.png"  alt="" class="fa fa-user bigicon">

                </legend>
                <p style=" text-align: left; margin-left:20%; ">Primer autor:     </p> 
                <div class="form-group">
                
                <span class="col-md-1 col-md-offset-2 text-left"><img src="<?php echo base_url(); ?>css/images/perfil/<?php foreach ($datosa1 as $autor1){ echo $autor1->imgperfil; } ?>"  alt="" class="fa fa-user bigicon" width="70%" height="70%"></span>

                <div class="col-md-8">
                <button type="button"class="btn btn-xs btn-info" style="font-size: 9px;" data-container="body" data-toggle="popover" data-placement="right" data-content="
           <ul><li><strong>Nombres: </strong><?php foreach ($datosa1 as $autor1){
       echo $autor1->nombre1; echo" "; echo $autor1->nombre2;}?></li>
<li><strong>Apellidos: </strong><?php foreach ($datosa1 as $autor1){
       echo $autor1->apellidos;}?></li>
       <li><strong>Telefono: </strong><?php foreach ($datosa1 as $autor1){
       echo $autor1->tel;}?></li>
       <li><strong>Email: </strong><?php foreach ($datosa1 as $autor1){
       echo $autor1->email;}?></li></ul>">
 Info +
</button>  
                <input id="txtautor1" name="name" type="text" placeholder="Nombres y apellidos" class="form-control" value="<?php foreach ($documentos as $documents){
                echo $documents->autor1;} ?> " readonly disabled>
             
                </div>

                </div>
                <br>
                <p style=" text-align: left; margin-left:20%;" >Segundo autor: </p>
                <div class="form-group">
                   <span class="col-md-1 col-md-offset-2 text-left"><img src="<?php echo base_url(); ?>css/images/perfil/<?php foreach ($datosa2 as $user2){ echo $user2->imgperfil; } ?>"  alt="" class="fa fa-user bigicon" width="70%" height="70%"></span>
                <div class="col-md-8">
                   <button type="button"class="btn btn-xs btn-info" style="font-size: 9px;" data-container="body" data-toggle="popover" data-placement="right" data-content="
           <ul><li><strong>Nombres: </strong><?php foreach ($datosa2 as $user2){
       echo $user2->nombre1; echo" "; echo $user2->nombre2;}?></li><li><strong>Apellidos: </strong><?php foreach ($datosa2 as $user2){
       echo $user2->apellidos;}?></li>
       <li><strong>Telefono: </strong><?php foreach ($datosa2 as $user2){
       echo $user2->tel;}?></li>
       <li><strong>Email: </strong><?php foreach ($datosa2 as $user2){
       echo $user2->email;}?></li></ul">
 Info +
</button> 
                <input id="txtsegundoautor2"  type="text" placeholder="Nombres y apellidos" class="form-control" value="<?php foreach ($documentos as $documents){
                echo $documents->autor2;} ?> " readonly disabled>
   
       

                </div>
                </div>
            

                </fieldset>
                </form>
                </div>
                </div>
                </div>
                </div>         
                </div>
<script>
   $(function () {
  $('[data-toggle="popover"]').popover({
      html:true
  });
});
</script>
               
   
   