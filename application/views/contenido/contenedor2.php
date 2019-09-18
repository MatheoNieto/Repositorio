
            <div id="main-container" class="container"  <?php foreach ($usuarios as $user){  if ($user->tema > 0){
    echo 'style="background-color:rgba(0,0,0,0.65);border-left:1px solid #fff;border-top:1px solid #fff;"';}else{
    echo 'style="background-color:rgba(255,255,255,0.7);border-left:1px solid black;border-top:1px solid black;"';
}} ?>>
                <div  id="contenedor-adjuntos" class="animated fadeInUp ">
                <div id="rowadjuntos" class="row" >
              <p id="notasincrearante" style="font-size:4em; font-family:'Gabriola';">Crea tu anteproyecto para ver el resto de opciones!</p><center><a id="enclacecrearproyecto" onclick="$('#contenedor-div-crear-documento').fadeIn();" style="text-decoration: underline;">click para crear el anteproyecto</a></center>

               