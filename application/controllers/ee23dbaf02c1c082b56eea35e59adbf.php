<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ee23dbaf02c1c082b56eea35e59adbf extends CI_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    
    public function index(){ 
    
    
    $this->load->view('resta');
    
    
    }
    
    public function modificar(){
        
        $codigo = $this->input->post('codigo');
        $contrasena = md5($this->input->post('password'));        
        $this->login_model->modificarcontrra($codigo,$contrasena);    
         redirect('login','refresh');
    }


}
