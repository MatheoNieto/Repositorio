<?php

class Login_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    //para ingresar 
    public function login($codigo,$password){
       
       $this->db->where('codigo',$codigo);
       $this->db->where('password',$password);
       $resultado= $this->db->get('usuarios');     
       
       if($resultado->num_rows()>0){
           return TRUE;
       }else{
           return false;
        
       }  
        
    }
    
    //Consultar el tipo de usuario
    public function tipou($codigo,$password){
       
        $this->db->select('*');
        $this->db->where('codigo',$codigo);
        $this->db->where('password',$password);        
        $resuser=$this->db->get('usuarios');
        return $resuser->result_array();
        
    }
    
    
    
    public function restablecer($email){
       
       $this->db->where('email',$email);
       $resultado= $this->db->get('usuarios');     
       
       if($resultado->num_rows()>0){
           return TRUE;
       }else{
           return false;
        
       }  
        
    }
    
    
     public function traeemaim($email){
       
        $this->db->select('*');
        $this->db->where('email',$email);
       $resuser= $this->db->get('usuarios');   
        return $resuser->result_array();
        
    }
    
    
    public function modificarcontrra($codigo,$cotrasena){
        
         $this->db->set('password',$cotrasena);
        $this->db->where('codigo',$codigo);
        $this->db->update('usuarios');
        

        
        
    }
    
}