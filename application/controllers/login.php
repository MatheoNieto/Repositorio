<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 //=========================no tocar ya esta redirecionando segun tipo de usuario jajajajjajajaj
    
    public function index(){ 

        if($this->session->userdata('tipou')){
        $session_id = $this->session->userdata('tipou');
        if ($session_id == 1){
        redirect('principal'); 
        }else if ($session_id == 2){
        redirect('profesor');
        }else{
        redirect('admin');
        }
        }else{
        $this->load->view('index');
        $this->load->view('contenedorAyudaL');
        }


    }
    
    
    public function iniciar(){
         $codigo = $this->input->post('codigo');
        $contrasena = md5($this->input->post('password'));
            if ($this->login_model->login($codigo,$contrasena) == TRUE ){
                
                $prueba['tipo'] = $this->login_model->tipou($codigo,$contrasena);
                
                
                $variablesession = array(
                'codigo'=> $codigo,
                'tipou'=>$prueba['tipo'][0]['tipou']
                );

                if( $prueba['tipo'][0]['tipou'] == 1){
                    $this->session->set_userdata($variablesession);
                    redirect('principal','refresh');
                    
                }else if( $prueba['tipo'][0]['tipou'] == 2){
                    $this->session->set_userdata($variablesession);
                    redirect('profesor','refresh');
                    
                }else if ( $prueba['tipo'][0]['tipou'] == 3){
                    $this->session->set_userdata($variablesession);
                    redirect('admin','refresh');
                }
        }else{                 
                echo 'false';             
            }
    }
    
    public function invitado(){
        
        $this->session->set_userdata('codigo',123456789);
         redirect('verporyectosinvi','refresh');
        
        
    }
    
    public function restablecer(){
                
        $email = $this->input->post('txtcorreo');
        if ($this->login_model->restablecer($email) == TRUE ){
            
              $correo['dato'] = $this->login_model->traeemaim($email);
        $correencrip= md5($correo['dato'][0]['email']);
            
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
 $this->email->to($email);
 $this->email->subject('Restablecer contrasena');
 $this->email->message('<h2>Buenos dias</h2><p>Este es el link para restablecer su contrasena <a href="'.base_url().'/ee23dbaf02c1c082b56eea35e59adbf?qwert='.$correencrip.'">Clic aqui</a></p>');
  $this->email->send();
 var_dump($this->email->print_debugger());
}
else if($hora < 18 ){
$this->email->from('Repositorio TDS');
 $this->email->to($email);
 $this->email->subject('Restablecer contrasena');
  $this->email->message('<h2>Buenas tardes<h2> <p>Este es el link para restablecer su contrasena <a href="'.base_url().'/ee23dbaf02c1c082b56eea35e59adbf?qwert='.$correencrip.'">Clic aqui</a></p>');
   $this->email->send();
 var_dump($this->email->print_debugger());
}
else{
$this->email->from('Repositorio TDS');
 $this->email->to($email);
 $this->email->subject('Restablecer contrasena');
 $this->email->message('<h2>Buenas noches</h2><p>Este es el link para restablecer su contrasena <a href="'.base_url().'/ee23dbaf02c1c082b56eea35e59adbf?qwert='.$correencrip.'">Clic aqui</a></p>');       
 $this->email->send();
 var_dump($this->email->print_debugger());     
    }
    echo 'true';            
            
        }else{
            echo 'false';
        }
    }
    
    
    public function cerrarsession() {
        
        $this->session->sess_destroy();
        redirect('login');
    }
    
}
