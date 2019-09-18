<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('admin_model');
    }

    public function index(){ 
        
         $sesion = $this->session->userdata('codigo');
          $sesion2 = $this->session->userdata('tipou');        
                if($sesion){
                    
                      if ($sesion2 == 1){
                         redirect('principal');
                }elseif($sesion2 == 2){
                            redirect('profesor');
                      }elseif($sesion2 == 3){
                    
$datosadmin['datosadmin'] = $this->admin_model->datosuser($sesion);
$datosadmin['datosestudiantes'] = $this->admin_model->datosdelosestudiantes();
$datosadmin['datosdelosprofesores'] = $this->admin_model->datosdelosprofesores();
$datosadmin['solicitudesinfor'] = $this->admin_model->soliinfor();
                          
$datosadmin['contacto'] = $this->admin_model->difi();
$datosadmin['countdifi'] = $this->admin_model->countdifi();

$datosadmin['countanteproceso'] = $this->admin_model->anteproyectoprocesocant();
$datosadmin['anteproceso'] = $this->admin_model->anteproyectoproceso();
$datosadmin['anteprocesoautor1'] = $this->admin_model->anteproyectoprocesoautor1();
$datosadmin['anteprocesoautor2'] = $this->admin_model->anteproyectoprocesoautor2();

$datosadmin['countanteprocesosinrevi'] = $this->admin_model->anteproyectoprocesosinrevicant();
$datosadmin['anteprocesosinrevi'] = $this->admin_model->anteproyectosinrevi();
$datosadmin['anteprocesoautor1sinrevi'] = $this->admin_model->anteproyectoprocesosinreviautor1();
$datosadmin['anteprocesoautor2sinrevi'] = $this->admin_model->anteproyectoprocesosinreviautor2();
                  
$datosadmin['countanteprocesotermi'] = $this->admin_model->anteproyectoprocesoterminnadoscant();
$datosadmin['anteprocesotermi'] = $this->admin_model->anteproyectoterminnados();
$datosadmin['anteprocesoautor1termi'] = $this->admin_model->anteproyectoprocesoterminnadosautor1();
$datosadmin['anteprocesoautor2termi'] = $this->admin_model->anteproyectoprocesoterminnadosautor2();
                          
$datosadmin['countanteprocesotodos'] = $this->admin_model->anteproyectoprocesotodoscant();
$datosadmin['anteprocesotodos'] = $this->admin_model->anteproyectotodos();
$datosadmin['anteprocesoautor1todos'] = $this->admin_model->anteproyectoprocesotodosautor1();
$datosadmin['anteprocesoautor2todos'] = $this->admin_model->anteproyectoprocesotodosautor2();
//INFORME FINAL         
                          
$datosadmin['informeproceso'] = $this->admin_model->informeproceso();
$datosadmin['informepreceautor1'] = $this->admin_model->informeprocesoautor1();
$datosadmin['informeprocesoautor2'] = $this->admin_model->informeprocesoautor2();
$datosadmin['cantinforme'] = $this->admin_model->informeprocesocant();
                                               
$datosadmin['informesinini'] = $this->admin_model->sininformeproceso();
$datosadmin['informesiniautor1'] = $this->admin_model->sininformeprocesoautor1();
$datosadmin['informesininioautor2'] = $this->admin_model->sininformeprocesoautor2();
$datosadmin['cantinformesini'] = $this->admin_model->sininformeprocesocant();
                          
$datosadmin['informesinrevi'] = $this->admin_model->informesinrevi();
$datosadmin['informeautor1sinrevi'] = $this->admin_model->informesinreviautor1();
$datosadmin['inforemeautro2sinrevi'] = $this->admin_model->informesinreviautor2();
$datosadmin['cantinformesinrevi'] = $this->admin_model->informesinrevicant();
                          
$datosadmin['informeteminados'] = $this->admin_model->informeterminnados();
$datosadmin['inforteminautor1'] = $this->admin_model->informeterminnadosautor1();
$datosadmin['informetermiautor2'] = $this->admin_model->informeterminnadosautor2();
$datosadmin['cantinfoterminados'] = $this->admin_model->informeterminnadoscant();
                          
$datosadmin['inforemestodos'] = $this->admin_model->informetotodos();
$datosadmin['todosinforesmesautor1'] = $this->admin_model->informeprocesotodosautor1();
$datosadmin['todosinformesautor2'] = $this->admin_model->informeprocesotodosautor2();
$datosadmin['cantidaddeinformestodos'] = $this->admin_model->informeprocesotodoscant();
                          
                          
$datosadmin['documentoss'] = $this->admin_model->documentossubidos();
$datosadmin['documentoss2'] = $this->admin_model->documentossubidos2();
                          
$datosadmin['anexos'] = $this->admin_model->anexossubidos();
$datosadmin['anexos2'] = $this->admin_model->anexossubidos2();
$datosadmin['cantestudiantes'] = $this->admin_model->cantaestudiantes();
$datosadmin['cantdocentes'] = $this->admin_model->cantdocentes();
$datosadmin['cantisoli'] = $this->admin_model->cantsolicitudes();
                          
$this->load->view('paginaadmin/paginaprincipal',$datosadmin); 
$this->load->view('paginaadmin/contenido/contenido2',$datosadmin);
$this->load->view('paginaadmin/contenido/contenido3',$datosadmin);
$this->load->view('paginaadmin/contenido/contenido4',$datosadmin);
$this->load->view('paginaadmin/contenido/contenido5',$datosadmin);
$this->load->view('paginaadmin/contenido/contenido6',$datosadmin);
                          $this->load->view('paginaadmin/contenido/contenedorAyudaA',$datosadmin); 
}        

        }else{
        redirect('login');         
    }

}
    
    
    
public function consultarmensaje(){
    
    $id = $this->input->post('id');        
    $datosadmin['mensaje'] = $this->admin_model->mensaje($id);
    
    $this->load->view('paginaadmin/contenido/contenido1',$datosadmin);

        
} 
    
    
    public function modificarstudents(){
        
      $codigoantiguo = $this->input->post('codigoantiguo');
      $codigo = $this->input->post('codigomodiicar');
      $nombre1 = $this->input->post('primernombre');
      $nombre2 = $this->input->post('secondnombre');
      $apellidos = $this->input->post('apelllidos');
      $email = $this->input->post('txtxmailmodifi');
      $telefono = $this->input->post('txtelefono');
        
        $title = array(
                'nombre1' => $nombre1,
                'nombre2' => $nombre2,
                'apellidos' => $apellidos,
                'codigo' => $codigo,           
                'email' => $email,           
                'tel' => $telefono
            ); 
   $this->admin_model->modifistudent($title,$codigoantiguo);   
        
        
        
    }  public function regis(){
        
      $codgio = $this->input->post('txtcodigoregis');
      $nombre1 = $this->input->post('txtprimernombre');
      $nombre2 = $this->input->post('txtsegundonombreregis');
      $apellidos = $this->input->post('txtapelldiosregis');
      $email = $this->input->post('txtemailregistrar');
      $telefono = $this->input->post('txtelefonoregistrar');
      $contrasena = $codgio."*****-----";
      $fondo = rand(1, 12);
        $datos = array(
                'nombre1' => $nombre1,
                'nombre2' => $nombre2,
                'apellidos' => $apellidos,
                'codigo' => $codgio,           
                'password' => md5($contrasena),           
                'email' => $email,           
                'tel' => $telefono,
                'imgperfil' => 'avatar.png',
                'imgfondo' => $fondo.'.jpg',
                'tema' => 0,
                'tipou' => 1,
                'ingresa' => 0,
            ); 
   $this->admin_model->registstudent($datos);   
        
        
        
    }
    
     public function mofificarprofesor(){
        
      $codigoantiguo = $this->input->post('atigugocoidogprofesor');
      $codigo = $this->input->post('codigomodiicarpro');
      $nombre1 = $this->input->post('primernombrepro');
      $nombre2 = $this->input->post('secondnombrepro');
      $apellidos = $this->input->post('apellidospro');
      $email = $this->input->post('txtxmailmodifipro');
      $telefono = $this->input->post('txtelefonopro');
        
        $title = array(
                'nombre1' => $nombre1,
                'nombre2' => $nombre2,
                'apellidos' => $apellidos,
                'codigo' => $codigo,           
                'email' => $email,           
                'tel' => $telefono
            ); 
   $this->admin_model->modifiprofesor($title,$codigoantiguo);   
        
        
        
    }  public function regisprofesor(){
        
      $codgio = $this->input->post('txtcodigoregispro');
      $nombre1 = $this->input->post('txtprimernombrepro');
      $nombre2 = $this->input->post('txtsegundonombreregispro');
      $apellidos = $this->input->post('txtapelldiosregispro');
      $email = $this->input->post('txtemailregistrarpro');
      $telefono = $this->input->post('txtelefonoregistrarpro');
      $contrasena = $codgio."*****-----";
      $fondo = rand(1, 12);
        $datos = array(
                'nombre1' => $nombre1,
                'nombre2' => $nombre2,
                'apellidos' => $apellidos,
                'codigo' => $codgio,           
                'password' => md5($contrasena),           
                'email' => $email,           
                'tel' => $telefono,
                'imgperfil' => 'avatar.png',
                'imgfondo' => $fondo.'.jpg',
                'tema' => 0,
                'tipou' => 2,
                'ingresa' => 0,
            ); 
   $this->admin_model->regisprofesro($datos);   
        
        
        
    }
    
    
    
    
    
    
    
    
  public function enviarcorreo(){

    $id = $this->input->post('txtid');
    $nombresyapellidos = $this->input->post('txtnombreyapellidos');
    $descripcionincon = $this->input->post('txtinconveninte');
    $tel = $this->input->post('txttel');
    $respuesta = $this->input->post('txtanswer');
    $correo = $this->input->post('txtemail');
     
     $this->admin_model->estadom($id); 
      
 $this->load->library("email");
 
 //configuracion para gmail
 $configGmail = array(
 'protocol' => 'sendmail',
 'mailpath'=> 'C:\xampp\sendmail\sendmail.exe -t',
 'smtp_host' => 'ssl://smtp.gmail.com',
 'smtp_port' => 587,
 'smtp_crypto' => 'tls',
 'smtp_user' => 'repositorio39@gmail.com',
 'smtp_pass' => 'ucp2017**',
 'mailtype' => 'html',
 'charset' => 'utf-8',
 'newline' => "\r\n"
 );    
 
 $this->email->initialize($configGmail);
      
  date_default_timezone_set('America/Bogota');
  $hora =   date("H");
 
if($hora <= 11){
$this->email->from('Repositorio TDS');
 $this->email->to($correo);
 $this->email->subject('Respuesta del inconveniente');
  $this->email->message('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" bgcolor="#ababab" style="background-color:#ababab;"><br>
    <br>
    <table width="600" border="0" cellspacing="0" cellpadding="0">

      <tr>
        <td align="left" valign="top" bgcolor="#ffffff" style="background-color:#ffffff;"><table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
          <tr>
            <td align="left" valign="middle" style="padding:10px;"><img src="http://carrerasuniversitarias.com.co/logos/original/logo-universidad-catolica-de-pereira.png" width="192" height="74" style="display:block;"></td><h2>Respositorio Institucional TDS</h2>
            </tr>
          </table>
          <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
            <tr>
              <td width="460" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif; color:#4e4e4e; font-size:13px; padding-right:10px;">
              <div style="font-size:24px;">Buenas Dias '.$nombresyapellidos.'.<br>
                <br>
              </div><strong>Este es su inconveniente:</strong><br>
              '.$descripcionincon.'</td>
              <td align="right" valign="middle"><table width="210" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" valign="top"><img src="images/pinkbox_top.png" width="210" height="14" style="display:block;"></td>
                </tr>
              </table></td>
            </tr>
            </table>
          <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
            <tr>
              <td align="left" valign="middle"><img src="images/top.png" width="570" height="16" style="display:block;"></td>
              </tr>
            <tr>
              <td align="left" valign="middle" bgcolor="#1ba5db" style="padding:0px 20px 0px 20px; font-family:Arial, Helvetica, sans-serif; background-color:#1ba5db; color:#ffffff;"><div style="font-size:20px;">Aqui esta la solucion de tu inconveniente<br>
                <br>
                </div><img src="https://www.flaticon.es/premium-icon/icons/svg/536/536921.svg" width="134" height="139" align="left" style="margin-right:20px;">
                <div style="font-size:13px;">'.$respuesta.'</div></td>
              </tr>
            <tr>
              <td align="left" valign="middle"><img src="images/bot.png" width="570" height="16" style="display:block;"></td>
              </tr>
            </table>
          
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:20px;">
            <tr>
              <td width="100%" align="left" valign="middle" style="color:#595959; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:10px;"> <b>Repositorio Institucional</b><br>Link del Repositorio: <a href="'.base_url().'" target="_blank"  style="color:#595959; text-decoration:none;">Repositorio</a><br>
<br>

                <b>Alguna Inquietud escribir al correo:</b><br> <p  style="color:blue; text-decoration:none;">Ejemplo@gmail.com</p></td>
              </tr>
          </table></td>
      </tr>
      </table>
    <br>
    <br></td>
  </tr>
</table>
</body>
</html>
');
 $this->email->send();
 var_dump($this->email->print_debugger());
}
else if($hora < 18 ){
$this->email->from('Repositorio TDS');
 $this->email->to($correo);
 $this->email->subject('Respuesta del inconveniente');
  $this->email->message('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" bgcolor="#ababab" style="background-color:#ababab;"><br>
    <br>
    <table width="600" border="0" cellspacing="0" cellpadding="0">

      <tr>
        <td align="left" valign="top" bgcolor="#ffffff" style="background-color:#ffffff;"><table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
          <tr>
            <td align="left" valign="middle" style="padding:10px;"><img src="http://carrerasuniversitarias.com.co/logos/original/logo-universidad-catolica-de-pereira.png" width="192" height="74" style="display:block;"></td><h2>Respositorio Institucional TDS</h2>
            </tr>
          </table>
          <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
            <tr>
              <td width="460" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif; color:#4e4e4e; font-size:13px; padding-right:10px;">
              <div style="font-size:24px;">Buenas Tardes '.$nombresyapellidos.'.<br>
                <br>
              </div><strong>Este es su inconveniente:</strong><br>
              '.$descripcionincon.'</td>
              <td align="right" valign="middle"><table width="210" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" valign="top"><img src="images/pinkbox_top.png" width="210" height="14" style="display:block;"></td>
                </tr>
              </table></td>
            </tr>
            </table>
          <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
            <tr>
              <td align="left" valign="middle"><img src="images/top.png" width="570" height="16" style="display:block;"></td>
              </tr>
            <tr>
              <td align="left" valign="middle" bgcolor="#1ba5db" style="padding:0px 20px 0px 20px; font-family:Arial, Helvetica, sans-serif; background-color:#1ba5db; color:#ffffff;"><div style="font-size:20px;">Aqui esta la solucion de tu inconveniente<br>
                <br>
                </div><img src="https://www.flaticon.es/premium-icon/icons/svg/536/536921.svg" width="134" height="139" align="left" style="margin-right:20px;">
                <div style="font-size:13px;">'.$respuesta.'</div></td>
              </tr>
            <tr>
              <td align="left" valign="middle"><img src="images/bot.png" width="570" height="16" style="display:block;"></td>
              </tr>
            </table>
          
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:20px;">
            <tr>
              <td width="100%" align="left" valign="middle" style="color:#595959; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:10px;"> <b>Repositorio Institucional</b><br>Link del Repositorio: <a href="'.base_url().'" target="_blank"  style="color:#595959; text-decoration:none;">Repositorio</a><br>
<br>

                <b>Alguna Inquietud escribir al correo:</b><br> <p  style="color:blue; text-decoration:none;">ejemplo@gmail.com</p></td>
              </tr>
          </table></td>
      </tr>
      </table>
    <br>
    <br></td>
  </tr>
</table>
</body>
</html>
');
 $this->email->send();
 var_dump($this->email->print_debugger());
}
else{
$this->email->from('Repositorio TDS');
 $this->email->to($correo);
 $this->email->subject('Respuesta del inconveniente');
 $this->email->message('<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" bgcolor="#ababab" style="background-color:#ababab;"><br>
    <br>
    <table width="600" border="0" cellspacing="0" cellpadding="0">

      <tr>
        <td align="left" valign="top" bgcolor="#ffffff" style="background-color:#ffffff;"><table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
          <tr>
            <td align="left" valign="middle" style="padding:10px;"><img src="http://carrerasuniversitarias.com.co/logos/original/logo-universidad-catolica-de-pereira.png" width="192" height="74" style="display:block;"></td><h2>Respositorio Institucional TDS</h2>
            </tr>
          </table>
          <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
            <tr>
              <td width="460" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif; color:#4e4e4e; font-size:13px; padding-right:10px;">
              <div style="font-size:24px;">Buenas Noches '.$nombresyapellidos.'.<br>
                <br>
              </div><strong>Este es su inconveniente:</strong><br>
              '.$descripcionincon.'</td>
              <td align="right" valign="middle"><table width="210" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" valign="top"><img src="images/pinkbox_top.png" width="210" height="14" style="display:block;"></td>
                </tr>
              </table></td>
            </tr>
            </table>
          <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
            <tr>
              <td align="left" valign="middle"><img src="images/top.png" width="570" height="16" style="display:block;"></td>
              </tr>
            <tr>
              <td align="left" valign="middle" bgcolor="#1ba5db" style="padding:0px 20px 0px 20px; font-family:Arial, Helvetica, sans-serif; background-color:#1ba5db; color:#ffffff;"><div style="font-size:20px;">Aqui esta la solucion de tu inconveniente<br>
                <br>
                </div><img src="https://www.flaticon.es/premium-icon/icons/svg/536/536921.svg" width="134" height="139" align="left" style="margin-right:20px;">
                <div style="font-size:13px;">'.$respuesta.'</div></td>
              </tr>
            <tr>
              <td align="left" valign="middle"><img src="images/bot.png" width="570" height="16" style="display:block;"></td>
              </tr>
            </table>
          
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:20px;">
            <tr>
              <td width="100%" align="left" valign="middle" style="color:#595959; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:10px;"> <b>Repositorio Institucional</b><br>Link del Repositorio: <a href="'.base_url().'" target="_blank"  style="color:#595959; text-decoration:none;">repositorio</a><br>
<br>

                <b>Alguna Inquietud escribir al correo:</b><br> <p  style="color:blue; text-decoration:none;">ejemplo@gmail.com</p></td>
              </tr>
          </table></td>
      </tr>
      </table>
    <br>
    <br></td>
  </tr>
</table>
</body>
</html>
');
 $this->email->send();
 var_dump($this->email->print_debugger());
}
 }
     
}
