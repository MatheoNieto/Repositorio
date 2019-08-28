<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Verproyectos extends CI_Controller {
    
    
    
    public function __construct(){
        parent::__construct();
        $this->load->model('verproyectos_model');        
    }
    
    
    public function index(){
     $sesion = $this->session->userdata('codigo');
    $sesion2 = $this->session->userdata('tipou');
     if($sesion){
    
        if($sesion2 == 1){
            $datosproyects['datosproyectos'] = $this->verproyectos_model->proyectos();
            $this->load->view('verpoyects',$datosproyects);
            $this->load->view('verpoyects2',$datosproyects);
            
        }elseif($sesion2 == 2){
            redirect('profesor');    
        }elseif($sesion2 == 3){
            redirect('admin');
            
        }
         
        
    }else{
            redirect('login');
        }  
    
    
    
    
    
    
    
}
    
    public function consultaradjunto(){
        
         $id = $this->input->post('id'); 
        $datosproyects['documento']= $this->verproyectos_model->verdocumento($id);
        
        $this->load->view('veproyectodocument',$datosproyects);
        
        
    }
    
    
    
    
}



