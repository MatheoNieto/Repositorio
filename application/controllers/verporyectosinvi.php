<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Verporyectosinvi extends CI_Controller {
    
    
    public function __construct(){
        parent::__construct();
        $this->load->model('verporyectesinvitado_model');
        
    }
    
    
    public function index(){
        $sesion = $this->session->userdata('codigo'); 
        if($sesion){  
            $datosu['datosproyectos'] = $this->verporyectesinvitado_model->proyectos();
            $this->load->view('invitadosparaver',$datosu); 
            $this->load->view('invitadovdocumento2',$datosu); 
            $this->load->view('contenedorAyudaI',$datosu); 

        }else{
            redirect('login','refresh');        
        }        
        
    }   
    
    public function consultardocumento(){
        
        $id = $this->input->post('id'); 
        $datosu['documento']= $this->verporyectesinvitado_model->verdocumento($id);
        
        $this->load->view('invitadovdocumento1',$datosu);
        
        
    }   public function comentarios(){
        
        $id = $this->input->post('id'); 
        $datosu['comentarios']= $this->verporyectesinvitado_model->comentarios($id);
        
        $this->load->view('invitadovdocumento1-1',$datosu);
        
        
    }
    
        public function hacercomentario(){
         $sesion = $this->session->userdata('codigo'); 
        date_default_timezone_set('America/Bogota');
        $fechacomentado =   date("Y/m/d H:i:s");        
        $codigo = $sesion;
        $idadjunto = $this->input->post('txtidadjunto');
        $comentario = $this->input->post('txtcomentario');
        
         $datos = array(
            'comentario' => $comentario,
            'fechacomentario' => $fechacomentado,
            'cod_comento' => $codigo,           
            'id_adjunto' => $idadjunto
        );        
      
        if ($this->verporyectesinvitado_model->insertacomentario($datos)==TRUE){
            
            echo 'listo';   
                     
        }else{
            return 'false';
        }
        
    }  
    
    
    
    
}


